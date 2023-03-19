<?php

class db
{
    public static function conect()
    {
        $hostname = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "hernanwebsite";

        $connection = new mysqli("localhost", "root", "", "hernanwebsite");
        $connection->query("SET NAMES 'utf8'");
        return $connection;
    }
}