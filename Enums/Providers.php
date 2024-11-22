<?php

namespace App\Support\Signicat\Enums;

enum Providers: string
{
    case E_ID = 'eid';
    case ONFIDO = 'onfido';
    case SIGNICAT_PAPER = 'signicatpaper';
    case READ_ID = 'readid';
}
