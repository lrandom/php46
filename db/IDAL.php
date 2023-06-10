<?php
 interface IDAL{
     public function getList();

     public function getOneById($id);

     public function insert($payload);

     public function update($id, $payload);

     public function remove($id);



 }
?>