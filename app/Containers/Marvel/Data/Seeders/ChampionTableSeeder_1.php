<?php

namespace App\Containers\Marvel\Data\Seeders;

use App\Containers\Marvel\Tasks\CreateChampionTask;
use App\Containers\Marvel\Tasks\FindAbilitiesByNameTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;

class ChampionTableSeeder_1 extends Seeder
{

    protected $champions = array(
        //region Cosmic
        array(
            'name'      => 'Angela',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Battle Focus',
                'Regeneration',
                'Precision',
                'Fury',
                'Armor'
            )
        ),
        array(
            'name'      => 'Black Bolt',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Cosmic Radiation',
                'Crit Boost',
                'Cruelty',
                'Direct Damage',
                'Fury',
                'Poison Immunity',
                'Stun'
            )
        ),
        array(
            'name'      => 'Captain Marvel',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Fury',
                'Poison Immunity'
            )
        ),
        array(
            'name'      => 'Carnage',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Resist Physical',
                'Precision',
                'Fury',
                'Cruelty'
            )
        ),
        array(
            'name'      => 'Drax',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Bleed',
                'Fury'
            )
        ),
        array(
            'name'      => 'Gamora',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Bleed',
                'Cosmic Radiation',
                'Crit Boost',
                'Cruelty'
            )
        ),
        array(
            'name'      => 'Groot',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor Break',
                'Bleed',
                'Bleed Immunity',
                'Cleanse',
                'Cruelty',
                'Fury',
                'Pacifism',
                'Physical Resistance',
                'Regeneration'
            )
        ),
        array(
            'name'      => 'Hyperion',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor Break',
                'Fury',
                'Incinerate',
                'Poison Immunity',
                'Stun'
            )
        ),
        array(
            'name'      => 'King Groot',
            'class'     => 'Cosmic',
            'abilities' => array(
                // @todo Need abilities for King Groot
            )
        ),
        array(
            'name'      => 'Ms. Marvel',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Direct Damage',
                'Fury',
                'Poison Immunity'
            )
        ),
        array(
            'name'      => 'Ms. Marvel (Kamala Khan)',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Deformation',
                'Fury',
                'Poison Immunity'
            )
        ),
        array(
            'name'      => 'Phoenix',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor Break',
                'Fury',
                'Incinerate',
                'Stun'
            )
        ),
        array(
            'name'      => 'Ronan',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor Break',
                'Direct Damage',
                'Enfeeble',
                'Poison Immunity',
                'Stun'
            )
        ),
        array(
            'name'      => 'Spider-Man (Symbiote)',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor Break',
                'Crit Boost',
                'Enfeeble',
                'Evade',
                'Precision'
            )
        ),
        array(
            'name'      => 'Superior Iron Man',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor Break',
                'Armor Up',
                'Regeneration'
            )
        ),
        array(
            'name'      => 'Thanos',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor',
                'Armor Up',
                'Direct Damage',
                'Fury',
                'Heal Block'
            )
        ),
        array(
            'name'      => 'Thor',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor Break',
                'Direct Damage',
                'Fury',
                'Stun'
            )
        ),
        array(
            'name'      => 'Venom',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Armor',
                'Bleed',
                'Fury',
                'Genetic Memory',
                'Replicate'
            )
        ),
        array(
            'name'      => 'Venompool',
            'class'     => 'Cosmic',
            'abilities' => array(
                'Bleed',
                'Heal Block',
                'Om Nom',
                'Regeneration'
            )
        ),
        //endregion
        //region Mutant
        array(
            'name'      => 'Archangel',
            'class'     => 'Mutant',
            'abilities' => array(
                'Bleed',
                'Poison',
                'Neurotoxin',
                'Stun'
            )
        ),
        array(
            'name'      => 'Beast',
            'class'     => 'Mutant',
            'abilities' => array(
                'Acrobatic Combat',
                'Bleed',
                'Bleed Immunity',
                'Freestyle Combat',
                'Stun'
            )
        ),
        array(
            'name'      => 'Cable',
            'class'     => 'Mutant',
            'abilities' => array(
                'Concussion',
                'Incinerate',
                'Regeneration',
                'True Strike'
            )
        ),
        array(
            'name'      => 'Colossus',
            'class'     => 'Mutant',
            'abilities' => array(
                'Armor Up',
                'Bleed Immunity'
            )
        ),
        array(
            'name'      => 'Cyclops (Blue Team)',
            'class'     => 'Mutant',
            'abilities' => array(
                'Armor Break',
                'Precision'
            )
        ),
        array(
            'name'      => 'Cyclops (New Xavier School)',
            'class'     => 'Mutant',
            'abilities' => array(
                'Armor Break',
                'Cauterize',
                'Precision'
            )
        ),
        array(
            'name'      => 'Deadpool',
            'class'     => 'Mutant',
            'abilities' => array(
                'Bleed',
                'Evade',
                'Regeneration'
            )
        ),
        array(
            'name'      => 'Deadpool (X-Force)',
            'class'     => 'Mutant',
            'abilities' => array(
                'Bleed',
                'Power Gain'
            )
        ),
        array(
            'name'      => 'Gambit',
            'class'     => 'Mutant',
            'abilities' => array(
                'Ante Up',
                'Concussion',
                'Stun'
            )
        ),
        array(
            'name'      => 'Iceman',
            'class'     => 'Mutant',
            'abilities' => array(
                'Coldsnap',
                'Frost Bite',
                'Organic Ice'
            )
        ),
        array(
            'name'      => 'Magneto',
            'class'     => 'Mutant',
            'abilities' => array(
                'Armor Break',
                'Bleed',
                'Heal Block',
                'Magnetism'
            )
        ),
        array(
            'name'      => 'Magneto (Marvel NOW!)',
            'class'     => 'Mutant',
            'abilities' => array(
                'Armor Break',
                'Bleed',
                'Heal Block',
                'Magnetism'
            )
        ),
        array(
            'name'      => 'Nightcrawler',
            'class'     => 'Mutant',
            'abilities' => array(
                'Bamf',
                'Bleed',
                'Evade',
                'Precision'
            )
        ),
        array(
            'name'      => 'Old Man Logan',
            'class'     => 'Mutant',
            'abilities' => array(
                'Bleed',
                'Pacifism',
                'Regeneration'
            )
        ),
        array(
            'name'      => 'Psylocke',
            'class'     => 'Mutant',
            'abilities' => array(
                'Power Drain',
                'Power Lock',
                'Power Burn',
                'Stun'
            )
        ),
        array(
            'name'      => 'Rogue',
            'class'     => 'Mutant',
            'abilities' => array(
                'Kree Physiology',
                'Life Steal',
                'Power Steal',
                'Replicate'
            )
        ),
        array(
            'name'      => 'Storm',
            'class'     => 'Mutant',
            'abilities' => array(
                'Lightning Arc',
                'Stun'
            )
        ),
        array(
            'name'      => 'Wolverine',
            'class'     => 'Mutant',
            'abilities' => array(
                'Bleed',
                'Regeneration'
            )
        ),
        array(
            'name'      => 'Wolverine (X-23)',
            'class'     => 'Mutant',
            'abilities' => array(
                'Bleed',
                'Cruelty',
                'Regeneration'
            )
        ),
        //endregion
        //region Mystic
        array(
            'name'      => 'Doctor Strange',
            'class'     => 'Mystic',
            'abilities' => array(
                'Armor Break',
                'Armor Up',
                'Evocation',
                'Fate Seal',
                'Fury',
                'Nullify',
                'Weakness'
            )
        ),
        array(
            'name'      => 'Doctor Voodoo',
            'class'     => 'Mystic',
            'abilities' => array(
                'Power Burn',
                'Power Leech',
                'Power Steal',
                'Regeneration',
                'Spirit Venom'
            )
        ),
        array(
            'name'      => 'Dormammu',
            'class'     => 'Mystic',
            'abilities' => array(
                'Poison Immunity',
                'Bleed Immunity'
            )
        ),
        array(
            'name'      => 'Ghost Rider',
            'class'     => 'Mystic',
            'abilities' => array(
                'Bleed Immunity',
                'Evil\'s Bane',
                'Judgment'
            )
        ),
        array(
            'name'      => 'Guillotine',
            'class'     => 'Mystic',
            'abilities' => array(
                'Armor',
                'Bleed',
                'Soul Harvest'
            )
        ),
        array(
            'name'      => 'Iron Fist',
            'class'     => 'Mystic',
            'abilities' => array(
                'Armor Break',
                'Chi Strike',
                'Crit Boost',
                'Precision'
            )
        ),
        array(
            'name'      => 'Iron Fist (Immortal)',
            'class'     => 'Mystic',
            'abilities' => array(
                'Armor Break',
                'Crit Boost',
                'Precision'
            )
        ),
        array(
            'name'      => 'Juggernaut',
            'class'     => 'Mystic',
            'abilities' => array(
                'Armor',
                'Armor Up',
                'Fury',
                'Unstoppable'
            )
        ),
        array(
            'name'      => 'Loki',
            'class'     => 'Mystic',
            'abilities' => array(
                'Buff Steal',
                'Curse',
                'Overpower',
                'Stun'
            )
        ),
        array(
            'name'      => 'Magik',
            'class'     => 'Mystic',
            'abilities' => array(
                'Nullify',
                'Power Lock',
                'Power Steal'
            )
        ),
        array(
            'name'      => 'Mordo',
            'class'     => 'Mystic',
            'abilities' => array(
                'Degeneration',
                'Mirror Dimension',
                'Soul Barb',
                'Stun'
            )
        ),
        array(
            'name'      => 'Scarlet Witch',
            'class'     => 'Mystic',
            'abilities' => array(
                'Armor Up',
                'Fury',
                'Heal Block',
                'Nullify',
                'Power Burn',
                'Precision',
                'Weakness'
            )
        ),
        array(
            'name'      => 'The Hood',
            'class'     => 'Mystic',
            'abilities' => array(
                'Bleed',
                'Hex Magic',
                'Invisibility',
                'Lightning Arc',
                'Shock',
                'Stagger'
            )
        ),
        array(
            'name'      => 'Thor (Jane Foster)',
            'class'     => 'Mystic',
            'abilities' => array(
                'Lightning Arc',
                'Stun'
            )
        ),
        array(
            'name'      => 'Unstoppable Colossus',
            'class'     => 'Mystic',
            'abilities' => array(
                'Armor',
                'Armor Up',
                'Bleed Immunity',
                'Fury',
                'Unstoppable'
            )
        ),
        //endregion
        //region Science
        array(
            'name'      => 'Abomination',
            'class'     => 'Science',
            'abilities' => array(
                'Fury',
                'Poison',
                'Poison Immunity'
            )
        ),
        array(
            'name'      => 'Ant-Man',
            'class'     => 'Science',
            'abilities' => array(
                'Fatigue',
                'Poison'
            )
        ),
        array(
            'name'      => 'Captain America',
            'class'     => 'Science',
            'abilities' => array(
                'Fatigue',
                'Perfect Block',
                'Stun'
            )
        ),
        array(
            'name'      => 'Captain America (WWII)',
            'class'     => 'Science',
            'abilities' => array(
                'Bleed',
                'Perfect Block',
                'Stun'
            )
        ),
        array(
            'name'      => 'Electro',
            'class'     => 'Science',
            'abilities' => array(
                'Static Shock',
                'Stun'
            )
        ),
        array(
            'name'      => 'Hulk',
            'class'     => 'Science',
            'abilities' => array(
                'Fury',
                'Poison Immunity'
            )
        ),
        array(
            'name'      => 'Joe Fixit',
            'class'     => 'Science',
            'abilities' => array(
                'Bleed',
                'Evade',
                'Fatigue',
                'Gambler\'s Ruin',
                'Poison Immunity',
                'Stun',
                'Weakness'
            )
        ),
        array(
            'name'      => 'Luke Cage',
            'class'     => 'Science',
            'abilities' => array(
                'Bleed Immunity',
                'Exhaustion',
                'Physical Resistance',
                'Stun'
            )
        ),
        array(
            'name'      => 'Quake',
            'class'     => 'Science',
            'abilities' => array(
                'Aftershock',
                'Concussion',
                'Evade',
                'Stun'
            )
        ),
        array(
            'name'      => 'Red Hulk',
            'class'     => 'Science',
            'abilities' => array(
                'Incinerate',
                'Poison Immunity',
                'Scorch'
            )
        ),
        array(
            'name'      => 'Rhino',
            'class'     => 'Science',
            'abilities' => array(
                'Armor',
                'Fury',
                'Physical Resistance',
                'Rhino Charge',
                'Unstoppable'
            )
        ),
        array(
            'name'      => 'She-Hulk',
            'class'     => 'Science',
            'abilities' => array(
                'Poison Immunity',
                'Pummel',
                'Stun'
            )
        ),
        array(
            'name'      => 'Spider-Gwen',
            'class'     => 'Science',
            'abilities' => array(
                'Armor Break',
                'Evade',
                'Fatigue',
                'Precision',
                'Sensory Weave',
                'Stun'
            )
        ),
        array(
            'name'      => 'Spider-Man (Classic)',
            'class'     => 'Science',
            'abilities' => array(
                'Armor Break',
                'Evade',
                'Precision',
                'Weakness'
            )
        ),
        array(
            'name'      => 'Spider-Man (Miles Morales)',
            'class'     => 'Science',
            'abilities' => array(
                'Enfeeble',
                'Evade',
                'Fatigue',
                'Power Drain',
                'Stun',
                'Weakness'
            )
        ),
        array(
            'name'      => 'Yellowjacket',
            'class'     => 'Science',
            'abilities' => array(
                'Crit Boost',
                'Power Sting',
                'Precision',
                'Stun'
            )
        ),
        //endregion
        //region Skill
        array(
            'name'      => 'Agent Venom',
            'class'     => 'Skill',
            'abilities' => array(
                'Bleed',
                'Incinerate',
                'Symbiote Stealth',
                'Tenacity'
            )
        ),
        array(
            'name'      => 'Black Panther',
            'class'     => 'Skill',
            'abilities' => array(
                'Bleed',
                'Precision'
            )
        ),
        array(
            'name'      => 'Black Panther (Civil War)',
            'class'     => 'Skill',
            'abilities' => array(
                'Armor',
                'Armor Up',
                'Bleed',
                'Reflect Stun',
                'Reflective Armor',
                'Stun'
            )
        ),
        array(
            'name'      => 'Black Widow',
            'class'     => 'Skill',
            'abilities' => array(
                'Crit Boost',
                'Cruelty',
                'Evade',
                'Precision',
                'Stun'
            )
        ),
        array(
            'name'      => 'Crossbones',
            'class'     => 'Skill',
            'abilities' => array(
                'Fury',
                'Incinerate',
                'Overrun'
            )
        ),
        array(
            'name'      => 'Daredevil (Classic)',
            'class'     => 'Skill',
            'abilities' => array(
                'Crit Boost',
                'Evade',
                'Precision',
                'Stun'
            )
        ),
        array(
            'name'      => 'Daredevil',
            'class'     => 'Skill',
            'abilities' => array(
                'Armor Break',
                'Evade',
                'Perfect Block',
                'Precision',
                'Stun'
            )
        ),
        array(
            'name'      => 'Elektra',
            'class'     => 'Skill',
            'abilities' => array(
                'Armor Break',
                'Bleed',
                'Final Strike',
                'Precision'
            )
        ),
        array(
            'name'      => 'Falcon',
            'class'     => 'Skill',
            'abilities' => array(
                'Bleed',
                'Incinerate',
                'Recon'
            )
        ),
        array(
            'name'      => 'Gwenpool',
            'class'     => 'Skill',
            'abilities' => array(
                'Armor Break',
                'Bleed',
                'Enervate',
                'Incinerate',
                'Stun'
            )
        ),
        array(
            'name'      => 'Hawkeye',
            'class'     => 'Skill',
            'abilities' => array(
                'Bleed',
                'Power Drain',
                'Stun'
            )
        ),
        array(
            'name'      => 'Karnak',
            'class'     => 'Skill',
            'abilities' => array(
                'Daze',
                'Martial Focus',
                'Physical Resistance',
                'True Strike'
            )
        ),
        array(
            'name'      => 'Moon Knight',
            'class'     => 'Skill',
            'abilities' => array(
                'Bleed',
                'Evade',
                'Fury',
                'Lunar Phases',
                'Precision',
                'Stun'
            )
        ),
        array(
            'name'      => 'Punisher',
            'class'     => 'Skill',
            'abilities' => array(
                'Bleed',
                'Fury'
            )
        ),
        array(
            'name'      => 'Winter Soldier',
            'class'     => 'Skill',
            'abilities' => array(
                'Bleed',
                'Fury',
                'Power Drain'
            )
        ),
        //endregion
        //region Tech
        array(
            'name'      => 'Civil Warrior',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'Armor Up',
                'Heal Block',
                'Power Drain',
                'Power Lock'
            )
        ),
        array(
            'name'      => 'Howard the Duck',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'ISO Loader',
                'Quack-Fu'
            )
        ),
        array(
            'name'      => 'Hulkbuster',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'Armor',
                'Armor Break',
                'Armor Up'
            )
        ),
        array(
            'name'      => 'Iron Man',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'Armor Break',
                'Armor Up',
                'Regeneration'
            )
        ),
        array(
            'name'      => 'Iron Patriot',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'Armor Break',
                'Armor Up',
                'Stun'
            )
        ),
        array(
            'name'      => 'Kang the Conqueror',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor Up',
                'Heal Block',
                'Power Drain',
                'Stun'
            )
        ),
        array(
            'name'      => 'Nebula',
            'class'     => 'Tech',
            'abilities' => array(
                'Cybernetic Enhancements',
                'Self-Repair',
                'Power Lock',
                'Power Drain',
                'Robotics'
            )
        ),
        array(
            'name'      => 'Punisher (2099)',
            'class'     => 'Tech',
            'abilities' => array(
                //@todo add abilities for Punisher 2099
            )
        ),
        array(
            'name'      => 'Rocket Raccoon',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor Break',
                'Bleed',
                'Crit Boost',
                'Cruelty',
                'Shield System'
            )
        ),
        array(
            'name'      => 'Spider-Man (Stark Enhanced)',
            'class'     => 'Tech',
            'abilities' => array(
                'Evade',
                'Poise',
                'Stun',
                'Lightning Arc'
            )
        ),
        array(
            'name'      => 'Star-Lord',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor Break',
                'Crit Boost',
                'Element Gun',
                'Fury',
                'Heal Block',
                'Power Drain'
            )
        ),
        array(
            'name'      => 'Ultron',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'Armor Up',
                'Bleed',
                'Bleed Immunity',
                'Cauterize',
                'Crit Boost',
                'Evade',
                'Fury',
                'Heal Block',
                'Poison Immunity',
                'Regeneration',
                'Robotics',
                'Stun'
            )
        ),
        array(
            'name'      => 'Ultron (Classic)',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'Bleed Immunity',
                'Evade',
                'Fury',
                'Heal Block',
                'Poison',
                'Poison Immunity',
                'Robotics',
                'Stun'
            )
        ),
        array(
            'name'      => 'Vision',
            'class'     => 'Tech',
            'abilities' => array(
                'Bleed Immunity',
                'Heal Block',
                'Poison Immunity',
                'Power Burn'
            )
        ),
        array(
            'name'      => 'Vision (Age of Ultron)',
            'class'     => 'Tech',
            'abilities' => array(
                'Bleed Immunity',
                'Heal Block',
                'Poison Immunity',
                'Power Burn'
            )
        ),
        array(
            'name'      => 'War Machine',
            'class'     => 'Tech',
            'abilities' => array(
                'Armor',
                'Armor Break',
                'Armor Up',
                'Bleed'
            )
        ),
        array(
            'name'      => 'Yondu',
            'class'     => 'Tech',
            'abilities' => array(
                //@todo Add abilities for Yondu
            )
        ),
        //endregion
    );

    /** @var  FindAbilitiesByNameTask */
    protected $finder;

    public function __invoke()
    {
        $this->finder = App::make(FindAbilitiesByNameTask::class);
        return parent::__invoke();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->champions as $champion) {
            $abilities = $this->getAbilitiesIds($champion['abilities']);
            App::make(CreateChampionTask::class)->run(
                $champion['name'],
                $champion['class'],
                $abilities
            );
        }
    }

    /**
     * @param $abilityNames array
     * @return array
     */
    private function getAbilitiesIds($abilityNames)
    {
        $abilities = $this->finder->run($abilityNames);
        $ids = array();
        foreach ($abilities as $ability) {
            $ids[] = $ability->id;
        }
        return $ids;
    }
}
