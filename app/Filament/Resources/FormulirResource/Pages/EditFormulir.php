<?php

namespace App\Filament\Resources\FormulirResource\Pages;

use App\Filament\Resources\FormulirResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormulir extends EditRecord
{
    protected static string $resource = FormulirResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
