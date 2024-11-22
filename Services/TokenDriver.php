<?php

namespace App\Support\Signicat\Services;

interface TokenDriver
{
    public function getToken(): string;
    public function validate(): void;
    public function refresh(): void;
}
