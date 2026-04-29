<?php

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use App\Models\UserModel;

class UserModelTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    // These properties ensure the test database is reset/migrated before tests run
    protected $migrate     = true;
    protected $migrateOnce = false;
    protected $refresh     = true;
    protected $namespace   = 'App';
    
    // Optional: You can trigger your UserSeeder to populate dummy data first
    // protected $seed = 'App\Database\Seeds\UserSeeder';

    public function testUserModelCanInstantiate()
    {
        $model = new UserModel();
        $this->assertInstanceOf(UserModel::class, $model);
    }

    public function testCanFindAllUsers()
    {
        $model = new UserModel();
        $users = $model->findAll();
        
        // Assert that the result is an array, even if it's empty
        $this->assertIsArray($users);
    }
}