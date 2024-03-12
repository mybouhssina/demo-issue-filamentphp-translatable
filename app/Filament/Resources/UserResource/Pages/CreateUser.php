<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make()
        ];
    }
}
