<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Complain;
use App\Models\Moderator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
   public function AddModeratorsFunction(){

   return view('admin.AddModerators');
   }

   public function AddModeratorButtonFunction(Request $request){

    $Moderators = new Moderator;

    $Moderators->name = $request->name;
    $Moderators->email = $request->email;
    $Moderators->phone = $request->phone;
    $Moderators->UserType = $request->UserType='Moderator';
    $Moderators->password = $request->password='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
    $Moderators->remember_token = Str::random(10);

    $Moderators->save();


    // User::insert([

    //     'name'=>$request->name,
    //     'email'=>$request->email,
    //     'phone'=>$request->phone,
    //     'UserType'=>$request->UserType='Moderator',
    //     'password'=>$request->password='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // password


    // ]);
    Alert::success('successfull', 'Added successfully');
    return redirect()->back();
}

public function ViewModeratorsListFunction(){
if(Auth::id()){

    $Moderators = Moderator::all();
    return view('admin.AdminViewModList', compact('Moderators'));

}
else {
    return view('auth.login');
}
}
public function RemoveModFunction($id){
    if(Auth::id()){


        $Moderators = Moderator::find($id);
        $Moderators->delete();
        Alert::info('uccessfull', 'Removed successfully');
        return redirect()->back();



    }
    else {
        return view('auth.login');
    }
}
public function ViewComplainFunction(Request $request){

    if(Auth::id()){


    $Complain = Complain::when($request->date!= null, function($q) use($request) {
        $q->whereDate('created_at',$request->date)->get();
    })->when($request->ComplainTypeFilter!= null, function($q) use($request) {
        $q->where('ComplainType',$request->ComplainTypeFilter);
    })->get();

    // $ThisDate = Carbon::now();

    // $Complain = Complain::whereDate('created_at',$ThisDate)->get();
    // when(function($q) use($request) {
    //     $q->whereBetween('creailter)->whereDate('creatted_at',[$request->date,$request->dateTwo])->
    // $Complain = Complain::where('ComplainType',$request->ComplainTypeFed_at',$request->date)->get();



    return view('admin.AdminViewComplains', compact('Complain'));



    }
    else {
        return view('auth.login');
    }
}

}


