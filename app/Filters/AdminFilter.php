<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // check login
        if (!session()->get('id_user')) {
            return redirect()->to('/login');
        }

        // check if the role is admin
        if (session()->get('role') !== 'admin') {
            // if not admin directed to home or 403 error
            return redirect()->to('/')->with('error', 'Access Denied');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing here
    }
}