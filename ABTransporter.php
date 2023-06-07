<?php

abstract class ABTransporter
{
    private $transporterType;//kiểu phương tiê
    private $transporterName;

    /**
     * @return mixed
     */
    public function getTransporterType()
    {
        return $this->transporterType;
    }

    /**
     * @param mixed $transporterType
     */
    public function setTransporterType($transporterType)
    {
        $this->transporterType = $transporterType;
    }

    /**
     * @return mixed
     */
    public function getTransporterName()
    {
        return $this->transporterName;
    }

    /**
     * @param mixed $transporterName
     */
    public function setTransporterName($transporterName)
    {
        $this->transporterName = $transporterName;
    }

    //non abstract method - phương thức không trừu tượng
    public function start()
    {
        $this->transporterName . ' start engine';
    }

    //abstract method - phương thức trừu tượng
    public abstract function stop();
}

?>