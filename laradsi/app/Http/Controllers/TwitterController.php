<?php

namespace App\Http\Controllers;

use Socialite;
use App\User;
use Auth;

class TwitterController extends Controller
{
    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
     */
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function handleTwitterCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('login/twitter');
        }

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return redirect()->route('home');
    }

    private function findOrCreateUser($twitterUser)
    {
        $authUser = User::where('social_id', $twitterUser->id)->first();

        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name' => $twitterUser->name,
            'email' => $twitterUser->email,
            'password' => '',
            'social_id' => $twitterUser->id,
        ]);
    }
}
