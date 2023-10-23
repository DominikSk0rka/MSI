<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;

trait Jungle
{
    use ResultList;
    private $Jungle = [];
    public function getJungle()
    {

        $this->createResultList();
        $this->createQuestionList();

        return $this->Jungle;

    }


    private function createResultList()
    {
      
       $this->createEkko();
       $this->createDiana();
       $this->createViego();
       $this->createKayn();
       $this->createShaco();
       $this->createSylas();
       $this->createNunu();
       $this->createZac();
       $this->createIvern();
       $this->createKarthus();
       $this->createMasterYi();
       $this->createVi();
       $this->createKhaZix();
       $this->createEvelinn();
       $this->createJarvanIV();
       $this->createGragas();
       $this->createAmumu();
       $this->createWarwick();
       $this->createPoppy();
       $this->createTrundle();
       $this->createRammus();
       $this->createGraves();
       $this->createHecarim();
       $this->createNidalee();
       $this->createShyvana();
       $this->createTaliyah();
       $this->createSejuani();
       $this->createNocturne();
       $this->createFiddlesticks();
       $this->createRengar();
       $this->createSkarner();
       $this->createXinZhao();
       $this->createBelVeth();
       $this->createBriar();
       $this->createElise();
       $this->createKindred();
       $this->createLeeSin();
       $this->createLillia();
       $this->createMaokai();
       $this->createRekSai();
       $this->createUdyr();
       $this->createWukong();

    }
    private function createQuestionList()
    {
        
//-----------------------------------AP----------------------------------------------------//
        $this->APJungle_Range_Hybrid_TwoQuestion();
        $this->APJungle_Range_HybridQuestion();
        $this->APJungle_Mele_MeleAp_Tactical_AssasinQuestion();
        $this->APJungle_Mele_MeleAp_Tactical_RQuestion();
        $this->APJungle_Mele_MeleAp_TacticalQuestion();
        $this->APJungle_Mele_MeleAp_Tank_stuning_basedQuestion();
        $this->APJungle_Mele_MeleAp_Tank_stuningQuestion();
        $this->APJungle_Mele_MeleAp_TankQuestion();
        $this->APJungle_Mele_MeleApQuestion();
        $this->APJungle_MeleQuestion();
        $this->APJungle_Range_RangeAp_RQuestion();
        $this->APJungle_Range_RangeAp_helpQuestion();
        $this->APJungle_Range_RangeApQuestion();
        $this->APJungle_RangeQuestion();
        $this->APJungleQuestion();
//-----------------------------------AD----------------------------------------------------//
        $this->ADJungleMeleAdBruTank_Berserker_dash_hard_difQuestion();
        $this->ADJungleMeleAdBruTank_Berserker_dash_hardQuestion();
        $this->ADJungleMeleAdBruTank_Berserker_dash_easyQuestion();
        $this->ADJungleMeleAdBruTank_Berserker_dashQuestion();
        $this->ADJungleMeleAdBruTank_Berserker_acceleration_fearQuestion();
        $this->ADJungleMeleAdBruTank_Berserker_accelerationQuestion();
        $this->ADJungleMeleAdBruTank_BerserkerQuestion();
        $this->ADJungleMeleAdBruTank_Tank_Typical_RQuestion();
        $this->ADJungleMeleAdBruTank_Tank_TypicalQuestion();
        $this->ADJungleMeleAdBruTank_Tank_CDRQuestion();
        $this->ADJungleMeleAdBruTank_TankQuestion();
        $this->ADJungleMeleAdBruTankQuestion();
        $this->ADJungleMeleAd_Assasins_Teamfight_1v1_skills_Question();
        $this->ADJungleMeleAd_Assasins_Teamfight_1v1_auto_Question();
        $this->ADJungleMeleAd_Assasins_Teamfight_1v1_Question();
        $this->ADJungleMeleAd_Assasins_Teamfight_Question();
        $this->ADJungleMeleAd_Assasins_Question();
        $this->ADJungleMeleAdQuestion();
        $this->ADJungleMeleQuestion();
        $this->ADJungleRangeAdQuestion();
        $this->ADJungleRangeQuestion();
        $this->ADJungleQuestion();
        $this->createEntryJungleQuestion();
    }

