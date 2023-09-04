<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
//----- models -----

//----- bases ----
=======
// ----- models -----

// ----- bases ----
>>>>>>> b1dceab (up)
=======
// ----- models -----

// ----- bases ----
>>>>>>> a758bd5 (.)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD:Database/Migrations/2020_01_01_000005_create_notify_themes_table.php
class CreateNotifyThemesTable extends XotBaseMigration {
<<<<<<< HEAD
    //use XotBaseMigrationTrait;
=======
=======
class CreateNotifyThemesTable extends XotBaseMigration
{
>>>>>>> 2e16e99 (up):Database/Migrations/2020_01_01_000006_create_notify_themes_table.php
    // use XotBaseMigrationTrait;
>>>>>>> b1dceab (up)
=======
class CreateNotifyThemesTable extends XotBaseMigration
{
    // use XotBaseMigrationTrait;
>>>>>>> a758bd5 (.)

    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD:Database/Migrations/2020_01_01_000005_create_notify_themes_table.php
    public function up() {
<<<<<<< HEAD
        //-- CREATE --
=======
=======
    public function up()
    {
>>>>>>> 2e16e99 (up):Database/Migrations/2020_01_01_000006_create_notify_themes_table.php
        // -- CREATE --
>>>>>>> b1dceab (up)
=======
    public function up()
    {
        // -- CREATE --
>>>>>>> a758bd5 (.)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('lang')->nullable();
                $table->string('type')->nullable();
                $table->string('subject')->nullable();
                $table->text('body')->nullable();
            }
        );

<<<<<<< HEAD
<<<<<<< HEAD

        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
            if (! $this->hasColumn('from')) {
                $table->string('from')->nullable();
            }
            if (! $this->hasColumn('updated_at')) {
                $table->timestamps();
            }
            if (! $this->hasColumn('updated_by')) {
                $table->string('updated_by')->nullable()->after('updated_at');
                $table->string('created_by')->nullable()->after('created_at');
            }
            if (! $this->hasColumn('post_type')) {
                $table->nullableMorphs('post');
            }
            if (! $this->hasColumn('body_html')) {
                $table->text('body_html')->nullable();
            }

        }); //end update
    }

    //end function up
=======
=======
>>>>>>> a758bd5 (.)
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (!$this->hasColumn('from')) {
                    $table->string('from')->nullable();
                }
                if (!$this->hasColumn('updated_at')) {
                    $table->timestamps();
                }
                if (!$this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable()->after('updated_at');
                    $table->string('created_by')->nullable()->after('created_at');
                }
                if (!$this->hasColumn('post_type')) {
                    $table->nullableMorphs('post');
                }
                if (!$this->hasColumn('body_html')) {
                    $table->text('body_html')->nullable();
                }
                if (!$this->hasColumn('theme')) {
                    $table->string('theme')->nullable();
                }
                if (!$this->hasColumn('from_email')) {
                    $table->string('from_email')->nullable();
                }
                if (!$this->hasColumn('logo_src')) {
                    $table->string('logo_src')->nullable();
                }
                if (!$this->hasColumn('logo_width')) {
                    $table->integer('logo_width')->nullable();
                }
                if (!$this->hasColumn('logo_height')) {
                    $table->integer('logo_height')->nullable();
                }
            }
        ); // end update
    }

    // end function up
<<<<<<< HEAD
>>>>>>> b1dceab (up)
=======
>>>>>>> a758bd5 (.)
}
