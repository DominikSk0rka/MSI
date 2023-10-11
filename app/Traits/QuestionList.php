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
        
        /*
       SUPPORT
        */
        /*
        $this->createPlaceHolder();
        $this->createLux();
        $this->createSwain();
        $this->createShaco();
        $this->createNoutilius();
        $this->createThresh();
        $this->createBlitzcrank();
        $this->createMorgana();
        $this->createXerath();
        $this->createLulu();
        $this->createPyke();
        $this->createBrand();
        $this->createYuumi();
        $this->createMilio();
        $this->createKarma();
        $this->createHeimerdinger();
        $this->createNami();
        $this->createLeona();
        $this->createSenna();
        $this->createSoraka();
        $this->createZilean();
        $this->createTaric();
        $this->createNeeko();
        $this->createVelkoz();
        $this->createPantheon();
        $this->createBard();
        $this->createBraum();
        $this->createAlistar();
        $this->createJanna();
        $this->createRenataGlasc();
        $this->createSona();
        $this->createRakan();
        $this->createRell();
        $this->createSeraphine();
        $this->createZyra();
        /*
       ADC
        */
        /*
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

        /*
       TOP
        */
        /*
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
        /*
       MID
        */
        /*
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
        /*
       JUNGLE
        */
        /*
       $this->createEkko();
       $this->createDiana();
       $this->createViego();
       $this->createKayn();
       $this->createShaco();
       $this->createSylas();
       $this->createNunu();
       $this->createZac();
       $this->createIvern();
       $this->createKhartus();
       $this->createMasterYi();
       $this->createVi();
       $this->createKhaZix();
       $this->createEvelynn();
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
*/


  /*
       Main
        */
        $this->createPlaceHolder();
        $this->createKhaZix();
        $this->createKayn();
        $this->createPantheon();
        $this->createPyke();
        $this->createLeona();
        $this->createTaric();
        $this->createNautilus();
        $this->createAnnie();
        $this->createVictor();
        $this->createSoraka();
        $this->createKarma();
        $this->createJanna();
        $this->createRyze();
        $this->createCassiopeia();
        $this->createXerath();
        $this->createVelKoz();
        $this->createMasterYi();
        $this->createRiven();
        $this->createMalphite();
        $this->createSion();
        $this->createSett();
        $this->createGaren();
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
    //---------------------------------------------SUPPORTS------METODS---------------------------------------------------------------
