<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationGroup = 'Website Management';
    protected static ?string $navigationLabel = 'Contact Details';


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Name'),
                        TextInput::make('address')
                            ->label('Address'),

                        Repeater::make('phones')
                            ->relationship('phones')
                            ->schema([
                                TextInput::make('phone')
                                    ->label('Phone Number')
                                    ->required(),
                            ])
                            ->label('Phone Numbers'),
                        Repeater::make('emails')
                            ->relationship('emails')
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email Address')
                                    ->required(),
                            ])
                            ->label('Email Addresses'),
                    ])->columns('2'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('address')->label('Address'),
                Tables\Columns\TextColumn::make('phones.phone')
                    ->label('Phone Numbers')
                    ->limit(50)
                    ->wrap()
                    ->sortable(),
                Tables\Columns\TextColumn::make('emails.email')
                    ->label('Email Addresses')
                    ->limit(50)
                    ->wrap()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
