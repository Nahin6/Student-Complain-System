<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ParentsComplain;

class ParentsController extends Controller
{
    public function ParentsNewComplainFunction()
    {
        if (Auth::id()) {


            return view('Parents.ParentsNewComplain');
        } else {
            return view('auth.login');
        }
    }

    public function ParentsNewComPlainSubmitFunction(Request $request)
    {
        if (Auth::id()) {

            $ParentsComplain = new ParentsComplain;
            $ParentsComplain->ParentsName = Auth::user()->name;
            $ParentsComplain->ComplainType = $request->ComplainType;
            $ParentsComplain->ComplainSection = $request->ComplainSection;
            $ParentsComplain->message = $request->message;
            $ParentsComplain->ComplainStatus = 'Pending';
            $ParentsComplain->userID = Auth::user()->id;
            $ParentsComplain->save();

            Alert::success('Complain Sent successfully', 'Please wait for reply');

            return redirect()->back();
        } else {
            return view('auth.login');
        }
    }

    public function ParentsViewComplainsFuntion()
    {
        if (Auth::id()) {

            $ParentsComplain = Auth::user()->id;
            $ParentsComplain = ParentsComplain::where('userID', $ParentsComplain)->get();

            return View('Parents.ParentsViewComplains', compact('ParentsComplain'));
        } else {
            return view('auth.login');
        }
    }


    public function RemoveParentsComplainFunction($id)
    {


        if (Auth::id()) {


            $ParentsComplain = ParentsComplain::find($id);
            $ParentsComplain->delete();
            Alert::info('Complain Removed successfully!!', 'Your Complain has been Removed!');
            return redirect()->back();
        } else {

            return view('auth.login');
        }
    }
}
