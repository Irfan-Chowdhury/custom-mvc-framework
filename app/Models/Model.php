<?php 

namespace App\Models;

use PDO;
use PDOException;

class Model 
{
    protected PDO $db;

    public function __construct()
    {
        $config = require_once __DIR__ . "/../../config/database.php";

        // return print_r($config);

        try {
            // $this->db = new PDO("mysql:host=localhost;dbname=mango","root","irfan95");
            $this->db = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}","{$config['username']}","{$config['password']}");

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Data from database will display as an associative array.
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}