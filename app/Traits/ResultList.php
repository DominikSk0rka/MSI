<?php

namespace App\Traits;

use App\Classes\Result;

trait ResultList
{





    public function getPlaceHolder()
    {
        return new Result("I can't believe you came here!", "https://i.pinimg.com/originals/ec/bc/ca/ecbcca858e30291003151c8c16b2d206.gif", "that's what she said");
    }



    public function getLucian()
    {
        $name = "Lucian";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lucian_0.jpg";
        $description = "The Purifier";
        return new Result($name, $linkToImage, $description);
    }
    public function getVayne()
    {
        $name = "Vayne";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vayne_0.jpg";
        $description = "The Night Hunter";
        return new Result($name, $linkToImage, $description);
    }
    public function getVarus()
    {
        $name = "Varus";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Varus_0.jpg";
        $description = "The Arrow of Retribution";
        return new Result($name, $linkToImage, $description);
    }
    public function getSamira()
    {
        $name = "Samira";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Samira_0.jpg";
        $description = "The Desert Rose";
        return new Result($name, $linkToImage, $description);
    }
    public function getSivir()
    {
        $name = "Sivir";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sivir_0.jpg";
        $description = "The Battle Mistress";
        return new Result($name, $linkToImage, $description);
    }
    public function getJinx()
    {
        $name = "Jinx";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jinx_0.jpg";
        $description = "The Loose Cannon";
        return new Result($name, $linkToImage, $description);
    }
    public function getKalista()
    {
        $name = "Kalista";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kalista_0.jpg";
        $description = "The Spear Of Vengeance";
        return new Result($name, $linkToImage, $description);
    }
    
    public function getKaiSa()
    {
        $name = "Kai'Sa";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kaisa_0.jpg";
        $description = "Daughter of The Void";
        return new Result($name, $linkToImage, $description);
    }
    public function getJihn()
    {
        $name = "Jihn";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jhin_0.jpg";
        $description = "The Virtuoso";
        return new Result($name, $linkToImage, $description);
    }
    public function getAphelios()
    {
        $name = "Aphelios";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aphelios_0.jpg";
        $description = "The Prodigal Explorer";
        return new Result($name, $linkToImage, $description);
    }
    public function getEzreal()
    {
        $name = "Ezreal";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ezreal_0.jpg";
        $description = "The Weapon Of The Faithful";
        return new Result($name, $linkToImage, $description);
    }
    public function getAshe()
    {
        $name = "Ashe";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ashe_0.jpg";
        $description = "The Frost Fighter";
        return new Result($name, $linkToImage, $description);
    }
    public function getCaitlyn()
    {
        $name = "Caitlyn";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Caitlyn_0.jpg";
        $description = "The Sheriff Of Piltover";
        return new Result($name, $linkToImage, $description);
    }
    public function getDraven()
    {
        $name = "Draven";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Draven_0.jpg";
        $description = "The Glorious Executioner";
        return new Result($name, $linkToImage, $description);
    }
    public function getTristana()
    {
        $name = "Tristana";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Tristana_0.jpg";
        $description = "The Yordle Gunner";
        return new Result($name, $linkToImage, $description);
    }
    public function getTwitch()
    {
        $name = "Twitch";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Twitch_0.jpg";
        $description = "The Plague Rat";
        return new Result($name, $linkToImage, $description);
    }
    public function getXayah()
    {
        $name = "Xayah";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Xayah_0.jpg";
        $description = "The Rebel";
        return new Result($name, $linkToImage, $description);
    }
    public function getZeri()
    {
        $name = "Zeri";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zeri_0.jpg";
        $description = "The Spark of Zaun";
        return new Result($name, $linkToImage, $description);
    }
    public function getKogMaw()
    {
        $name = "Kog'Maw";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/KogMaw_0.jpg";
        $description = "The Mouth of The Abyss";
        return new Result($name, $linkToImage, $description);
    }
    public function getMissFortune()
    {
        $name = "Miss Fortune";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/MissFortune_0.jpg";
        $description = "The Bounty Hunter";
        return new Result($name, $linkToImage, $description);
    }
    public function getNilah()
    {
        $name = "Nilah";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nilah_0.jpg";
        $description = "The Joy Unbound";
        return new Result($name, $linkToImage, $description);
    }
   
   
   
    



