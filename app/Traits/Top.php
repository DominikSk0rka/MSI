<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;

trait Top
{
    use ResultList;
    private $Top = [];
    public function getQuestionList()
    {

        $this->createResultList();
        $this->createQuestionList();

        return $this->Top;

    }


    private function createResultList()
    {

        $this->createMordekaiser();
        $this->createYone();
        $this->createSion();
        $this->createAtrox();
        $this->createQuinn();
        $this->createChoGath();
        $this->createMalphite();
        $this->createYorick();
        $this->createShen();
        $this->createGankplank();
        $this->createTryndamere();
        $this->createOrnn();
        $this->createOlaf();
        $this->createGaren();
        $this->createTeemo();
        $this->createJax();
        $this->createUrgot();
        $this->createGnar();
        $this->createDarius();
        $this->createDrMundo();
        $this->createKayle();
        $this->createThanKench();
        $this->createSett();
        $this->createRiven();
        $this->createYasuo();
        $this->createNasus();
        $this->createPoppy();
        $this->createTrundle();
        $this->createIllaoi();
        $this->createVoliber();
        $this->createIrelia();
        $this->createRenekton();
        $this->createAkali();
        $this->createSinged();
        $this->createPantheon();
        $this->createCamile();
        $this->createGwen();
        $this->createJayce();
        $this->createBrial();
        $this->createFiora();
        $this->createKennen();
        $this->createKled();
        $this->createKsante();
        $this->createRumble();

    }
    private function createQuestionList()
    {

        $this->createEntryTopQuestion();
    }
  

    //---------------------------------------------TOP------METODS---------------------------------------------------------------
    private function createMordekaiser()
    {
        $this->Top[] = $this->getMordekaiser();
    }
    private function createYone()
    {
        $this->Top[] = $this->getYone();
    }
    private function createSion()
    {
        $this->Top[] = $this->getSion();
    }
    private function createAtrox()
    {
        $this->Top[] = $this->getAtrox();
    }
    private function createQuinn()
    {
        $this->Top[] = $this->getQuinn();
    }
    private function createChoGath()
    {
        $this->Top[] = $this->getChoGath();
    }
    private function createMalphite()
    {
        $this->Top[] = $this->getMalphite();
    }
    private function createYorick()
    {
        $this->Top[] = $this->getYorick();
    }
    private function createShen()
    {
        $this->Top[] = $this->getShen();
    }
    private function createGankplank()
    {
        $this->Top[] = $this->getGankplank();
    }
    private function createTryndamere()
    {
        $this->Top[] = $this->getTryndamere();
    }
    private function createOrnn()
    {
        $this->Top[] = $this->getOrnn();
    }
    private function createOlaf()
    {
        $this->Top[] = $this->getOlaf();
    }
    private function createGaren()
    {
        $this->Top[] = $this->getGaren();
    }
    private function createTeemo()
    {
        $this->Top[] = $this->getTeemo();
    }
    private function createJax()
    {
        $this->Top[] = $this->getJax();
    }
    private function createUrgot()
    {
        $this->Top[] = $this->getUrgot();
    }
    private function createGnar()
    {
        $this->Top[] = $this->getGnar();
    }
    private function createDarius()
    {
        $this->Top[] = $this->getDarius();
    }
    private function createDrMundo()
    {
        $this->Top[] = $this->getDrMundo();
    }
    private function createKayle()
    {
        $this->Top[] = $this->getKayle();
    }
    private function createThanKench()
    {
        $this->Top[] = $this->getThanKench();
    }
    private function createSett()
    {
        $this->Top[] = $this->getSett();
    }
    private function createRiven()
    {
        $this->Top[] = $this->getRiven();
    }
    private function createYasuo()
    {
        $this->Top[] = $this->getYasuo();
    }
    private function createNasus()
    {
        $this->Top[] = $this->getNasus();
    }
    private function createPoppy()
    {
        $this->Top[] = $this->getPoppy();
    }
    private function createTrundle()
    {
        $this->Top[] = $this->getTrundle();
    }
    private function createIllaoi()
    {
        $this->Top[] = $this->getIllaoi();
    }
    private function createVoliber()
    {
        $this->Top[] = $this->getVoliber();
    }
    private function createIrelia()
    {
        $this->Top[] = $this->getIrelia();
    }
    private function createRenekton()
    {
        $this->Top[] = $this->getRenekton();
    }
    private function createAkali()
    {
        $this->Top[] = $this->getAkali();
    }
    private function createSinged()
    {
        $this->Top[] = $this->getSinged();
    }
    private function createPantheon()
    {
        $this->Top[] = $this->getPantheon();
    }
    private function createCamile()
    {
        $this->Top[] = $this->getCamile();
    }
    private function createGwen()
    {
        $this->Top[] = $this->getGwen();
    }
    private function createJayce()
    {
        $this->Top[] = $this->getJayce();
    }
    private function createBrial()
    {
        $this->Top[] = $this->getBrial();
    }
    private function createFriora()
    {
        $this->Top[] = $this->getFiora();
    }
    private function createKennen()
    {
        $this->Top[] = $this->getKennen();
    }
    private function createKled()
    {
        $this->Top[] = $this->getKled();
    }
    private function createKsante()
    {
        $this->Top[] = $this->getKsante();
    }
    private function createRumble()
    {
        $this->Top[] = $this->getRumble();
    }


    private $createEntryTopQuestion;
    public function createEntryTopQuestion()
    {
        $questionString = "Do you want to deal most of your damage with auto-attacks, or with spells?";


        $answers = [];
        $answer = new Answer('Auto-attacks', $this->getKled());
        $answers[] = $answer;
        $answer = new Answer('Spells', $this->getKled());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Top[] = $questionToAdd;
        $this->createEntryTopQuestion = $questionToAdd;
    }
   
    public function getQuestionByQuestionString($questionString)
    {
        $questions = $this->getTop();
        //dd($questions);
        foreach ($questions as $question) {
            //dd($question->questionString);
            if ($question->questionString == $questionString) {
                return $question;
            }
        }
    }

  

}