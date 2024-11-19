<?php
namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // A simple login form
    }

    public function userlogin(Request $request)
    {
        dd('hif');
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // User is authenticated, store in session or JWT
            Session::put('user', $user);
            // dd($user);
            
            return redirect()->route('dashboard'); // Redirect to a dashboard or homepage
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
}

