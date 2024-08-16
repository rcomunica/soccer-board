<?php

namespace App\Enums;


enum MatchesStatus: string
{
    case Played = "1";
    case Playing = "2";
    case Cancelled = "3";
}