    //----------------------------------------------------------------------------------------------------------------------------------------------------
    public function getKatarina()
    {
        $name = "Katarina";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Katarina_0.jpg";
        $description = "The Sinister Blade";
        return new Result($name, $linkToImage, $description);
    }
    public function getZiggs()
    {
        $name = "Ziggs";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ziggs_0.jpg";
        $description = "The Hexplosives Expert";
        return new Result($name, $linkToImage, $description);
    }
    public function getHeimerdinger()
    {
        $name = "Heimerdinger";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Corki_0.jpg";
        $description = "The Revered Inventor";
        return new Result($name, $linkToImage, $description);
    }
    public function getCorki()
    {
        $name = "Corki";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Corki_0.jpg";
        $description = "The Darling Bombardier";
        return new Result($name, $linkToImage, $description);
    }
    public function getVex()
    {
        $name = "Vex";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vex_0.jpg";
        $description = "The Gloomist";
        return new Result($name, $linkToImage, $description);
    }
    public function getRyze()
    {
        $name = "Ryze";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ryze_0.jpg";
        $description = "The rune mage";
        return new Result($name, $linkToImage, $description);
    }
    public function getAzir()
    {
        $name = "Azir";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Azir_0.jpg";
        $description = "The Emperor Of The Sands";
        return new Result($name, $linkToImage, $description);
    }
    public function getAurelionSol()
    {
        $name = "Aurelion Sol";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/AurelionSol_0.jpg";
        $description = "The Star Forger";
        return new Result($name, $linkToImage, $description);
    }
    public function getLeblanc()
    {
        $name = "LeBlanc";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Leblanc_0.jpg";
        $description = "The Deceiver";
        return new Result($name, $linkToImage, $description);
    }
    public function getCassiopeia()
    {
        $name = "Cassiopeia";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Cassiopeia_0.jpg";
        $description = "the Serpent's Embrace";
        return new Result($name, $linkToImage, $description);
    }
    public function getVictor()
    {
        $name = "Victor";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Viktor_0.jpg";
        $description = "Viktor, the Machine Herald";
        return new Result($name, $linkToImage, $description);
    }
    public function getVeigar()
    {
        $name = "Veigar";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Veigar_0.jpg";
        $description = "The Tiny Master of Evil";
        return new Result($name, $linkToImage, $description);
    }
    public function getSylas()
    {
        $name = "Sylas";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sylas_0.jpg";
        $description = "The Unshackled";
        return new Result($name, $linkToImage, $description);
    }
    public function getVladimir()
    {
        $name = "Vladimir";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vladimir_0.jpg";
        $description = "The Crimson Reaper";
        return new Result($name, $linkToImage, $description);
    }
    public function getTalon()
    {
        $name = "Talon";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Talon_0.jpg";
        $description = "The Blade's Shadow";
        return new Result($name, $linkToImage, $description);
    }
    public function getZoe()
    {
        $name = "Zoe";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zoe_0.jpg";
        $description = "The Aspect of Twilight";
        return new Result($name, $linkToImage, $description);
    }
    public function getAnnie()
    {
        $name = "Annie";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Annie_0.jpg";
        $description = "the Dark Child";
        return new Result($name, $linkToImage, $description);
    }
    public function getXerath()
    {
        $name = "Xerath";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Xerath_0.jpg";
        $description = "the Magus Ascendant";
        return new Result($name, $linkToImage, $description);
    }
    public function getVelKoz()
    {
        $name = "Vel'Koz";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Velkoz_0.jpg";
        $description = "the Eye of the Void";
        return new Result($name, $linkToImage, $description);
    }
    public function getAhri()
    {
        $name = "Ahri";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_0.jpg";
        $description = "The Nine-Tailed Fox";
        return new Result($name, $linkToImage, $description);
    }
    public function getAkali()
    {
        $name = "Akali";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Akali_0.jpg";
        $description = "The Rouge Sentinel";
        return new Result($name, $linkToImage, $description);
    }
    public function getAkshan()
    {
        $name = "Akshan";
        $linkToImage = "https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt58b3304a9d38b091/60f5d6e21929bc58854d00a6/072221_AkshanChampionTheme_Banner.jpg";
        $description = "The Rouge Assassin";
        return new Result($name, $linkToImage, $description);
    }
    public function getAnivia()
    {
        $name = "Anivia";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Anivia_0.jpg";
        $description = "The Cryophoenix";
        return new Result($name, $linkToImage, $description);
    }
    public function getFizz()
    {
        $name = "Fizz";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Fizz_0.jpg";
        $description = "The Tidal Trickster";
        return new Result($name, $linkToImage, $description);
    }
    public function getGalio()
    {
        $name = "Galio";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Galio_0.jpg";
        $description = "The Colossus";
        return new Result($name, $linkToImage, $description);
    }
    public function getSyndra()
    {
        $name = "Syndra";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Syndra_0.jpg";
        $description = "The dark Sovereign";
        return new Result($name, $linkToImage, $description);
    }
    public function getTaliyah()
    {
        $name = "Taliyah";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Taliyah_0.jpg";
        $description = "The Stoneweaver";
        return new Result($name, $linkToImage, $description);
    }
    public function getTwistedFate()
    {
        $name = "Twisted Fate";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/TwistedFate_0.jpg";
        $description = "The Cart Master";
        return new Result($name, $linkToImage, $description);
    }
    public function getYasuo()
    {
        $name = "Yasuo";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yasuo_0.jpg";
        $description = "The Unforgiven";
        return new Result($name, $linkToImage, $description);
    }
    public function getYone()
    {
        $name = "yone";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yone_0.jpg";
        $description = "The Unforgotten";
        return new Result($name, $linkToImage, $description);
    }
    public function getZed()
    {
        $name = "Zed";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zed_0.jpg";
        $description = "The Master of Shadows";
        return new Result($name, $linkToImage, $description);
    }
    public function getKassadin()
    {
        $name = "Kassadin";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kassadin_0.jpg";
        $description = "The Void Walker";
        return new Result($name, $linkToImage, $description);
    }
    public function getLissandra()
    {
        $name = "Lissandra";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lissandra_0.jpg";
        $description = "The Ice Witch";
        return new Result($name, $linkToImage, $description);
    }
    public function getMalzahar()
    {
        $name = "Malzahar";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Malzahar_0.jpg";
        $description = "The Prophet of The Void";
        return new Result($name, $linkToImage, $description);
    }
    public function getNaafiri()
    {
        $name = "Naafiri";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Naafiri_0.jpg";
        $description = "The Hound of A Hundred Bites";
        return new Result($name, $linkToImage, $description);
    }
    public function getNeeko()
    {
        $name = "Neeko";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Neeko_0.jpg";
        $description = "The Curious Chameleon";
        return new Result($name, $linkToImage, $description);
    }
    public function getOriana()
    {
        $name = "Orianna";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Orianna_0.jpg";
        $description = "The Lady of Clockwork";
        return new Result($name, $linkToImage, $description);
    }
    public function getQiyana()
    {
        $name = "Qiyana";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Qiyana_0.jpg";
        $description = "Empress of The Elements";
        return new Result($name, $linkToImage, $description);
    }






//---------------------------------------------------------------------------------------------------------------------    
    public function getNami()
    {
        $name = "Nami";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nami_0.jpg";
        $description = "The Tidecaller";
        return new Result($name, $linkToImage, $description);
    }
    public function getThresh()
    {
        $name = "Thresh";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Thresh_0.jpg";
        $description = "The Chain Warden";
        return new Result($name, $linkToImage, $description);
    }
    public function getSwain()
    {
        $name = "Swain";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Swain_0.jpg";
        $description = "The Noxian Grand General";
        return new Result($name, $linkToImage, $description);
    }
    public function getShaco()
    {
        $name = "Shaco";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Shaco_0.jpg";
        $description = "The Demon Jester";
        return new Result($name, $linkToImage, $description);
    }
    public function getSona()
    {
        $name = "Sona";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sona_0.jpg";
        $description = "Maven of The Strings";
        return new Result($name, $linkToImage, $description);
    }
    public function getSenna()
    {
        $name = "Senna";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Senna_0.jpg";
        $description = "The Redeemer";
        return new Result($name, $linkToImage, $description);
    }
    public function getBraum()
    {
        $name = "Braum";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Braum_0.jpg";
        $description = "The Heart Of The Freljord";
        return new Result($name, $linkToImage, $description);
    }
    public function getBrand()
    {
        $name = "Brand";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Brand_0.jpg";
        $description = "The Burning Vengeance";
        return new Result($name, $linkToImage, $description);
    }
    public function getBlitzcrank()
    {
        $name = "Blitzcrank";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Blitzcrank_0.jpg";
        $description = "The Great steam Golem";
        return new Result($name, $linkToImage, $description);
    }
    public function getAlistar()
    {
        $name = "Alistar";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Alistar_0.jpg";
        $description = "The Minotaur";
        return new Result($name, $linkToImage, $description);
    }
    public function getSoraka()
    {
        $name = "Soraka";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Soraka_0.jpg";
        $description = "The Starchild";
        return new Result($name, $linkToImage, $description);
    }
    public function getZyra()
    {
        $name = "Zyra";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zyra_0.jpg";
        $description = "Rise of The Thorns";
        return new Result($name, $linkToImage, $description);
    }
    public function getKarma()
    {
        $name = "Karma";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Karma_0.jpg";
        $description = "the Enlightened One";
        return new Result($name, $linkToImage, $description);
    }
    public function getJanna()
    {
        $name = "Janna";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Janna_0.jpg";
        $description = "the Storm's Fury";
        return new Result($name, $linkToImage, $description);
    }
    public function getBard()
    {
        $name = "Bard";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Bard_0.jpg";
        $description = "The Wandering Caretaker";
        return new Result($name, $linkToImage, $description);
    }
    public function getYuumi()
    {
        $name = "Yuumi";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yuumi_0.jpg";
        $description = "The Magical Cat";
        return new Result($name, $linkToImage, $description);
    }
    public function getNoutilius()
    {
        $name = "Noutilius";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nautilus_0.jpg";
        $description = "the Titan of the Depths";
        return new Result($name, $linkToImage, $description);
    }
    public function getTaric()
    {
        $name = "Taric";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Taric_0.jpg";
        $description = "the Shield of Valoran";
        return new Result($name, $linkToImage, $description);
    }
    public function getLeona()
    {
        $name = "Leona";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Leona_0.jpg";
        $description = "the Radiant Dawn";
        return new Result($name, $linkToImage, $description);
    }
    public function getPyke()
    {
        $name = "Pyke";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Pyke_0.jpg";
        $description = "the Bloodharbor Ripper";
        return new Result($name, $linkToImage, $description);
    }
    public function getPantheon()
    {
        $name = "Pantheon";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Pantheon_0.jpg";
        $description = "the Unbreakable Spear";
        return new Result($name, $linkToImage, $description);
    }
    public function getSeraphine()
    {
        $name = "Seraphine";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Seraphine_0.jpg";
        $description = "The Starry-Eyed Songstress";
        return new Result($name, $linkToImage, $description);
    }
    public function getZilean()
    {
        $name = "Zilean";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zilean_0.jpg";
        $description = "The Chronokeeper";
        return new Result($name, $linkToImage, $description);
    }
    public function getLulu()
    {
        $name = "Lulu";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lulu_0.jpg";
        $description = "The Fea Sorceress";
        return new Result($name, $linkToImage, $description);
    }
    public function getLux()
    {
        $name = "lux";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lux_0.jpg";
        $description = "The Lady of Luminosty";
        return new Result($name, $linkToImage, $description);
    }
    public function getMilio()
    {
        $name = "Milio";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Milio_0.jpg";
        $description = "The Gentle Flame";
        return new Result($name, $linkToImage, $description);
    }
    public function getMorgana()
    {
        $name = "Morgana";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Morgana_0.jpg";
        $description = "The Fallen";
        return new Result($name, $linkToImage, $description);
    }
    public function getRell()
    {
        $name = "Rell";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rell_0.jpg";
        $description = "The Iron Maiden";
        return new Result($name, $linkToImage, $description);
    }
    public function getRenataGlasc()
    {
        $name = "RenataGlasc";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Renata_0.jpg";
        $description = "The Chem-Baroness";
        return new Result($name, $linkToImage, $description);
    }
    public function getRakan()
    {
        $name = "Rakan";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rakan_0.jpg";
        $description = "The Charmer";
        return new Result($name, $linkToImage, $description);
    }
    

