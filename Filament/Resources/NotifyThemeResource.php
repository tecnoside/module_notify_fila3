<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b735fbf (.)
declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

=======
namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> 911eb41 (up)
=======
>>>>>>> 42f9249 (.)
=======
namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> 01564cc (up)
=======
>>>>>>> 34ed535 (.)
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Models\NotifyTheme;
<<<<<<< HEAD
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
>>>>>>> 911eb41 (up)
=======
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> 42f9249 (.)
use Savannabits\FilamentModules\Concerns\ContextualResource;
=======
>>>>>>> 03e1d62 (Dusting)
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
>>>>>>> 01564cc (up)
=======
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> 34ed535 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9658d21 (up)
=======
>>>>>>> bc733de (up)
                Forms\Components\TextInput::make('post_id'),
                Forms\Components\TextInput::make('subject'),
                Forms\Components\TextInput::make('from'),
                Forms\Components\TextInput::make('from_email'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f401a20 (up)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f401a20 (up)
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
=======
                Forms\Components\TextInput::make('logo_src'),
                Forms\Components\TextInput::make('logo_width'),
                Forms\Components\TextInput::make('logo_height'),
<<<<<<< HEAD
                Forms\Components\TextInput::make('theme'),

>>>>>>> 9658d21 (up)
=======
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
>>>>>>> e4aae54 (.)
=======
>>>>>>> 42f9249 (.)
=======
>>>>>>> 01564cc (up)
=======
                Forms\Components\TextInput::make('logo_src'),
                Forms\Components\TextInput::make('logo_width'),
                Forms\Components\TextInput::make('logo_height'),
<<<<<<< HEAD
                Forms\Components\TextInput::make('theme'),

>>>>>>> bc733de (up)
=======
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
>>>>>>> 5bd4f40 (.)
=======
>>>>>>> 34ed535 (.)
                Forms\Components\RichEditor::make('body')->columnSpanFull(),
                Forms\Components\RichEditor::make('body_html')->columnSpanFull(),
            ]);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function fieldOptions(string $field): array
    {
        return NotifyTheme::select($field)
            ->where($field, '!=', null)
            ->distinct()
<<<<<<< HEAD
                ->pluck($field, $field)
                ->toArray();
        return $options;
>>>>>>> 911eb41 (up)
=======
            ->pluck($field, $field)
            ->toArray();
>>>>>>> 42f9249 (.)
=======
    public static function fieldOptions(string $field): array{
        $options=NotifyTheme::select($field)
            ->where($field,'!=',null)
            ->distinct()
                ->pluck($field, $field)
                ->toArray();
        return $options;
>>>>>>> 01564cc (up)
=======
    public static function fieldOptions(string $field): array
    {
        returnNotifyTheme::select($field)
            ->where($field, '!=', null)
            ->distinct()
            ->pluck($field, $field)
            ->toArray();
>>>>>>> 34ed535 (.)
    }

    public static function table(Table $table): Table
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        
        
=======
>>>>>>> 42f9249 (.)
        return $table
            ->columns([
<<<<<<< HEAD
=======
        
        
=======
>>>>>>> 34ed535 (.)
        return $table
            ->columns([
>>>>>>> 01564cc (up)
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('lang')->sortable(),
                Tables\Columns\TextColumn::make('type')->sortable(),
                Tables\Columns\TextColumn::make('post_id')->sortable(),
                Tables\Columns\TextColumn::make('post_type')->sortable(),
                Tables\Columns\TextColumn::make('logo_src')->sortable(),
<<<<<<< HEAD
>>>>>>> 911eb41 (up)
=======
                'id' => Tables\Columns\TextColumn::make('id')->sortable(),
                'lang' => Tables\Columns\TextColumn::make('lang')->sortable(),
                'type' => Tables\Columns\TextColumn::make('type')->sortable(),
                'post_id' => Tables\Columns\TextColumn::make('post_id')->sortable(),
                'post_type' => Tables\Columns\TextColumn::make('post_type')->sortable(),
                'logo_src' => Tables\Columns\TextColumn::make('logo_src')->sortable(),
>>>>>>> f401a20 (up)
=======
>>>>>>> 01564cc (up)
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('lang')
                    ->options(self::fieldOptions('lang')),
                Tables\Filters\SelectFilter::make('post_type')
                    ->options(self::fieldOptions('post_type')),
                Tables\Filters\SelectFilter::make('type')
                    ->options(self::fieldOptions('type')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                
>>>>>>> 911eb41 (up)
=======

>>>>>>> 42f9249 (.)
=======
>>>>>>> b735fbf (.)
=======
                
>>>>>>> 01564cc (up)
=======

>>>>>>> 34ed535 (.)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    public static function getRelations(): array
    {
        return [
            // RelationManagers\LinkableRelationManager::class,
<<<<<<< HEAD
        ];
    }

=======
    
=======

>>>>>>> 42f9249 (.)
    public static function getRelations(): array
    {
        return [
            //RelationManagers\LinkableRelationManager::class,
=======
>>>>>>> b735fbf (.)
        ];
    }
<<<<<<< HEAD
    
>>>>>>> 911eb41 (up)
=======

>>>>>>> 42f9249 (.)
=======
    
=======

>>>>>>> 34ed535 (.)
    public static function getRelations(): array
    {
        return [
            //RelationManagers\LinkableRelationManager::class,
        ];
    }
<<<<<<< HEAD
    
>>>>>>> 01564cc (up)
=======

>>>>>>> 34ed535 (.)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotifyThemes::route('/'),
            'create' => Pages\CreateNotifyTheme::route('/create'),
            'edit' => Pages\EditNotifyTheme::route('/{record}/edit'),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    }
=======
    }    
>>>>>>> 911eb41 (up)
=======
    }
>>>>>>> 42f9249 (.)
=======
    }    
>>>>>>> 01564cc (up)
=======
    }
>>>>>>> 34ed535 (.)
}
