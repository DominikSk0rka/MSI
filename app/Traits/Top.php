<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;
use App\Traits\Champs;

trait Top
{
    use ResultList;
    private $Top = [];
    public function getTop()
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
        $this->createThamKench();
        $this->createSett();
        $this->createRiven();
        $this->createYasuo();
        $this->createNasus();
        $this->createPoppy();
        $this->createTrundle();
        $this->createIlaoi();
        $this->createVoliber();
        $this->createIrelia();
        $this->createRenekton();
        $this->createAkali();
        $this->createSinged();
        $this->createPantheon();
        $this->createCamile();
        $this->createGwen();
        $this->createJayce();
        $this->createBriar();
        $this->createFiora();
        $this->createKennen();
        $this->createKled();
        $this->createKaSante();
        $this->createRumble();

    }
    private function createQuestionList()
    {

    //---------------------hybrid top----------------------------------
        $this->hybridQuestion();
    //---------------------mele top----------------------------------
  
        $this->meleTopBruserLifeStealAutoAutoDashR();
        $this->meleTopBruserLifeStealAutoAutoSkill();
        $this->meleTopBruserLifeStealAutoAuto();
        $this->meleTopBruserLifeStealAutoRSkillFurry();
        $this->meleTopBruserLifeStealAutoRSkillPoke();
        $this->meleTopBruserLifeStealAutoRSkill();
        $this->meleTopBruserLifeStealAuto();


        $this->meleTopBruserLifeStealSkillComboMechjumpsTrue();
        $this->meleTopBruserLifeStealSkillComboMechjumps();
        $this->meleTopBruserLifeStealSkillComboMech();
        $this->meleTopBruserLifeStealSkillComboEasyToLearn();
        $this->meleTopBruserLifeStealSkillCombo();
        $this->meleTopBruserLifeSteal();
    

        $this->meleTopBruserNoLifeStealBlock();
        $this->meleTopBruserNoLifeStealDashALotOf();
        $this->meleTopBruserNoLifeStealDash();

        $this->meleTopBruserNoLifeStealBerserkerTeamfightUltimate();
        $this->meleTopBruserNoLifeStealBerserkerTeamfight();
        $this->meleTopBruserNoLifeStealBerserker();
        $this->meleTopBruserNoLifeSteal();
        $this->meleTopBruser();

        $this->meleTopmeleADTankShieldRMobilityRShenKsante();
        $this->meleTopmeleADTankShieldRMobility();
        $this->meleTopmeleADTankShieldTeamfightWall();
        $this->meleTopmeleADTankShieldTeamfight();
        $this->meleTopmeleADTankShield();
        $this->meleTopmeleADTankHealing();
        $this->meleTopmeleADTank();
        $this->meleTopmeleAD();
    
        $this->meleTopmeleAPTanksOneShot();
        $this->meleTopmeleAPTanks();
        $this->meleTopmeleAPDMG();
        $this->meleTopmeleAP();
        $this->meleTopmele();
        $this->meleTop();




    //-------------------Range top-------------------------------------   
        $this->rangeTopRangeAPAttacker();
        $this-> rangeTopRangeAPSkils();
        $this->rangeTopRangeAP();
        $this->rangeTopRange();
        $this->rangeTop();
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
    private function createThamKench()
    {
        $this->Top[] = $this->getTahmKench();
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
    private function createIlaoi()
    {
        $this->Top[] = $this->getIlaoi();
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
    private function createBriar()
    {
        $this->Top[] = $this->getBriar();
    }
    private function createFiora()
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
    private function createKaSante()
    {
        $this->Top[] = $this->getKaSante();
    }
    private function createRumble()
    {
        $this->Top[] = $this->getRumble();
    }


    private $createEntryTopQuestion;
    public function createEntryTopQuestion()
    {
        $questionString = "Do you want to be a TOP? Range/Mele";


        $answers = [];
        $answer = new Answer('Range Top', $this->rangeTop);
        $answers[] = $answer;
        $answer = new Answer('Mele Top', $this->meleTop);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Top[] = $questionToAdd;
        $this->createEntryTopQuestion = $questionToAdd;
    }






//----------------------------------Range top----------------------------------------
    private $rangeTop;
    public function rangeTop()
    {
        $questionString = "Do you want to be range top or hibrid range mele top?";


        $answers = [];
        $answer = new Answer('I Want Range top', $this->rangeTopRange);
        $answers[] = $answer;
        $answer = new Answer('Hybrid Top Range and Mele', $this->hybridQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Top[] = $questionToAdd;
        $this->rangeTop = $questionToAdd;
    }

//----------------------------------------------------------------------------------

    private $rangeTopRange;
    public function rangeTopRange()
    {
        $questionString = "What kind of range top dmg do you want to deal?";


        $answers = [];
        $answer = new Answer('Ad Range Top', $this->getQuinn());
        $answers[] = $answer;
        $answer = new Answer('Ap Range Top', $this->rangeTopRangeAP);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Top[] = $questionToAdd;
        $this->rangeTopRange = $questionToAdd;
    }   

//----------------------------------------------------------------------------------

   private $rangeTopRangeAP;
   public function rangeTopRangeAP()
   {
       $questionString = "Do you want to use more skills or base on auto attacks champion";


       $answers = [];
       $answer = new Answer('Uses more skills', $this->rangeTopRangeAPSkils);
       $answers[] = $answer;
       $answer = new Answer('Auto attacker', $this->rangeTopRangeAPAttacker);
       $answers[] = $answer;


       $questionToAdd = new MultipathQuestion($answers, $questionString);
       $this->Top[] = $questionToAdd;
       $this->rangeTopRangeAP = $questionToAdd;
   }   
  
//----------------------------------------------------------------------------------

private $rangeTopRangeAPSkils;
public function rangeTopRangeAPSkils()
{
    $questionString = "What kind of range top champ using more skills you want?";


    $answers = [];
    $answer = new Answer('is based on setting enemies on fire and the ultimate mass arson', $this->getRumble());
    $answers[] = $answer;
    $answer = new Answer('based on speed and big ultimate zone dmg', $this->getKennen());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->rangeTopRangeAPSkils = $questionToAdd;
}   

//----------------------------------------------------------------------------------

private $rangeTopRangeAPAttacker;
public function rangeTopRangeAPAttacker()
{
    $questionString = "What kind of range top auttoatacker do you want?";


    $answers = [];
    $answer = new Answer('autoattacker that puts poison on the opponent and blinds him, very annoying', $this->getTeemo());
    $answers[] = $answer;
    $answer = new Answer('A scaling character from lvl, becomes one of the stronger characters in the entire league after lvl 16', $this->getKayle());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->rangeTopRangeAPAttacker = $questionToAdd;
}   
















//------------------------------------Hybrid---------------------------------------

private $hybridQuestion;
public function hybridQuestion()
{
    $questionString = "What kind of range/mele hybrid top do you want to play?";


    $answers = [];
    $answer = new Answer('Can switch weapons between ranged and mele changing skills', $this->getJayce());
    $answers[] = $answer;
    $answer = new Answer('From range it turns into mele with more HP and other skills', $this->getGnar());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->hybridQuestion = $questionToAdd;
}   











//-----------------------------------------------------------mele---------------------------------------------

private $meleTop;
public function meleTop()
{
    $questionString = "What kind of mele top do you want to play?";


    $answers = [];
    $answer = new Answer('Hybrid Top Range and Mele', $this->hybridQuestion);
    $answers[] = $answer;
    $answer = new Answer('I Want Mele top', $this->meleTopmele);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTop = $questionToAdd;
}  

//--------------------------------------------------------------------------------------------------------

private $meleTopmele;
public function meleTopmele()
{
    $questionString = "What kind of dmg mele top do you want to deal?";


    $answers = [];
    $answer = new Answer('Ap Mele Top', $this->meleTopmeleAP);
    $answers[] = $answer;
    $answer = new Answer('Ad Mele Top', $this->meleTopmeleAD);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmele = $questionToAdd;
}  





//----------------------------------------------AP-----------------------------------------------------

private $meleTopmeleAP;
public function meleTopmeleAP()
{
    $questionString = "What kind of mele top type of ap champ do you want to play?";


    $answers = [];
    $answer = new Answer('Ap tanks', $this->meleTopmeleAPTanks);
    $answers[] = $answer;
    $answer = new Answer('Mele Ap top with dmg', $this->meleTopmeleAPDMG);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleAP = $questionToAdd;
}  


//------------------------------------------------------------------------------------------------------

private $meleTopmeleAPDMG;
public function meleTopmeleAPDMG()
{
    $questionString = "What kind of mele ap top with dmg suits you better?";


    $answers = [];
    $answer = new Answer('Deal masive dmg, can one shot everyone, the best champ vs tanks deal % dmg', $this->getGwen());
    $answers[] = $answer;
    $answer = new Answer('You have to be build diffrent to enjoy this champ, You are running away almost all the time and poisoning your opponents', $this->getSinged());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleAPDMG = $questionToAdd;
}  

//------------------------------------------------------------------------------------------------------

private $meleTopmeleAPTanks;
public function meleTopmeleAPTanks()
{
    $questionString = "What kind of mele ap top  tank type of ap champ do you want to play?";


    $answers = [];
    $answer = new Answer('The best tank for ad autoattackers (can go ap for fun)', $this->getMalphite());
    $answers[] = $answer;
    $answer = new Answer('Ap tanks with hight durability and big dmg that can one shot enemy', $this->meleTopmeleAPTanksOneShot);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleAPTanks = $questionToAdd;
}  

//------------------------------------------------------------------------------------------------------

private $meleTopmeleAPTanksOneShot;
public function meleTopmeleAPTanksOneShot()
{
    $questionString = "What kind of mele ap top tank with potential to one shot enemy do you want to play?";


    $answers = [];
    $answer = new Answer('With each use the ultimate becomes bigger and gets additional HP', $this->getChoGath());
    $answers[] = $answer;
    $answer = new Answer('On ultimate he can take the opponent to another dimension and fight him 1v1, huge ap damage', $this->getMordekaiser());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleAPTanksOneShot = $questionToAdd;
}  











//--------------------------------------------AD---------------------------------------------------------

private $meleTopmeleAD;
public function meleTopmeleAD()
{
    $questionString = "What kind of mele top type of ad champ do you want to play?";


    $answers = [];
    $answer = new Answer('Bruiser', $this->meleTopBruser);
    $answers[] = $answer;
    $answer = new Answer('Typical Tank Ad', $this->meleTopmeleADTank);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleAD = $questionToAdd;
}  

//-----------------------------------------------------------------------------------------------------

private $meleTopmeleADTank;
public function meleTopmeleADTank()
{
    $questionString = "You prefer top with a lot of healing or shields?";


    $answers = [];
    $answer = new Answer('Champion with healimg', $this->meleTopmeleADTankHealing);
    $answers[] = $answer;
    $answer = new Answer('Champion with shield', $this->meleTopmeleADTankShield);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleADTank = $questionToAdd;
}  

//-----------------------------------------------------------------------------------------------------

private $meleTopmeleADTankHealing;
public function meleTopmeleADTankHealing()
{
    $questionString = "What kind of mele top with healing and dmg suits you better?";


    $answers = [];
    $answer = new Answer('On r heals for % of his health, very difficult to kill with % dmg', $this->getDrMundo());
    $answers[] = $answer;
    $answer = new Answer('With each kill a minion with q heals and permanently gains additional damage to q', $this->getNasus());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleADTankHealing = $questionToAdd;
}  

//-----------------------------------------------------------------------------------------------------

private $meleTopmeleADTankShield;
public function meleTopmeleADTankShield()
{
    $questionString = "What kind of mele top ultimate suits you better?";


    $answers = [];
    $answer = new Answer('R-skill gives you mobility ', $this->meleTopmeleADTankShieldRMobility);
    $answers[] = $answer;
    $answer = new Answer('R-skill excludes one or more enemy from teamfight in a short time', $this->meleTopmeleADTankShieldTeamfight);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleADTankShield = $questionToAdd;
}  

//-----------------------------------------------------------------------------------------------------

private $meleTopmeleADTankShieldTeamfight;
public function meleTopmeleADTankShieldTeamfight()
{
    $questionString = "What kind of mele top tank is better for you?";


    $answers = [];
    $answer = new Answer('A tank that can use lost health to make shields, can easily catch someone and save an ally from certain death.', $this->getTahmKench());
    $answers[] = $answer;
    $answer = new Answer('Strong near the wall', $this->meleTopmeleADTankShieldTeamfightWall);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleADTankShieldTeamfight = $questionToAdd;
}  

//-----------------------------------------------------------------------------------------------------

private $meleTopmeleADTankShieldTeamfightWall;
public function meleTopmeleADTankShieldTeamfightWall()
{
    $questionString = "What kind of mele top strong near walls is better for you?";


    $answers = [];
    $answer = new Answer('A tank who can buy items on the line after lvl 14 and upgrade allies items', $this->getOrnn());
    $answers[] = $answer;
    $answer = new Answer('Best tank vs jumping characters, can block a jump, character with a shield and very high resistance to physical attacks', $this->getPoppy());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleADTankShieldTeamfightWall = $questionToAdd;
}  


//-----------------------------------------------------------------------------------------------------

private $meleTopmeleADTankShieldRMobility;
public function meleTopmeleADTankShieldRMobility()
{
    $questionString = "What kind of mele top with mobility on r-skill is better for you?";


    $answers = [];
    $answer = new Answer('With a good shield resistance and big chance to protect your ally', $this->meleTopmeleADTankShieldRMobilityRShenKsante);
    $answers[] = $answer;
    $answer = new Answer('different style of play, prefers to constantly push endlessly and die with benefits', $this->getSion());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleADTankShieldRMobility = $questionToAdd;
} 

//-----------------------------------------------------------------------------------------------------

private $meleTopmeleADTankShieldRMobilityRShenKsante;
public function meleTopmeleADTankShieldRMobilityRShenKsante()
{
    $questionString = "What kind of mele top with big chance to protect your ally is better than you?";


    $answers = [];
    $answer = new Answer('Strong tank, impossible to kill, can turn into an assassin, losing HP but gaining other things', $this->getKasante());
    $answers[] = $answer;
    $answer = new Answer('He prefers to split the entire game, in a combat situation he can teleport to an ally, giving him a shield, on r he has a teleport', $this->getShen());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopmeleADTankShieldRMobilityRShenKsante = $questionToAdd;
} 





















//------------------------------------------Bruser----------------------------------------------------

private $meleTopBruser;
public function meleTopBruser()
{
    $questionString = "What kind of mele top bruiser is better than you?";


    $answers = [];
    $answer = new Answer('With life steal', $this->meleTopBruserLifeSteal);
    $answers[] = $answer;
    $answer = new Answer('Without life steal', $this->meleTopBruserNoLifeSteal);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruser = $questionToAdd;
} 


//--------------------------------------------------------------------------------------------------

private $meleTopBruserNoLifeSteal;
public function meleTopBruserNoLifeSteal()
{
    $questionString = "You prefer bruiser with dashes or typical berserker?";


    $answers = [];
    $answer = new Answer('With dash', $this->meleTopBruserNoLifeStealDash);
    $answers[] = $answer;
    $answer = new Answer('Typical berserker', $this->meleTopBruserNoLifeStealBerserker);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserNoLifeSteal = $questionToAdd;
} 

//--------------------------------------------------------------------------------------------------

private $meleTopBruserNoLifeStealBerserker;
public function meleTopBruserNoLifeStealBerserker()
{
    $questionString = "What kind of mele top typical berserker is better than you?";


    $answers = [];
    $answer = new Answer('A character to split, he sends his minions which attack the enemy, a lot of damage', $this->getYorick());
    $answers[] = $answer;
    $answer = new Answer('Prefer to helps team in teamfights', $this->meleTopBruserNoLifeStealBerserkerTeamfight);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserNoLifeStealBerserker = $questionToAdd;
} 

//--------------------------------------------------------------------------------------------------

private $meleTopBruserNoLifeStealBerserkerTeamfight;
public function meleTopBruserNoLifeStealBerserkerTeamfight()
{
    $questionString = "What kind of mele top typical berserker good in teamdights is better than you?";


    $answers = [];
    $answer = new Answer('Prefer to fight 1v5, very difficult to play against in lane, with high lifesteal and damage', $this->getIlaoi());
    $answers[] = $answer;
    $answer = new Answer('With a very strong ultimate that can execute the opponent', $this->meleTopBruserNoLifeStealBerserkerTeamfightUltimate);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserNoLifeStealBerserkerTeamfight = $questionToAdd;
}

//--------------------------------------------------------------------------------------------------

private $meleTopBruserNoLifeStealBerserkerTeamfightUltimate;
public function meleTopBruserNoLifeStealBerserkerTeamfightUltimate()
{
    $questionString = "What kind of mele top berserker with strong ultimate is better than you?";


    $answers = [];
    $answer = new Answer('On ultimate, it pulls in the character and stuns the opponent next to him, very fast autos, good for destroying turets', $this->getUrgot());
    $answers[] = $answer;
    $answer = new Answer('Giga chad, for r the more HP someone takes, the more he demands, the more you hit him, the more damage he gives', $this->getSett());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserNoLifeStealBerserkerTeamfightUltimate = $questionToAdd;
}







//--------------------------------------------Dash------------------------------------------------------

private $meleTopBruserNoLifeStealDash;
public function meleTopBruserNoLifeStealDash()
{
    $questionString = "What kind of mele top berserker with dash suits you better??";


    $answers = [];
    $answer = new Answer('Berserker with a lot of dashes', $this->meleTopBruserNoLifeStealDashALotOf);
    $answers[] = $answer;
    $answer = new Answer('Can block auttoatack with, lot of dmg and sustain', $this->meleTopBruserNoLifeStealBlock);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserNoLifeStealDash = $questionToAdd;
}

//--------------------------------------------------------------------------------------------------

private $meleTopBruserNoLifeStealDashALotOf;
public function meleTopBruserNoLifeStealDashALotOf()
{
    $questionString = "What kind of mele top berserker with a lot of dashes is better for you?";


    $answers = [];
    $answer = new Answer('A character with a double hp bar, a pet and himself, difficult to kill, has high damage', $this->getKled());
    $answers[] = $answer;
    $answer = new Answer('Huge amount of dasha, very difficult character with huge damage', $this->getRiven());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserNoLifeStealDashALotOf = $questionToAdd;
}

//--------------------------------------------------------------------------------------------------

private $meleTopBruserNoLifeStealBlock;
public function meleTopBruserNoLifeStealBlock()
{
    $questionString = "What kind of mele top berserker with ability to block dmg and dashes is better for you?";


    $answers = [];
    $answer = new Answer('A character with global r jumping to the target, with damage blocking stun and dmg', $this->getPantheon());
    $answers[] = $answer;
    $answer = new Answer('An incredibly strong and difficult to kill berserker with the ability to block auto attacks', $this->getJax());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserNoLifeStealBlock = $questionToAdd;
}













//------------------------------------------Lifesteal----------------------------------------------------

//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeSteal;
public function meleTopBruserLifeSteal()
{
    $questionString = "What bruser with life steal suits you better?";


    $answers = [];
    $answer = new Answer('Skill combo style of play', $this->meleTopBruserLifeStealSkillCombo);
    $answers[] = $answer;
    $answer = new Answer('Autoattacks style of play', $this->meleTopBruserLifeStealAuto);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeSteal = $questionToAdd;
} 


//----------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealSkillCombo;
public function meleTopBruserLifeStealSkillCombo()
{
    $questionString = "What bruser with life steal is better for you?";


    $answers = [];
    $answer = new Answer('Easy to play to learn toplane', $this->meleTopBruserLifeStealSkillComboEasyToLearn);
    $answers[] = $answer;
    $answer = new Answer('Mechanically more challenging characters', $this->meleTopBruserLifeStealSkillComboMech);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealSkillCombo = $questionToAdd;
} 

//----------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealSkillComboEasyToLearn;
public function meleTopBruserLifeStealSkillComboEasyToLearn()
{
    $questionString = "What bruser with life steal easy to learn suits you better?";


    $answers = [];
    $answer = new Answer('A very easy character, if someone has less than 40% hp they get execute, fast, with a shield and a lot of health regeneration', $this->getGaren());
    $answers[] = $answer;
    $answer = new Answer('A character that is incredibly difficult to play, has high lifesteal dmg and r that can deal huge damage', $this->getDarius());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealSkillComboEasyToLearn = $questionToAdd;
} 


//----------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealSkillComboMech;
public function meleTopBruserLifeStealSkillComboMech()
{
    $questionString = "What bruser with life steal Mechanically more challanging is better for you?";


    $answers = [];
    $answer = new Answer('Frequent jumps to make it difficult for the enemy to escape', $this->meleTopBruserLifeStealSkillComboMechjumps);
    $answers[] = $answer;
    $answer = new Answer('A very difficult character to master, he gets additional gold for killing minions and has amazing explosive dmg', $this->getGankPlank());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealSkillComboMech = $questionToAdd;
} 

//----------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealSkillComboMechjumps;
public function meleTopBruserLifeStealSkillComboMechjumps()
{
    $questionString = "What bruser with Frequent jumps is better for you?";


    $answers = [];
    $answer = new Answer('With true dmg', $this->meleTopBruserLifeStealSkillComboMechjumpsTrue);
    $answers[] = $answer;
    $answer = new Answer('A character with very high lifesteal, incredibly mobile and difficult to play against', $this->getAtrox());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealSkillComboMechjumps = $questionToAdd;
} 

//----------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealSkillComboMechjumpsTrue;
public function meleTopBruserLifeStealSkillComboMechjumpsTrue()
{
    $questionString = "What bruser with Frequent jumps and true dmg is better for you?";


    $answers = [];
    $answer = new Answer('A character with a dash every few seconds with high lifesteal difficulty and the ability to block everything on one skill', $this->getFiora());
    $answers[] = $answer;
    $answer = new Answer('A character with great true damage can lock the opponent in a cage', $this->getCamile());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealSkillComboMechjumpsTrue = $questionToAdd;
} 
















//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealAuto;
public function meleTopBruserLifeStealAuto()
{
    $questionString = "What bruser with life steal based on autoattacks suits you better?";


    $answers = [];
    $answer = new Answer('R-skill strengthens the character', $this->meleTopBruserLifeStealAutoRSkill);
    $answers[] = $answer;
    $answer = new Answer('Typical stun/slow + autoattacs champion', $this->meleTopBruserLifeStealAutoAuto);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealAuto = $questionToAdd;
} 

//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealAutoRSkill;
public function meleTopBruserLifeStealAutoRSkill()
{
    $questionString = "You prefer bruser with skills or character depending on furry level?";


    $answers = [];
    $answer = new Answer('Skills with which you can poke your opponent and provide a short-term boost after hitting an enemy', $this->meleTopBruserLifeStealAutoRSkillPoke);
    $answers[] = $answer;
    $answer = new Answer('Character damage depending on fury level', $this->meleTopBruserLifeStealAutoRSkillFurry);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealAutoRSkill = $questionToAdd;
} 

//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealAutoRSkillPoke;
public function meleTopBruserLifeStealAutoRSkillPoke()
{
    $questionString = "What bruser that can poke enemy and have short boost is better for you?";


    $answers = [];
    $answer = new Answer('On ultimate it can prevent the tower from firing for a few seconds, while dealing a lot of damage, it gives you extra HP', $this->getVoliber());
    $answers[] = $answer;
    $answer = new Answer('On ultimate he becomes invulnerable to all strings, a character with great lifesteal', $this->getOlaf());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealAutoRSkillPoke = $questionToAdd;
} 

//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealAutoRSkillFurry;
public function meleTopBruserLifeStealAutoRSkillFurry()
{
    $questionString = "What bruser with fury is better for you?";


    $answers = [];
    $answer = new Answer('On ult, his HP increases and on charged fury he gets large benefits to skills', $this->getRenekton());
    $answers[] = $answer;
    $answer = new Answer('On ultimate he becomes immortal for some time, and when he has charged fury he gets an additional chance of crit dmg', $this->getTryndamere());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealAutoRSkillFurry = $questionToAdd;
} 






//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealAutoAuto;
public function meleTopBruserLifeStealAutoAuto()
{
    $questionString = "What bruser based on auttoattacks with slow ans stuns suits you better?";


    $answers = [];
    $answer = new Answer('Skill combo to make it easier to catch up with the enemy', $this->meleTopBruserLifeStealAutoAutoSkill);
    $answers[] = $answer;
    $answer = new Answer('Long dash R-skill', $this->meleTopBruserLifeStealAutoAutoDashR);
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealAutoAuto = $questionToAdd;
} 

//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealAutoAutoSkill;
public function meleTopBruserLifeStealAutoAutoSkill()
{
    $questionString = "What bruser based on skill combo to make it easier to catch enemy suits you better?";


    $answers = [];
    $answer = new Answer('It has a structure that can prevent the opponent from moving, a very high speed of the character on w and r that drains armor', $this->getTrundle());
    $answers[] = $answer;
    $answer = new Answer('Can jump to minions and heal from it, huge damage and great character mobility', $this->getIrelia());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealAutoAutoSkill = $questionToAdd;
} 

//-------------------------------------------------------------------------------------------------------

private $meleTopBruserLifeStealAutoAutoDashR;
public function meleTopBruserLifeStealAutoAutoDashR()
{
    $questionString = "What bruser based on auttoattacks long dash R-skill suits you better?";


    $answers = [];
    $answer = new Answer('Assassin with global r that can pull you towards the opponent, amazing leafsteal and resistance', $this->getBriar());
    $answers[] = $answer;
    $answer = new Answer('The less HP you have, the more you heal from auto attacks', $this->getWarwick());
    $answers[] = $answer;


    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Top[] = $questionToAdd;
    $this->meleTopBruserLifeStealAutoAutoDashR = $questionToAdd;
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