<?php

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\DatabaseTestTrait; // 1. Add this import

class ApiContentsTest extends CIUnitTestCase
{
    // 2. Use BOTH traits here
    use FeatureTestTrait, DatabaseTestTrait; 

    // 3. Add these properties to tell PHPUnit to migrate your database before testing
    protected $migrate     = true;
    protected $migrateOnce = false;
    protected $refresh     = true;
    protected $namespace   = 'App';

    public function testContentsApiReturnsSuccessfulResponse()
    {
        $result = $this->get('api/contents');
        
        $result->assertOK();
        $this->assertIsString($result->getJSON());
    }

    public function testLoginApiFailsWithBadCredentials()
    {
        // 1. Change 'email' to 'username' to match your Auth.php controller
        $body = [
            'username' => 'wronguser',
            'password' => 'wrongpassword'
        ];

        $result = $this->withBodyFormat('json')
                       ->post('api/auth/login', $body);
        
        // 2. The server actually returns a 200 OK HTTP header, so we assert OK
        $result->assertOK();

        // 3. We look INSIDE the JSON response to make sure your custom 401 status is there!
        $result->assertJSONFragment([
            'status'  => 401,
            'message' => 'Invalid Username or Password'
        ]);
    }
}