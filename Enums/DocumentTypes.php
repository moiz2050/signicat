<?php

namespace App\Support\Signicat\Enums;

enum DocumentTypes: string
{
    case DRIVER_LICENSE = "driversLicense";
    case PASSPORT = "passport";
    case IDENTITY_CARD = "identityCard";
    case RESIDENT_PERMIT = "residencePermit";
    case WORK_PERMIT = "workPermit";
    case VOTER_ID = "voterId";
    case POSTAL_ID_CARD = "postalIdCard";
    case PROFESSIONAL_QUALIFICATION_CARD = "professionalQualificationCard";
    case SOCIAL_SECURITY = "socialSecurity";
    case PAN_CARD = "panCard";
    case PASSPORT_CARD = "passportCard";
    case STATE_ID = "stateId";
    case VISA = "visa";
    case ASYLUM_REGISTRATION_CARD = "asylumRegistrationCard";
    case NATIONAL_INSURANCE_CARD = "nationalHealthInsuranceCard";
    case AADHAR_CARD = "aadharCard";
    case INVALID = "invalid";
}
