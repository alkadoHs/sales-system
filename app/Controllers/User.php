<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index()
    {
        $userModel = model(UserModel::class);
        var_dump($userModel->get_users());
    }

    public function show(int $id)
    {
        $userModel = model(UserModel::class);
        var_dump($userModel->get_user($id));
    }

    public function create()
    {
        $userModel = model(UserModel::class);

        $validUser = $this->validator->getValidated();

        $user = [
            'first_name' => $validUser['first_name'],
            'last_name' => $validUser['last_name'],
            'username' => $validUser['username'],
            'email' => $validUser['email'],
            'branch_id' => $this->request->getVar('branch_id'),
            'store_id' => $this->request->getVar('store_id'),
            'is_superuser' => $this->request->getVar('is_superuser'),
            'is_staff' => $this->request->getVar('is_staff'),
            'is_active' => $this->request->getVar('is_active'),
            'password' => $validUser['password'],
            'passconf' => $validUser['passconf'],
        ];
         $errors = $this->validator->getErrors();
         $insertedID = $userModel->create_user($user);
       
    }


    public function update() {
        $userModel = model(UserModel::class);

        $validUser = $this->validator->getValidated();

        $user = [
            'id' => $this->request->getVar('id'),
            'first_name' => $validUser['first_name'],
            'last_name' => $validUser['last_name'],
            'username' => $validUser['username'],
            'email' => $validUser['email'],
            'branch_id' => $this->request->getVar('branch_id'),
            'store_id' => $this->request->getVar('store_id'),
            'is_superuser' => $this->request->getVar('is_superuser'),
            'is_staff' => $this->request->getVar('is_staff'),
            'is_active' => $this->request->getVar('is_active'),
            'password' => $validUser['password'],
            'passconf' => $validUser['passconf'],
        ];
         $errors = $this->validator->getErrors();

         $userModel->update_user($user);
    }


    public function delete(int $id) {
        $userModel = model(UserModel::class);
        $userModel->delete_user($id);
    }

    public function login() {
        $session = \Config\Services::session();
        $userModel = model(UserModel::class);

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $userModel->login_user($username, $password);
        if($user) {
            $data = [
                'userId' => $user->id,
                'first_name' =>$user->first_name,
                'last_name' =>$user->last_name,
                'username' => $user->username,
                'is_superuser' => $user->is_superuser,

            ];
            $session->set($data);
            return redirect()->route('dashboard');
        } else {
            $session->setFlashdata('errorLogin', 'Invalid username or password.');
            return redirect()->route('login');
        }
    }


    public function logout() {
        $session = session();
        $session->remove('userId');
        return redirect()->route('logout');
    }
}
