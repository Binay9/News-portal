<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index(){
        return view('cms.article.index');
    }

    public function create() {
        return view('cms.article.create');
    }

}
