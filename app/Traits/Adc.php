<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;

trait Adc
{
    use ResultList;
    private $Adc = [];
    public function getAdc()
    {

        $this->createResultList();
        $this->createQuestionList();

        return $this->Adc;
    }

    private function createResultList()
    {
        $this->createTristana();
        $this->createZiggs();
        $this->createTwitch();
        $this->createVayne();
        $this->createVarus();
        $this->createLucian();
        $this->createMissFortune();
        $this->createEzreal();
        $this->createYasuo();
        $this->createSivir();
        $this->createCaitlyn();
        $this->createDraven();
        $this->createJinx();
        $this->createKalista();
        $this->createKaisa();
        $this->createSamira();
        $this->createAshe();
        $this->createJihn();
        $this->createNilah();
        $this->createAphelios();
        $this->createKogmaw();
        $this->createXayah();
        $this->createZeri();
        $this->createCassiopeia();
    }

    private function createQuestionList()
    {
//----------------------Hybrid ADC-----------------------------------------
        $this->createADC_Hybrid_GoodvsTanks_Question();
        $this->createADC_Hybrid_Mobility_OneShot_Question();
        $this->createADC_Hybrid_Mobility_Question();
        $this->createADC_Hybrid_Question();
//----------------------AD ADC-----------------------------------------
        $this->createADC_AD_Range_AUTO_Scale_OutPush_Solo_Question();
        $this->createADC_AD_Range_AUTO_Scale_OutPush_Question();
        $this->createADC_AD_Range_AUTO_Scale_Supp2_Hard2p_Question();
        $this->createADC_AD_Range_AUTO_Scale_Supp2_Question();
        $this->createADC_AD_Range_AUTO_Scale_Supp_Question();
        $this->createADC_AD_Range_AUTO_Scale_Question();
        $this->createADC_AD_Range_AUTO_Agresive_Dashes_engage_Profit_Question();
        $this->createADC_AD_Range_AUTO_Agresive_Dashes_engage_Question();
        $this->createADC_AD_Range_AUTO_Agresive_Dashes_enchanter_Question();
        $this->createADC_AD_Range_AUTO_Agresive_Dashes_Question();
        $this->createADC_AD_Range_AUTO_Agresive_Mental_Question();
        $this->createADC_AD_Range_AUTO_Agresive_Question();
        $this->createADC_AD_Range_AUTO_Question();
        $this->createADC_AD_Range_Lethality_LongRangeR_Question();
        $this->createADC_AD_Range_Lethality_Area_Ul_Question();
        $this->createADC_AD_Range_Lethality_Area_Question();
        $this->createADC_AD_Range_Question();
        $this->createADC_AD_Prefer_Question();
        $this->createADC_AD_Question();
//----------------------AP ADC-----------------------------------------
        $this->createADC_APDMG_Long_Question();
        $this->createADC_APDMG_Short_Question();
        $this->createADC_APDMG_Question();
        $this->createADC_AP_Question();
        $this->createEntryADCQuestion();
    }

