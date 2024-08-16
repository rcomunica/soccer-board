<?php

namespace App\Enums;


enum PlayerStatus: string
{
    case Active = "1";
    case Disable = "2";
    case Disqualified = "3";
}
