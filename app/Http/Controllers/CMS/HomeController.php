<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() 
    {
        return view('dashboard', ['name'=> auth()->user()->name ,'user' =>  auth()->user()->type]);
    }

    public function showProfile() 
    {
        $datas = auth()->user();

        $infos = $this->getUserInfos($datas);

        return view('cms.profile.show', compact('infos'));
    }

    public function editProfile()
    {

        $datas = auth()->user();
        $infos = $this->getUserInfos($datas);
        

        return view('cms.profile.edit', compact('infos'));
    }

    public function comments(){
        return view('cms.comments');
    }

    protected function getUserInfos($datas) {

        $rawdata = collect($datas)->toArray();
        $rawdata = Arr::collapse($rawdata);
        $rawdata = Arr::except($rawdata, [ 'id','password', 'remember_token', 'created_at', 'updated_at']);

        $infos = [];
        foreach($rawdata as $k => $v){
           $k = Str::ucfirst($k);
           $v = Str::ucfirst($v);
           $infos[$k]= $v;
        }

        return $infos;

    }
}
