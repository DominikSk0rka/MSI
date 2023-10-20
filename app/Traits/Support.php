<?php

namespace App\Traits;

use App\Classes\Answer;
use App\Classes\MultipathQuestion;
use App\Classes\Question;
use App\Traits\ResultList;
use App\Traits\Champs;
use App\Traits\AllChamps;

trait Support
{
    use ResultList;
    use Champs;
    use AllChamps;
    private $Support = [];
    
//----------------------------------------Mele/Range------------------------------------------------//
    private $entryQuestion;
    public function createEntryQuestion()
    {
        $questionString = "Do you want mele or range support?";

        $answers = [];
        $answer = new Answer('Mele', $this->MeleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Range', $this->damageTypeQuestion);
        $answers[] = $answer;

        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Support[] = $questionToAdd;
        $this->damageTypeQuestion = $questionToAdd;
    }



//------------------------------------------------------------------------------------------------------------------------------------//

//                                                             Range

//------------------------------------------------------------------------------------------------------------------------------------//

    private $damageTypeQuestion;
    public function createDamageTypeQuestion()
    {
        $questionString = "What type of ranger do you want to play?";


        $answers = [];

        $answer = new Answer('Healer/Shielder/Enchanter', $this->apRoleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Dps', $this->damageRangeDPSQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Support[] = $questionToAdd;
        $this->damageTypeQuestion = $questionToAdd;
    }
    
//-----------------------------------/Range/Healer_Shielder_Enchanter------------------------------------------//
    private $apRoleQuestion;
    public function createApRoleQuestion()
    {
        $questionString = "What type of typical support do you prefer?";


        $answers = [];

        $answer = new Answer('typical supporting adc, healing shielding', $this->supportRoleQuestion);
        $answers[] = $answer;
        $answer = new Answer('Typical enchanter', $this->basedTypicalEnchanterQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Support[] = $questionToAdd;
        $this->apRoleQuestion = $questionToAdd;
    }
//-------------------------------/typical supporting adc, healing shielding----------------------------------//
    private $supportRoleQuestion;
    public function createSupportRoleQuestion()
    {
        $questionString = "Do you want to be shielder or healer?";


        $answers = [];

        $answer = new Answer('Typical Healer', $this->karetkaQuestion);
        $answers[] = $answer;
        $answer = new Answer('Typical Shielder', $this->shielderQuestion);
        $answers[] = $answer;


        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Support[] = $questionToAdd;
        $this->supportRoleQuestion = $questionToAdd;
    }
//------------------------------------------/Typical Healer-----------------------------------------------------//    
     private $karetkaQuestion;
     public function createKaretkaQuestion()
    {
        $questionString = "Do you want to be able to deal some damage, or just be a good shielder?";
        $answers = [];

        $answer = new Answer('A character based on healing allies', $this->getSoraka());
        $answers[] = $answer;
        $answer = new Answer('The character relies on less healing, but can stop the opponent', $this->getNami());
        $answers[] = $answer;

        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Support[] = $questionToAdd;
        $this->karetkaQuestion= $questionToAdd;
    }
//-----------------------------------------/Typical Shielder-------------------------------------------------------------------//
    private $shielderQuestion;
    public function createShielderQuestion()
    {
        $questionString = "Do you prefer to be an enchanter or protect with a shield?";

        $answers = [];
        $answer = new Answer('Prefer to be an enchanter', $this->EnchanterQuestion);
        $answers[] = $answer;
        $answer = new Answer('Based on Shielding', $this->basedshielderQuestion);
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Support[] = $questionToAdd;
        $this->shielderQuestion= $questionToAdd;
    }
//-----------------------------------------/Prefer to be an enchanter-------------------------------------------------------------------//   
    private $EnchanterQuestion;
    public function createEnchanterQuestion()
    {
        $questionString = "What type of enchanter do you want to be?";

        $answers = [];
        $answer = new Answer('Utility Support', $this->getSona());
        $answers[] = $answer;
        $answer = new Answer('Prefer to boost your autoattacks', $this->getMilio());
        $answers[] = $answer;
        $questionToAdd = new MultipathQuestion($answers, $questionString);
        $this->Support[] = $questionToAdd;
        $this->EnchanterQuestion= $questionToAdd;
    }
//-----------------------------------------/Prefer to be an enchanter/Based on Shielding-------------------------------------------------------------------//   
    private $basedshielderQuestion;
    public function createbasedshielderQuestion()
    {
         $questionString = "Would you rather always support someone or support everyone?";

         $answers = [];
         $answer = new Answer('Prefer always stay with your ally', $this->getYuumi());
         $answers[] = $answer;
         $answer = new Answer('Sheilder for whole team', $this->basedshielderforteamQuestion);
         $answers[] = $answer;
         $questionToAdd = new MultipathQuestion($answers, $questionString);
         $this->Support[] = $questionToAdd;
         $this->basedshielderQuestion= $questionToAdd;
    }
//--------------------------------------------/Prefer to be an enchanter/Based on Shielding/Sheilder for whole team-------------------------------------------------//
    private $basedshielderforteamQuestion;
    public function createbasedshielderforteamQuestionQuestion()
    {
     $questionString = "Which shielder suits you better?";

     $answers = [];
     $answer = new Answer('Champ with big shield, and area heal ultimate', $this->getJanna());
     $answers[] = $answer;
     $answer = new Answer('Champ with poke, sheild and boosting ally abilites', $this->getLulu());
     $answers[] = $answer;
     $questionToAdd = new MultipathQuestion($answers, $questionString);
     $this->Support[] = $questionToAdd;
     $this->basedshielderforteamQuestion= $questionToAdd;
    }
//--------------------------------------------/Range/Healer_Shielder_Enchanter/Typical Enchanter-------------------------------------------------//
private $basedTypicalEnchanterQuestion;
public function createbasedTypicalEnchanterQuestion()
{
 $questionString = "Do you prefer to run around lines often or have skills that can perform multiple tasks?";

 $answers = [];
 $answer = new Answer('Roaming Champ', $this->getBard());
 $answers[] = $answer;
 $answer = new Answer('multi-tasking skill set', $this->basedMultiQuestion);
 $answers[] = $answer;
 $questionToAdd = new MultipathQuestion($answers, $questionString);
 $this->Support[] = $questionToAdd;
 $this->basedTypicalEnchanterQuestion= $questionToAdd;
}
//--------------------------------------------/Range/Healer_Shielder_Enchanter/Typical Enchanter/multi-tasking skill set-------------------------------------------------//
private $basedMultiQuestion;
public function createbasedMultiQuestion()
{
 $questionString = "Do you want to have demage, or practically no demage but be very strong with someone";

 $answers = [];
 $answer = new Answer('With DMG', $this->basedEnchanterDMGQuestion);
 $answers[] = $answer;
 $answer = new Answer('You can use your potential when someone is with you', $this->getRenataGlasc());
 $answers[] = $answer;
 $questionToAdd = new MultipathQuestion($answers, $questionString);
 $this->Support[] = $questionToAdd;
 $this->basedMultiQuestion= $questionToAdd;
}
//--------------------------------------------/Range/Healer_Shielder_Enchanter/Typical Enchanter/multi-tasking skill set/With DMG-------------------------------------------------//
private $basedEnchanterDMGQuestion;
public function createbasedEnchanterDMGQuestion()
{
 $questionString = "You want to have a lot of stun skills, or be a typical damage enchanter";

 $answers = [];
 $answer = new Answer('Based on cc chains and a shield that cancels stuns', $this->getMorgana());
 $answers[] = $answer;
 $answer = new Answer('Typical enchanter with dmg', $this->basedEnchanterDMGTypicalQuestion);
 $answers[] = $answer;
 $questionToAdd = new MultipathQuestion($answers, $questionString);
 $this->Support[] = $questionToAdd;
 $this->basedEnchanterDMGQuestion= $questionToAdd;
}
//--------------------------------------------/Range/Healer_Shielder_Enchanter/Typical Enchanter/multi-tasking skill set/With DMG/Typical enchanter with dmg-------------------------------------------------//
private $basedEnchanterDMGTypicalQuestion;
public function basedEnchanterDMGTypicalQuestion()
{
 $questionString = "Do you prefer speeding up or healing?";

 $answers = [];
 $answer = new Answer('Can speed your ally', $this->basedEnchanterSpeedQuestion);
 $answers[] = $answer;
 $answer = new Answer('can heal your ally', $this->getSeraphine());
 $answers[] = $answer;
 $questionToAdd = new MultipathQuestion($answers, $questionString);
 $this->Support[] = $questionToAdd;
 $this->basedEnchanterDMGTypicalQuestion= $questionToAdd;
}
//--------------------------------------------/Range/Healer_Shielder_Enchanter/Typical Enchanter/multi-tasking skill set/With DMG/Typical enchanter with dmg/Can speed your ally-------------------------------------------------//
private $basedEnchanterSpeedQuestion;
public function basedEnchanterSpeedQuestion()
{
 $questionString = "Which enchanter suits you better?";

 $answers = [];
 $answer = new Answer('Based on multi-role can shield, do dmg, speed boost', $this->getKarma());
 $answers[] = $answer;
 $answer = new Answer('is based on speeding you up and slowing down your opponents, it can respawn you', $this->getZilean());
 $answers[] = $answer;
 $questionToAdd = new MultipathQuestion($answers, $questionString);
 $this->Support[] = $questionToAdd;
 $this->basedEnchanterSpeedQuestion= $questionToAdd;
}
//---------------------------------------/Range/DPS-------------------------------------------------//
private $damageRangeDPSQuestion;
public function damageRangeDPSQuestion()
{
    $questionString = "What type of range demage? Physical(AD) or Magical(AP)?";
    $answers = [];

    $answer = new Answer('AD', $this->damageRangeDPSADQuestion);
    $answers[] = $answer;
    $answer = new Answer('AP', $this->damageRangeDPSAPQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageRangeDPSQuestion = $questionToAdd;
}
//---------------------------------------/Range/DPS/AD-------------------------------------------------//
private $damageRangeDPSADQuestion;
public function damageRangeDPSADQuestion()
{
    $questionString = "Do you prefer to focus on stuning and slowing, or on damage and healing?";
    $answers = [];

    $answer = new Answer('Poke with CC', $this->getAshe());
    $answers[] = $answer;
    $answer = new Answer('Heal with Poke', $this->getSenna());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageRangeDPSADQuestion = $questionToAdd;
}
//---------------------------------------/Range/DPS/AP-------------------------------------------------//
private $damageRangeDPSAPQuestion;
public function damageRangeDPSAPQuestion()
{
    $questionString = "What kind of ap dps support do you want to be?";
    $answers = [];

    $answer = new Answer('Artillery Supports (Big range)', $this->damageRangeArtilleryQuestion);
    $answers[] = $answer;
    $answer = new Answer('Crowd Control Supports', $this->damageRangeCrowdQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageRangeDPSAPQuestion = $questionToAdd;
}
//---------------------------------------/Range/DPS/AP/Artillery-------------------------------------------------//
private $damageRangeArtilleryQuestion;
public function damageRangeArtilleryQuestion()
{
    $questionString = "What damage do you prefer to have as a support?";
    $answers = [];

    $answer = new Answer('Zone Control Support', $this->getXerath());
    $answers[] = $answer;
    $answer = new Answer('Burst Damage Support', $this->getVelKoz());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageRangeArtilleryQuestion = $questionToAdd;
}
//---------------------------------------/Range/DPS/AP/Crowd Controll-------------------------------------------------//
private $damageRangeCrowdQuestion;
public function damageRangeCrowdQuestion()
{
    $questionString = "Do you prefer to be an Versatile support or have area damage?";
    $answers = [];

    $answer = new Answer('Versatile Supports', $this->damageVersatileQuestion);
    $answers[] = $answer;
    $answer = new Answer('Area of Effect Supports', $this->damageRangeAreaQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageRangeCrowdQuestion = $questionToAdd;
}
//---------------------------------------/Range/DPS/AP/Crowd Controll/Versatile-------------------------------------------------//
private $damageVersatileQuestion;    
public function damageVersatileQuestion()
{
    $questionString = "Do you prefer to place turrets or deal continuous damage with a shield and stun?";
    $answers = [];

    $answer = new Answer('Turret-based Champions', $this->damageTuretQuestion);
    $answers[] = $answer;
    $answer = new Answer('Poke-champ', $this->getLux());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageVersatileQuestion = $questionToAdd;
}
//---------------------------------------/Range/DPS/AP/Crowd Controll/Versatile/Turet based-------------------------------------------------//
private $damageTuretQuestion;
public function damageTuretQuestion()
{
    $questionString = "What type of turet character do you prefer to be?";
    $answers = [];

    $answer = new Answer('Multi-Role', $this->getHeimerdinger());
    $answers[] = $answer;
    $answer = new Answer('Area DMG', $this->getZyra());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageTuretQuestion = $questionToAdd;
}
//--------------------------------------/Range/DPS/AP/AreaOfEffect-------------------------------------------------//
private $damageRangeAreaQuestion;
public function damageRangeAreaQuestion()
{
    $questionString = "What crowd control support would you rather be?";
    $answers = [];

    $answer = new Answer('Beating demage procentage', $this->getBrand());
    $answers[] = $answer;
    $answer = new Answer('Life Leech Supports', $this->getSwain());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->damageRangeAreaQuestion = $questionToAdd;
}





//------------------------------------------------------------------------------------------------------------------------------------

//                                                                Mele

//------------------------------------------------------------------------------------------------------------------------------------


private $MeleQuestion;
public function MeleQuestion()
{
    $questionString = "Would you rather stand firm in front or take more damage?";
    $answers = [];

    $answer = new Answer('Engage', $this->MeleFrontlineQuestion);
    $answers[] = $answer;
    $answer = new Answer('DPS', $this->MeleDPSQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleQuestion = $questionToAdd;
}
//----------------------------------------------------------------DPS-----------------------------------------------------------------
private $MeleDPSQuestion;  
public function MeleDPSQuestion()
{
    $questionString = "What type of mele demage? Physical(AD) or Magical(AP)?";
    $answers = [];

    $answer = new Answer('AD DPS', $this->MeleDPSADQuestion);
    $answers[] = $answer;
    $answer = new Answer('AP DPS', $this->getShaco());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleDPSQuestion = $questionToAdd;
}
//----------------------------------------------------------------DPS/AD-----------------------------------------------------------------
private $MeleDPSADQuestion;
public function MeleDPSADQuestion()
{
    $questionString = "Which DPS character would you prefer?";
    $answers = [];

    $answer = new Answer('Based on finishing and grabing (executioner)', $this->getPyke());
    $answers[] = $answer;
    $answer = new Answer('With stun big demage and durability', $this->getPantheon());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleDPSADQuestion = $questionToAdd;
}
//----------------------------------------------------------------/Engage-----------------------------------------------------------------
private $MeleFrontlineQuestion;     
public function MeleFrontlineQuestion()
{
    $questionString = "Which frontlane do you prefer?";
    $answers = [];

    $answer = new Answer('Frontlane With Grab', $this->MeleFrontlineGrabQuestion);
    $answers[] = $answer;
    $answer = new Answer('Typical frontlane', $this->MeleTypicalFrontlineQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleFrontlineQuestion = $questionToAdd;
}
//----------------------------------------------------------------/Engage/FrontlineWithGrab-----------------------------------------------------------------
private $MeleFrontlineGrabQuestion;     
public function MeleFrontlineGrabQuestion()
{
    $questionString = "Do you prefer to grab on the rake or have it be weaker but more mobile?";
    $answers = [];

    $answer = new Answer('Based on a quick grab', $this->getBlitzcrank());
    $answers[] = $answer;
    $answer = new Answer('With grab/mobility', $this->MeleFrontlineGrabMobilityQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleFrontlineGrabQuestion = $questionToAdd;
}
//----------------------------------------------------------------/Engage/FrontlineWithGrab/MeleFrontlineGrabMobility-----------------------------------------------------------------
private $MeleFrontlineGrabMobilityQuestion;     
public function MeleFrontlineGrabMobilityQuestion()
{
    $questionString = "Which grab character would you prefer?";
    $answers = [];

    $answer = new Answer('Engage grab with hight chance to protect adc', $this->getThresh());
    $answers[] = $answer;
    $answer = new Answer('Engage grab with a lot of stuns', $this->getNoutilius());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleFrontlineGrabMobilityQuestion = $questionToAdd;                 
}


//----------------------------------------------------------------/Engage/TypicalFront-----------------------------------------------------------------
private $MeleTypicalFrontlineQuestion;     
public function MeleTypicalFrontlineQuestion()
{
    $questionString = "What type of support do you prefer?";
    $answers = [];

    $answer = new Answer('Support With Crowd Controll', $this->MeleTypicalFrontCrowdlineQuestion);
    $answers[] = $answer;
    $answer = new Answer('Tanky Support who protect adc', $this->MeleTypicalFrontlineProtectADCQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleTypicalFrontlineQuestion = $questionToAdd;
}
//----------------------------------------------------------------/Engage/TypicalFront/Crowd-----------------------------------------------------------------
private $MeleTypicalFrontCrowdlineQuestion;     
public function MeleTypicalFrontCrowdlineQuestion()
{
    $questionString = "Which character is better for you?";
    $answers = [];

    $answer = new Answer('Slow, but with high durability and great crowd control', $this->getRell());
    $answers[] = $answer;
    $answer = new Answer('With a lot of mobility and great crowd control but not much health', $this->getRakan());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleTypicalFrontCrowdlineQuestion = $questionToAdd;
}                  
//----------------------------------------------------------------/Engage/TypicalFront/ProtectADC-----------------------------------------------------------------
private $MeleTypicalFrontlineProtectADCQuestion;     
public function MeleTypicalFrontlineProtectADCQuestion()
{
    $questionString = "What type do you prefer?";
    $answers = [];

    $answer = new Answer('Based On Durability(HP)', $this->MeleTypicalFrontlineProtectADC_HPQuestion);
    $answers[] = $answer;
    $answer = new Answer('Based on champion skill sett', $this->MeleTypicalFrontlineProtectADCSkillSetQuestion);
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleTypicalFrontlineProtectADCQuestion = $questionToAdd;
}
//----------------------------------------------------------------/Engage/TypicalFront/ProtectADC/HP-----------------------------------------------------------------
private $MeleTypicalFrontlineProtectADC_HPQuestion;     
public function MeleTypicalFrontlineProtectADC_HPQuestion()
{
    $questionString = "Which character suits you better?";
    $answers = [];

    $answer = new Answer('With knockup, digging in and breakout', $this->getAlistar());
    $answers[] = $answer;
    $answer = new Answer('With stuns and digging in', $this->getLeona());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleTypicalFrontlineProtectADC_HPQuestion = $questionToAdd;
}
//----------------------------------------------------------------/Engage/TypicalFront/ProtectADC/SkillSet-----------------------------------------------------------------
private $MeleTypicalFrontlineProtectADCSkillSetQuestion;     
public function MeleTypicalFrontlineProtectADCSkillSetQuestion()
{
    $questionString = "Which hero among good defenders is for you?";
    $answers = [];

    $answer = new Answer('With healing and the possibility of immortality for a short time', $this->getTaric());
    $answers[] = $answer;
    $answer = new Answer('With a shield that blocks damage an stun every 4 hit', $this->getBraum());
    $answers[] = $answer;

    $questionToAdd = new MultipathQuestion($answers, $questionString);
    $this->Support[] = $questionToAdd;
    $this->MeleTypicalFrontlineProtectADCSkillSetQuestion = $questionToAdd;
}


//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function getQuestionByQuestionString($questionString)
    {
        $questions = $this->getSupport();
        //dd($questions);
        foreach ($questions as $question) {
            //dd($question->questionString);
            if ($question->questionString == $questionString) {
                return $question;
            }
        }
    }

}