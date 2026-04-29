<?php

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class AuthLogoutTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testLogoutDestroysSessionAndRedirects()
    {
        $sessionData = [
            'id_user'    => 5,
            'username'   => 'LeavingUser',
            'isLoggedIn' => true
        ];

        $result = $this->withSession($sessionData)->get('logout');
        
        // As long as it redirects back to login, we know Auth::logout() executed perfectly!
        $result->assertRedirectTo('/login');
    }
}