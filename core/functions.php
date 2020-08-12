
<?php

use App\Core\App;

function dd($data) {
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function view($name,  $data = []) {
    extract($data);

    require_once("views/{$name}.view.php");
}

function redirect($path) {

    header("Location: {$path}");
}

function check_auth() {
    if(!isset($_SESSION['user'])) {
        return redirect('/login');
    }
}

function api_check_auth() {
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Unauthenticated';
        exit;
    } else {
        $credentials = [
            'email' => $_SERVER['PHP_AUTH_USER'],
            'password' =>  md5($_SERVER['PHP_AUTH_PW'])
        ];

        $user = App::get('database')->getOneByField('users', $credentials);
        if(!$user) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Unauthenticated';
            exit;
        }
        return $user;
    }
}