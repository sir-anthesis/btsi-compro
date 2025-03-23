<?php

namespace App\Filament\Resources\GeneralResource\Pages;

use Filament\Actions;
use App\Models\General;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\GeneralResource;

class ListGenerals extends ListRecords
{
    protected static string $resource = GeneralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        $firstRecord = General::first();

        if ($firstRecord) {
            $this->redirect(GeneralResource::getUrl('edit', ['record' => $firstRecord->id]));
        } else {
            $this->redirect(GeneralResource::getUrl('create'));
        }
    }
}
