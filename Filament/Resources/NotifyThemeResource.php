<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

=======
namespace Modules\Notify\Filament\Resources;

use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> 911eb41 (up)
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Models\NotifyTheme;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
>>>>>>> 911eb41 (up)
use Savannabits\FilamentModules\Concerns\ContextualResource;

class NotifyThemeResource extends Resource
{
    use ContextualResource;

    protected static ?string $model = NotifyTheme::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lang')->options(self::fieldOptions('lang')),
                Forms\Components\Select::make('type')->options(self::fieldOptions('type')),
                Forms\Components\Select::make('post_type')->options(self::fieldOptions('post_type')),
<<<<<<< HEAD
                Forms\Components\TextInput::make('post_id'),
                Forms\Components\TextInput::make('subject'),
                Forms\Components\TextInput::make('from'),
                Forms\Components\TextInput::make('from_email'),
                Forms\Components\SpatieMediaLibraryFileUpload::make('logo_src')
                    ->enableOpen()
                    ->enableDownload()
                    ->columnSpanFull()
                    ->disk('uploads')
                    ->directory('photos')
                    ->preserveFilenames(),
                Forms\Components\TextInput::make('logo_width'),
                Forms\Components\TextInput::make('logo_height'),
                // Forms\Components\TextInput::make('theme'),
                Forms\Components\Select::make('theme')->options(
                    [
                        'empty' => 'empty',
                        'ark' => 'ark',
                        'minty' => 'minty',
                        'sunny' => 'sunny',
                        'widgets' => 'widgets',
                    ]
                )
                    ->default('empty'),
                Forms\Components\Textarea::make('body')->columnSpanFull(),
                // Forms\Components\RichEditor::make('body_html')->columnSpanFull(),
                TinyEditor::make('body_html')->columnSpanFull(),
            ]);
    }

    public static function fieldOptions(string $field): array
    {
        return NotifyTheme::select($field)
            ->where($field, '!=', null)
            ->distinct()
            ->pluck($field, $field)
            ->toArray();
=======
                Forms\Components\RichEditor::make('body')->columnSpanFull(),
                Forms\Components\RichEditor::make('body_html')->columnSpanFull(),
            ]);
    }

    public static function fieldOptions(string $field): array{
        $options=NotifyTheme::select($field)
            ->where($field,'!=',null)
            ->distinct()
                ->pluck($field, $field)
                ->toArray();
        return $options;
>>>>>>> 911eb41 (up)
    }

    public static function table(Table $table): Table
    {
<<<<<<< HEAD
        return $table
            ->columns([
                'id' => Tables\Columns\TextColumn::make('id')->sortable(),
                'lang' => Tables\Columns\TextColumn::make('lang')->sortable(),
                'type' => Tables\Columns\TextColumn::make('type')->sortable(),
                'post_id' => Tables\Columns\TextColumn::make('post_id')->sortable(),
                'post_type' => Tables\Columns\TextColumn::make('post_type')->sortable(),
                'logo_src' => Tables\Columns\TextColumn::make('logo_src')->sortable(),
=======
        
        
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('lang')->sortable(),
                Tables\Columns\TextColumn::make('type')->sortable(),
                Tables\Columns\TextColumn::make('post_id')->sortable(),
                Tables\Columns\TextColumn::make('post_type')->sortable(),
                Tables\Columns\TextColumn::make('logo_src')->sortable(),
>>>>>>> 911eb41 (up)
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('lang')
                    ->options(self::fieldOptions('lang')),
                Tables\Filters\SelectFilter::make('post_type')
                    ->options(self::fieldOptions('post_type')),
                Tables\Filters\SelectFilter::make('type')
                    ->options(self::fieldOptions('type')),
<<<<<<< HEAD
=======
                
>>>>>>> 911eb41 (up)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
<<<<<<< HEAD

    public static function getRelations(): array
    {
        return [
            // RelationManagers\LinkableRelationManager::class,
        ];
    }

=======
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
>>>>>>> 911eb41 (up)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotifyThemes::route('/'),
            'create' => Pages\CreateNotifyTheme::route('/create'),
            'edit' => Pages\EditNotifyTheme::route('/{record}/edit'),
        ];
<<<<<<< HEAD
    }
=======
    }    
>>>>>>> 911eb41 (up)
}
