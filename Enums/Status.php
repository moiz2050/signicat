<?php

namespace App\Support\Signicat\Enums;

enum Status: string
{
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case ACCEPTED = 'accepted';
    case REJECTED = 'rejected';
    case INCONCLUSIVE = 'inconclusive';
    case CANCELED = 'canceled';
    case FAILED = 'failed';
    case NOT_MATCHED = 'not_matched';
}
