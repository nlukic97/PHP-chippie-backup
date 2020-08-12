<?php
namespace App\Controllers;
use App\Core\App;

class itemsController {

    public function index()
    {
        $items = App::get('database')->getAll('items'); //ovaj treba da ne bude descenging. Orders treba

        return view('items', compact('items'));
    }

    public function create()
    {
        return view('items-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('items', $_POST);

        return redirect('/items');
    }

    public function show()
    {
        $post = App::get('database')->getOne('items', $_GET['id']);

        return view('posts-show', compact('post'));
    }

    public function edit()
    {
        $item = App::get('database')->getOne('items', $_GET['id']);

        return view('items-edit', compact('item'));
    }

    public function update()
    {
        App::get('database')->update('items', $_POST);

        return redirect('/items');
    }

    public function destroy()
    {
        App::get('database')->delete('items', $_GET['id']);

        return redirect('/items');

    }
    
}