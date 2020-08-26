<?php


class Patient
{
    private $name;
    private $code;

    public function __construct($name,$code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function __toString(){
        return $this->name . ' - ' . $this->code;
    }
}