<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\RoleUser;
use DB;

class AuthController extends Controller
{


    public function userStore(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $attendee1 = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            RoleUser::create([
                'user_id'       =>  $attendee1->id,
                'role_id'     =>  2
            ]);

            $request->session()->flash('success', 'Registration Done Successfully');
            return redirect('login');
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function userlogin(Request $request)
    {
        try{
            Session::forget('user');
            $credentials = $request->only('email', 'password');

            $user = User::where('email', $credentials['email'])->first();

            if ($user && Hash::check($credentials['password'], $user->password)) {
                // User is authenticated, store in session or JWT
                Session::put('user', $user);
                $roleData = DB::table('roles')
                    ->select('*')
                    ->join('role_users', 'roles.id', '=', 'role_users.role_id')
                    ->where('role_users.user_id', '=', $user->id)
                    ->first();

                if ($roleData->role_id == 1) {
                    $request->session()->flash('success', 'Login Success');
                    return redirect()->route('eventlisting');
                } else if ($roleData->role_id == 2) {
                    $request->session()->flash('success', 'Login Success');
                    return redirect()->route('homepage');
                } else {
                    $request->session()->flash('errors', 'Invalid Credentials');
                    return redirect('login');
                }
            }
            return back()->withErrors(['email' => 'Invalid credentials']);
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('login');
    }
}
