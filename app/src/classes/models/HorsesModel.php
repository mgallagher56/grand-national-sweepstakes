<?php

namespace MarcsNameSpace\models;

use PDO;

class HorsesModel
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getHorses(){
        $query = $this->db->prepare('SELECT `id`, `horses`, `jockey`, `odds`, `name`, `selected` FROM `grandnational`;');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function addName($name){
        $query = $this->db->prepare('SELECT `id`  FROM `grandnational_unselected`;');
        $query->execute();
        $result = $query->fetchAll();
        $horsesLeft = [];
        foreach ($result as $number)
            array_push($horsesLeft, $number['id']);
        $id = array_rand($horsesLeft);
        $query = $this->db->prepare('DELETE FROM `grandnational_unselected` WHERE `id` = :id;');
        $query->bindParam(':id', $id, PDO::PARAM_INT, 3);
        $query->execute();
        $query2 = $this->db->prepare('UPDATE `grandnational` SET `name` = :name, `selected` = 1 WHERE `id` = :id;');
        $query2->bindParam(':name', $name, PDO::PARAM_STR, 256);
        $query2->bindParam(':id', $id, PDO::PARAM_INT, 3);
        $query2->execute();
    }

}