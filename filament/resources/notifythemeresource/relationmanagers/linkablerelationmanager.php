<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 9658d21 (up)
=======
declare(strict_types=1);

>>>>>>> b735fbf (.)
=======
>>>>>>> bc733de (up)
namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
>>>>>>> 9658d21 (up)
=======
>>>>>>> 42f9249 (.)
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
>>>>>>> bc733de (up)
=======
>>>>>>> 34ed535 (.)

class LinkableRelationManager extends RelationManager
{
    protected static string $relationship = 'linkable';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
            ])
            ->filters([
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                //
>>>>>>> 9658d21 (up)
=======

>>>>>>> 42f9249 (.)
=======
>>>>>>> b735fbf (.)
=======
                //
>>>>>>> bc733de (up)
=======

>>>>>>> 34ed535 (.)
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    }
=======
    }    
>>>>>>> 9658d21 (up)
=======
    }
>>>>>>> 42f9249 (.)
=======
    }    
>>>>>>> bc733de (up)
=======
    }
>>>>>>> 34ed535 (.)
}
