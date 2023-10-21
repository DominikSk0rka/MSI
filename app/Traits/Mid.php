<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;

trait Mid
{
    use ResultList;
    private $Mid = [];
    public function getMid()
    {

        $this->createResultList();
        $this->createQuestionList();

        return $this->Mid;

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
        $this->createVictor();
        $this->createLissandra();
        $this->createYasuo();
        $this->createVladimir();
        $this->createAnnie();
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
        $this->createTristana();

    }
    private function createQuestionList()
    {

//------------------------------Range------------------------------------------------------------------    
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roam_quicMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roamMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_stayMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_difMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_items_stunMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_itemsMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshotMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farmMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_stunMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_Range_long_pokeMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_Range_longMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scaling_RangeMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_scalingMidQuestion();
        $this->createRangeMidMid_AP_No_Dashes_Stack_kills_up_otherQuestion();
        $this->createRangeMidMid_AP_No_Dashes_Stack_kills_upQuestion();
        $this->createRangeMidMid_AP_No_Dashes_Stack_killsQuestion();
        $this->createRangeMidMid_AP_No_Dashes_Stack_itemsQuestion();
        $this->createRangeMidMid_AP_No_Dashes_StackQuestion();
        $this->createRangeMidMid_AP_No_DashesQuestion();
        $this->createRangeMidMid_AP_Dashes_mobilQuestion();
        $this->createRangeMidMid_AP_DashesQuestion();
        $this->createRangeMidMid_APQuestion();
        $this->createRangeMidMid_AD_ScaleQuestion();
        $this->createRangeMidMid_ADQuestion();
        $this->createRangeMidMidQuestion();
        $this->createRangeMidQuestion();
//------------------------------mele------------------------------------------------------------------    
        $this->createMeleAD_MidMid_tough_knockQuestion();
        $this->createMeleAD_MidMid_tough_stunQuestion();
        $this->createMeleAD_MidMid_toughQuestion();
        $this->createMeleAD_MidMid_TypicalAssasin_mobility_manaQuestion();
        $this->createMeleAD_MidMid_TypicalAssasin_mobilityQuestion();
        $this->createMeleAD_MidMid_TypicalAssasinQuestion();
        $this->createMeleAD_MidMidQuestion();
        $this->createMeleMidAP_Typical_Assasin_Hard_MidQuestion();
        $this->createMeleMidAP_Typical_Assasin_fast_MidQuestion();
        $this->createMeleMidAP_Typical_Assasin_MidQuestion();
        $this->createMeleMidAP_Assasin_Mid_shieldQuestion();
        $this->createMeleMidAP_Assasin_MidQuestion();
        $this->createMeleMidAPMidQuestion();
        $this->createMeleMidMidQuestion();
        $this->createMeleMidQuestion();
        $this->createEntryMidQuestion();
    } 
//---------------------------------------------MID------METODS---------------------------------------------------------------
    private function createTristana()
    {
        $this->Mid[] = $this->getTristana();
    }
    private function createGalio()
    {
        $this->Mid[] = $this->getGalio();
    }
    private function createKatarina()
    {
        $this->Mid[] = $this->getKatarina();
    }
    private function createAnivia()
    {
        $this->Mid[] = $this->getAnivia();
    }
    private function createEkko()
    {
        $this->Mid[] = $this->getEkko();
    }
    private function createMalzahar()
    {
        $this->Mid[] = $this->getMalzahar();
    }
    private function createYone()
    {
        $this->Mid[] = $this->getYone();
    }
    private function createLux()
    {
        $this->Mid[] = $this->getLux();
    }
    private function createZed()
    {
        $this->Mid[] = $this->getZed();
    }
    private function createSylas()
    {
        $this->Mid[] = $this->getSylas();
    }
    private function createAhri()
    {
        $this->Mid[] = $this->getAhri();
    }
    private function createZiggs()
    {
        $this->Mid[] = $this->getZiggs();
    }
    private function createXerath()
    {
        $this->Mid[] = $this->getXerath();
    }
    private function createVeigar()
    {
        $this->Mid[] = $this->getVeigar();
    }
    private function createKassadin()
    {
        $this->Mid[] = $this->getKassadin();
    }
    private function createSyndra()
    {
        $this->Mid[] = $this->getSyndra();
    }
    private function createVictor()
    {
        $this->Mid[] = $this->getVictor();
    }
    private function createLissandra()
    {
        $this->Mid[] = $this->getLissandra();
    }
    private function createYasuo()
    {
        $this->Mid[] = $this->getYasuo();
    }
    private function createVladimir()
    {
        $this->Mid[] = $this->getVladimir();
    }
    private function createAnnie()
    {
        $this->Mid[] = $this->getAnnie();
    }
    private function createRyze()
    {
        $this->Mid[] = $this->getRyze();
    }
    private function createTwistedFate()
    {
        $this->Mid[] = $this->getTwistedFate();
    }
    private function createIrelia()
    {
        $this->Mid[] = $this->getIrelia();
    }
    private function createOriana()
    {
        $this->Mid[] = $this->getOriana();
    }
    private function createAkali()
    {
        $this->Mid[] = $this->getAkali();
    }
    private function createCorki()
    {
        $this->Mid[] = $this->getCorki();
    }
    private function createTaliyah()
    {
        $this->Mid[] = $this->getTaliyah();
    }
    private function createAkshan()
    {
        $this->Mid[] = $this->getAkshan();
    }
    private function createLeBlanc()
    {
        $this->Mid[] = $this->getLeBlanc();
    }
    private function createNeeko()
    {
        $this->Mid[] = $this->getNeeko();
    }
    private function createPantheon()
    {
        $this->Mid[] = $this->getPantheon();
    }
    private function createAzir()
    {
        $this->Mid[] = $this->getAzir();
    }
    private function createCassiopeia()
    {
        $this->Mid[] = $this->getCassiopeia();
    }
    private function createZoe()
    {
        $this->Mid[] = $this->getZoe();
    }
    private function createAurelionSol()
    {
        $this->Mid[] = $this->getAurelionSol();
    }
    private function createJayce()
    {
        $this->Mid[] = $this->getJayce();
    }
    private function createFizz()
    {
        $this->Mid[] = $this->getFizz();
    }
    private function createVex()
    {
        $this->Mid[] = $this->getVex();
    }
    private function createNaafiri()
    {
        $this->Mid[] = $this->getNaafiri();
    }
    private function createQiyana()
    {
        $this->Mid[] = $this->getQiyana();
    }
    private function createTalon()
    {
        $this->Mid[] = $this->getTalon();
    }
  
//-------------------------------------Start----------------------------------------------------------------
    private $entryMidQuestion;
    public function createEntryMidQuestion()
    {
        $questionString = "What type of midlaner you want to play?";
        $answers = [];
        $answer = new Answer('Range', $this->createRangeMidQuestion);
        $answers[] = $answer;
        $answer = new Answer('Mele', $this->createMeleMidQuestion);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Mid[] = $questionToAdd;
        $this->createMeleMidQuestion = $questionToAdd;
    }

//------------------------------------------------------------------------------------------------------------------------------------//

//                                                             Mele

//------------------------------------------------------------------------------------------------------------------------------------//

