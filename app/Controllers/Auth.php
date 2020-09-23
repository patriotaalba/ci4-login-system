<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Validation\Rules;
use App\Models\User_model;
use App\Models\Login_model;

class Auth extends Controller
{

    public function register()
    {

        if (!$val = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Please input your name.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'Please input your username.',
                    'is_unique' => '{field} has already exist.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Please input your password.'
                ]
            ],
            'conf-password' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Incorrect password, try again.'
                ]

            ]
        ])) {
            return redirect()->to('/register')->withInput();
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $model = new User_model;
        $model->insert($data);
        session()->setFlashdata('message', 'Register Success!');
        return redirect()->to('/');
    }

    public function login()
    {
        $model = new Login_model();
        $table = 'users';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_user($username, $table);

        if ($row == null) {
            session()->setFlashdata('message', 'Invalid username or password.');
            return redirect()->to('/');
        } else if (password_verify($password, $row->password)) {

            $data = [
                'log' => TRUE,
                'name' => $row->name,
                'username' => $row->username

            ];

            session()->set($data);
            session()->setFlashdata('message', 'Login Success');
            return redirect()->to('/');
        } else {
            session()->setFlashdata('message', 'Login Failed');
            return redirect()->to('/');
        }
    }
}
