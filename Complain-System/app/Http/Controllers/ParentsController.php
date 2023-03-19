<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ParentsComplain;
use App\Models\StoreVisitPass;

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
    public function ApplyForVisitCampusFuntion()
    {
        if (Auth::id()) {

            return view('Parents.ParentsVisitPass');
        } else {

            return view('auth.login');
        }
    }
    public function ApplyForVisitPassSubmitFunction(Request $request)
    {
        if (Auth::id()) {
            $StoreVisitPass = new StoreVisitPass;

            $StoreVisitPass->userId = Auth::user()->id;
            $StoreVisitPass->name = $request->name;
            $StoreVisitPass->email = $request->email;
            $StoreVisitPass->phone = $request->phone;
            $StoreVisitPass->StudentId = $request->StudentId;
            $StoreVisitPass->RelationOfStudent = $request->RelationOfStudent;
            $StoreVisitPass->Date = $request->Date;
            $StoreVisitPass->VisitHour = $request->VisitHour;
            $StoreVisitPass->Purpose = $request->Purpose;
            $StoreVisitPass->VisitingStatus = 'Pending, Wait for reply';
            $StoreVisitPass->save();

            Alert::success('Application Sent successfully', 'Please wait for reply');

            return redirect()->back();
        } else {

            return view('auth.login');
        }
    }

    public function CheckForVisitCampusFuntion()
    {
        if (Auth::id()) {
            $StoreVisitPass = Auth::user()->id;
            $StoreVisitPass = StoreVisitPass::where('userId', $StoreVisitPass)->get();

            return View('Parents.ParentsCheckVisitPass', compact('StoreVisitPass'));

        } else {

            return view('auth.login');
        }
    }
    public function RemoveVisitPassButtonFunction($id)
    {


        if (Auth::id()) {


            $StoreVisitPass = StoreVisitPass::find($id);
            $StoreVisitPass->delete();
            Alert::info('Visiting Application has been Removed successfully!!', 'Thanks for you co-operation!');
            return redirect()->back();
        } else {

            return view('auth.login');
        }
    }
}
