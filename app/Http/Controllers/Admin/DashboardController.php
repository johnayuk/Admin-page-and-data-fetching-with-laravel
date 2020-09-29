<?php

namespace App\Http\Controllers\Admin;
use App\User;
use  App\http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
    public function registered(){
       $users = User::all();

        return view('admin\register')->with('users',$users);
    }


    public function edit(Request $request,$id){
         $users = User::findorFail($id);
         return view('admin.editregistered')->with('users',$users);

    }

    public function update(Request $request,$id){
        $users = User::find($id);

        // $users-> update([ 
        //     // 'name'=>$data->user_name,
        //     // 'user_type'=>$data->user_type,
        //     $users->name = $request->input('user_name'),
        //     $users->user_type = $request->input('user_type'),
        // ]);
        $users->name = $request->input('user_name');
            $users->user_type = $request->input('user_type');
        
        $users->update();

        return redirect('/role-register')->with('status','Your Data is Updated');
    }
   
}