    //----------------------------------------------------------------------------------------------------------------------------------------------------
    public function getMaokai()
    {
        $name = "Maokai";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Maokai_0.jpg";
        $description = "The Twisted Treantr";

        return new Result($name, $linkToImage, $description);
    }
    public function getNocturne()
    {
        $name = "Nocturne";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nocturne_0.jpg";
        $description = "The Eternal Nightmare";

        return new Result($name, $linkToImage, $description);
    }
    public function getNunu()
    {
        $name = "Nunu & Willump";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nunu_0.jpg";
        $description = "The Boy And His Yeti";

        return new Result($name, $linkToImage, $description);
    }
    public function getKarthus()
    {
        $name = "Karthus";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Karthus_0.jpg";
        $description = "The DeatHsinger";

        return new Result($name, $linkToImage, $description);
    }
    public function getLeeSin()
    {
        $name = "Lee Sin";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/LeeSin_0.jpg";
        $description = "The Blind Monk";

        return new Result($name, $linkToImage, $description);
    }
    public function getVi()
    {
        $name = "Vi";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vi_0.jpg";
        $description = "The Piltover Enforcer";

        return new Result($name, $linkToImage, $description);
    }
    public function getZac()
    {
        $name = "Zac";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zac_0.jpg";
        $description = "The Secret Weapon";

        return new Result($name, $linkToImage, $description);
    }
    public function getRengar()
    {
        $name = "Rengar";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rengar_0.jpg";
        $description = "The Pridestalker";

        return new Result($name, $linkToImage, $description);
    }
    public function getTrundle()
    {
        $name = "Trundle";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Trundle_0.jpg";
        $description = "The Troll King";

        return new Result($name, $linkToImage, $description);
    }
    public function getNidalee()
    {
        $name = "Nidalee";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nidalee_0.jpg";
        $description = "The Bestial Huntress";

        return new Result($name, $linkToImage, $description);
    }
    public function getJarvanIV()
    {
        $name = "Jarvan IV";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Hecarim_0.jpg";
        $description = "The Exemplar of Demacia";

        return new Result($name, $linkToImage, $description);
    }
    public function getHecarim()
    {
        $name = "Hecarim";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Hecarim_0.jpg";
        $description = "The Shadow of War";

        return new Result($name, $linkToImage, $description);
    }
    public function getSejuani()
    {
        $name = "Sejuani";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sejuani_0.jpg";
        $description = "Fury Of The North";

        return new Result($name, $linkToImage, $description);
    }
    public function getXinZhao()
    {
        $name = "XinZhao";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/XinZhao_0.jpg";
        $description = "The Seneschal of Demacia";

        return new Result($name, $linkToImage, $description);
    }
    public function getSkarner()
    {
        $name = "Skarner";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Skarner_0.jpg";
        $description = "The Crystal Vanguard";

        return new Result($name, $linkToImage, $description);
    }
    public function getViego()
    {
        $name = "Viego";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Viego_0.jpg";
        $description = "The Ruined King";

        return new Result($name, $linkToImage, $description);
    }
    public function getGraves()
    {
        $name = "Graves";
        $linkToImage = "https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt5796e3d258e95471/5e83cb29cfad926479634951/Graves_00_Base-Cigar.jpg";
        $description = "The Outlaw";

        return new Result($name, $linkToImage, $description);
    }
    public function getEvelynn()
    {
        $name = "Evelynn";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Evelynn_0.jpg";
        $description = "Agony's Emberance";

        return new Result($name, $linkToImage, $description);
    }
    public function getElise()
    {
        $name = "Elise";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Elise_0.jpg";
        $description = "The Spider Queen";

        return new Result($name, $linkToImage, $description);
    }
    public function getEkko()
    {
        $name = "Ekko";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ekko_0.jpg";
        $description = "The Boy Who Shattered Time";

        return new Result($name, $linkToImage, $description);
    }
    public function getBriar()
    {
        $name = "Briar";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Briar_0.jpg";
        $description = "The Restrained Hunger";

        return new Result($name, $linkToImage, $description);
    }
    public function getWarwick()
    {
        $name = "Warwick";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Warwick_0.jpg";
        $description = "The Uncaged Warth Of Zaunr";

        return new Result($name, $linkToImage, $description);
    }
    public function getDiana()
    {
        $name = "Diana";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Diana_0.jpg";
        $description = "Scorn Of The Moon";

        return new Result($name, $linkToImage, $description);
    }
    public function getKayn()
    {
        $name = "Kayn";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kayn_0.jpg";
        $description = "the Shadow Reaper";
        return new Result($name, $linkToImage, $description);
    }
    public function getKhaZix()
    {
        $name = "Kha'zix";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Khazix_0.jpg";
        $description = "the Voidreaver";
        return new Result($name, $linkToImage, $description);
    }
    public function getMasterYi()
    {
        $name = "Master Yi";
        $linkToImage = "https://www.lolporadnik.pl/wp-content/uploads/2020/12/master-yi.jpg";
        $description = "the Wuju Bladesman";
        return new Result($name, $linkToImage, $description);
    }
    public function getAmumu()
    {
        $name = "Amummu";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Amumu_0.jpg";
        $description = "The Sad Mummy";
        return new Result($name, $linkToImage, $description);
    }
    public function getLillia()
    {
        $name = "Lillia";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lillia_0.jpg";
        $description = "The Bashful Bloom";
        return new Result($name, $linkToImage, $description);
    }
    public function getBelVeth()
    {
        $name = "Bel'Veth";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Belveth_0.jpg";
        $description = "The Sad Mummy";
        return new Result($name, $linkToImage, $description);
    }
    public function getFiddlesticks()
    {
        $name = "Fiddlesticks";
        $linkToImage = "https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blteafcbfed69c501b5/61e2114879b5bd5a1ef7b2ea/011422_Fiddlesticks_Splash_v1.jpg";
        $description = "The Ancient Fear";
        return new Result($name, $linkToImage, $description);
    }
    public function getWukong()
    {
        $name = "Wukong";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/MonkeyKing_0.jpg";
        $description = "The Monkey King";
        return new Result($name, $linkToImage, $description);
    }
    public function getIvern()
    {
        $name = "Ivern";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ivern_0.jpg";
        $description = "The Green Father";
        return new Result($name, $linkToImage, $description);
    }
    public function getShyvana()
    {
        $name = "Shyvana";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Shyvana_0.jpg";
        $description = "The Half-Dragon";
        return new Result($name, $linkToImage, $description);
    }
    public function getUdyr()
    {
        $name = "Udyr";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Udyr_0.jpg";
        $description = "The Spirit Walker";
        return new Result($name, $linkToImage, $description);
    }
    public function getKindred()
    {
        $name = "Kindred";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kindred_0.jpg";
        $description = "The Eternal Hunters";
        return new Result($name, $linkToImage, $description);
    }
    public function getRmmus()
    {
        $name = "Rammus";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rammus_0.jpg";
        $description = "The Armordillo Ok!";
        return new Result($name, $linkToImage, $description);
    }
    public function getRekSai()
    {
        $name = "Rek'Sai";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/RekSai_0.jpg";
        $description = "The Void Burrower";
        return new Result($name, $linkToImage, $description);
    }





    
    //----------------------------------------------------------------------------------------------------------------------------------------------------
    public function getQuinn()
    {
        $name = "Quinn";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Quinn_0.jpg";
        $description = "Demacia's Wings";
        return new Result($name, $linkToImage, $description);
    }
    public function getRenekton()
    {
        $name = "Poppy";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Renekton_0.jpg";
        $description = "The Butcher of The Sands";
        return new Result($name, $linkToImage, $description);
    }
    public function getPoppy()
    {
        $name = "Poppy";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Poppy_0.jpg";
        $description = "Keeper of The Hammer";
        return new Result($name, $linkToImage, $description);
    }
    public function getOrnn()
    {
        $name = "Ornn";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ornn_0.jpg";
        $description = "The Fire Below The Mountain";
        return new Result($name, $linkToImage, $description);
    }
    public function getOlaf()
    {
        $name = "Olaf";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Olaf.jpg";
        $description = "The Berserker";
        return new Result($name, $linkToImage, $description);
    }
    public function getKennen()
    {
        $name = "Tryndamere";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kennen_0.jpg";
        $description = "The Heart of The Tempest";
        return new Result($name, $linkToImage, $description);
    }
    public function getTryndamere()
    {
        $name = "Tryndamere";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Tryndamere_0.jpg";
        $description = "The Barbarian King";
        return new Result($name, $linkToImage, $description);
    }
    public function getTeemo()
    {
        $name = "Teemo";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Teemo_0.jpg";
        $description = "The Swift Scout";
        return new Result($name, $linkToImage, $description);
    }
    public function getMordekaiser()
    {
        $name = "Mordekaiser";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Mordekaiser_0.jpg";
        $description = "The Iron Revenant";
        return new Result($name, $linkToImage, $description);
    }
    public function getRumble()
    {
        $name = "Rumble";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rumble_0.jpg";
        $description = "The Mechanized Menace";
        return new Result($name, $linkToImage, $description);
    }
    public function getGwen()
    {
        $name = "Gwen";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Darius_0.jpg";
        $description = "The Hallowed Seamstress";
        return new Result($name, $linkToImage, $description);
    }
    public function getKayle()
    {
        $name = "Kayle";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kayle_0.jpg";
        $description = "The Righteous";
        return new Result($name, $linkToImage, $description);
    }
    public function getDarius()
    {
        $name = "Darius";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Darius_0.jpg";
        $description = "The Hand of Noxus";
        return new Result($name, $linkToImage, $description);
    }
    public function getGaren()
    {
        $name = "Garen";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Garen_0.jpg";
        $description = "The Might of Demacia";
        return new Result($name, $linkToImage, $description);
    }
    
