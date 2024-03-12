<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make()
        ];
    }
}
