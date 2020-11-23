<?php
namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\SocialAccount;
use App\Models\Account;

class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialAccount::whereProvider($social)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            $email = $providerUser->getEmail();
            $username = $providerUser->getNickname();
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $social
            ]);
            $user = Account::whereEmail($email)->first();
            if (!$user) {
                $user = Account::where('username', $username)->first();
                if ($user) {
                    $username = "oauth_"+$username;
                }
            }
            if (!$user) {
                $user = Account::create([
                    'email' => $email,
                    'username' => $username,
                    'name' => $providerUser->getName(),
                    'password' => $providerUser->getName(),
                    'role' => 3,
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}
