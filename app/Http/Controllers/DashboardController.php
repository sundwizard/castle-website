<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $role = Auth::user()->user_type;


        switch ($role) {
          case 'Super Admin':
             return redirect()->route('superadmin.dashboard');
             break;
          case 'Website Admin':
             return redirect()->route('websiteadmin.dashboard');
             break;
        }
    }
}
