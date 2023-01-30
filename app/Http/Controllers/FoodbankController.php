<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodbankRequest;


class FoodbankController extends Controller
{
    public function create()
    {
        return view('create-foodbank');
    }

    public function store(Request $request)
    {
        // validate the form data
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        // create a new foodbank request
        $foodbankRequest = new FoodbankRequest();
        $foodbankRequest->name = $request->name;
        $foodbankRequest->address = $request->address;
        $foodbankRequest->phone = $request->phone;
        $foodbankRequest->email = $request->email;
        $foodbankRequest->description = $request->description;
        $foodbankRequest->status = 'pending'; // set the status to pending for admin review
        $foodbankRequest->save();

        return redirect()->back()->with('status', 'Foodbank request submitted successfully. It will be reviewed by admin.');
    }

    public function index()
    {
        // retrieve all pending foodbank requests for admin review
        $foodbankRequests = FoodbankRequest::where('status', 'pending')->get();
        return view('admin.foodbank-requests', compact('foodbankRequests'));
    }

    public function approve($id)
    {
        // find the foodbank request and update its status to approved
        $foodbankRequest = FoodbankRequest::find($id);
        $foodbankRequest->status = 'approved';
        $foodbankRequest->save();

        // create a new foodbank
        $foodbank = new FoodbankRequest();
        $foodbank->name = $foodbankRequest->name;
        $foodbank->address = $foodbankRequest->address;
        $foodbank->phone = $foodbankRequest->phone;
        $foodbank->email = $foodbankRequest->email;
        $foodbank->description = $foodbankRequest->description;
        $foodbank->save();

        return redirect()->back()->with('status', 'Foodbank request approved and added to foodbanks list.');
    }

    public function reject($id)
    {
        // find the foodbank request and update its status to rejected
        $foodbankRequest = FoodbankRequest::find($id);
        $foodbankRequest->status = 'rejected';
        $foodbankRequest->save();

        return redirect()->back()->with('status', 'Foodbank request rejected.');
    }
}
