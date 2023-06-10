<?php
require_once 'DB.php';
require_once 'IDAL.php';

class ProvinceDAL extends DB implements IDAL
{

    public function __construct()
    {
        parent::__construct();
        $this->setTableName("provinces");

    }

    public function getList()
    {
        // TODO: Implement getList() method.
        $rs = $this->db->query("SELECT * FROM " . $this->tableName);
        return $rs;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        $rs = $this->db->query("SELECT * FROM " . $this->tableName . " WHERE id = " . $id);
        return $rs;
    }

    public function insert($payload)
    {
        // TODO: Implement insert() method.
        $prp = $this->db->prepare('INSERT INTO ' . $this->tableName . '(name) VALUES(:name)');
        $prp->bindParam(':name', $payload['name']);
        try {
            $prp->execute();
            return true;
        } catch (Exception $exception) {
            echo $exception->getMessage();
            return false;
        }
    }

    public function update($id, $payload)
    {
        // TODO: Implement update() method.
        $prp = $this->db->prepare('UPDATE ' . $this->tableName . ' SET name = :name WHERE id = :id');
        $prp->bindParam(':name', $payload['name']);
        $prp->bindParam(':id', $id);
        try {
            $prp->execute();
            return true;
        } catch (Exception $exception) {
            echo $exception->getMessage();
            return false;
        }
    }

    public function remove($id)
    {
        // TODO: Implement remove() method.
        $prp = $this->db->prepare('DELETE FROM ' . $this->tableName . ' WHERE id = :id');
        $prp->bindParam(':id', $id);
        try {
            $prp->execute();
            return true;
        } catch (Exception $exception) {
            echo $exception->getMessage();
            return false;
        }
    }
}