    //---------------------------------------------JUNGLE------METODS------------------------------------------------------------
    private function createEkko()
    {
        $this->Jungle[] = $this->getEkko();
    }
    private function createDiana()
    {
        $this->Jungle[] = $this->getDiana();
    }
    private function createViego()
    {
        $this->Jungle[] = $this->getViego();
    }
    private function createKayn()
    {
        $this->Jungle[] = $this->getKayn();
    }
    private function createShaco()
    {
        $this->Jungle[] = $this->getShaco();
    }
    private function createSylas()
    {
        $this->Jungle[] = $this->getSylas();
    }
    private function createNunu()
    {
        $this->Jungle[] = $this->getNunu();
    }
    private function createZac()
    {
        $this->Jungle[] = $this->getZac();
    }
    private function createIvern()
    {
        $this->Jungle[] = $this->getIvern();
    }
    private function createKarthus()
    {
        $this->Jungle[] = $this->getKarthus();
    }
    private function createMasterYi()
    {
        $this->Jungle[] = $this->getMasterYi();
    }
    private function createVi()
    {
        $this->Jungle[] = $this->getVi();
    }
    private function createKhaZix()
    {
        $this->Jungle[] = $this->getKhaZix();
    }
    private function createEvelinn()
    {
        $this->Jungle[] = $this->getEvelynn();
    }
    private function createJarvanIV()
    {
        $this->Jungle[] = $this->getJarvanIV();
    }
    private function createGragas()
    {
        $this->Jungle[] = $this->getGragas();
    }
    private function createAmumu()
    {
        $this->Jungle[] = $this->getAmumu();
    }
    private function createWarwick()
    {
        $this->Jungle[] = $this->getWarwick();
    }
    private function createPoppy()
    {
        $this->Jungle[] = $this->getPoppy();
    }
    private function createTrundle()
    {
        $this->Jungle[] = $this->getTrundle();
    }
    private function createRammus()
    {
        $this->Jungle[] = $this->getRammus();
    }
    private function createGraves()
    {
        $this->Jungle[] = $this->getGraves();
    }
    private function createHecarim()
    {
        $this->Jungle[] = $this->getHecarim();
    }
    private function createNidalee()
    {
        $this->Jungle[] = $this->getNidalee();
    }
    private function createShyvana()
    {
        $this->Jungle[] = $this->getShyvana();
    }
    private function createTaliyah()
    {
        $this->Jungle[] = $this->getTaliyah();
    }
    private function createSejuani()
    {
        $this->Jungle[] = $this->getSejuani();
    }
    private function createNocturne()
    {
        $this->Jungle[] = $this->getNocturne();
    }
    private function createFiddlesticks()
    {
        $this->Jungle[] = $this->getFiddlesticks();
    }
    private function createRengar()
    {
        $this->Jungle[] = $this->getRengar();
    }
    private function createSkarner()
    {
        $this->Jungle[] = $this->getSkarner();
    }
    private function createXinZhao()
    {
        $this->Jungle[] = $this->getXinZhao();
    }
    private function createBelVeth()
    {
        $this->Jungle[] = $this->getBelVeth();
    }
    private function createBriar()
    {
        $this->Jungle[] = $this->getBriar();
    }
    private function createElise()
    {
        $this->Jungle[] = $this->getElise();
    }
    private function createKindred()
    {
        $this->Jungle[] = $this->getKindred();
    }
    private function createLeeSin()
    {
        $this->Jungle[] = $this->getLeeSin();
    }
    private function createLillia()
    {
        $this->Jungle[] = $this->getLillia();
    }
    private function createMaokai()
    {
        $this->Jungle[] = $this->getMaokai();
    }
    private function createRekSai()
    {
        $this->Jungle[] = $this->getRekSai();
    }
    private function createUdyr()
    {
        $this->Jungle[] = $this->getUdyr();
    }
    private function createWukong()
    {
        $this->Jungle[] = $this->getWukong();
    }
    








//----------------------------------------AP Jungle/Ad Jungle------------------------------------------------//


