<?php

namespace MarcsNameSpace\models;

use marcsNameSpace\DB\DbConnection;
use PDO;

class ToDoModel
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllToDos(){
        $query = $this->db->prepare('SELECT * FROM `ToDo` WHERE `completed` = 0;');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function getAllCompletedToDos(){
        $query = $this->db->prepare('SELECT `task` FROM `ToDo` WHERE `completed` = 1;');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function addToDo($task){
        $query = $this->db->prepare('INSERT INTO `ToDo`(task) VALUE (:task);');
        $query->bindParam(':task', $task, PDO::PARAM_STR);
        $query->execute();
    }

    public function updateToDo($id, $task){
        $query = $this->db->prepare('UPDATE `ToDo` SET `task` = :task WHERE `id` = :id;');
        $query->bindParam(':task', $task, PDO::PARAM_STR, 256);
        $query->bindParam(':id', $id, PDO::PARAM_INT, 3);
        $query->execute();
    }

    public function completeToDo($id){
        $query = $this->db->prepare('UPDATE `ToDo` SET `completed` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $id, PDO::PARAM_INT, 3);
        $query->execute();
    }

    public function restoreToDo( $id){
        $query = $this->db->prepare('UPDATE `ToDo` SET `completed` = 0 WHERE `id` = :id;');
        $query->bindParam(':id', $id, PDO::PARAM_INT, 3);
        $query->execute();
    }

    public function deleteToDo($id){
        $query = $this->db->prepare('DELETE FROM `ToDo` WHERE `id` = :id;');
        $query->bindParam(':id', $id, PDO::PARAM_INT, 3);
        $query->execute();
    }

}