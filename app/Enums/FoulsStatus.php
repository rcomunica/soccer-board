<?php

namespace App\Enums;


enum FoulsStatus: string
{
    case YellowCard = "1";
    case RedCard = "2";
    case FreeKick = "3";
    case PenaltyKick = "4";
}
