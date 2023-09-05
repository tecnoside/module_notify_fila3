<?php

// https://blog.quickadminpanel.com/laravel-notifications-with-database-driver-internal-messages/
declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateNotificationsTable extends XotBaseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $blueprint): void {
                $blueprint->uuid('id')->primary();
                $blueprint->string('type');
                $blueprint->morphs('notifiable');
                $blueprint->text('data');
                $blueprint->timestamp('read_at')->nullable();
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
            }
        );
    }
}
