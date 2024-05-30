<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteInfoResource\Pages;
use App\Filament\Resources\SiteInfoResource\RelationManagers;
use App\Models\SiteInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class SiteInfoResource extends Resource
{
    protected static ?string $model = SiteInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Website Management';
    protected static ?string $navigationLabel = 'About Statements';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\Textarea::make('about_us')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('mission_statement')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('vision')
                            ->required()
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            'index' => Pages\ListSiteInfos::route('/'),
            'create' => Pages\CreateSiteInfo::route('/create'),
            'edit' => Pages\EditSiteInfo::route('/{record}/edit'),
        ];
    }
}
