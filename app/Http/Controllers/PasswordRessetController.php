<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RessetPassword;
use Illuminate\Support\Str;
class PasswordRessetController extends Controller
{
    public function forgetpassword(Request $request){
        $data = $request->validate([
            'phoneno' => ['required','string','max:10']
        ]);


        $checkUser = User::where(['email'=>$data['phoneno']])->first();

        if($checkUser==null){
            return redirect()->back()->with('errorfeedback','Sorry theh email address does not exist on our records');

        }else{
            $token = Str::random(5);
            $message = 'Dear Sir, your verification code is '.$token;
            $response = sendSMS("234".$data['phoneno'],$message);

            RessetPassword::create([
                'email' => $data['phoneno'],
                'token'=> $token,
            ]);

            return redirect()->route('set-password',$data['phoneno'])->with('feedback','OTP successuflly sent to your registered number kindly confirm otp and set a new password');

        }
    }
}
