<?php
namespace App\Controllers;
use App\Core\App;

class ApiPostsController {

    public function index()
    {
        $user = api_check_auth();
        $posts = App::get('database')->getOneByField('posts', ['user_id' => $user->id]);

        echo json_encode($posts);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('posts', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $post = App::get('database')->getOne('posts', $_GET['id']);

        echo json_encode($post);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('posts', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('posts', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}