    private function createVayne()
    {
        $this->Adc[] = $this->getVayne();
    }
    private function createTristana()
    {
        $this->Adc[] = $this->getTristana();
    }
    private function createZiggs()
    {
        $this->Adc[] = $this->getZiggs();
    }
    private function createTwitch()
    {
        $this->Adc[] = $this->getTwitch();
    }
    private function createVarus()
    {
        $this->Adc[] = $this->getVarus();
    }
    private function createLucian()
    {
        $this->Adc[] = $this->getLucian();
    }
    private function createMissFortune()
    {
        $this->Adc[] = $this->getMissFortune();
    }
    private function createEzreal()
    {
        $this->Adc[] = $this->getEzreal();
    }
    private function createYasuo()
    {
        $this->Adc[] = $this->getYasuo();
    }
    private function createSivir()
    {
        $this->Adc[] = $this->getSivir();
    }
    private function createCaitlyn()
    {
        $this->Adc[] = $this->getCaitlyn();
    }
    private function createDraven()
    {
        $this->Adc[] = $this->getDraven();
    }
    private function createJinx()
    {
        $this->Adc[] = $this->getJinx();
    }
    private function createKalista()
    {
        $this->Adc[] = $this->getKalista();
    }
    private function createKaisa()
    {
        $this->Adc[] = $this->getKaisa();
    }
    private function createSamira()
    {
        $this->Adc[] = $this->getSamira();
    }
    private function createAshe()
    {
        $this->Adc[] = $this->getAshe();
    }
    private function createJihn()
    {
        $this->Adc[] = $this->getJihn();
    }
    private function createNilah()
    {
        $this->Adc[] = $this->getNilah();
    }
    private function createAphelios()
    {
        $this->Adc[] = $this->getAphelios();
    }
    private function createKogmaw()
    {
        $this->Adc[] = $this->getKogmaw();
    }
    private function createXayah()
    {
        $this->Adc[] = $this->getXayah();
    }
    private function createZeri()
    {
        $this->Adc[] = $this->getZeri();
    }
    private function createCassiopeia()
    {
        $this->Adc[] = $this->getCassiopeia();
    }
  
//--------------------------------------Start-------------------------------------------
    private $entryQuestion;
    public function createEntryADCQuestion()
    {
        $questionString = "What type Adc demage you want to deal?";
        $answers = [];
        $answer = new Answer('Ap', $this->createADC_AP_Question);
        $answers[] = $answer;
        $answer = new Answer('Ad', $this->createADC_AD_Question);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Adc[] = $questionToAdd;
        $this->createADC_AP_Question = $questionToAdd;
    }






//------------------------------------------------------------------------------------------------------------------------------------//

//                                                             AP

//------------------------------------------------------------------------------------------------------------------------------------//
    
    private $createADC_AP_Question;
    public function createADC_AP_Question()
    {
        $questionString = "What type of damage is adc supposed to do?";
        $answers = [];
        $answer = new Answer('Prefer to be typical AP DMG', $this->createADC_APDMG_Question);
        $answers[] = $answer;
        $answer = new Answer('Want to be Hybrid AP/AD DMG', $this->createADC_Hybrid_Question);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Adc[] = $questionToAdd;
        $this->createADC_AP_Question = $questionToAdd;
    }

//----------------------------------------/AP/APDMG--------------------------------------------
   
    private $createADC_APDMG_Question;
    public function createADC_APDMG_Question()
    {
        $questionString = "What range ap adc?";
        $answers = [];
        $answer = new Answer('Short range', $this->createADC_APDMG_Short_Question);
        $answers[] = $answer;
        $answer = new Answer('Long range', $this->createADC_APDMG_Long_Question);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Adc[] = $questionToAdd;
        $this->createADC_APDMG_Question = $questionToAdd;
    }

//----------------------------------------/AP/APDMG/Short--------------------------------------------
    
    private $createADC_APDMG_Short_Question;
    public function createADC_APDMG_Short_Question()
{
        $questionString = "What type of ap adc do you prefer?";
        $answers = [];
        $answer = new Answer('you prefer to have a character that requires a lot of use skills, have stun and slow skills', $this->GetCassiopeia());
        $answers[] = $answer;
        $answer = new Answer('Prefer to control area with life steal', $this->GetSwain());
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Adc[] = $questionToAdd;
        $this->createADC_APDMG_Short_Question = $questionToAdd;
}
//----------------------------------------/AP/APDMG/Long--------------------------------------------

