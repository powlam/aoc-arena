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

    public function bgColor(): string
    {
        switch ($this) {
            case self::Bard:
                $color = 'bg-pink-100';
                break;

            case self::Cleric:
                $color = 'bg-yellow-100';
                break;

            case self::Fighter:
                $color = 'bg-red-100';
                break;

            case self::Mage:
                $color = 'bg-blue-100';
                break;

            case self::Ranger:
                $color = 'bg-green-100';
                break;

            case self::Rogue:
                $color = 'bg-purple-100';
                break;

            case self::Summoner:
                $color = 'bg-orange-100';
                break;

            case self::Tank:
                $color = 'bg-cyan-100';
                break;

            default:
                $color = 'bg-gray-100';
                break;
        }

        return $color;
    }
}
