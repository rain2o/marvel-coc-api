<?php

namespace App\Containers\Marvel\Data\Seeders;

use App\Containers\Marvel\Tasks\CreateNodeTask;
use App\Containers\Marvel\Tasks\FindBuffsByAttributeTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;

class NodeTableSeeder_1 extends Seeder
{

    /** @var array $nodes */
    protected $nodes = array(
        null, // skip index 0 for convenience
        array(
            '+25% Attack and Health',
            'A 10% chance to inflict Stun for 1.5 seconds.'
        ),
        array(
            '+50% Attack and Health',
            '+28% Critical Rate',
            'A 10% chance to gain Fury, boosting Attack by 100% for 8 seconds.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            'When damaged by a Special Attack, this enemy gains 1 bar of Power.'
        ),
        array(
            '+50% Attack and Health',
            'Poison abilities are 40% more effective.'
        ),
        array(
            '+50% Attack and Health',
            'Start with 1 bar of Power.',
            'Special 1 deals 30% more damage and cannot be Blocked.'
        ),
        array(
            '+50% Attack and Health',
            'Bleed abilities are 40% more effective.'
        ),
        array(
            '+100% Attack & Health',
            '+45% Armor',
            'A 10% chance to gain Fury, boosting Attack by 100% for 8 seconds.',
            'Start with 1 bar of Power.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'Suffer Degeneration proportionate to this Champions\'s missing Health.',
            '+20% Armor'
        ),
        array(
            '+100% Attack & Health',
            'This enemy generates Power when stiking a Blocking target.',
            'This defender is more likely to activate Special Attack 1.',
            'Special 1 deals 30% more damage and cannot be Blocked.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            'Armor Up abilities are 40% more effective.',
            'Blasts a portion of remaning Health. Effectiveness changes to match the Class Relationship of both Champions.'
        ),
        array(
            '+50% Attack and Health',
            '+40% Physical-Resistance',
            '+40% Energy-Resistance',
            'All abilities trigger 20% more often.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            '+100% Health',
            'Reduces damage by up to 20% proportionate to missing health.',
            'Gains Fury, Armor Up, Health Steal as long as they remain below 25% HP.'
        ),
        array(
            '+100% Attack & Health',
            'This defender is more likely to activate Special Attack 2.',
            'Start with 2 bars of Power',
            'A 10% chance to inflict Stun for 1.5 seconds.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'Start with 1 bar of Power.',
            'Retaliates with 15% attack as Physical Damage when struck by opponent.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'This defender is more likely to activate Special Attack 1.',
            'Special 1 deals 30% more damage and cannot be Blocked.',
            'Increase all Power Gain by 200%.'
        ),
        array(
            '+100% Attack & Health',
            'Start with 1 bar of Power.',
            'This Champion stores Power until its third Special Attack is ready.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            '+80% Energy-Resistance',
            'Fury abilities are 40% more effective.',
            'Bleed abilities are 40% more effective.'
        ),
        array(
            '+50% Attack and Health',
            '+45% Armor',
            'Armor Break abilities are 40% more effective.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            'Special 1 deals 20% more damage and cannot be Blocked.',
            'Start with 2 bars of Power',
            'Blasts a portion of remaining Health. Effectiveness changes to match the Class Relationship of both Champions.'
        ),
        array(
            '+100% Attack & Health',
            '+20% Armor',
            'Gains Fury, Armor Up, Health Steal as long as they remain below 25% HP.',
            'Cycles between building up Physical Resistance or Energy Resistance every 8 seconds.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'Increase all Power Gain by 300%.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'Attacks ignore Armor, Resistance and Evasion.',
            'This Champion is immune to the effects of Stun.'
        ),
        array(
            '+100% Attack & Health',
            'Cycles between building up Physical Resistance or Energy Resistance every 8 seconds.',
            'Reduces damage by up to 20% proportionate to missing health.',
            'Gains Fury, Armor Up, Health Steal as long as they remain below 25% HP.'
        ),
        array(
            '+100% Attack & Health',
            'Fury abilities are 40% more effective.',
            'All abilities trigger 20% more often.',
            '+28% Critical Rate'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            'Start with 1 bar of Power.',
            'Special 1 deals 30% more damage and cannot be Blocked.',
            'This defender is more likely to activate Special Attack 1.'
        ),
        array(
            '+50% Attack and Health',
            'Enemy Nullify effects have a 65% chance to fail.',
            'Automatically mirrors the beneficial effects of enemies.'
        ),
        array(
            '+50% Attack and Health',
            '+60% Health',
            'Attacker\'s Power is drained every 25 seconds.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            '+20% Armor',
            'When damaged by a Special Attack, this enemy gains 1 bar of Power.',
            'This Champion is immune to the effects of Stun.'
        ),
        array(
            '+100% Attack & Health',
            'Inflicts Bleed.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'This Champion stores Power until its third Special Attack is ready.',
            'Attacker\'s Power is drained every 20 seconds.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'The Combo Meter is not reset after being struck by an attack.',
            'Attacks ignore Armor and Evasion with a Combo of 15 or more.',
            'Immune to negative status effects.'
        ),
        array(
            '+100% Attack & Health',
            '+28% Critical Rate',
            '+100% Critical Damage',
            'Gains Fury, Armor Up, and Health Steal as long as they remain above 75% HP'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            '+66% Armor',
            'Armor Break abilities are 40% more effective.'
        ),
        array(
            '+50% Attack and Health',
            'Gains Fury, Armor Up, and Health Steal as long as they remain above 75% HP',
            '+45% Armor'
        ),
        array(
            '+50% Attack and Health',
            '+60% Attack',
            'A 50% chance for Critical Hits to cause Power to leak from opponents over time.',
            '+28% Critical Rate'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            'Special 1 deals 30% more damage and cannot be Blocked.',
            'Start with 1 bar of Power.',
            'Special Attacks inflict Heal Block, preventing the target from recovering health for 10 seconds.',
            'Blasts a portion of remaining Health. Effectiveness changes to match the Class Relationship of both Champions.'
        ),
        array(
            '+100% Attack and Health',
            'Blasts a portion of remaining Health. Effectiveness changes to match the Class Relationship of both Champions.',
            'This defender is more likely to activate Special Attack 1.',
            'Start with 1 bar of Power.'
        ),
        array(
            '+100% Attack and Health',
            '+100% Health',
            'Dashing backwards causes enemy to take 50% of your attack as direct damage.'
        ),
        array(
            '+100% Attack and Health',
            '+100% Attack',
            '+100% Critical Damage'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            '+40% Physical-Resistance',
            'Retaliates with 15% attack as Physical Damage when struck by opponent.',
            'Enemy Nullify effects have a 65% chance to fail.'
        ),
        array(
            '+50% Attack and Health',
            '+100% Health',
            '+45% Armor'
        ),
        array(
            '+50% Attack and Health',
            '+60% Attack',
            'Every attack tears and ruptures enemy Armor, inflicting a stacking 1% Armor Break.',
            'Prevent the target from recovering Health.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            'Increase all Power Gain by 200%.',
            'Enemy Nullify effects have a 80% chance to fail.',
            'Attacker\'s Power is drained every 25 seconds.'
        ),
        array(
            '+100% Attack & Health',
            '+66% Armor',
            'This enemy generates Power when stiking a Blocking target.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'Blasts a portion of remaining Health. Effectiveness changes to match the Class Relationship of both Champions.',
            '+40% Physical-Resistance',
            'Retaliates with 15% attack as Physical Damage when struck by opponent.'
        ),
        array(
            '+50% Attack and Health',
            '+25% Attack and Health',
            '+100% Health',
            'When damaged by a Special Attack, this enemy gains 1 bar of Power.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'Start with 1 bar of Power.',
            'This Champion stores Power until its third Special Attack is ready.'
        ),
        array(
            '+100% Attack & Health',
            'Every 6 hits inflict Stun.',
            '+28% Critical Rate',
            'This Champion is immune to the effects of Stun.'
        ),
        array(
            '+100% Attack & Health',
            '+300% Health',
            'Attacker\'s Power is drained every 20 seconds.',
            'Enemy Nullify effects have a 95% chance to fail.'
        ),
        array(
            '+100% Attack & Health',
            'Every attack tears and ruptures enemy Armor, inflicting a stacking 1% Armor Break.',
            '+28% Critical Rate',
            'Prevent the target from recovering Health.'
        ),
        array(
            '+100% Attack & Health',
            '+28% Critical Rate',
            'A 50% chance for Critical Hits to cause Power to leak from opponents over time.',
            '+66% Armor'
        ),
        array(
            '+100% Attack & Health',
            '+300% Health',
            'Immune to negative status effects.',
            'Automatically mirrors the beneficial effects of enemies.'
        ),
        array(
            '+100% Attack & Health',
            '+300% Health',
            'Blasts a portion of remaining Health. Effectiveness changes to match the Class Relationship of both Champions.'
        ),
        array(
            '+100% Attack & Health',
            '+50% Attack and Health',
            'Inflicts Health Degeneration, draining 0.6% health per second.'
        ),
        array(
            '+100% Attack & Health',
            '+700% Health',
            'This Champion is immune to the effects of Stun.',
            'Attacks ignore Armor, Resistance and Evasion.'
        ),
    );

    /** @var  FindBuffsByAttributeTask */
    protected $finder;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __invoke()
    {
        $this->finder = App::make(FindBuffsByAttributeTask::class);
        return parent::__invoke();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->nodes as $i => $buffs) {
            if (is_array($buffs)) {
                $buffIds = $this->getBuffIds($buffs);
                App::make(CreateNodeTask::class)->run(
                    $i,
                    $buffIds
                );
            }
        }
    }

    /**
     * @param $buffs array
     * @return array
     */
    private function getBuffIds($buffs)
    {
        $buffResults = $this->finder->run($buffs, 'description');
        $ids = array();
        foreach ($buffResults as $buff) {
            $ids[] = $buff->id;
        }
        return $ids;
    }
}
