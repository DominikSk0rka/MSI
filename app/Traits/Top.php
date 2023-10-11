<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;

trait QuestionList
{
    use ResultList;
    private $questionList = [];
    public function getQuestionList()
    {

        $this->createResultList();
        $this->createQuestionList();

        return $this->questionList;

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
        $this->createShielderTypicalQuestion();
        $this->createShielderQuestion();
        $this->createTankyMageQuestion();
        $this->createDpsMageQuestion();
        $this->createShortRangeQuestion();
        $this->createLongRangeQuestion();
        $this->createMageQuestion();
        $this->createSupportRoleQuestion();
        $this->createApRoleQuestion();
        $this->createCcChainQuestion();
        $this->createTankyFrontlineQuestion();
        $this->createSupportAssasinQuestion();
        $this->createDpsAssasinQuestion();
        $this->createAssasinQuestion();
        $this->createAdRoleQuestion();
        $this->createDamageTypeQuestion();
        $this->createWarriorQuestion();
        $this->createTypicalTankQuestion();
        $this->createTankyAutoattackQuestion();
        $this->createAutoAttackDamageQuestion();
        $this->createAutoAttackQuestion();
        $this->createEntryQuestion();
    }
  

    //---------------------------------------------TOP------METODS---------------------------------------------------------------
    private function createMordekaiser()
    {
        $this->questionList[] = $this->getMordekaiser();
    }
    private function createYone()
    {
        $this->questionList[] = $this->getYone();
    }
    private function createSion()
    {
        $this->questionList[] = $this->getSion();
    }
    private function createAtrox()
    {
        $this->questionList[] = $this->getAtrox();
    }
    private function createQuinn()
    {
        $this->questionList[] = $this->getQuinn();
    }
    private function createChoGath()
    {
        $this->questionList[] = $this->getChoGath();
    }
    private function createMalphite()
    {
        $this->questionList[] = $this->getMalphite();
    }
    private function createYorick()
    {
        $this->questionList[] = $this->getYorick();
    }
    private function createShen()
    {
        $this->questionList[] = $this->getShen();
    }
    private function createGankplank()
    {
        $this->questionList[] = $this->getGankplank();
    }
    private function createTryndamere()
    {
        $this->questionList[] = $this->getTryndamere();
    }
    private function createOrnn()
    {
        $this->questionList[] = $this->getOrnn();
    }
    private function createOlaf()
    {
        $this->questionList[] = $this->getOlaf();
    }
    private function createGaren()
    {
        $this->questionList[] = $this->getGaren();
    }
    private function createTeemo()
    {
        $this->questionList[] = $this->getTeemo();
    }
    private function createJax()
    {
        $this->questionList[] = $this->getJax();
    }
    private function createUrgot()
    {
        $this->questionList[] = $this->getUrgot();
    }
    private function createGnar()
    {
        $this->questionList[] = $this->getGnar();
    }
    private function createDarius()
    {
        $this->questionList[] = $this->getDarius();
    }
    private function createDrMundo()
    {
        $this->questionList[] = $this->getDrMundo();
    }
    private function createKayle()
    {
        $this->questionList[] = $this->getKayle();
    }
    private function createThanKench()
    {
        $this->questionList[] = $this->getThanKench();
    }
    private function createSett()
    {
        $this->questionList[] = $this->getSett();
    }
    private function createRiven()
    {
        $this->questionList[] = $this->getRiven();
    }
    private function createYasuo()
    {
        $this->questionList[] = $this->getYasuo();
    }
    private function createNasus()
    {
        $this->questionList[] = $this->getNasus();
    }
    private function createPoppy()
    {
        $this->questionList[] = $this->getPoppy();
    }
    private function createTrundle()
    {
        $this->questionList[] = $this->getTrundle();
    }
    private function createIllaoi()
    {
        $this->questionList[] = $this->getIllaoi();
    }
    private function createVoliber()
    {
        $this->questionList[] = $this->getVoliber();
    }
    private function createIrelia()
    {
        $this->questionList[] = $this->getIrelia();
    }
    private function createRenekton()
    {
        $this->questionList[] = $this->getRenekton();
    }
    private function createAkali()
    {
        $this->questionList[] = $this->getAkali();
    }
    private function createSinged()
    {
        $this->questionList[] = $this->getSinged();
    }
    private function createPantheon()
    {
        $this->questionList[] = $this->getPantheon();
    }
    private function createCamile()
    {
        $this->questionList[] = $this->getCamile();
    }
    private function createGwen()
    {
        $this->questionList[] = $this->getGwen();
    }
    private function createJayce()
    {
        $this->questionList[] = $this->getJayce();
    }
    private function createBrial()
    {
        $this->questionList[] = $this->getBrial();
    }
    private function createFriora()
    {
        $this->questionList[] = $this->getFiora();
    }
    private function createKennen()
    {
        $this->questionList[] = $this->getKennen();
    }
    private function createKled()
    {
        $this->questionList[] = $this->getKled();
    }
    private function createKsante()
    {
        $this->questionList[] = $this->getKsante();
    }
    private function createRumble()
    {
        $this->questionList[] = $this->getRumble();
    }


