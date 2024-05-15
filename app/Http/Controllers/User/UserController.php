<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AnimeRequest;
use App\Models\Anime;
use App\Models\Animev;

class UserController extends Controller
{
    public function watcher()
    {
        $animes = Anime::orderBy('created_at', 'desc')->paginate(10);
        return view('/user.watcher')->with('animes', $animes);
    }


    public function abouts()
    {  
        return view('/user.abouts');
    }

    public function newss()
    {
        return view('/user.newss');
    }

    public function homes()
    {
        return view('/user.homes');
    }
       

    public function cats()
    {
        return view('/user.cates');
    }

    public function dets()
    {
        return view('/user.details');
    }

    public function blogs()
    {
        return view('/user.blogs');
    }

}
