<?php

namespace Database\Seeders;

use App\Enums\ArchetypeEnum;
use App\Models\Archetype;
use App\Models\ArchetypeClass;
use Illuminate\Database\Seeder;

class ArchetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $archetypes = [];

        foreach (array_keys($this->matrix) as $archetype) {
            $archetypes[$archetype] = Archetype::firstOrCreate(['name' => $archetype]);
        }
        foreach ($this->matrix as $main => $augments) {
            foreach ($augments as $secondary => $class) {
                ArchetypeClass::firstOrCreate([
                    'name' => $class,
                    'main_archetype_id' => $archetypes[$main]->id,
                    'secondary_archetype_id' => $archetypes[$secondary]->id,
                ]);
            }
        }
    }

    protected $matrix = [
        ArchetypeEnum::Bard->name => [
            ArchetypeEnum::Bard->name => 'Minstrel',
            ArchetypeEnum::Cleric->name => 'Soul Weaver',
            ArchetypeEnum::Fighter->name => 'Tellsword',
            ArchetypeEnum::Mage->name => 'Magician',
            ArchetypeEnum::Ranger->name => 'Song Warden',
            ArchetypeEnum::Rogue->name => 'Trickster',
            ArchetypeEnum::Summoner->name => 'Songcaller',
            ArchetypeEnum::Tank->name => 'Siren',
        ],
        ArchetypeEnum::Cleric->name => [
            ArchetypeEnum::Bard->name => 'Scryer',
            ArchetypeEnum::Cleric->name => 'High Priest',
            ArchetypeEnum::Fighter->name => 'Templar',
            ArchetypeEnum::Mage->name => 'Oracle',
            ArchetypeEnum::Ranger->name => 'Protector',
            ArchetypeEnum::Rogue->name => 'Shadow Disciple',
            ArchetypeEnum::Summoner->name => 'Shaman',
            ArchetypeEnum::Tank->name => 'Apostle',
        ],
        ArchetypeEnum::Fighter->name => [
            ArchetypeEnum::Bard->name => 'Bladedancer',
            ArchetypeEnum::Cleric->name => 'Highsword',
            ArchetypeEnum::Fighter->name => 'Weapon Master',
            ArchetypeEnum::Mage->name => 'Spellsword',
            ArchetypeEnum::Ranger->name => 'Hunter',
            ArchetypeEnum::Rogue->name => 'Shadowblade',
            ArchetypeEnum::Summoner->name => 'Bladecaller',
            ArchetypeEnum::Tank->name => 'Dreadnought',
        ],
        ArchetypeEnum::Mage->name => [
            ArchetypeEnum::Bard->name => 'Sorcerer',
            ArchetypeEnum::Cleric->name => 'Acolyte',
            ArchetypeEnum::Fighter->name => 'Battle Mage',
            ArchetypeEnum::Mage->name => 'Archwizard',
            ArchetypeEnum::Ranger->name => 'Spellhunter',
            ArchetypeEnum::Rogue->name => 'Shadow Caster',
            ArchetypeEnum::Summoner->name => 'Warlock',
            ArchetypeEnum::Tank->name => 'Spellstone',
        ],
        ArchetypeEnum::Ranger->name => [
            ArchetypeEnum::Bard->name => 'Bowsinger',
            ArchetypeEnum::Cleric->name => 'Soulbow',
            ArchetypeEnum::Fighter->name => 'Strider',
            ArchetypeEnum::Mage->name => 'Scion',
            ArchetypeEnum::Ranger->name => 'Hawkeye',
            ArchetypeEnum::Rogue->name => 'Scout',
            ArchetypeEnum::Summoner->name => 'Falconer',
            ArchetypeEnum::Tank->name => 'Sentinel',
        ],
        ArchetypeEnum::Rogue->name => [
            ArchetypeEnum::Bard->name => 'Charlatan',
            ArchetypeEnum::Cleric->name => 'Cultist',
            ArchetypeEnum::Fighter->name => 'Duelist',
            ArchetypeEnum::Mage->name => 'Nightspell',
            ArchetypeEnum::Ranger->name => 'Predator',
            ArchetypeEnum::Rogue->name => 'Assassin',
            ArchetypeEnum::Summoner->name => 'Shadow Lord',
            ArchetypeEnum::Tank->name => 'Shadow Guardian',
        ],
        ArchetypeEnum::Summoner->name => [
            ArchetypeEnum::Bard->name => 'Enchanter',
            ArchetypeEnum::Cleric->name => 'Necromancer',
            ArchetypeEnum::Fighter->name => 'Wild Blade',
            ArchetypeEnum::Mage->name => 'Spellmancer',
            ArchetypeEnum::Ranger->name => 'Beastmaster',
            ArchetypeEnum::Rogue->name => 'Shadowmancer',
            ArchetypeEnum::Summoner->name => 'Conjurer',
            ArchetypeEnum::Tank->name => 'Brood Warden',
        ],
        ArchetypeEnum::Tank->name => [
            ArchetypeEnum::Bard->name => 'Argent',
            ArchetypeEnum::Cleric->name => 'Paladin',
            ArchetypeEnum::Fighter->name => 'Knight',
            ArchetypeEnum::Mage->name => 'Spellshield',
            ArchetypeEnum::Ranger->name => 'Warden',
            ArchetypeEnum::Rogue->name => 'Nightshield',
            ArchetypeEnum::Summoner->name => 'Keeper',
            ArchetypeEnum::Tank->name => 'Guardian',
        ],
    ];
}
