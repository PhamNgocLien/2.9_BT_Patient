<?php

include_once 'Patient.php';

class ListPatients
{
    private $list;

    public function __construct()
    {
        $this->list = new SplQueue();
    }

    public function getList()
    {
        return $this->list;
    }

    public function setList($list)
    {
        $this->list = $list;
    }


    public function add($patient)
    {
        if ($this->list->isEmpty()){
            $this->list->enqueue($patient);
        } else {
            for ($i = 0; $i < count($this->list); $i++){
                if ($this->list[$i]->getCode() > $patient->getCode()){
                    $this->list->add($i,$patient);
                    return $this->getList();
                }
            }
            $this->list->enqueue($patient);
        }
    }
}