<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function home(){
        
        $user = User::where('id', session()->get('id'))->firstOrFail();
        return view('dashboard', [
            'user'=> $user, 
        ]);
    }

}
