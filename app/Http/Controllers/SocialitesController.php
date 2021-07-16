<?php

namespace App\Http\Controllers;
use Socialite;
use Auth;
use App\Models\User;

use Illuminate\Http\Request;

class SocialitesController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();

    }
    public function callback() {
        // try {
        //    $user = Socialite::driver('google')->user();
        //    $user = User::where('google_id', $user->id)->first();

        //    if($user){
        //     Auth::login($user);
        //     return redirect('/home');
        // }else{
        //     $newUser = User::create([
        //         'name' => $user->name,
        //         'email' => $user->email,
        //         'google_id'=> $user->id,
        //         'password' => encrypt('123456dummy')
        //     ]);
        //     Auth::login($newUser);
        //     return redirect('/home');
        // }
        // } catch (Exception $e) {
        //     dd($e ->getMessage());
        // }
        $user = Socialite::driver('google')->user();

       $this->_registerOrLoginUser($user);
       
       return redirect()->intended('/');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
       
        
        if (!$user) {
            $user = new user();
            $user->name= $data->name;
            $user->email = $data->email;
            $user->google_id = $data-> id;
            $user -> email_verified_at=  date('Y-m-d H:i:s');
            $user -> password =  encrypt('123456dummy');
            
        
        //     if ( $data->avatar) {
        //         $filename = "public/".time().".jpg"; 
        //         $fm =time().".jpg";
        //         // The filename to save in the database.
        //         $current= file_get_contents($data ->avatar );
        //      file_put_contents($filename, $current );
            
            
        //     }
         
        //    $user->avatar = $fm;
          
            $user->save();
     }

        Auth::login($user);
    }

}
