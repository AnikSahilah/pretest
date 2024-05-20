<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user_form');
    }

    public function store()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');

        // Return the data as JSON
        return $this->response->setJSON([
            'name' => $name,
            'email' => $email,
        ]);
    }
}
