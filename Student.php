<?php
require_once 'Human.php';
class Student extends Human{
    static var $hihi = "Luan";

    static function haha()
    {
        echo "haha";
    }
    protected $studentId;
    private $studentCLassName;

    public function getStudentClassName()
    {
        return $this->studentCLassName;
    }
    private function study()
    {
        echo $this->name . " study";
    }

    public function test()
    {
        $this->study();
    }




}
?>