    private $createMeleMidQuestion;
    public function createMeleMidQuestion()
    {
        $questionString = "What type of mele mid do you want to play?";
        $answers = [];
        $answer = new Answer('Hybrid Mid', $this->getJayce());
        $answers[] = $answer;
        $answer = new Answer('Mele Mid', $this->createMeleMidMidQuestion);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Mid[] = $questionToAdd;
        $this->createMeleMidQuestion = $questionToAdd;
    }
//------------------------------------------------Mele/Hibrid/Mid-------------------------------------------------------- 

private $createMeleMidMidQuestion;
public function createMeleMidMidQuestion()
{
    $questionString = "Do you prefer Ap or Ad mele mid to play?";
    $answers = [];
    $answer = new Answer('Ap Mele Mid', $this->createMeleMidAPMidQuestion);
    $answers[] = $answer;
    $answer = new Answer('Ad Mele Mid', $this->createMeleAD_MidMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleMidMidQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/Mid/apMid-------------------------------------------------------- 

private $createMeleMidAPMidQuestion;
public function createMeleMidAPMidQuestion()
{
    $questionString = "What type of ap mid do you prefer to play?";
    $answers = [];
    $answer = new Answer('Tanky with dmg', $this->getGalio());
    $answers[] = $answer;
    $answer = new Answer('Ap Assasin?', $this->createMeleMidAP_Assasin_MidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleMidAPMidQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/Mid/apMid/APAssasin-------------------------------------------------------- 

private $createMeleMidAP_Assasin_MidQuestion;
public function createMeleMidAP_Assasin_MidQuestion()
{
    $questionString = "Which mele mid assassin do you prefer to play?";
    $answers = [];
    $answer = new Answer('With shield', $this->createMeleMidAP_Assasin_Mid_shieldQuestion);
    $answers[] = $answer;
    $answer = new Answer('Typical ap assasin', $this->createMeleMidAP_Typical_Assasin_MidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleMidAP_Assasin_MidQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/Mid/apMid/APAssasin/shield-------------------------------------------------------- 

private $createMeleMidAP_Assasin_Mid_shieldQuestion;
public function createMeleMidAP_Assasin_Mid_shieldQuestion()
{
    $questionString = "Choose ap mele mid assassin that suits you better";
    $answers = [];
    $answer = new Answer('Champ with a lot of dashes, big dmg but need to scale, the best scaling midlaner', $this->getKassadin());
    $answers[] = $answer;
    $answer = new Answer('Champ with big dmg and the ability to turn back time', $this->getEkko());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleMidAP_Assasin_Mid_shieldQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/Mid/apMid/APAssasin/TypicalAssasin-------------------------------------------------------- 

private $createMeleMidAP_Typical_Assasin_MidQuestion;
public function createMeleMidAP_Typical_Assasin_MidQuestion()
{
    $questionString = "Which ap assain do you prefer in mid?";
    $answers = [];
    $answer = new Answer('prefers to kill quickly and run', $this->createMeleMidAP_Typical_Assasin_fast_MidQuestion);
    $answers[] = $answer;
    $answer = new Answer('difficult to defeat, high durability', $this->createMeleMidAP_Typical_Assasin_Hard_MidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleMidAP_Typical_Assasin_MidQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/Mid/apMid/APAssasin/TypicalAssasin/killquickly-------------------------------------------------------- 

private $createMeleMidAP_Typical_Assasin_fast_MidQuestion;
public function createMeleMidAP_Typical_Assasin_fast_MidQuestion()
{
    $questionString = "Choose the deadly assassin that suits you better";
    $answers = [];
    $answer = new Answer('typical assassin, very agile and difficult, skills reset after killing', $this->getKatarina());
    $answers[] = $answer;
    $answer = new Answer('a typical assassin, a ninja with incredible agility and the ability to hide', $this->getAkali());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleMidAP_Typical_Assasin_fast_MidQuestion = $questionToAdd;
}

//------------------------------------------------Mele/Hibrid/Mid/apMid/APAssasin/TypicalAssasin/HardToKill------------------------------------------------------- 

private $createMeleMidAP_Typical_Assasin_Hard_MidQuestion;
public function createMeleMidAP_Typical_Assasin_Hard_MidQuestion()
{
    $questionString = "Choose an Assassin with high durability that suits you better";
    $answers = [];
    $answer = new Answer('an assassin with the ability to heal himself and steal his opponents ultimate skill', $this->getSylas());
    $answers[] = $answer;
    $answer = new Answer('killer, hard to catch with the ability to bypass every skill in this game', $this->getFizz());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleMidAP_Typical_Assasin_Hard_MidQuestion = $questionToAdd;
}


//------------------------------------------------Mele/Hibrid/ADMid-------------------------------------------------------- 

private $createMeleAD_MidMidQuestion;
public function createMeleAD_MidMidQuestion()
{
    $questionString = "Choose the ad assassin that suits you better";
    $answers = [];
    $answer = new Answer('Very tough, with a lot of damage', $this->createMeleAD_MidMid_toughQuestion);
    $answers[] = $answer;
    $answer = new Answer('Typical assasin', $this->createMeleAD_MidMid_TypicalAssasinQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleAD_MidMidQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/ADMid/TypicalAssasin-------------------------------------------------------- 

private $createMeleAD_MidMid_TypicalAssasinQuestion;
public function createMeleAD_MidMid_TypicalAssasinQuestion()
{
    $questionString = "Choose the playstyle that suits you best on ad assassin";
    $answers = [];
    $answer = new Answer('With a lot of dashes and mobility', $this->createMeleAD_MidMid_TypicalAssasin_mobilityQuestion);
    $answers[] = $answer;
    $answer = new Answer('Champ based on one shot go in', $this->getNaafiri());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleAD_MidMid_TypicalAssasinQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/ADMid/TypicalAssasin/mobility-------------------------------------------------------- 

private $createMeleAD_MidMid_TypicalAssasin_mobilityQuestion;
public function createMeleAD_MidMid_TypicalAssasin_mobilityQuestion()
{
    $questionString = "Would you rather have mana or energy on an Ad assassin?";
    $answers = [];
    $answer = new Answer('With mana', $this->createMeleAD_MidMid_TypicalAssasin_mobility_manaQuestion);
    $answers[] = $answer;
    $answer = new Answer('With energy, can back to his shadow and execute enemy with dmg', $this->getZed());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleAD_MidMid_TypicalAssasin_mobilityQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/ADMid/TypicalAssasin/mobility/mana-------------------------------------------------------- 

private $createMeleAD_MidMid_TypicalAssasin_mobility_manaQuestion;
public function createMeleAD_MidMid_TypicalAssasin_mobility_manaQuestion()
{
    $questionString = "Choose the skill set that suits you better";
    $answers = [];
    $answer = new Answer('Can jump over walls and has huge bleeding damage', $this->getTalon());
    $answers[] = $answer;
    $answer = new Answer('incredible mobility, lots of dashes and huge damage', $this->getQiyana());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleAD_MidMid_TypicalAssasin_mobility_manaQuestion = $questionToAdd;
}

//------------------------------------------------Mele/Hibrid/ADMid/Tough-------------------------------------------------------- 

private $createMeleAD_MidMid_toughQuestion;
public function createMeleAD_MidMid_toughQuestion()
{
    $questionString = "Do you prefer knocking up or stuning in the mid?";
    $answers = [];
    $answer = new Answer('With a stun', $this->createMeleAD_MidMid_tough_stunQuestion);
    $answers[] = $answer;
    $answer = new Answer('With a knockup', $this->createMeleAD_MidMid_tough_knockQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleAD_MidMid_toughQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/ADMid/Tough/stun-------------------------------------------------------- 

private $createMeleAD_MidMid_tough_stunQuestion;
public function createMeleAD_MidMid_tough_stunQuestion()
{
    $questionString = "What type of mid character with stun do you prefer?";
    $answers = [];
    $answer = new Answer('can jump to minions, with high lifesteal and high damage negation', $this->getIrelia());
    $answers[] = $answer;
    $answer = new Answer('he has a shield that blocks any damage, and an ultimate that allows him to jump around the map', $this->getPantheon());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleAD_MidMid_tough_stunQuestion = $questionToAdd;
}
//------------------------------------------------Mele/Hibrid/ADMid/Tough/knockup-------------------------------------------------------- 

private $createMeleAD_MidMid_tough_knockQuestion;
public function createMeleAD_MidMid_tough_knockQuestion()
{
    $questionString = "Which brother do you prefer?";
    $answers = [];
    $answer = new Answer('he can jump on minions and create a tornado with which he conquers the opponent', $this->getYasuo());
    $answers[] = $answer;
    $answer = new Answer('it can knock opponents up and has shields, dashes, making it very difficult to kill', $this->getYone());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createMeleAD_MidMid_tough_knockQuestion = $questionToAdd;
}








//------------------------------------------------------------------------------------------------------------------------------------//

//                                                             Range

//------------------------------------------------------------------------------------------------------------------------------------//

    private $createRangeMidQuestion;
    public function createRangeMidQuestion()
    {
        $questionString = "What type of range mid do you want to play?";
        $answers = [];
        $answer = new Answer('Hybrid Mid', $this->getJayce());
        $answers[] = $answer;
        $answer = new Answer('Range Mid', $this->createRangeMidMidQuestion);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Mid[] = $questionToAdd;
        $this->createRangeMidQuestion = $questionToAdd;
    }

//--------------------------------------------------------------RangeMid------------------------------------------------------------------//

private $createRangeMidMidQuestion;
public function createRangeMidMidQuestion()
{
    $questionString = "Do you prefer Ap or Ad range mid to play?";
    $answers = [];
    $answer = new Answer('AD range mid', $this->createRangeMidMid_ADQuestion);
    $answers[] = $answer;
    $answer = new Answer('AP range mid', $this->createRangeMidMid_APQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMidQuestion = $questionToAdd;
}

//--------------------------------------------------------------RangeMid/AD------------------------------------------------------------------//

private $createRangeMidMid_ADQuestion;
public function createRangeMidMid_ADQuestion()
{
    $questionString = "You prefer to push or to scale?";
    $answers = [];
    $answer = new Answer('Likes to push mid, realy hard to play vs', $this->getTristana());
    $answers[] = $answer;
    $answer = new Answer('Likes to scale', $this->createRangeMidMid_AD_ScaleQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_ADQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AD/Scale------------------------------------------------------------------//

private $createRangeMidMid_AD_ScaleQuestion;
public function createRangeMidMid_AD_ScaleQuestion()
{
    $questionString = "Which mid range character do you prefer?";
    $answers = [];
    $answer = new Answer('champ with big explosive dmg', $this->getCorki());
    $answers[] = $answer;
    $answer = new Answer('Hard to play, but has the ability to spawn allies and become invisible', $this->getAkshan());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AD_ScaleQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP------------------------------------------------------------------//

private $createRangeMidMid_APQuestion;
public function createRangeMidMid_APQuestion()
{
    $questionString = "Do you prefer to have dashes or other advantages in mid?";
    $answers = [];
    $answer = new Answer('No dashes but it has other advantages', $this->createRangeMidMid_AP_No_DashesQuestion);
    $answers[] = $answer;
    $answer = new Answer('With Dashes hight mobility', $this->createRangeMidMid_AP_DashesQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_APQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/Dashes------------------------------------------------------------------//

private $createRangeMidMid_AP_DashesQuestion;
public function createRangeMidMid_AP_DashesQuestion()
{
    $questionString = "Which mid dash character do you prefer?";
    $answers = [];
    $answer = new Answer('Based on mobility and a lot of jumps', $this->createRangeMidMid_AP_Dashes_mobilQuestion);
    $answers[] = $answer;
    $answer = new Answer('Champ that have one dash but its rly hard to kill him, he can also place a tower and create a wall', $this->getAzir());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_DashesQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/Dashes/mobility------------------------------------------------------------------//

private $createRangeMidMid_AP_Dashes_mobilQuestion;
public function createRangeMidMid_AP_Dashes_mobilQuestion()
{
    $questionString = "How does a character with dashes in mid suit you better?";
    $answers = [];
    $answer = new Answer('has 3 jumps, with each kill during the ultimate the jump are renewed, high mobility and charm ', $this->getAhri());
    $answers[] = $answer;
    $answer = new Answer('trickster, can jump and go back to the places she jumped from, and when her health is low, she creates a clone', $this->getLeBlanc());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_Dashes_mobilQuestion = $questionToAdd;
}

//--------------------------------------------------------------RangeMid/AP/NoDashes------------------------------------------------------------------//

private $createRangeMidMid_AP_No_DashesQuestion;
public function createRangeMidMid_AP_No_DashesQuestion()
{
    $questionString = "Do you prefer to stack or scale in mid?";
    $answers = [];
    $answer = new Answer('Stacking ap midlaners', $this->createRangeMidMid_AP_No_Dashes_StackQuestion);
    $answers[] = $answer;
    $answer = new Answer('Scalling midlaners', $this->createRangeMidMid_AP_No_Dashes_scalingMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_DashesQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/StackingAp------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_StackQuestion;
public function createRangeMidMid_AP_No_Dashes_StackQuestion()
{
    $questionString = "Do you prefer to stack kills or items for profit in mid?";
    $answers = [];
    $answer = new Answer('Stacking Minions/kills for profit', $this->createRangeMidMid_AP_No_Dashes_Stack_killsQuestion);
    $answers[] = $answer;
    $answer = new Answer('Stacking items for profit', $this->createRangeMidMid_AP_No_Dashes_Stack_itemsQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_StackQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/StackingAp/items------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_Stack_itemsQuestion;
public function createRangeMidMid_AP_No_Dashes_Stack_itemsQuestion()
{
    $questionString = "Choose a character in mid who stakes items that suits you better";
    $answers = [];
    $answer = new Answer('Spells deal more damage the more mana you have, maximum mana increases ap. hard to catch and kill', $this->getRyze());
    $answers[] = $answer;
    $answer = new Answer('every 30hp gives him 1 AP, every 1 AP gives him 1.6 health After full build, masive dmg', $this->getVladimir());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_Stack_itemsQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/StackingAp/kills------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_Stack_killsQuestion;
public function createRangeMidMid_AP_No_Dashes_Stack_killsQuestion()
{
    $questionString = "Choose a staking mid character that suits you better";
    $answers = [];
    $answer = new Answer('Every skill hit player or q kill minion. +1 AP to main stats', $this->getVeigar());
    $answers[] = $answer;
    $answer = new Answer('Upgrading skills champs with big profit', $this->createRangeMidMid_AP_No_Dashes_Stack_kills_upQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_Stack_killsQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/StackingAp/kills/up------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_Stack_kills_upQuestion;
public function createRangeMidMid_AP_No_Dashes_Stack_kills_upQuestion()
{
    $questionString = "Would you rather permanently upgrade skill damage through kills or upgrade your skills?";
    $answers = [];
    $answer = new Answer('Damaging skills spread enemies into stacks of Stardust, which permanently upgrades each of their skills with dmg.', $this->getAurelionSol());
    $answers[] = $answer;
    $answer = new Answer('Other champs based on Upgrading skills with big profit', $this->createRangeMidMid_AP_No_Dashes_Stack_kills_up_otherQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_Stack_kills_upQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/StackingAp/kills/up/other------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_Stack_kills_up_otherQuestion;
public function createRangeMidMid_AP_No_Dashes_Stack_kills_up_otherQuestion()
{
    $questionString = "Which staking champion do you prefer?";
    $answers = [];
    $answer = new Answer('Execution, pushing opponents away and massive damage', $this->getSyndra());
    $answers[] = $answer;
    $answer = new Answer('laser and electricity which improves over time, very fast and difficult to catch', $this->getVictor());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_Stack_kills_up_otherQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scalingMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scalingMidQuestion()
{
    $questionString = "Would you rather have a very large range or very good stuns in mid?";
    $answers = [];
    $answer = new Answer('Middlaners with big ability range', $this->createRangeMidMid_AP_No_Dashes_scaling_RangeMidQuestion);
    $answers[] = $answer;
    $answer = new Answer('Middlaners with stuns and diffrent style of play', $this->createRangeMidMid_AP_No_Dashes_scaling_stunMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scalingMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/abilityRange------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_RangeMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_RangeMidQuestion()
{
    $questionString = "Which long range midlaner do you prefer?";
    $answers = [];
    $answer = new Answer('Long range perfect for poke and distance speech', $this->createRangeMidMid_AP_No_Dashes_scaling_Range_long_pokeMidQuestion);
    $answers[] = $answer;
    $answer = new Answer('Long range abilities based on stun and one shot from distans', $this->createRangeMidMid_AP_No_Dashes_scaling_Range_longMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_RangeMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/abilityRange/long------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_Range_longMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_Range_longMidQuestion()
{
    $questionString = "Choose which long range midlaner suits you better";
    $answers = [];
    $answer = new Answer('Champ with bearly no cdr on ultimate with stun shield and masive dmg', $this->getLux());
    $answers[] = $answer;
    $answer = new Answer('Champ based on stun enemy then long range q that one shots enemy', $this->getZoe());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_Range_longMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/abilityRange/long/poke------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_Range_long_pokeMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_Range_long_pokeMidQuestion()
{
    $questionString = "Choose which long range poke midlaner suits you better";
    $answers = [];
    $answer = new Answer('Deals a lot of explosive damage from a distance, can execute tower below 30%', $this->getZiggs());
    $answers[] = $answer;
    $answer = new Answer('Deals a lot of damage from a distance champ for scripters', $this->getXerath());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_Range_long_pokeMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stunMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stunMidQuestion()
{
    $questionString = "Do you prefer to rely on stun or do you prefer a completely different style of playing mid from other champs?";
    $answers = [];
    $answer = new Answer('Based on stun enemy', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farmMidQuestion);
    $answers[] = $answer;
    $answer = new Answer('have a different style of playing', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_difMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stunMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/farm------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_farmMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_farmMidQuestion()
{
    $questionString = "You prefer to rely on long stuns and feed your teammates or have a short stun but be able to kill on it.";
    $answers = [];
    $answer = new Answer('Prefer to farm items or feed your teammates with stopping enemy', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_itemsMidQuestion);
    $answers[] = $answer;
    $answer = new Answer('Based on short stun and one shot', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshotMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farmMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/farm/oneshot------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshotMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshotMidQuestion()
{
    $questionString = "Choose a midlaner who is able to kill your opponent in a short time";
    $answers = [];
    $answer = new Answer('every 4th use of a skill can stop the opponent, combined with high damage can one shot', $this->getAnnie());
    $answers[] = $answer;
    $answer = new Answer('can change view into your ally, stun flying through minions, and the ultimate that flip and stun over a large area with ', $this->getNeeko());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshotMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/farm/items------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_itemsMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_itemsMidQuestion()
{
    $questionString = "What style of play do you prefer as a stun midlaner?";
    $answers = [];
    $answer = new Answer('Main task is stun', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_items_stunMidQuestion);
    $answers[] = $answer;
    $answer = new Answer('Can use stun every few seconds, outpush wave and teleport far distans for help', $this->getTwistedFate());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_itemsMidQuestion = $questionToAdd;
}
//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/farm/items-/mainstun-----------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_items_stunMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_items_stunMidQuestion()
{
    $questionString = "Choose an opponent-stopping character that suits you better.";
    $answers = [];
    $answer = new Answer('Incredibly annoying ultimate for opponents, it keeps them in one place for a long time, ability to cancel skills', $this->getMalzahar());
    $answers[] = $answer;
    $answer = new Answer('High mobility, ability to reach someone and stop them for a long time, perfect for feed your teammate', $this->getLissandra());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_farm_oneshot_items_stunMidQuestion = $questionToAdd;
}

//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/Difrent------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_difMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_difMidQuestion()
{
    $questionString = "Do you prefer to stay on the line as long as possible and grow stronger or get off the line often and support the team?";
    $answers = [];
    $answer = new Answer('Prefer to stay on lane and outpush waves, buy items then be unkillable', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_stayMidQuestion);
    $answers[] = $answer;
    $answer = new Answer('They prefer to take part in the fights from the beginning', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roamMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_difMidQuestion = $questionToAdd;
}

//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/Difrent/stay------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_dif_stayMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_dif_stayMidQuestion()
{
    $questionString = "Choose the farming midlaner you like more";
    $answers = [];
    $answer = new Answer('With ultimate every few seconds, perfectly farms area, stuns, slows down and puts a wall behind the enemys back', $this->getAnivia());
    $answers[] = $answer;
    $answer = new Answer('A very difficult character, you will spam with poisonous skills, on ultimate everyone who looks in your direction will be stunned', $this->getCassiopeia());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_stayMidQuestion = $questionToAdd;
}

//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/Difrent/roam------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roamMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roamMidQuestion()
{
    $questionString = "Choose what style of play you prefer as a roaming midlaner";
    $answers = [];
    $answer = new Answer('relies on allies, speeds them up and protects them, can pass his orb to someone and explode it when an ally gets on top of an enemy', $this->getOriana());
    $answers[] = $answer;
    $answer = new Answer('long-range ultimate that allows you to quickly get into combat', $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roam_quicMidQuestion);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roamMidQuestion = $questionToAdd;
}

//--------------------------------------------------------------RangeMid/AP/NoDashes/scalingmid/BasedStun/Difrent/roam/quic------------------------------------------------------------------//

private $createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roam_quicMidQuestion;
public function createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roam_quicMidQuestion()
{
    $questionString = "What kind of midlaner with long ultimate range would you rather be?";
    $answers = [];
    $answer = new Answer('Can create a huge wall behind the enemys back, I can knock back and stun people who jump into it', $this->getTaliyah());
    $answers[] = $answer;
    $answer = new Answer('Any jumping person who comes close to her is stunned, on ultimate she can jump at the opponent, stunning him', $this->getVex());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Mid[] = $questionToAdd;
    $this->createRangeMidMid_AP_No_Dashes_scaling_stun_dif_roam_quicMidQuestion = $questionToAdd;
}


    public function getQuestionByQuestionString($questionString)
    {
        $questions = $this->getMid();
        //dd($questions);
        foreach ($questions as $question) {
            //dd($question->questionString);
            if ($question->questionString == $questionString) {
                return $question;
            }
        }
    }
}