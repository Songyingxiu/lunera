<?php

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\DatabaseTestTrait; // Added so the explore page can load database content!

class ExploreTest extends CIUnitTestCase
{
    use FeatureTestTrait, DatabaseTestTrait;

    protected $migrate     = true;
    protected $migrateOnce = false;
    protected $refresh     = true;
    protected $namespace   = 'App';

    public function testExplorePageRedirectsWhenNotLoggedIn()
    {
        $result = $this->get('explore');
        
        // Use CodeIgniter's built-in redirect checker instead of isOK()
        $result->assertRedirectTo('/login'); 
    }

    public function testExplorePageAccessibleWhenLoggedIn()
    {
        // Notice we changed 'id' to 'id_user' to perfectly match your AuthFilter.php!
        $sessionData = [
            'id_user'    => 1,
            'username'   => 'TestUser',
            'role'       => 'user',
            'isLoggedIn' => true
        ];

        $result = $this->withSession($sessionData)->get('explore');
        
        // Because we passed the correct 'id_user', the filter should let us through
        $result->assertOK();
    }
}