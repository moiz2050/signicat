<?php

namespace App\Support\Signicat\Enums;

enum Redacts: string
{
    case FIRST_NAME = "firstName";
    case LAST_NAME = "lastName";
    case FULL_NAME = "fullName";
    case GENDER = "gender";
    case ADDRESS = "address";
    case PERSONAL_IDENTIFICATION_NUMBER = "personalIdentificationNumber";
    case DOCUMENT_NUMBER = "documentNumber";
    case DATE = "date";
    case DATE_OF_BIRTH = "dateOfBirth";
    case DATE_OF_ISSUE = "dateOfIssue";
    case DATE_OF_EXPIRY = "dateOfExpiry";
    case PHOTO = "photo";
    case SIGNATURE = "signature";
    case ACCESS_NUMBER = "accessNumber";
    case DRIVING_PERMITS = "drivingPermits";
    case ISSUING_AUTHORITY = "issuingAuthority";
    case MRZ = "mrz";
    case BARCODE = "barcode";
}
