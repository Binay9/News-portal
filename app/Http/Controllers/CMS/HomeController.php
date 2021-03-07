<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

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

    public function updateProfile()
    {
        dd(auth()->user()->name);
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
