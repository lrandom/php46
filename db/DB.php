<?php

class DB
{
    protected $db;
    protected $tableName;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=127.0.0.1;dbname=php46;charset=utf8',
                'root', 'koodinh@');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $this->db = null;
            echo "Error connect DB";
        }
    }

    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }
}
