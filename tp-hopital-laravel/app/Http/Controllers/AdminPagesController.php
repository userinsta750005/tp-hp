<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AdminPagesController extends Controller
{


public function __construct()
{
    $this->middleware(function ($request, $next) {
        if (!Auth::check()) {
            return redirect()->route('loginAdmin');
        }
        return $next($request);
    }, ['only' => ['dashboardAdmin']]);
}
    public function loginAdmin(){
        return view('admin.login');
    }

    public function dashboardAdmin(){
        if (!Auth::check()) {
            return redirect('/loginAdmin');
        }
        return view('admin.dashboard');
    }
    

    public function authenticate(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if ($user && $request->password == $user->password) {
            if ($user->statut == 1){
                Auth::login($user);
                return redirect('/dashboardAdmin');
            } else {
            return redirect('/loginAdmin')->with('error', 'Identifiants incorrects');
        }
    }
 }
    public function logout() {
        Auth::logout();
        return redirect('/loginAdmin');
    }
}
