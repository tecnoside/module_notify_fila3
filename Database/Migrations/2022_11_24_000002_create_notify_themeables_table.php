<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateNotifyThemeablesTable extends XotBaseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $blueprint): void {
                $blueprint->increments('id');
                $blueprint->nullableMorphs('model');
                $blueprint->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $blueprint): void {
                if (! $this->hasColumn('updated_at')) {
                    $blueprint->timestamps();
                }
                if (! $this->hasColumn('updated_by')) {
                    $blueprint->string('updated_by')->nullable()->after('updated_at');
                    $blueprint->string('created_by')->nullable()->after('created_at');
                }
                if (! $this->hasColumn('notify_theme_id')) {
                    $blueprint->integer('notify_theme_id')->nullable();
                }
            }
        );
    }
}
