<?php
require_once 'ABTransporter.php';
require_once 'ISetupTransport.php';
require_once 'Human.php';
require_once 'ITest.php';
class Transporter extends ABTransporter
    implements ISetupTransport,ITest{
    public function stop()
    {
        // TODO: Implement stop() method.
        //viết logic code vào đây
        echo $this->getTransporterName().' stop engine';
    }

    public function setupEngine()
    {
        // TODO: Implement setupEngine() method.
    }

    public function setColor($color)
    {
        // TODO: Implement setColor() method.
    }

    public function setPrice($price)
    {
        // TODO: Implement setPrice() method.
    }

    public function testTransporter()
    {
        // TODO: Implement testTransporter() method.
    }

}
?>