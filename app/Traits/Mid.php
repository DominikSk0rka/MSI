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
        
   
        $this->createGalio();
        $this->createKatarina();
        $this->createAnivia();
        $this->createEkko();
        $this->createMalzahar();
        $this->createYone();
        $this->createLux();
        $this->createZed();
        $this->createSylas();
        $this->createAhri();
        $this->createZiggs();
        $this->createXerath();
        $this->createVeigar();
        $this->createKassadin();
        $this->createSyndra();
        $this->createViktor();
        $this->createLissandra();
        $this->createYasuo();
        $this->createVladimir();
        $this->createAnne();
        $this->createRyze();
        $this->createTwistedFate();
        $this->createIrelia();
        $this->createOriana();
        $this->createAkali();
        $this->createCorki();
        $this->createTaliyah();
        $this->createAkshan();
        $this->createLeBlanc();
        $this->createNeeko();
        $this->createPantheon();
        $this->createAzir();
        $this->createCassiopeia();
        $this->createZoe();
        $this->createAurelionSol();
        $this->createJayce();
        $this->createFizz();
        $this->createVex();
        $this->createNaafiri();
        $this->createQiyana();
        $this->createTalon();


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

    //---------------------------------------------MID------METODS---------------------------------------------------------------
    private function createGalio()
    {
        $this->questionList[] = $this->getGalio();
    }
    private function createKatarina()
    {
        $this->questionList[] = $this->getKatarina();
    }
    private function createAnivia()
    {
        $this->questionList[] = $this->getAnivia();
    }
    private function createEkko()
    {
        $this->questionList[] = $this->getEkko();
    }
    private function createMalzahar()
    {
        $this->questionList[] = $this->getMalzahar();
    }
    private function createYone()
    {
        $this->questionList[] = $this->getYone();
    }
    private function createLux()
    {
        $this->questionList[] = $this->getLux();
    }
    private function createZed()
    {
        $this->questionList[] = $this->getZed();
    }
    private function createSylas()
    {
        $this->questionList[] = $this->getSylas();
    }
    private function createAhri()
    {
        $this->questionList[] = $this->getAhri();
    }
    private function createZiggs()
    {
        $this->questionList[] = $this->getZiggs();
    }
    private function createXerath()
    {
        $this->questionList[] = $this->getXerath();
    }
    private function createVeigar()
    {
        $this->questionList[] = $this->getVeigar();
    }
    private function createKassadin()
    {
        $this->questionList[] = $this->getKassadin();
    }
    private function createSyndra()
    {
        $this->questionList[] = $this->getSyndra();
    }
    private function createViktor()
    {
        $this->questionList[] = $this->getViktor();
    }
    private function createLissandra()
    {
        $this->questionList[] = $this->getLissandra();
    }
    private function createYasuo()
    {
        $this->questionList[] = $this->getYasuo();
    }
    private function createVladimir()
    {
        $this->questionList[] = $this->getVladimir();
    }
    private function createAnne()
    {
        $this->questionList[] = $this->getAnne();
    }
    private function createRyze()
    {
        $this->questionList[] = $this->getRyze();
    }
    private function createTwistedFate()
    {
        $this->questionList[] = $this->getTwistedFate();
    }
    private function createIrelia()
    {
        $this->questionList[] = $this->getIrelia();
    }
    private function createOriana()
    {
        $this->questionList[] = $this->getOriana();
    }
    private function createAkali()
    {
        $this->questionList[] = $this->getAkali();
    }
    private function createCorki()
    {
        $this->questionList[] = $this->getCorki();
    }
    private function createTailah()
    {
        $this->questionList[] = $this->getTailah();
    }
    private function createAkshan()
    {
        $this->questionList[] = $this->getAkshan();
    }
    private function createLeBlanc()
    {
        $this->questionList[] = $this->getLeBlanc();
    }
    private function createNeeko()
    {
        $this->questionList[] = $this->getNeeko();
    }
    private function createPantheon()
    {
        $this->questionList[] = $this->getPantheon();
    }
    private function createAzir()
    {
        $this->questionList[] = $this->getAzir();
    }
    private function createCassiopeia()
    {
        $this->questionList[] = $this->getCassiopeia();
    }
    private function createZoe()
    {
        $this->questionList[] = $this->getZoe();
    }
    private function createAurelionSoul()
    {
        $this->questionList[] = $this->getAurelionSoul();
    }
    private function createJayce()
    {
        $this->questionList[] = $this->getJayce();
    }
    private function createFizz()
    {
        $this->questionList[] = $this->getFizz();
    }
    private function createVex()
    {
        $this->questionList[] = $this->getVex();
    }
    private function createNaafiri()
    {
        $this->questionList[] = $this->getNaafiri();
    }
    private function createQiyana()
    {
        $this->questionList[] = $this->getQiyana();
    }
    private function createTalon()
    {
        $this->questionList[] = $this->getTalon();
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