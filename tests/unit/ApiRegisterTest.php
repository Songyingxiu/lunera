<?php

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class ApiRegisterTest extends CIUnitTestCase
{
    use FeatureTestTrait, DatabaseTestTrait;

    protected $migrate     = true;
    protected $migrateOnce = false;
    protected $refresh     = true;
    protected $namespace   = 'App';

    public function testRegisterApiCreatesNewUserSuccessfully()
    {
        // 1. Set up the data exactly as your Flutter app would send it via POST
        $body = [
            'username'     => 'new_flutter_user',
            'password'     => 'securepassword123',
            'email'        => 'flutter@user.com',
            'profile_name' => 'Flutter Tester'
        ];

        // 2. Call the register API using a POST request
        $result = $this->post('api/auth/register', $body);
        
        $result->assertOK();

        // 3. Verify your custom success JSON was returned
        $result->assertJSONFragment([
            'status'  => 200,
            'message' => 'IDENTITY CREATED SUCCESSFULLY'
        ]);

        // 4. THE COOL PART: Check the database to make sure it actually saved!
        // (Make sure 'db_users' and 'db_profiles' match the actual table names in your migrations)
        $this->seeInDatabase('db_users', [
            'username' => 'new_flutter_user',
            'email'    => 'flutter@user.com'
        ]);
    }

    public function testRegisterApiBlocksDuplicateUsernames()
    {
        // 1. Forcefully insert a dummy user into the test database first
        $this->hasInDatabase('db_users', [
            'username' => 'taken_username',
            'email'    => 'original@user.com',
            'password' => 'somehash',
            'role'     => 'user'
        ]);

        // 2. Try to register a completely new person but with the SAME username
        $body = [
            'username'     => 'taken_username',
            'password'     => 'differentpassword',
            'email'        => 'different@user.com',
            'profile_name' => 'Imposter'
        ];

        $result = $this->post('api/auth/register', $body);
        
        $result->assertOK();
        
        // 3. Verify that your Auth.php controller caught it and returned the 400 error!
        $result->assertJSONFragment([
            'status'  => 400,
            'message' => 'IDENTITY CODE ALREADY EXISTS'
        ]);
    }
}