<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index() 
    {
        return view('dashboard', ['id'=> auth()->user()->id, 'name'=> auth()->user()->name ,'user' =>  auth()->user()->type]);
    }

    public function showProfile(Admin $admin) 
    {
        return view('cms.profile.show', compact('admin'));
    }

    public function editProfile(Admin $admin)
    {
        return view('cms.profile.edit', compact('admin'));
    }

    public function updateProfile(Admin $admin)
    {
       
        $admin->update( request()->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]));

        return redirect()->route('cms.profile.show', [$admin->id]);
        
    }

    public function showPass()
    {
        return view('cms.profile.pass');
    }

    public function updatePass()
    {
        
        $data = request()->validate([
            'old_password' => 'password|required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8'
        ]);

        if($data['password'] != $data['confirm_password']){
            return redirect()->route('cms.pass')->with('msg', 'New password not matched!');
        }
        
        $admin = Admin::find(auth()->user()->id);

        $password = Hash::make($data['password']);

        $admin->update(['password' => $password]);

        return redirect()->route('cms.pass')->with('msg', 'Password Changed.');

        
        
        // return redirect()->route('cms.profile.pass');
        
        // return redirect('register')->withErrors($data['confirm_']);
        // request()->session()->flash('msg', 'New password not matched!');
        // // session(['msg' => '']);

    }


    public function comments(){
        return view('cms.comments');
    }

    // protected function getUserInfos() {

    //     $datas = auth()->user();

    //     $rawdata = collect($datas)->toArray();
    //     $rawdata = Arr::collapse($rawdata);
    //     $rawdata = Arr::except($rawdata, [ 'id','password', 'remember_token', 'created_at', 'updated_at']);

    //     $infos = [];
    //     foreach($rawdata as $k => $v){
    //        $k = Str::ucfirst($k);
    //        $v = Str::ucfirst($v);
    //        $infos[$k]= $v;
    //     }

    //     return $infos;

    // }
}
