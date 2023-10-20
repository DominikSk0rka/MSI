<?php
namespace App\Traits;
use App\Traits\AllChamps;
trait Champs{
    public function getSupport()
    {
        $this->createResultList();
        $this->createQueston();
        return $this->Support;
    }
 //----------------------------------------------------   
    public function getAdc()
    {
        $this->createResultList();
        $this->createQueston();
        return $this->Adc;
    }
 //----------------------------------------------------   
    public function getMid()
    {
        $this->createResultList();
        $this->createQueston();
        return $this->Mid;
    }
 //----------------------------------------------------       
    public function getTop()
    {
        $this->createResultList();
        $this->createQueston();
        return $this->Top;
    }
 //----------------------------------------------------       
    public function getJungle()
    {
        $this->createResultList();
        $this->createQueston();
        return $this->Jungle;
    }
}