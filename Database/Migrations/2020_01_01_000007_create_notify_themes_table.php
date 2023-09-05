<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
class CreateNotifyThemesTable extends XotBaseMigration
{
    // use XotBaseMigrationTrait;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $blueprint): void {
                $blueprint->increments('id');
                $blueprint->string('lang')->nullable();
                $blueprint->string('type')->nullable();
                $blueprint->string('subject')->nullable();
                $blueprint->text('body')->nullable();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $blueprint): void {
                if (! $this->hasColumn('from')) {
                    $blueprint->string('from')->nullable();
                }
                if (! $this->hasColumn('updated_at')) {
                    $blueprint->timestamps();
                }
                if (! $this->hasColumn('updated_by')) {
                    $blueprint->string('updated_by')->nullable()->after('updated_at');
                    $blueprint->string('created_by')->nullable()->after('created_at');
                }
                if (! $this->hasColumn('post_type')) {
                    $blueprint->nullableMorphs('post');
                }
                if (! $this->hasColumn('body_html')) {
                    $blueprint->text('body_html')->nullable();
                }
                if (! $this->hasColumn('theme')) {
                    $blueprint->string('theme')->nullable();
                }
                if (! $this->hasColumn('from_email')) {
                    $blueprint->string('from_email')->nullable();
                }
                if (! $this->hasColumn('logo_src')) {
                    $blueprint->string('logo_src')->nullable();
                }
                if (! $this->hasColumn('logo_width')) {
                    $blueprint->integer('logo_width')->nullable();
                }
                if (! $this->hasColumn('logo_height')) {
                    $blueprint->integer('logo_height')->nullable();
                }

                if (! $this->hasColumn('view_params')) {
                    $blueprint->json('view_params');
                }
            }
        ); // end update
    }

    // end function up
}
