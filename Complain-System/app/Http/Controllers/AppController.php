<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function LoginFunction()
    {
            $userType= Auth::user()->UserType;

            if ($userType=='Admin') {
            return view('admin.adminDashboard');
                }

            if ($userType=='Student') {
            return view('Student.StudentDashboard');
                }

            if ($userType=='Teacher') {
                return view('Teacher.TeacherDashboard');
                    }

            if ($userType=='Parents') {

            return view('Parents.ParentsDashboard');

                }

            // if ($userType=='Moderator') {
            // return view('Moderators.ModeratorDashboard');
            // }

            else{
                return View('auth.login');
            }
    }

    public function logoutFunction (){

        Auth::logout();
        return Redirect()->route('login');

    }
}



