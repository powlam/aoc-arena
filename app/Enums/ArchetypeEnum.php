<?php

namespace App\Enums;

enum ArchetypeEnum
{
    case Bard;
    case Cleric;
    case Fighter;
    case Mage;
    case Ranger;
    case Rogue;
    case Summoner;
    case Tank;

    public static function from(string $text): self
    {
        switch ($text) {
            case self::Bard->name:
                $value = self::Bard;
                break;
            case self::Cleric->name:
                $value = self::Cleric;
                break;
            case self::Fighter->name:
                $value = self::Fighter;
                break;
            case self::Mage->name:
                $value = self::Mage;
                break;
            case self::Ranger->name:
                $value = self::Ranger;
                break;
            case self::Rogue->name:
                $value = self::Rogue;
                break;
            case self::Summoner->name:
                $value = self::Summoner;
                break;
            case self::Tank->name:
                $value = self::Tank;
                break;
        }

        return $value;
    }
}
