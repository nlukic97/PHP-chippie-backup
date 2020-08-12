<?php
namespace App\Controllers;
use App\Core\App;

class UsersController {

    public function index()
    {
        $users = App::get('database')->getAll('users');

        return view('users-index', compact('users'));
    }

    public function create()
    {
        return view('users-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('users', $_POST);

        return redirect('/users');
    }

    public function show()
    {
        $user = App::get('database')->getOne('users', $_GET['id']);

        return view('users-show', compact('user'));
    }

    public function edit()
    {
        $user = App::get('database')->getOne('users', $_GET['id']);

        return view('users-edit', compact('user'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('users', $_POST);

        return redirect('/users');
    }

    public function destroy()
    {
        App::get('database')->delete('users', $_GET['id']);

        return redirect('/users');

    }

}