    private $entryQuestion;
    public function createEntryQuestion()
    {
        $questionString = "Do you want to deal most of your damage with auto-attacks, or with spells?";


        $answers = [];
        $answer = new Answer('Auto-attacks', $this->autoAttackQuestion);
        $answers[] = $answer;
        $answer = new Answer('Spells', $this->damageTypeQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->damageTypeQuestion = $questionToAdd;
    }
    private $damageTypeQuestion;
    public function createDamageTypeQuestion()
    {
        $questionString = "What kind of damage do you want to deal?";


        $answers = [];

        $answer = new Answer('Magic damage', $this->apRoleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Physical damage', $this->adRoleQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->damageTypeQuestion = $questionToAdd;
    }

    private $apRoleQuestion;
    public function createApRoleQuestion()
    {
        $questionString = "Do you want to be mage or support?";


        $answers = [];

        $answer = new Answer('Support', $this->supportRoleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Mage', $this->mageQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->apRoleQuestion = $questionToAdd;
    }
    private $mageQuestion;
    public function createMageQuestion()
    {
        $questionString = "What range do you prefer?";


        $answers = [];

        $answer = new Answer('Short range', $this->shortRangeQuestion);
        $answers[] = $answer;
        $answer = new Answer('Long range', $this->longRangeQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->mageQuestion = $questionToAdd;
    }
    private $longRangeQuestion;
    public function createLongRangeQuestion()
    {
        $questionString = "Do you have more than 50 IQ?";


        $answers = [];

        $answer = new Answer('Yes', $this->getXerath());
        $answers[] = $answer;
        $answer = new Answer('YYYYYYYGHGHGHGHHG', $this->getVelKoz());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->longRangeQuestion = $questionToAdd;
    }
    private $shortRangeQuestion;
    public function createShortRangeQuestion()
    {
        $questionString = "What kind of mage do you want to be?";


        $answers = [];

        $answer = new Answer('Tanky mage', $this->tankyMageQuestion);
        $answers[] = $answer;
        $answer = new Answer('DPS mage', $this->dpsMageQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->shortRangeQuestion = $questionToAdd;
    }
    private $dpsMageQuestion;
    public function createDpsMageQuestion()
    {
        $questionString = "Do you want to die in 2 seconds?";


        $answers = [];

        $answer = new Answer('Yes', $this->getAnnie());
        $answers[] = $answer;
        $answer = new Answer('No', $this->getVictor());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->dpsMageQuestion = $questionToAdd;
    }
    private $tankyMageQuestion;
    public function createTankyMageQuestion()
    {
        $questionString = "Do you want to practice 10 hours a day to be good with you champion?";


        $answers = [];

        $answer = new Answer('Yes', $this->getRyze());
        $answers[] = $answer;
        $answer = new Answer('Nope', $this->getCassiopeia());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->tankyMageQuestion = $questionToAdd;
    }
    private $shielderQuestion;
    public function createShielderQuestion()
    {
        $questionString = "Do you want to be able to deal some damage, or just be a good shielder?";


        $answers = [];

        $answer = new Answer('Damage', $this->getKarma());
        $answers[] = $answer;
        $answer = new Answer('Typical shielder', $this->getJanna());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->shielderQuestion= $questionToAdd;
    }
    private $shielderTypicalQuestion;
    public function createShielderTypicalQuestion()
    {
        $questionString = "Janna is for you";


        $answers = [];

        $answer = new Answer('Damage', $this->getRyze());
        $answers[] = $answer;
        $answer = new Answer('Tank', $this->getRyze());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->shielderTypicalQuestion = $questionToAdd;
    }
    private $supportRoleQuestion;
    public function createSupportRoleQuestion()
    {
        $questionString = "Do you want to be shielder or healer?";


        $answers = [];

        $answer = new Answer('Healer', $this->getSoraka());
        $answers[] = $answer;
        $answer = new Answer('Shielder', $this->shielderQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->supportRoleQuestion = $questionToAdd;
    }


    public function getQuestionByQuestionString($questionString)
    {
        $questions = $this->getQuestionList();
        //dd($questions);
        foreach ($questions as $question) {
            //dd($question->questionString);
            if ($question->questionString == $questionString) {
                return $question;
            }
        }
    }

    /*private $apRoleQuestion;
    public function createApRoleQuestion()
    {
        $questionToAdd = $apRoleQuestion = $this->getRyze();
        $this->questionList[] = $questionToAdd;
        $this->apRoleQuestion = $questionToAdd;
    }*/

    private $adRoleQuestion;
    public function createAdRoleQuestion()
    {
        $questionString = "Choose your prefered role";


        $answers = [];

        $answer = new Answer('Tanky frontline', $this->tankyFrontlineQuestion);
        $answers[] = $answer;
        $answer = new Answer('Assasin', $this->assasinQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->adRoleQuestion = $questionToAdd;
    }
    private $tankyFrontlineQuestion;
    public function createTankyFrontlineQuestion()
    {
        $questionString = "Do you need strong heal and powerful shields?";


        $answers = [];

        $answer = new Answer('Yes', $this->getTaric());
        $answers[] = $answer;
        $answer = new Answer('No', $this->ccChainQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->tankyFrontlineQuestion = $questionToAdd;
    }
    private $ccChainQuestion;
    public function createCcChainQuestion()
    {
        $questionString = "Do you want insane durability?";


        $answers = [];

        $answer = new Answer('Yes', $this->getLeona());
        $answers[] = $answer;
        $answer = new Answer('No', $this->getNautilus());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->ccChainQuestion= $questionToAdd;
    }
    private $assasinQuestion;
    public function createAssasinQuestion()
    {
        $questionString = "Do you want to be support assasin, or do you to just kill everybody?";


        $answers = [];

        $answer = new Answer('Support assasin', $this->supportAssasinQuestion);
        $answers[] = $answer;
        $answer = new Answer('JUST KILL THEM ALL!!!', $this->dpsAssasinQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->assasinQuestion = $questionToAdd;
    }
    private $supportAssasinQuestion;
    public function createSupportAssasinQuestion()
    {
        $questionString = "Do you need insane mobility?";


        $answers = [];

        $answer = new Answer('Yes', $this->getPantheon());
        $answers[] = $answer;
        $answer = new Answer('No', $this->getPyke());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->supportAssasinQuestion = $questionToAdd;
    }

    private $dpsAssasinQuestion;
    public function createDpsAssasinQuestion()
    {
        $questionString = "Do you want to have some healing, or do you just care only about the damage?";


        $answers = [];

        $answer = new Answer('I want some healing', $this->getKayn());
        $answers[] = $answer;
        $answer = new Answer('DAMAGE IS ALL I WANT', $this->getKhaZix());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->dpsAssasinQuestion = $questionToAdd;
    }



    private $autoAttackQuestion;
    public function createAutoAttackQuestion()
    {
        $questionString = "Do you want to have lots of HP, or deal lots of damage?";


        $answers = [];

        $answer = new Answer('HP', $this->tankyAutoattackQuestion);
        $answers[] = $answer;
        $answer = new Answer('Damage', $this->autoAttackDamageQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->autoAttackQuestion = $questionToAdd;
    }
    private $tankyAutoattackQuestion;
    public function createTankyAutoattackQuestion()
    {
        $questionString = "Do you want to be a warrior, or a typical tank?";


        $answers = [];

        $answer = new Answer('Warrior', $this->warriorQuestion);
        $answers[] = $answer;
        $answer = new Answer('Typical tank', $this->typicalTankQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->tankyAutoattackQuestion = $questionToAdd;
    }
    private $warriorQuestion;
    public function createWarriorQuestion()
    {
        $questionString = "What do you value more?";


        $answers = [];

        $answer = new Answer('Good mobilty', $this->getGaren());
        $answers[] = $answer;
        $answer = new Answer('Good fighting potential', $this->getSett());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->warriorQuestion = $questionToAdd;
    }
    private $typicalTankQuestion;
    public function createTypicalTankQuestion()
    {
        $questionString = "Do you like splitting from your team?";


        $answers = [];

        $answer = new Answer('Yes', $this->getSion());
        $answers[] = $answer;
        $answer = new Answer('No', $this->getMalphite());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->typicalTankQuestion = $questionToAdd;
    }
    private $autoAttackDamageQuestion;
    public function createAutoAttackDamageQuestion()
    {
        $questionString = "Do you want your fights to be short and brutal, or long and epic?";


        $answers = [];

        $answer = new Answer('Short and brutal', $this->getMasterYi());
        $answers[] = $answer;
        $answer = new Answer('Long and epic', $this->getRiven());
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->questionList[] = $questionToAdd;
        $this->autoAttackDamageQuestion = $questionToAdd;
    }


}