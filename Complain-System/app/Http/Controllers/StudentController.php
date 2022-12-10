<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Complain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class StudentController extends Controller
{
    public function NewComplainFunction()
    {

        return view('Student.StudentNewComplain');
    }
    public function MakeNewComPlainButtonFunction(Request $request)
    {
        if (Auth::id()) {

            $Complain = new Complain;
            $Complain->StudentName = Auth::user()->name;
            $Complain->StudentId = Auth::user()->userId;
            $Complain->ComplainType = $request->ComplainType;
            $Complain->ComplainSection = $request->ComplainSection;
            $Complain->Description = $request->Description;
            $Complain->ComplainStatus = 'Pending';
            $Complain->userID = Auth::user()->id;
            $Complain->save();

            Alert::success('Complain Sent successfully', 'Please wait for reply');

            return redirect()->back();
        } else {
            return view('auth.login');
        }
    }
    public function ViewComplainListFunction()
    {

        if (Auth::id()) {

            $Complain = Auth::user()->id;
            $Complain = Complain::where('userID', $Complain)->get();


            return view('Student.StudentSeeComplain', compact('Complain'));
        } else {
            return view('auth.login');
        }
    }

    public function RemoveComplainButtonFunction($id){

        if (Auth::id()) {


            $AmbulanceT = Complain::find($id);
            $AmbulanceT->delete();
            Alert::info('Complain Sent successfully', 'Your Complain has been Removed');
            return redirect()->back();
        } else {

            return view('auth.login');
        }

    }
    public function SeeProfileFunction(){

        if (Auth::id()) {
            return view('profile.show');
             }
        else {

            return view('auth.login');
        }
    }
}

