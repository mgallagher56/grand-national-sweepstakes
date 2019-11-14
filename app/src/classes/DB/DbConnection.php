<?php

namespace marcsNameSpace\DB;

Use PDO;

class DbConnection
{
    public function getDb()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=TODoApp', 'root', 'password');
        return $db;
    }
}