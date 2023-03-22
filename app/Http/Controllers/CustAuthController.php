<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustAuthController extends Controller
{
    public function home(){
        return view('homepage');
    }
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $use = $request->only('email', 'password');
        if (Auth::attempt($use)) {
            return redirect()->intended('owner')
                        ->with('message', 'Signed in!');
        }
   
        return redirect('/login')->with('message', 'Login details are not valid!');
    }
    public function reg()
    {
        return view('auth.registration');
    }
    public function regsave(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("/login");
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return redirect('login');
    }
     
}