    public function getCamile()
    {
        $name = "Camile";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Camille_0.jpg";
        $description = "The Steel Shadow";
        return new Result($name, $linkToImage, $description);
    }
    public function getSett()
    {
        $name = "Sett";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sett_0.jpg";
        $description = "the Boss";
        return new Result($name, $linkToImage, $description);
    }
    public function getMalphite()
    {
        $name = "Malphite";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Malphite_0.jpg";
        $description = "Shard of the Monolith";
        return new Result($name, $linkToImage, $description);
    }
    public function getSion()
    {
        $name = "Sion";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sion_0.jpg";
        $description = "The Undead Juggernaut";
        return new Result($name, $linkToImage, $description);
    }
    public function getRiven()
    {
        $name = "Riven";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Riven_0.jpg";
        $description = "the Exile";
        return new Result($name, $linkToImage, $description);
    }
    public function getAtrox()
    {
        $name = "Atrox";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_0.jpg";
        $description = "The Darkin Blade";
        return new Result($name, $linkToImage, $description);
    }
    public function getChoGath()
    {
        $name = "Cho'Gath";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Chogath_0.jpg";
        $description = "The Terror of The Void";
        return new Result($name, $linkToImage, $description);
    }
    public function getDrMundo()
    {
        $name = "Dr.Mundo";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/DrMundo_0.jpg";
        $description = "The Madman of Zaun";
        return new Result($name, $linkToImage, $description);
    }
    public function getNasus()
    {
        $name = "Nasus";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nasus_0.jpg";
        $description = "The Curator of The Sands";
        return new Result($name, $linkToImage, $description);
    }
    public function getFiora()
    {
        $name = "Fiora";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Fiora_0.jpg";
        $description = "The Grand Duelist";
        return new Result($name, $linkToImage, $description);
    }
    public function getGankPlank()
    {
        $name = "Gankplank";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Fiora_0.jpg";
        $description = "The SaltWater Scourge";
        return new Result($name, $linkToImage, $description);
    }
    public function getGnar()
    {
        $name = "Gnar";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Gnar_0.jpg";
        $description = "The Missing Link";
        return new Result($name, $linkToImage, $description);
    }
    public function getKled()
    {
        $name = "Kled";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kled_0.jpg";
        $description = "The Cantankerous Cavalier";
        return new Result($name, $linkToImage, $description);
    }
    public function getGragas()
    {
        $name = "Gragas";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Gragas_0.jpg";
        $description = "The Rabble Rouser";
        return new Result($name, $linkToImage, $description);
    }
    public function getIlaoi()
    {
        $name = "Ilaoi";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Illaoi_0.jpg";
        $description = "The Kraken Priestessr";
        return new Result($name, $linkToImage, $description);
    }
    public function getIrelia()
    {
        $name = "Irelia";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Irelia_0.jpg";
        $description = "The Blade Dancer";
        return new Result($name, $linkToImage, $description);
    }
    public function getJax()
    {
        $name = "Jax";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jax_0.jpg";
        $description = "Grandmaster at Arms";
        return new Result($name, $linkToImage, $description);
    }
    public function getJayce()
    {
        $name = "Jayce";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jayce_0.jpg";
        $description = "The Deffender of Tomorrow";
        return new Result($name, $linkToImage, $description);
    }
    public function getKaSante()
    {
        $name = "K'Sante";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/KSante_0.jpg";
        $description = "The Pride of Nazumah";
        return new Result($name, $linkToImage, $description);
    }
    public function getShen()
    {
        $name = "Shen";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Shen_0.jpg";
        $description = "The Eye of Twilight";
        return new Result($name, $linkToImage, $description);
    }
    public function getSinged()
    {
        $name = "Singed";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Singed_0.jpg";
        $description = "The Mad Chemiset";
        return new Result($name, $linkToImage, $description);
    }
    public function getTahmKench()
    {
        $name = "Tahm Kench";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/TahmKench_0.jpg";
        $description = "The River King";
        return new Result($name, $linkToImage, $description);
    }
    public function getUrgot()
    {
        $name = "Urgot";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Urgot_0.jpg";
        $description = "The Dreadnought";
        return new Result($name, $linkToImage, $description);
    }
    public function getVoliber()
    {
        $name = "Voliber";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Volibear_0.jpg";
        $description = "The Relentless Storm";
        return new Result($name, $linkToImage, $description);
    }
    public function getYorick()
    {
        $name = "Yorick";
        $linkToImage = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yorick_0.jpg";
        $description = "Shepherd of Souls";
        return new Result($name, $linkToImage, $description);
    }




}

