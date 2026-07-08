<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    public function index() 
    {
        if (Auth::id())
         {
    $usertype = Auth::user()->usertype;

    if ($usertype == 'user') {
        return view('dashboard');

    } else if ($usertype == 'admin')
     {
        return view('admin.index');
    }
     else if ($usertype == 'manager') 
     {
        return view('manager.index');
    } else {
        return redirect()->back();
    }
        }
        
    //     else {
    //  return redirect()->route('login'); // misal arahkan ke login kalau belum login
    
    
    // }
            // if(Auth::id())
            // {
            //         $usertype = Auth()->user()->usertype;

            //         if($usertype =='user')
            //         {
            //             return view('dashboard');
            //         }

            //        else if($usertype =='admin')
            //         {
            //             return view('admin.index');
            //         }
                    
            //         else if($usertype =='manager')
            //         {
            //             return view('manager.index');
            //         }
                    
            //         else
            //         {
            //             return redirect()->back();
            //         }
            // }


    }
}