    private $createEntryJungleQuestion;
    public function createEntryJungleQuestion()
    {
        $questionString = "What damage do you want to do as a jungler?";
        $answers = [];
        $answer = new Answer('Ad Jungle', $this->ADJungleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Ap Jungle', $this->APJungleQuestion);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Jungle[] = $questionToAdd;
        $this->ADJungleQuestion = $questionToAdd;
    }


//------------------------------------------------------------------------------------------------------------------------------------//

//                                                             AD

//------------------------------------------------------------------------------------------------------------------------------------//

private $ADJungleQuestion;
public function ADJungleQuestion()
{
    $questionString = "Do you prefer Range or Mele Ad Jungler?";
    $answers = [];
    $answer = new Answer('Range Ad Jungle', $this->ADJungleRangeQuestion);
    $answers[] = $answer;
    $answer = new Answer('Mele Ad Jungle', $this->ADJungleMeleQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Range---------------------------------------------------------------------------//

private $ADJungleRangeQuestion;
public function ADJungleRangeQuestion()
{
    $questionString = "Do you prefer hybrid or Range Ad Jungler?";
    $answers = [];
    $answer = new Answer('I Want Range Ad', $this->ADJungleRangeAdQuestion);
    $answers[] = $answer;
    $answer = new Answer('Hybrid mele/range Ad Jungle', $this->getShyvana());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleRangeQuestion = $questionToAdd;
}


//---------------------------------------------------Ad/Range/IWantRange---------------------------------------------------------------------------//

private $ADJungleRangeAdQuestion;
public function ADJungleRangeAdQuestion()
{
    $questionString = "Which ad range jungler do you prefer?";
    $answers = [];
    $answer = new Answer('High damage and mobile jungler, on ultimate it creates an area where everyone becomes immortal', $this->getKindred());
    $answers[] = $answer;
    $answer = new Answer('Large explosive damage, similar to a shotgun', $this->getGraves());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleRangeAdQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele---------------------------------------------------------------------------//

private $ADJungleMeleQuestion;
public function ADJungleMeleQuestion()
{
    $questionString = "Do you prefer hybrid or Mele Ad Jungler?";
    $answers = [];
    $answer = new Answer('I Want Mele Ad', $this->ADJungleMeleAdQuestion);
    $answers[] = $answer;
    $answer = new Answer('Hybrid mele/range Ad Jungle', $this->getShyvana());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele---------------------------------------------------------------------------//

private $ADJungleMeleAdQuestion;
public function ADJungleMeleAdQuestion()
{
    $questionString = "Do you prefer an Assassin or a Bruser/Tank in the jungle?";
    $answers = [];
    $answer = new Answer('Assasins Jungle', $this->ADJungleMeleAd_Assasins_Question);
    $answers[] = $answer;
    $answer = new Answer('Bruiser/Tank Jungle', $this->ADJungleMeleAdBruTankQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/Assasins---------------------------------------------------------------------------//

private $ADJungleMeleAd_Assasins_Question;
public function ADJungleMeleAd_Assasins_Question()
{
    $questionString = "What kind of assassin jungler do you want to be?";
    $answers = [];
    $answer = new Answer('Strong in Teamfight', $this->ADJungleMeleAd_Assasins_Teamfight_Question);
    $answers[] = $answer;
    $answer = new Answer('Strong in a 1vs1 fight', $this->ADJungleMeleAd_Assasins_Teamfight_1v1_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAd_Assasins_Question = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/Assasins/Teamfight---------------------------------------------------------------------------//

private $ADJungleMeleAd_Assasins_Teamfight_Question;
public function ADJungleMeleAd_Assasins_Teamfight_Question()
{
    $questionString = "Choose the assassin jungler that suits you better";
    $answers = [];
    $answer = new Answer('After kill, he can turn into an opponent and use his skills for a short time', $this->getViego());
    $answers[] = $answer;
    $answer = new Answer('Has two forms of assassin and bruser, high damage and agility or high lifesteal and hp', $this->getKayn());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAd_Assasins_Teamfight_Question = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/Assasins/Teamfight/1v1---------------------------------------------------------------------------//

private $ADJungleMeleAd_Assasins_Teamfight_1v1_Question;
public function ADJungleMeleAd_Assasins_Teamfight_1v1_Question()
{
    $questionString = "Do you prefer to deal more skill damage or have quick auto attacks as a jungler";
    $answers = [];
    $answer = new Answer('Fast autoattacks', $this->ADJungleMeleAd_Assasins_Teamfight_1v1_auto_Question);
    $answers[] = $answer;
    $answer = new Answer('DMG from skills', $this->ADJungleMeleAd_Assasins_Teamfight_1v1_skills_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAd_Assasins_Teamfight_1v1_Question = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/Assasins/Teamfight/1v1/auto---------------------------------------------------------------------------//

private $ADJungleMeleAd_Assasins_Teamfight_1v1_auto_Question;
public function ADJungleMeleAd_Assasins_Teamfight_1v1_auto_Question()
{
    $questionString = "Which auto attack jungler do you prefer?";
    $answers = [];
    $answer = new Answer('Can infinitely upgrade his attack speed through kills, hard to catch', $this->getBelveth());
    $answers[] = $answer;
    $answer = new Answer('R-skill gives darkness to the entire enemy map. During this time you can jump to the selected enemy character.', $this->getNocturne());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAd_Assasins_Teamfight_1v1_auto_Question = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/Assasins/Teamfight/1v1/skills---------------------------------------------------------------------------//

private $ADJungleMeleAd_Assasins_Teamfight_1v1_skills_Question;
public function ADJungleMeleAd_Assasins_Teamfight_1v1_skills_Question()
{
    $questionString = "Which jungler with great skills demage do you prefer?";
    $answers = [];
    $answer = new Answer('Big dmg when have isolated enemy, with invisibility and jump', $this->getKhazix());
    $answers[] = $answer;
    $answer = new Answer('The character can repeatedly jump from bushes, and is based on one shot enemy, powerful but often banned', $this->getRengar());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAd_Assasins_Teamfight_1v1_skills_Question = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTankQuestion;
public function ADJungleMeleAdBruTankQuestion()
{
    $questionString = "Do you prefer to play tank or berserker jungler?";
    $answers = [];
    $answer = new Answer('Tank', $this->ADJungleMeleAdBruTank_TankQuestion);
    $answers[] = $answer;
    $answer = new Answer('Berserkers dmg', $this->ADJungleMeleAdBruTank_BerserkerQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTankQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Tank---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_TankQuestion;
public function ADJungleMeleAdBruTank_TankQuestion()
{
    $questionString = "What type of tank jungler do you prefer?";
    $answers = [];
    $answer = new Answer('Very low CDR on all skills', $this->ADJungleMeleAdBruTank_Tank_CDRQuestion);
    $answers[] = $answer;
    $answer = new Answer('Typical tank', $this->ADJungleMeleAdBruTank_Tank_TypicalQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_TankQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Tank/lowCDR---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Tank_CDRQuestion;
public function ADJungleMeleAdBruTank_Tank_CDRQuestion()
{
    $questionString = "What kind of tank jungler with fast skills do you prefer?";
    $answers = [];
    $answer = new Answer('He can grab his opponent and drag him with him, very fast with shields', $this->getSkarner());
    $answers[] = $answer;
    $answer = new Answer('It has speed, dmg, shields and area ultimate, all with short cdr', $this->getUdyr());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Tank_CDRQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Tank/Typical---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Tank_TypicalQuestion;
public function ADJungleMeleAdBruTank_Tank_TypicalQuestion()
{
    $questionString = "What type of typical jungler tank do you prefer?";
    $answers = [];
    $answer = new Answer('The best tank stacking armor vs autoattackers, big speed', $this->getRammus());
    $answers[] = $answer;
    $answer = new Answer('R-skill immobilizes the enemy or kicks him out', $this->ADJungleMeleAdBruTank_Tank_Typical_RQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Tank_TypicalQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Tank/Typical/R---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Tank_Typical_RQuestion;
public function ADJungleMeleAdBruTank_Tank_Typical_RQuestion()
{
    $questionString = "Which jungler tank suits you better?";
    $answers = [];
    $answer = new Answer('R-skill puts the enemy out of play, champs with jump cant pass her', $this->getPoppy());
    $answers[] = $answer;
    $answer = new Answer('on ultimate it stuns the opponent and on skills it slowly freezes him', $this->getSejuani());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Tank_Typical_RQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Berserker---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_BerserkerQuestion;
public function ADJungleMeleAdBruTank_BerserkerQuestion()
{
    $questionString = "what kind of bruser jungler do you prefer?";
    $answers = [];
    $answer = new Answer('They have acceleration from skill', $this->ADJungleMeleAdBruTank_Berserker_accelerationQuestion);
    $answers[] = $answer;
    $answer = new Answer('They can dash through walls', $this->ADJungleMeleAdBruTank_Berserker_dashQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_BerserkerQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Berserker/accekeration---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Berserker_accelerationQuestion;
public function ADJungleMeleAdBruTank_Berserker_accelerationQuestion()
{
    $questionString = "what kind of bruser jungler with acceleration do you prefer?";
    $answers = [];
    $answer = new Answer('Skill with fear', $this->ADJungleMeleAdBruTank_Berserker_acceleration_fearQuestion);
    $answers[] = $answer;
    $answer = new Answer('creates a zone in which he runs very fast and, on ultimate, removes armor from the opponent', $this->getTrundle());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Berserker_accelerationQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Berserker/accekeration---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Berserker_acceleration_fearQuestion;
public function ADJungleMeleAdBruTank_Berserker_acceleration_fearQuestion()
{
    $questionString = "choose the acceleration jungler that suits you better";
    $answers = [];
    $answer = new Answer('A character based on speed, the more you have, the more damage you do', $this->getHecarim());
    $answers[] = $answer;
    $answer = new Answer('when the enemy has less than 50% HP or you use a skill, you run towards him at high speed', $this->getWarwick());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Berserker_acceleration_fearQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Berserker/dash---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Berserker_dashQuestion;
public function ADJungleMeleAdBruTank_Berserker_dashQuestion()
{
    $questionString = "Do you prefer a simple jungler or a more difficult but more interesting one?";
    $answers = [];
    $answer = new Answer('Easy to play with good dmg and durability', $this->ADJungleMeleAdBruTank_Berserker_dash_easyQuestion);
    $answers[] = $answer;
    $answer = new Answer('Mechanically harder champ with good dmg and durability', $this->ADJungleMeleAdBruTank_Berserker_dash_hardQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Berserker_dashQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Berserker/dash/easy---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Berserker_dash_easyQuestion;
public function ADJungleMeleAdBruTank_Berserker_dash_easyQuestion()
{
    $questionString = "Which easy jungler to play do you prefer?";
    $answers = [];
    $answer = new Answer('It has a lot of dashes and shields on the ultimate, it locks on and flies towards the opponent, knocking him up', $this->getVi());
    $answers[] = $answer;
    $answer = new Answer('Every third auto attack raises, he has a lot of life steal and on ultimate characters outside his zone cannot attack him', $this->getXinZhao());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Berserker_dash_easyQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Berserker/dash/Hard---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Berserker_dash_hardQuestion;
public function ADJungleMeleAdBruTank_Berserker_dash_hardQuestion()
{
    $questionString = "What type of hard to play jungler do you prefer";
    $answers = [];
    $answer = new Answer('Very difficult characters but if you learn how to play them you can do amazing things', $this->ADJungleMeleAdBruTank_Berserker_dash_hard_difQuestion);
    $answers[] = $answer;
    $answer = new Answer('A character who creates clones becomes invisible, has a dash and, on ultimate, conquers everyone around him', $this->getWukong());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Berserker_dash_hardQuestion = $questionToAdd;
}

//---------------------------------------------------Ad/Mele/IWantMele/BruTank/Berserker/dash/Hard/dif---------------------------------------------------------------------------//

private $ADJungleMeleAdBruTank_Berserker_dash_hard_difQuestion;
public function ADJungleMeleAdBruTank_Berserker_dash_hard_difQuestion()
{
    $questionString = "Which hard to play junglers suits you better?";
    $answers = [];
    $answer = new Answer('He has different skills underground and above, if you are good you can jump in 5 kill a few and escape, very hard to kill', $this->getRekSai());
    $answers[] = $answer;
    $answer = new Answer('He can jump to practically anything, on ultimate he can kick the opponent in the selected direction, lots of mechanics', $this->getLeeSin());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->ADJungleMeleAdBruTank_Berserker_dash_hard_difQuestion = $questionToAdd;
}





//------------------------------------------------------------------------------------------------------------------------------------//

//                                                             AP

//------------------------------------------------------------------------------------------------------------------------------------//




private $APJungleQuestion;
public function APJungleQuestion()
{
    $questionString = "Do you prefer Range or Mele Ap Jungler?";
    $answers = [];
    $answer = new Answer('Range Ap Jungle', $this->APJungle_RangeQuestion);
    $answers[] = $answer;
    $answer = new Answer('Mele Ap Jungle', $this->APJungle_MeleQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungleQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Range---------------------------------------------------------------------------//

private $APJungle_RangeQuestion;
public function APJungle_RangeQuestion()
{
    $questionString = "Do you prefer hybrid or Range Ap Jungler?";
    $answers = [];
    $answer = new Answer('I want Range ap', $this->APJungle_Range_RangeApQuestion);
    $answers[] = $answer;
    $answer = new Answer('Hybrid mela/range Ap Jungle', $this->APJungle_Range_HybridQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_RangeQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Range/RangeAP---------------------------------------------------------------------------//

private $APJungle_Range_RangeApQuestion;
public function APJungle_Range_RangeApQuestion()
{
    $questionString = "What kind of range ap jungler do you want to be?";
    $answers = [];
    $answer = new Answer('Good for help in teamfight', $this->APJungle_Range_RangeAp_helpQuestion);
    $answers[] = $answer;
    $answer = new Answer('R-skill usefull in teamfight (Big DMG)', $this->APJungle_Range_RangeAp_RQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Range_RangeApQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Range/RangeAP/help---------------------------------------------------------------------------//

private $APJungle_Range_RangeAp_helpQuestion;
public function APJungle_Range_RangeAp_helpQuestion()
{
    $questionString = "Which range ap jungler suits you better?";
    $answers = [];
    $answer = new Answer('Hits from a distance and creates a wall that can divide opponents', $this->getTaliyah());
    $answers[] = $answer;
    $answer = new Answer('Protects allies with a shield, creates a golem and bushes', $this->getIvern());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Range_RangeAp_helpQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Range/RangeAP/R---------------------------------------------------------------------------//

private $APJungle_Range_RangeAp_RQuestion;
public function APJungle_Range_RangeAp_RQuestion()
{
    $questionString = "Which ap range jungler with high damage on ultimate suits you better?";
    $answers = [];
    $answer = new Answer('Sticks with r into the middle of enemies with high damage and fear', $this->getFiddlesticks());
    $answers[] = $answer;
    $answer = new Answer('It deals a lot of damage on ultimate regardless of where the opponent is on the map', $this->getKarthus());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Range_RangeAp_RQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Mele---------------------------------------------------------------------------//

private $APJungle_MeleQuestion;
public function APJungle_MeleQuestion()
{
    $questionString = "Do you prefer hybrid or mele Ap Jungler?";
    $answers = [];
    $answer = new Answer('Hybrid mela/range Ap Jungle', $this->APJungle_Range_HybridQuestion);
    $answers[] = $answer;
    $answer = new Answer('I want Mele ap', $this->APJungle_Mele_MeleApQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_MeleQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Mele/MeleAd---------------------------------------------------------------------------//

private $APJungle_Mele_MeleApQuestion;
public function APJungle_Mele_MeleApQuestion()
{
    $questionString = "do you prefer tank or tactical AP jungler";
    $answers = [];
    $answer = new Answer('Tank AP Jungle', $this->APJungle_Mele_MeleAp_TankQuestion);
    $answers[] = $answer;
    $answer = new Answer('Tactical AP Jungle', $this->APJungle_Mele_MeleAp_TacticalQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Mele_MeleApQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Mele/MeleAd/Tank---------------------------------------------------------------------------//

private $APJungle_Mele_MeleAp_TankQuestion;
public function APJungle_Mele_MeleAp_TankQuestion()
{
    $questionString = "Do you prefer to have a lot of stuns and slows or be a very mobile ap jungler";
    $answers = [];
    $answer = new Answer('Stuning or slowing skills', $this->APJungle_Mele_MeleAp_Tank_stuningQuestion);
    $answers[] = $answer;
    $answer = new Answer('Very mobile with high damage, difficult to kill', $this->getGragas());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Mele_MeleAp_TankQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Mele/MeleAd/Tank_stuning---------------------------------------------------------------------------//

private $APJungle_Mele_MeleAp_Tank_stuningQuestion;
public function APJungle_Mele_MeleAp_Tank_stuningQuestion()
{
    $questionString = "What kind of stun/slowing ap jungler do you prefer to be?";
    $answers = [];
    $answer = new Answer('Very fast, relies on constant ganking', $this->getNunu());
    $answers[] = $answer;
    $answer = new Answer('Is based on stuning', $this->APJungle_Mele_MeleAp_Tank_stuning_basedQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Mele_MeleAp_Tank_stuningQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Mele/MeleAd/Tank/stuning/based---------------------------------------------------------------------------//

private $APJungle_Mele_MeleAp_Tank_stuning_basedQuestion;
public function APJungle_Mele_MeleAp_Tank_stuning_basedQuestion()
{
    $questionString = "Which stun ap jungler suits you better?";
    $answers = [];
    $answer = new Answer('Gets into the middle of enemy with ultimate area stun', $this->getAmumu());
    $answers[] = $answer;
    $answer = new Answer('With a smaller impact range, but with an area of ​​effect that stuns opponents who enter it', $this->getMaokai());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Mele_MeleAp_Tank_stuning_basedQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Mele/MeleAd/Tactical---------------------------------------------------------------------------//

private $APJungle_Mele_MeleAp_TacticalQuestion;
public function APJungle_Mele_MeleAp_TacticalQuestion()
{
    $questionString = "What kind of mele ap big dmg jungler do you prefer to be?";
    $answers = [];
    $answer = new Answer('R-skill for DMG and disturbing the enemy', $this->APJungle_Mele_MeleAp_Tactical_RQuestion);
    $answers[] = $answer;
    $answer = new Answer('Big dmg assasin ap with invisibility', $this->APJungle_Mele_MeleAp_Tactical_AssasinQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Mele_MeleAp_TacticalQuestion = $questionToAdd;
}


//---------------------------------------------------Ap/Mele/MeleAd/Tactical/R---------------------------------------------------------------------------//

private $APJungle_Mele_MeleAp_Tactical_RQuestion;
public function APJungle_Mele_MeleAp_Tactical_RQuestion()
{
    $questionString = "Which mele ap jungler with big dmg suits you better?";
    $answers = [];
    $answer = new Answer('Ap berserker, very good for getting into the middle of a teafight with high damage', $this->getDiana());
    $answers[] = $answer;
    $answer = new Answer('Fast, good for escaping and with ultimate stun', $this->getLillia());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Mele_MeleAp_Tactical_RQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Mele/MeleAd/Tactical/Assasin---------------------------------------------------------------------------//

private $APJungle_Mele_MeleAp_Tactical_AssasinQuestion;
public function APJungle_Mele_MeleAp_Tactical_AssasinQuestion()
{
    $questionString = "Which mele ap assassin jungler with big dmg suits you better?";
    $answers = [];
    $answer = new Answer('From lvl 6, invisible all the time with an assassin with high damage', $this->getEvelynn());
    $answers[] = $answer;
    $answer = new Answer('He becomes invisible, difficult to kill, and can create a clone of himself', $this->getShaco());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Mele_MeleAp_Tactical_AssasinQuestion = $questionToAdd;
}




//---------------------------------------------------Ap/Range/Hybrid---------------------------------------------------------------------------//

private $APJungle_Range_HybridQuestion;
public function APJungle_Range_HybridQuestion()
{
    $questionString = "What hybrid ap jungler do you want to be?";
    $answers = [];
    $answer = new Answer('You turn into a tanky shooting dragon with high damage', $this->getShyvana());
    $answers[] = $answer;
    $answer = new Answer('Two modes of skill as a human and as an animal (range/mele)', $this->APJungle_Range_Hybrid_TwoQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Range_HybridQuestion = $questionToAdd;
}

//---------------------------------------------------Ap/Range/Hybrid/Two---------------------------------------------------------------------------//

private $APJungle_Range_Hybrid_TwoQuestion;
public function APJungle_Range_Hybrid_TwoQuestion()
{
    $questionString = "What form-switching ap hybrid jungler do you prefer to be?";
    $answers = [];
    $answer = new Answer('Very mobile and hard to kill, with stun and escape and high damage', $this->getElise());
    $answers[] = $answer;
    $answer = new Answer('Short cdr dash with big dmg and long range skill with big dmg', $this->getNidalee());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Jungle[] = $questionToAdd;
    $this->APJungle_Range_Hybrid_TwoQuestion = $questionToAdd;
}





    public function getQuestionByQuestionString($questionString)
    {
        $questions = $this->getJungle();
        //dd($questions);
        foreach ($questions as $question) {
            //dd($question->questionString);
            if ($question->questionString == $questionString) {
                return $question;
            }
        }
    }
}