    private $createADC_APDMG_Long_Question;
    public function createADC_APDMG_Long_Question()
    {
        $questionString = "Do you prefer to push forward as adc or scale?";
        $answers = [];
        $answer = new Answer('He prefers to poke the enemy and push towers on lane', $this->GetZiggs());
        $answers[] = $answer;
        $answer = new Answer('I prefer to farm and then deal a lot of damage', $this->GetSyndra());
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Adc[] = $questionToAdd;
        $this->createADC_APDMG_Long_Question = $questionToAdd;
}
 







//------------------------------------------------------------------------------------------------------------------------------------//

//                                                   AD

//------------------------------------------------------------------------------------------------------------------------------------//

private $createADC_AD_Question;
public function createADC_AD_Question()
{
    $questionString = "What adc would you like to be?";
    $answers = [];
    $answer = new Answer('Want to be Hybrid AP/AD DMG', $this->createADC_Hybrid_Question);
    $answers[] = $answer;
    $answer = new Answer('Prefer to be typical AD dmg', $this->createADC_AD_Prefer_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD--------------------------------------------

private $createADC_AD_Prefer_Question;
public function createADC_AD_Prefer_Question()
{
    $questionString = "What range do you want as an ad adc?";
    $answers = [];
    $answer = new Answer('Mele range', $this->GetYasuo());
    $answers[] = $answer;
    $answer = new Answer('Long range', $this->createADC_AD_Range_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Prefer_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range--------------------------------------------

private $createADC_AD_Range_Question;
public function createADC_AD_Range_Question()
{
    $questionString = "Do you prefer to be lethality adc or rely on auto attack?";
    $answers = [];
    $answer = new Answer('Lethality', $this->createADC_AD_Range_Lethality_Area_Question);
    $answers[] = $answer;
    $answer = new Answer('Auto-attacks', $this->createADC_AD_Range_AUTO_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_Question = $questionToAdd;
}


//----------------------------------------/AD/Prefer AD/range/Lethality/RAreaDMg--------------------------------------------

private $createADC_AD_Range_Lethality_Area_Question;
public function createADC_AD_Range_Lethality_Area_Question()
{
    $questionString = "What type of ultimate do you prefer as an adc?";
    $answers = [];
    $answer = new Answer('ultimate with massive area damage', $this->createADC_AD_Range_Lethality_Area_Ul_Question);
    $answers[] = $answer;
    $answer = new Answer('ultimate with long range, able to catch a running enemy', $this->createADC_AD_Range_Lethality_LongRangeR_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_Lethality_Area_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Lethality/RAreaDMg2--------------------------------------------

private $createADC_AD_Range_Lethality_Area_Ul_Question;
public function createADC_AD_Range_Lethality_Area_Ul_Question()
{
    $questionString = "As an adc how do you prefer to play?";
    $answers = [];
    $answer = new Answer('jumps into opponents', $this->GetSamira());
    $answers[] = $answer;
    $answer = new Answer('he prefers to strike from a distance', $this->GetMissFortune());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_Lethality_Area_Ul_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Lethality/LongRangeR--------------------------------------------

private $createADC_AD_Range_Lethality_LongRangeR_Question;
public function createADC_AD_Range_Lethality_LongRangeR_Question()
{
    $questionString = "What lethality adc do you prefer?";
    $answers = [];
    $answer = new Answer('less range, but huge damage from auto attacks, acceleration and higher earnings', $this->GetDraven());
    $answers[] = $answer;
    $answer = new Answer('great range of attacks and skills, traps and escape', $this->GetCaitlyn());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_Lethality_LongRangeR_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks--------------------------------------------

private $createADC_AD_Range_AUTO_Question;
public function createADC_AD_Range_AUTO_Question()
{
    $questionString = "What style of play do you prefer as an adc?";
    $answers = [];
    $answer = new Answer('Agresive laners', $this->createADC_AD_Range_AUTO_Agresive_Question);
    $answers[] = $answer;
    $answer = new Answer('Prefer to scale', $this->createADC_AD_Range_AUTO_Scale_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/AgresiveLaners--------------------------------------------

private $createADC_AD_Range_AUTO_Agresive_Question;
public function createADC_AD_Range_AUTO_Agresive_Question()
{
    $questionString = "Decide what adc you want to become?";
    $answers = [];
    $answer = new Answer('With dashes', $this->createADC_AD_Range_AUTO_Agresive_Dashes_Question);
    $answers[] = $answer;
    $answer = new Answer('Likes to fight, no dashes, you need good mental', $this->createADC_AD_Range_AUTO_Agresive_Mental_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Agresive_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/AgresiveLaners/Mental--------------------------------------------

private $createADC_AD_Range_AUTO_Agresive_Mental_Question;
public function createADC_AD_Range_AUTO_Agresive_Mental_Question()
{
    $questionString = "Choose the adc you want to play";
    $answers = [];
    $answer = new Answer('With good front supp can 2 v 5, big auttoatack dmg snowboll rly good', $this->GetDraven());
    $answers[] = $answer;
    $answer = new Answer('Likes to play vs agresive supports, rly hard to catch', $this->GetXayah());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Agresive_Mental_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/AgresiveLaners/Dashes--------------------------------------------

private $createADC_AD_Range_AUTO_Agresive_Dashes_Question;
public function createADC_AD_Range_AUTO_Agresive_Dashes_Question()
{
    $questionString = "As an adc, what support do you want to play with?";
    $answers = [];
    $answer = new Answer('Can play with enchanter and frontlane supp', $this->createADC_AD_Range_AUTO_Agresive_Dashes_enchanter_Question);
    $answers[] = $answer;
    $answer = new Answer('Better with good engage supp', $this->createADC_AD_Range_AUTO_Agresive_Dashes_engage_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Agresive_Dashes_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/AgresiveLaners/Dashes/enchanter--------------------------------------------

private $createADC_AD_Range_AUTO_Agresive_Dashes_enchanter_Question;
public function createADC_AD_Range_AUTO_Agresive_Dashes_enchanter_Question()
{
    $questionString = "Choose the adc character that interests you more";
    $answers = [];
    $answer = new Answer('Champ with a very good poke, stun and a lot of autoattack dmg', $this->GetAshe());
    $answers[] = $answer;
    $answer = new Answer('With a lot of dashes and fast auttoatacks and big dmg r', $this->GetLucian());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Agresive_Dashes_enchanter_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/AgresiveLaners/Dashes/engage--------------------------------------------

private $createADC_AD_Range_AUTO_Agresive_Dashes_engage_Question;
public function createADC_AD_Range_AUTO_Agresive_Dashes_engage_Question()
{
    $questionString = "Which character playing with Engage Supp are you more interested in?";
    $answers = [];
    $answer = new Answer('Have profits if plays with engage supp, click for more', $this->createADC_AD_Range_AUTO_Agresive_Dashes_engage_Profit_Question);
    $answers[] = $answer;
    $answer = new Answer('Need supp who goes in, prefer to push towers, have explosive dmg', $this->GetTristana());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Agresive_Dashes_engage_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/AgresiveLaners/Dashes/engage/profit--------------------------------------------

private $createADC_AD_Range_AUTO_Agresive_Dashes_engage_Profit_Question;
public function createADC_AD_Range_AUTO_Agresive_Dashes_engage_Profit_Question()
{
    $questionString = "Which adc design do you like more?";
    $answers = [];
    $answer = new Answer('Ultimate can throw a support in the opponent, knocking them up', $this->GetKalista());
    $answers[] = $answer;
    $answer = new Answer('If someone is with you, you get a bonus to exp', $this->GetNilah());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Agresive_Dashes_engage_Profit_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/Scale--------------------------------------------

private $createADC_AD_Range_AUTO_Scale_Question;
public function createADC_AD_Range_AUTO_Scale_Question()
{
    $questionString = "How do you want to behave on the line as an Adc?";
    $answers = [];
    $answer = new Answer('Like to stay with supp in lane', $this->createADC_AD_Range_AUTO_Scale_Supp_Question);
    $answers[] = $answer;
    $answer = new Answer('Can out push and scale rly well', $this->createADC_AD_Range_AUTO_Scale_OutPush_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Scale_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/Scale/StayWith--------------------------------------------

private $createADC_AD_Range_AUTO_Scale_Supp_Question;
public function createADC_AD_Range_AUTO_Scale_Supp_Question()
{
    $questionString = "Which scale adc do you prefer to play?";
    $answers = [];
    $answer = new Answer('Rat, if you have good enchanter supp you can destroy enemy', $this->GetTwitch());
    $answers[] = $answer;
    $answer = new Answer('Need to play with supp who protect you but if you have good supp you dominate lane', $this->createADC_AD_Range_AUTO_Scale_Supp2_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Scale_Supp_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/Scale/StayWith/PLayWithSupp--------------------------------------------

private $createADC_AD_Range_AUTO_Scale_Supp2_Question;
public function createADC_AD_Range_AUTO_Scale_Supp2_Question()
{
    $questionString = "What type of scale adc champion do you prefer to play?";
    $answers = [];
    $answer = new Answer('hard to play but a very rewording with a lot of dmg', $this->createADC_AD_Range_AUTO_Scale_Supp2_Hard2p_Question);
    $answers[] = $answer;
    $answer = new Answer('Very simple and fast champ with good dmg ', $this->GetZeri());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Scale_Supp2_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/Scale/StayWith/PLayWithSupp/Hard2p--------------------------------------------

private $createADC_AD_Range_AUTO_Scale_Supp2_Hard2p_Question;
public function createADC_AD_Range_AUTO_Scale_Supp2_Hard2p_Question()
{
    $questionString = "Choose the scaling adc that suits you better";
    $answers = [];
    $answer = new Answer('Interesting gameplay with changing weapons and attacks, very difficult to learn', $this->GetAphelios());
    $answers[] = $answer;
    $answer = new Answer('Champ with a lot of dmg to tanks, mobility and invisibility', $this->GetVayne());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Scale_Supp2_Hard2p_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/Scale/Outpush--------------------------------------------

private $createADC_AD_Range_AUTO_Scale_OutPush_Question;
public function createADC_AD_Range_AUTO_Scale_OutPush_Question()
{
    $questionString = "What type of outpush adc do you prefer to be?";
    $answers = [];
    $answer = new Answer('Long range with aoe dmg', $this->GetJinx());
    $answers[] = $answer;
    $answer = new Answer('Do you want to be strong enough to stay solo on lane', $this->createADC_AD_Range_AUTO_Scale_OutPush_Solo_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Scale_OutPush_Question = $questionToAdd;
}

//----------------------------------------/AD/Prefer AD/range/Autoattacks/Scale/Outpush/Solo--------------------------------------------

private $createADC_AD_Range_AUTO_Scale_OutPush_Solo_Question;
public function createADC_AD_Range_AUTO_Scale_OutPush_Solo_Question()
{
    $questionString = "Choose the outpush adc that suits you better";
    $answers = [];
    $answer = new Answer('fast and good outpush with a lot of crit dmg every 4 autos', $this->GetJihn());
    $answers[] = $answer;
    $answer = new Answer('nice farmer, speel block everything, a lot of mobility', $this->GetSivir());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_AD_Range_AUTO_Scale_OutPush_Solo_Question = $questionToAdd;
}







//------------------------------------------------------------------------------------------------------------------------------------//

//                                                             Hybrid

//------------------------------------------------------------------------------------------------------------------------------------//

private $createADC_Hybrid_Question;
public function createADC_Hybrid_Question()
{
    $questionString = "What adc hybrid do you prefer to play?";
    $answers = [];
    $answer = new Answer('Based on mobility', $this->createADC_Hybrid_Mobility_Question);
    $answers[] = $answer;
    $answer = new Answer('Destroying tanks, can one shot but less mobility', $this->createADC_Hybrid_GoodvsTanks_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_Hybrid_Question = $questionToAdd;
}

//----------------------------------------/AP/AD/Hybrid/Mobility--------------------------------------------

private $createADC_Hybrid_Mobility_Question;                
public function createADC_Hybrid_Mobility_Question()
{
    $questionString = "What would you prefer the adc hybrid to have?";
    $answers = [];
    $answer = new Answer('With a lot of mobility hard to catch on lane and all range set of skills', $this->GetEzreal());
    $answers[] = $answer;
    $answer = new Answer('Can one shot with a lot of mobility', $this->createADC_Hybrid_Mobility_OneShot_Question);
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_Hybrid_Mobility_Question = $questionToAdd;
}

//----------------------------------------/AP/AD/Hybrid/Mobility/oneShot--------------------------------------------

private $createADC_Hybrid_Mobility_OneShot_Question;                
public function createADC_Hybrid_Mobility_OneShot_Question()
{
    $questionString = "Choose which adc hybrid suits you best";
    $answers = [];
    $answer = new Answer('With invisibility speed long range skill and evolutions', $this->GetKaisa());
    $answers[] = $answer;
    $answer = new Answer('With invisibility, Ultimate long range and poison ', $this->GetTwitch());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_Hybrid_Mobility_OneShot_Question = $questionToAdd;
}

//----------------------------------------/AP/AD/Hybrid/less mobility--------------------------------------------

private $createADC_Hybrid_GoodvsTanks_Question;
public function createADC_Hybrid_GoodvsTanks_Question()
{
    $questionString = "Choose which adc hybrid good at tanks suits you better";
    $answers = [];
    $answer = new Answer('Beats tanks in percentage, amazing attack speed and a very large range of skills', $this->GetKogmaw());
    $answers[] = $answer;
    $answer = new Answer('Oneshots tanks under ap, hybrid hits powerful damage, has a stun that extends to others', $this->GetVarus());
    $answers[] = $answer;
    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Adc[] = $questionToAdd;
    $this->createADC_Hybrid_GoodvsTanks_Question = $questionToAdd;
}


    public function getQuestionByQuestionString($questionString)
    {
        $questions = $this->getAdc();
        //dd($questions);
        foreach ($questions as $question) {
            //dd($question->questionString);
            if ($question->questionString == $questionString) {
                return $question;
            }
        }
    }

}