/*
     private function createPlaceHolder()
    {
        $this->questionList[] = $this->getPlaceHolder();
    }

    private function createLux()
    {
        $this->questionList[] = $this->getLux();
    }
    private function createSwain()
    {
        $this->questionList[] = $this->getSwain();
    }
    private function createShaco()
    {
        $this->questionList[] = $this->getShaco();
    }
    private function createNoutilius()
    {
        $this->questionList[] = $this->getNoutilius();
    }
    private function createThresh()
    {
        $this->questionList[] = $this->getThresh();
    }
    private function createBlitzcrank()
    {
        $this->questionList[] = $this->getBlitzcrank();
    }
    private function createMorgana()
    {
        $this->questionList[] = $this->getMorgana();
    }
    private function createXerath()
    {
        $this->questionList[] = $this->getXerath();
    }
    private function createLulu()
    {
        $this->questionList[] = $this->getLulu();
    }
    private function createPyke()
    {
        $this->questionList[] = $this->getPyke();
    }
    private function createBrand()
    {
        $this->questionList[] = $this->getBrand();
    }
    private function createYuumi()
    {
        $this->questionList[] = $this->getYuumi();
    }
    private function createMilio()
    {
        $this->questionList[] = $this->getMilio();
    }
    private function createKarma()
    {
        $this->questionList[] = $this->getKarma();
    }
    private function createHeimerdinger()
    {
        $this->questionList[] = $this->getHeimerdinger();
    }
    private function createNami()
    {
        $this->questionList[] = $this->getNami();
    }
    private function createLeona()
    {
        $this->questionList[] = $this->getLeona();
    }
    private function createSenna()
    {
        $this->questionList[] = $this->getSenna();
    }
    private function createSoraka()
    {
        $this->questionList[] = $this->getSoraka();
    }
    private function createZilean   ()
    {
        $this->questionList[] = $this->getZilean();
    }
    private function createTaric()
    {
        $this->questionList[] = $this->getTaric();
    }
    private function createNeeko()
    {
        $this->questionList[] = $this->getNeeko();
    }
    private function createVelKoz()
    {
        $this->questionList[] = $this->getVelkoz();
    }
    private function createPantheoin()
    {
        $this->questionList[] = $this->getPantheon();
    }
    private function createBard()
    {
        $this->questionList[] = $this->getbard();
    }
    private function createBraum()
    {
        $this->questionList[] = $this->getBraum();
    }
    private function createAlsitar()
    {
        $this->questionList[] = $this->getAlistar();
    }
    private function createJanna()
    {
        $this->questionList[] = $this->getJanna();
    }
    private function createRenataGlasc()
    {
        $this->questionList[] = $this->getRenataGlasc();
    }
    private function createSona()
    {
        $this->questionList[] = $this->getSona();
    }
    private function createRakan()
    {
        $this->questionList[] = $this->getRakan();
    }
    private function createRell()
    {
        $this->questionList[] = $this->getRell();
    }
    private function createSeraphine()
    {
        $this->questionList[] = $this->getSeraphine();
    }
    private function createZyra()
    {
        $this->questionList[] = $this->getZyra();

    //---------------------------------------------------------------------------------------------------------------------------

    //---------------------------------------------ADC------METODS---------------------------------------------------------------
    private function createTristana()
    {
        $this->questionList[] = $this->getTristana();
    }
    private function createZiggs()
    {
        $this->questionList[] = $this->getZiggs();
    }
    private function createTwitch()
    {
        $this->questionList[] = $this->getTwitch();
    }
    private function createVayne()
    {
        $this->questionList[] = $this->getVayne();
    }
    private function createVarus()
    {
        $this->questionList[] = $this->getVarus();
    }
    private function createLucian()
    {
        $this->questionList[] = $this->getLucian();
    }
    private function createMissFortune()
    {
        $this->questionList[] = $this->getMissFortune();
    }
    private function createEzreal()
    {
        $this->questionList[] = $this->getEzreal();
    }
    private function createYasuo()
    {
        $this->questionList[] = $this->getYasuo();
    }
    private function createSivir()
    {
        $this->questionList[] = $this->getSivir();
    }
    private function createCaitlyn()
    {
        $this->questionList[] = $this->getCaitlyn();
    }
    private function createDraven()
    {
        $this->questionList[] = $this->getDraven();
    }
    private function createJinx()
    {
        $this->questionList[] = $this->getJinx();
    }
    private function createKalista()
    {
        $this->questionList[] = $this->getKalista();
    }
    private function createKaisa()
    {
        $this->questionList[] = $this->getKaisa();
    }
    private function createSamira()
    {
        $this->questionList[] = $this->getSamira();
    }
    private function createAshe()
    {
        $this->questionList[] = $this->getAshe();
    }
    private function createJihn()
    {
        $this->questionList[] = $this->getJihn();
    }
    private function createNilah()
    {
        $this->questionList[] = $this->getNilah();
    }
    private function createAphelios()
    {
        $this->questionList[] = $this->getAphelios();
    }
    private function createKogmaw()
    {
        $this->questionList[] = $this->getKogmaw();
    }
    private function createXayah()
    {
        $this->questionList[] = $this->getXayah();
    }
    private function createZeri()
    {
        $this->questionList[] = $this->getZeri();
    }
    private function createCassiopeia()
    {
        $this->questionList[] = $this->getCassiopeia();
    }
    //---------------------------------------------------------------------------------------------------------------------------

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
    //---------------------------------------------------------------------------------------------------------------------------

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
    //---------------------------------------------------------------------------------------------------------------------------

    //---------------------------------------------JUNGLE------METODS------------------------------------------------------------
    private function createEkko()
    {
        $this->questionList[] = $this->getEkko();
    }
    private function createDiana()
    {
        $this->questionList[] = $this->getDiana();
    }
    private function createViego()
    {
        $this->questionList[] = $this->getViego();
    }
    private function createKayn()
    {
        $this->questionList[] = $this->getKayn();
    }
    private function createShaco()
    {
        $this->questionList[] = $this->getShaco();
    }
    private function createSylas()
    {
        $this->questionList[] = $this->getSylas();
    }
    private function createNunu()
    {
        $this->questionList[] = $this->getNunu();
    }
    private function createZac()
    {
        $this->questionList[] = $this->getZac();
    }
    private function createIvern()
    {
        $this->questionList[] = $this->getIvern();
    }
    private function createKhartus()
    {
        $this->questionList[] = $this->getKhartus();
    }
    private function createMasterYi()
    {
        $this->questionList[] = $this->getMasterYi();
    }
    private function createVi()
    {
        $this->questionList[] = $this->getVi();
    }
    private function createKhaZix()
    {
        $this->questionList[] = $this->getKhaZix();
    }
    private function createEvelinn()
    {
        $this->questionList[] = $this->getEvelynn();
    }
    private function createJarvanIV()
    {
        $this->questionList[] = $this->getJarvanIV();
    }
    private function createGragas()
    {
        $this->questionList[] = $this->getGragas();
    }
    private function createAmumu()
    {
        $this->questionList[] = $this->getAmumu();
    }
    private function createWarwick()
    {
        $this->questionList[] = $this->getWarwick();
    }
    private function createPoppy()
    {
        $this->questionList[] = $this->getPoppy();
    }
    private function createTrundle()
    {
        $this->questionList[] = $this->getTrundle();
    }
    private function createRammus()
    {
        $this->questionList[] = $this->getRammus();
    }
    private function createGraves()
    {
        $this->questionList[] = $this->getGraves();
    }
    private function createHacarim()
    {
        $this->questionList[] = $this->getHacarim();
    }
    private function createNidalee()
    {
        $this->questionList[] = $this->getNidalee();
    }
    private function createShyvana()
    {
        $this->questionList[] = $this->getShyvana();
    }
    private function createTailyah()
    {
        $this->questionList[] = $this->getTailyah();
    }
    private function createSejuani()
    {
        $this->questionList[] = $this->getSejuani();
    }
    private function createNocturne()
    {
        $this->questionList[] = $this->getNocturne();
    }
    private function createFiddlesticks()
    {
        $this->questionList[] = $this->getFiddlesticks();
    }
    private function createRengar()
    {
        $this->questionList[] = $this->getRengar();
    }
    private function createSkarner()
    {
        $this->questionList[] = $this->getSkarner();
    }
    private function createXinZhao()
    {
        $this->questionList[] = $this->getXinZhao();
    }
    private function createBelVeth()
    {
        $this->questionList[] = $this->getBelVeth();
    }
    private function createBriar()
    {
        $this->questionList[] = $this->getBriar();
    }
    private function createElise()
    {
        $this->questionList[] = $this->getElise();
    }
    private function createKinred()
    {
        $this->questionList[] = $this->getKinred();
    }
    private function createLeeSin()
    {
        $this->questionList[] = $this->getLeeSin();
    }
    private function createLillia()
    {
        $this->questionList[] = $this->getLillia();
    }
    private function createMaokai()
    {
        $this->questionList[] = $this->getMaokai();
    }
    private function createRekSai()
    {
        $this->questionList[] = $this->getRekSai();
    }
    private function createUdyr()
    {
        $this->questionList[] = $this->getUdyr();
    }
    private function createWukong()
    {
        $this->questionList[] = $this->getWukong();
    }
    //---------------------------------------------------------------------------------------------------------------------------

*/

    // Create methods for result champions

    private function createPlaceHolder()
    {
        $this->questionList[] = $this->getPlaceHolder();
    }
    private function createGaren()
    {
        $this->questionList[] = $this->getGaren();
    }
    private function createSett()
    {
        $this->questionList[] = $this->getSett();
    }
    private function createSion()
    {
        $this->questionList[] = $this->getSion();
    }
    private function createMalphite()
    {
        $this->questionList[] = $this->getMalphite();
    }
    private function createRiven()
    {
        $this->questionList[] = $this->getRiven();
    }
    private function createMasterYi()
    {
        $this->questionList[] = $this->getMasterYi();
    }
    private function createKhaZix()
    {
        $this->questionList[] = $this->getKhaZix();
    }
    private function createKayn()
    {
        $this->questionList[] = $this->getKayn();
    }
    private function createPyke()
    {
        $this->questionList[] = $this->getPyke();
    }
    private function createPantheon()
    {
        $this->questionList[] = $this->getPantheon();
    }
    private function createLeona()
    {
        $this->questionList[] = $this->getLeona();
    }
    private function createNautilus()
    {
        $this->questionList[] = $this->getNautilus();
    }
    private function createTaric()
    {
        $this->questionList[] = $this->getTaric();
    }
    private function createVelKoz()
    {
        $this->questionList[] = $this->getVelKoz();
    }
    private function createXerath()
    {
        $this->questionList[] = $this->getXerath();
    }
    private function createAnnie()
    {
        $this->questionList[] = $this->getAnnie();
    }
    private function createVictor()
    {
        $this->questionList[] = $this->getVictor();
    }
    private function createCassiopeia()
    {
        $this->questionList[] = $this->getCassiopeia();
    }
    private function createRyze()
    {
        $this->questionList[] = $this->getRyze();
    }
    private function createSoraka()
    {
        $this->questionList[] = $this->getSoraka();
    }
    private function createKarma()
    {
        $this->questionList[] = $this->getKarma();
    }
    private function createJanna()
    {
        $this->questionList[] = $this->getJanna();
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