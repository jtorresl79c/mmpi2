<?php
namespace App\CustomClass;

class Data{
    var $prueba;
    var $genders;
    var $marital;
    var $jobs;
    var $escolaridades;

    public function setGenders($genders)
    {
        $this->genders= $genders;
    }

    public function setMarital($marital)
    {
        $this->marital= $marital;
    }

    public function setJobs($jobs)
    {
        $this->jobs= $jobs;
    }

    public function setEscolaridades($escolaridades)
    {
        $this->escolaridades= $escolaridades;
    }

    public function get()
    {
        return $this->prueba;

    }
}
