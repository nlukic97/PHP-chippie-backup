<?php
session_start();
require_once "core/functions.php";
use App\Core\App;
use App\Core\Database\Database;
use App\Core\Database\QueryBuilder;

App::register('config', require_once "config.php");

App::register('database', new QueryBuilder(Database::connect(App::get('config')['database'])));

//App::register('ime', 'vrednost');
//
//App::get('ime');
