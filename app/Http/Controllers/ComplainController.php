<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complain;

class ComplainController extends Controller
{
    //
    function addComplain(Request $requests)
    {
        $complain=new Complain;

        $request_data = $requests->validate([
            'fullname' => 'required|max:30',
            'email' => 'required|email|max:40',
            'dept' => 'required',
            'designation' => 'required',
            'mobile' => 'required|regex:/(01)[0-9]{9}/|max:11',
            'address' => 'required|max:35',
            'complain_details' => 'required|max:70',
            'prob_category' => 'required'

        ], [
            'fullname.required' => 'FullName is required. Plz mention properly.',
            'email.required' => 'Email format is incorrect | missing.'
        ]);

        $complain->fullname=$requests->fullname;
        $complain->email=$requests->email;
        $complain->dept=$requests->dept;
        $complain->designation=$requests->designation;
        $complain->mobile=$requests->mobile;
        $complain->address=$requests->address;
        $complain->complain_details=$requests->complain_details;
        $complain->prob_category=$requests->prob_category;

        //print($requests);

        $complain->save();

        return back()->with('success', 'Complain is added successfully. Please keep patience & wait for the update.');

    }
}
