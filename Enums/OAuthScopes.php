<?php

namespace App\Support\Signicat\Enums;

enum OAuthScopes: string
{
    case CLIENT_ASSURE_API = 'client.assure.api';
    case CLIENT_CAPTURE_API = 'client.capture.api';
}
