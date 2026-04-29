<?php

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\DatabaseTestTrait; // 1. Added Database Trait

class AdminAccessTest extends CIUnitTestCase
{
    use FeatureTestTrait, DatabaseTestTrait; // 2. Use both traits

    // 3. Add migration properties
    protected $migrate     = true;
    protected $migrateOnce = false;
    protected $refresh     = true;
    protected $namespace   = 'App';

    public function testRegularUserIsBlockedFromAdminPanel()
    {
        $normalUserSession = [
            'id_user'    => 2,
            'username'   => 'NormalUser',
            'role'       => 'user', 
            'isLoggedIn' => true
        ];

        $result = $this->withSession($normalUserSession)->get('admin');
        
        // 4. Update this to match your AdminFilter! It redirects to '/'
        $result->assertRedirectTo('/');
    }

    public function testAdminUserCanAccessAdminPanel()
    {
        $adminSession = [
            'id_user'    => 1,
            'username'   => 'SuperAdmin',
            'role'       => 'admin', 
            'isLoggedIn' => true
        ];

        $result = $this->withSession($adminSession)->get('admin');
        
        $result->assertOK();
    }
}