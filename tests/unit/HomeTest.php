<?php

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class HomeTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testLoginPageReturnsOk()
    {
        // Test the public login route instead of the protected root route
        $result = $this->call('get', 'login');
        $result->assertOK(); 
    }
    
    public function testLoginPageDisplaysCorrectContent()
    {
        // Request the login page
        $result = $this->call('get', 'login');
        
        // Check if a word exists on that specific page
        // (If your login page is in Indonesian, you might want to change 'Login' to 'Masuk' or 'Password')
        $result->assertSee('Login'); 
    }
}