<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\General;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GeneralResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GeneralResource\RelationManagers;

class GeneralResource extends Resource
{
    protected static ?string $model = General::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make()->schema([
                    FileUpload::make('logo')->image()->disk('public')->label('Company Logo (3:4)')->columnSpan(12),
                    TextInput::make('abt_title')->label('About Title (4:3)')->required()->columnSpan(12),
                    RichEditor::make('abt_desc')->label('About Description')->columnSpan(12),
                    TextInput::make('abt_link')->label('About Link')->url()->columnSpan(12),
                    FileUpload::make('abt_img')->image()->disk('public')->label('About Image')->columnSpan(12),
                    TextInput::make('why_title')->label('Why Choose Us Title')->required()->columnSpan(12),
                    RichEditor::make('why_desc')->label('Why Choose Us Description')->columnSpan(12),
                    TextInput::make('prod_title')->label('Product Section Title')->required()->columnSpan(12),
                    RichEditor::make('prod_desc')->label('Product Section Description')->columnSpan(12),
                    TextInput::make('contact')->label('Company Contact Number')->tel()->columnSpan(12),
                    TextInput::make('email')->label('Email')->email()->required()->columnSpan(12),
                    TextInput::make('address')->label('Company Address')->columnSpan(12),
                    TextInput::make('ctc_title')->label('Contact Us Title')->required()->columnSpan(12),
                    FileUpload::make('contact_img')->image()->disk('public')->label('Contact Us Image (1:1)')->columnSpan(12),
                    TextInput::make('footer_desc')->label('Footer Description')->columnSpan(12),
                ]),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('abt_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('abt_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('abt_img')
                    ->searchable(),
                Tables\Columns\TextColumn::make('why_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('prod_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ctc_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('footer_desc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGenerals::route('/'),
            'edit' => Pages\EditGeneral::route('/{record}/edit'),
        ];
    }
}
