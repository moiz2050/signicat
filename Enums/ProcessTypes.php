<?php

namespace App\Support\Signicat\Enums;

enum ProcessTypes: string
{
    case ATTENDED = "attended";
    case UNATTENDED = "unattended";
    case SUBSTANTIAL = "substantial";
    case DOCUMENT = "document";
    case DOCUMENT_SELFIE = "documentSelfie";
    case DOCUMENT_VIDEO = "documentVideo";
    case READY = "ready";
}
