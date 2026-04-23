<?php
namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class SocialController extends Controller
{
    

            public function redirectToGoogle()
            {
                return Socialite::driver('google')->redirect();
            }

            public function handleGoogleCallback()
            {
                $socialUser = Socialite::driver('google')->user();

                $user = User::updateOrCreate(
                    ['email' => $socialUser->email],
                    [
                        'name' => $socialUser->name,
                        'password' => bcrypt(str()->random(16)),
                    ]
                );

                Auth::login($user);

                return redirect('/dashboard');
            }
            


            public function redirectToFacebook()
                {
                    return Socialite::driver('facebook')->redirect();
                }

                public function handleFacebookCallback()
                {
                    $socialUser = Socialite::driver('facebook')->user();

                    // 👇 email session-এ রাখো
                    session()->put('social_email', $socialUser->email);

                    return redirect('/dashboard');
                }
}
