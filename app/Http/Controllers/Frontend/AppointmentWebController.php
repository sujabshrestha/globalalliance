<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Appointments;
use Brian2694\Toastr\Facades\Toastr;

class AppointmentWebController extends Controller
{


    public function index()
    {
        try{
            $inquiries = Appointments::latest()->get();
            return view('admin.inquiry.index',compact('inquiries'));
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function store(Request $request)
    {
        // try {

            $appointment = new Appointments();
            $appointment->fullname  = $request->name;
            $appointment->service  = $request->service;
            $appointment->passportnumber = $request->passportnumber;
            $appointment->address = $request->address;
            $appointment->nationality = $request->nationality;
            $appointment->phoneNumber = $request->phone;
            $appointment->email = $request->email;
            $appointment->remarks = $request->remarks;
            if ($request->hasFile('file')) {
                $appointment->file = imageupload('/upload/' . 'appointment' . '/', $request->file);
            }
            if($request->receive_information){
                $appointment->receive_information = 1;
            }
            if($request->receive_letter){
                $appointment->receive_newsletter = 1;

            }
            $appointment->save();

            return redirect()->back()->with('success', 'Successfully Updated');
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }
}
