<?php

namespace App\Support\Signicat\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class FileDriver implements TokenDriver
{
    private const TOKEN_EXPIRY = 5; //minutes

    public function __construct(private OAuthService $authService, private string $filePath)
    {
    }

    public function getToken(): string
    {
        $this->validate();
        return str_replace(PHP_EOL, '', file($this->filePath)[0]);
    }

    public function validate(): void
    {
        if (!$this->isTokenFileExist()) {
            $this->refresh();
        } elseif ((new Carbon(file($this->filePath)[1]))->diffInMinutes(Carbon::now()) >= self::TOKEN_EXPIRY) {
            $this->refresh();
        }
    }

    public function refresh(): void
    {
        $token = $this->authService->requestToken();
        $content = $token . PHP_EOL . Carbon::now()->toDateTimeString();
        File::put($this->filePath, $content);
    }

    private function isTokenFileExist(): bool
    {
        return File::exists($this->filePath);
    }
}
