<?php

namespace App\Containers\Marvel\Data\Seeders;

use App\Containers\Marvel\Tasks\CreateAbilityTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;

class AbilitiesTableSeeder_1 extends Seeder
{

    /** @var array */
    protected $abilities = array(
        'Acrobatic Combat',
        'Aftershock',
        'Ante Up',
        'Armor',
        'Armor Break',
        'Armor Up',
        'Bamf',
        'Bleed',
        'Bleed Immunity',
        'Buff Steal',
        'Cauterize',
        'Chi Strike',
        'Cleanse',
        'Concussion',
        'Cosmic Radiation',
        'Crit Boost',
        'Cruelty',
        'Curse',
        'Cybernetic Enhancements',
        'Daze',
        'Deformation',
        'Degeneration',
        'Element Gun',
        'Enervating Field',
        'Evil\'s Bane',
        'Evocation',
        'Exhaustion',
        'Fate Seal',
        'Fatigue',
        'Final Strike',
        'Freestyle Combat',
        'Gambler\'s Ruin',
        'Genetic Memory',
        'Heal Block',
        'Hex Magic',
        'Incinerate',
        'Invisibility',
        'ISO Loader',
        'Judgment',
        'Kree Physiology',
        'Life Steal',
        'Lightning Arc',
        'Lunar Phases',
        'Magnetism',
        'Martial Focus',
        'Mirror Dimension',
        'Neurotoxin',
        'Nullify',
        'Overpower',
        'Overrun',
        'Om Nom',
        'Pacifism',
        'Perfect Block',
        'Physical Resistance',
        'Poise',
        'Poison',
        'Poison Immunity',
        'Power Burn',
        'Power Drain',
        'Power Gain',
        'Power Leech',
        'Power Lock',
        'Power Steal',
        'Power Sting',
        'Precision',
        'Pummel',
        'Quack-Fu',
        'Recon',
        'Reflect Stun',
        'Reflective Armor',
        'Regeneration',
        'Replicate',
        'Rhino Charge',
        'Robotics',
        'Scorch',
        'Self-Repair',
        'Sensory Weave',
        'Shield System',
        'Shock',
        'Soul Barb',
        'Soul Harvest',
        'Spirit Venom',
        'Stagger',
        'Static Shock',
        'Stun',
        'Symbiote Stealth',
        'Tenacity',
        'True Strike',
        'Unstoppable',
        'Weakness',
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->abilities as $ability) {
            App::make(CreateAbilityTask::class)->run($ability);
        }
    }
}
