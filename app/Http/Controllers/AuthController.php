<?php

namespace App\Http\Controllers;

use App\Http\Requests\forgetPassRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPassRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function ViewRegister()
    {
        return view("auth.register");
    }
    public function ViewLogin()
    {
        return view("auth.login");
    }
    public function ViewForgetPass()
    {
        return view("auth.forgetPass");
    }
    public function ViewResetPass($id)
    {   
        $user = User::find($id);
        return view("auth.ResetPass",[
            'user'=>$user
        ]);
    }

    public function Register(RegisterRequest $rq)
    {
        
        
        $user = new User();
        $user->fill($rq->all());
        $user->password = bcrypt($rq->password);
        $user->save();
        return redirect()->route('auth.login');
    }
    public function login(LoginRequest $rq)
    {
        if (Auth::attempt($rq->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
    public function ForgetPass(forgetPassRequest $rq)
    {
        $user = User::where('email', '=', $rq->email)->first();
        if ($user) {
            return redirect()->route('auth.ResetPass',$user->id);
        } else {
            return redirect()->back();
        }
    }
    public function ResetPass(ResetPassRequest $rq)
    {
        if($rq->new_password){
            $user = User::where('email', '=', $rq->email)->first();
            $user->password = bcrypt($rq->new_password);
            $user->update();
           return redirect()->route('auth.login');
                       // Auth::login($user, true);
                    //    return redirect()->route('home');      
        }
        else{
            return redirect()->back();
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
