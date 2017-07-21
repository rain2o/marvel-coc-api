<?php

namespace App\Containers\Marvel\Data\Seeders;

use App\Containers\Marvel\Tasks\CreateBuffTask;
use App\Containers\Marvel\Tasks\FindAbilitiesByNameTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;


class BuffTableSeeder_1 extends Seeder
{

    /** @var array */
    protected $buffs = array(
        //region ISO
        array(
            'title'         => 'Iso-Infused',
            'description'   => '+25% Attack and Health',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Iso-Infused',
            'description'   => '+50% Attack and Health',
            'abilities'     => array()
        ),
        //endregion

        //region Armor
        array(
            'title'         => 'Armor',
            'description'   => '+20% Armor',
            'abilities'     => array('Armor')
        ),
        array(
            'title'         => 'Armor',
            'description'   => '+45% Armor',
            'abilities'     => array('Armor')
        ),
        array(
            'title'         => 'Armor',
            'description'   => '+66% Armor',
            'abilities'     => array('Armor')
        ),
        array(
            'title'         => 'Enhanced Armor Up',
            'description'   => 'Armor Up abilities are 40% more effective.',
            'abilities'     => array('Armor Up')
        ),
        array(
            'title'         => 'Enhanced Armor Break',
            'description'   => 'Armor Break abilities are 40% more effective.',
            'abilities'     => array('Armor Break')
        ),
        //endregion

        //region Power & Specials
        array(
            'title'         => 'Strike Back',
            'description'   => 'When damaged by a Special Attack, this enemy gains 1 bar of Power.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Power Start 1',
            'description'   => 'Start with 1 bar of Power.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Power Start 2',
            'description'   => 'Start with 2 bars of Power',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Power Gain',
            'description'   => 'Increase all Power Gain by 200%.',
            'abilities'     => array('Power Gain')
        ),
        array(
            'title'         => 'Power Gain',
            'description'   => 'Increase all Power Gain by 300%.',
            'abilities'     => array('Power Gain')
        ),
        array(
            'title'         => 'Power Leak',
            'description'   => 'A 50% chance for Critical Hits to cause Power to leak from opponents over time.',
            'abilities'     => array('Power Gain')
        ),
        array(
            'title'         => 'Enhanced Special 1',
            'description'   => 'Special 1 deals 30% more damage and cannot be Blocked.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Enhanced Special 2',
            'description'   => 'Special 2 deals 20% more damage and cannot be Blocked.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Kinetic Reactor',
            'description'   => 'This enemy generates Power when striking a Blocking target.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Special 1 Bias',
            'description'   => 'This defender is more likely to activate Special Attack 1.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Special 2 Bias',
            'description'   => 'This defender is more likely to activate Special Attack 2.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'All or Nothing',
            'description'   => 'This Champion stores Power until its third Special Attack is ready.',
            'abilities'     => array()
        ),
        //endregion

        //region Fury
        array(
            'title'         => 'Fury',
            'description'   => 'A 10% chance to gain Fury, boosting Attack by 100% for 8 seconds.',
            'abilities'     => array('Fury')
        ),
        array(
            'title'         => 'Enhanced Fury',
            'description'   => 'Fury abilities are 40% more effective.',
            'abilities'     => array('Fury')
        ),
        //endregion

        //region Health
        array(
            'title'         => 'Health',
            'description'   => '+60% Health',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Health',
            'description'   => '+100% Health',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Health',
            'description'   => '+300% Health',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Health',
            'description'   => '+700% Health',
            'abilities'     => array()
        ),
        //endregion

        //region Stun
        array(
            'title'         => 'Stun',
            'description'   => 'A 10% chance to inflict Stun for 1.5 seconds.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Stun Immunity',
            'description'   => 'This Champion is immune to the effects of Stun.',
            'abilities'     => array()
        ),
        //endregion

        //region Critical
        array(
            'title'         => 'Critical',
            'description'   => '+28% Critical Rate',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Critical',
            'description'   => '+100% Critical Damage',
            'abilities'     => array()
        ),
        //endregion

        //region Bleed
        array(
            'title'         => 'Bleed',
            'description'   => 'Inflicts Bleed.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Enhanced Bleed',
            'description'   => 'Bleed abilities are 40% more effective.',
            'abilities'     => array('Bleed')
        ),
        //endregion

        //region Misc
        array(
            'title'         => 'Champion Boost',
            'description'   => '+100% Attack & Health',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Starburst',
            'description'   => 'Suffer Degeneration proportionate to this Champions\'s missing Health.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Thorns',
            'description'   => 'Retaliates with 15% attack as Physical Damage when struck by opponent.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Infinity Blast',
            'description'   => 'Blasts a portion of remaining Health. Effectiveness changes to match the Class Relationship of both Champions.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Physical-Resistance',
            'description'   => '+40% Physical-Resistance',
            'abilities'     => array('Physical Resistance')
        ),
        array(
            'title'         => 'Energy-Resistance',
            'description'   => '+40% Energy-Resistance',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Energy-Resistance',
            'description'   => '+80% Energy-Resistance',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Enhanced Abilities',
            'description'   => 'All abilities trigger 20% more often.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Outlast',
            'description'   => 'Reduces damage by up to 20% proportionate to missing health.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Optimist',
            'description'   => 'Gains Fury, Armor Up, Health Steal as long as they remain below 25% HP.',
            'abilities'     => array('Fury', 'Armor Up', 'Health Steal')
        ),
        array(
            'title'         => 'Adaptive',
            'description'   => 'Cycles between building up Physical Resistance or Energy Resistance every 8 seconds.',
            'abilities'     => array('Physical Resistance')
        ),
        array(
            'title'         => 'True Strike',
            'description'   => 'Attacks ignore Armor, Resistance and Evasion.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Mystic Ward',
            'description'   => 'Enemy Nullify effects have a 65% chance to fail.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Mystic Ward',
            'description'   => 'Enemy Nullify effects have a 95% chance to fail.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Mirror Image',
            'description'   => 'Automatically mirrors the beneficial effects of enemies.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Plagued Mind',
            'description'   => 'Attacker\'s Power is drained every 25 seconds.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Plagued Mind',
            'description'   => 'Attacker\'s Power is drained every 20 seconds.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Combo Shield',
            'description'   => 'The Combo Meter is not reset after being struck by an attack.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Checkmate',
            'description'   => 'Attacks ignore Armor and Evasion with a Combo of 15 or more.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Immunity',
            'description'   => 'Immune to negative status effects.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Attack',
            'description'   => '+60% Attack',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Heal Block',
            'description'   => 'Special Attacks inflict Heal Block, preventing the target from recovering health for 10 seconds.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Slashed Tires',
            'description'   => 'Dashing backwards causes enemy to take 50% of your attack as direct damage.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Fissure',
            'description'   => 'Every attack tears and ruptures enemy Armor, inflicting a stacking 1% Armor Break.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Martial Mastery',
            'description'   => 'Every 6 hits inflict Stun.',
            'abilities'     => array()
        ),
        array(
            'title'         => 'Degeneration',
            'description'   => 'Inflicts Health Degeneration, draining 0.6% health per second.',
            'abilities'     => array()
        )
        //endregion
    );

    /** @var  FindAbilitiesByNameTask */
    protected $finder;

    /**
     * Run the database seeds.
     *
     * @return void
     */
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
        foreach ($this->buffs as $buff) {
            $abilities = $this->getAbilitiesIds($buff['abilities']);
            App::make(CreateBuffTask::class)->run(
                $buff['title'],
                $buff['description'],
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
