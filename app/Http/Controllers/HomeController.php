<?php

namespace App\Http\Controllers;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
        
                if($usertype=='admin')
                {
                    
                                   
        return view ('user.homes');
                }

                else if($usertype=='user')
                {
                    
                                   
        return view ('user.homes');
             
                }
                else
                {
                    return redirect()->back();
                }
        }

    }

    public function post()
    {

        return view("post");
    }
}
