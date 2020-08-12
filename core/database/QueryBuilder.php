<?php

namespace App\Core\Database;

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllDesc($table) //getting all in descending order (from most recently added)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY id DESC");

        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getAll($table) //to get all in the normal order
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getOne($table, $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE id='{$id}'");

        $query->execute();

        return $query->fetch(\PDO::FETCH_OBJ);
    }

    public function getOneByField($table, $parameters)
    {

        $params = '';
        foreach($parameters as $key => $parameter) {
            $params.= "$key = '$parameter' AND ";
        }
        $params = substr($params, 0, -5);

        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE {$params}");


        $query->execute();

        return $query->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($table, $data)
    {
        //ista prica kao dole za update. Moras da proveris ima li slika.
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(", " , array_keys($data)),
            ":" . implode(", :" , array_keys($data)));

        $query = $this->pdo->prepare($sql);

        $query->execute($data);

    }

    public function update($table, $data)
    {
        if(!isset($_FILES['img']) OR $_FILES['img'] == '' OR $_FILES['img']['name'] == ''){
            echo "It is not set. Only work with the data"."<br>";
            var_dump($data); //image stays the same
        } else {
            echo "image is set. working with both."."<br>";
            echo "<pre>";
            var_dump($data);
            //uploading ass usual, except we must now add
            // 'img'=> 'new upload location' and the link to the location you have just uploaded the image to.
            echo "</pre>";

            echo "<pre>";
            var_dump($_FILES['img']);
            //here, perform the transfer of this image into the image location.
            echo "</pre>";
        }

//        die();

        $id = $data['id'];
        unset($data['id']);

        $preparedParams = array_map(function($item) {
            return $item . "=:" . $item;
        }, array_keys($data));

        $sql = sprintf("UPDATE %s SET %s WHERE id = '%s'",
            $table,
            implode(', ', $preparedParams),
            $id);


        $query = $this->pdo->prepare($sql);

        $query->execute($data);

    }

    public function delete($table, $id)
    {
        // DELETE FROM table WHERE id
        $sql = sprintf("DELETE FROM %s WHERE id='%s'",
            $table,
            $id);

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }
}

