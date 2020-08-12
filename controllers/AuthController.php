<?php

namespace App\Controllers;

use App\Core\App;

class AuthController {

    public function login_form() {
        return view('login');
    }

    public function login()
    {
        $_POST['password'] = md5($_POST['password']);
        $user = App::get('database')->getOneByField('users', $_POST);
        if(!$user) {
            return redirect('/login');
        }

        $_SESSION['user'] = $user;

        return redirect('/');
    }

    public function register_form(){
        return view('register');
    }

    public function register()
    {
        if($_POST['password'] != $_POST['password_confirmation'] || !$_POST['password']) {
            return redirect('/register');
        }
        unset($_POST['password_confirmation']);
        $_POST['password'] = md5($_POST['password']);

        App::get('database')->insert('users', $_POST);

        dd('Replace this with rederict to protected area of your web app');
    }

    public function logout()
    {
        unset($_SESSION['user']);
        return redirect('/');
    }
}