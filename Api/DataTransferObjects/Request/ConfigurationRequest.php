<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Request;

use App\Support\Signicat\Api\DataTransferObjects\DocumentInstructionsItemsDTO;
use App\Support\Signicat\Api\DataTransferObjects\Validators\EnumValidator;
use App\Support\Signicat\Enums\DocumentTypes;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\DataTransferObject;

class ConfigurationRequest extends DataTransferObject
{
    public string $id;
    public ?string $pageTitle;
    public ?string $favicon;
    public ?string $fontName;
    public ?string $fontUrl;
    public ?string $primaryColor;
    public ?string $fontColor;
    public ?string $buttonsColor;
    public ?string $buttonsHoverColor;
    public ?string $buttonsTextColor;
    public ?string $spinnerColor;
    #[EnumValidator(DocumentTypes::DRIVER_LICENSE)]
    public array $documentTypes;
    public ?array $documentCountries;
    public ?array $languages;
    public string $defaultCountry;
    public ?array $translations;
    public ?array $allowFileUpload;
    public ?array $allowTakePhoto;
    public ?array $allowZoomOnPreview;
    public ?bool $enableMobileHandover;
    public ?bool $enableOrientationConfirmation;
    public ?array $mobileHandoverModes;
    public ?bool $autoCapture;
    public ?array $detectGlare;
    public ?bool $takeSelfie;
    public ?bool $customRedactionError;
    public ?string $smsDefaultCountry;
    public ?int $maxRetries;
    public ?bool $showModalBeforeRedirect;
    public ?bool $forceMobileHandover;
    public ?bool $useNativeCamera;
    public ?bool $showDocumentInstructionsScreen;
    #[CastWith(ArrayCaster::class, DocumentInstructionsItemsDTO::class)]
    public ?array $documentInstructionsScreenItems;
    public ?string $customCss;
    public ?bool $showConsentPage;
    public ?int $mobileHandoverTimeout;
}
