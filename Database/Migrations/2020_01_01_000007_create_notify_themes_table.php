<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1c1596b (up)
=======
>>>>>>> 52b4ada (up)
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// ----- bases ----
=======
//----- models -----

//----- bases ----
=======
<<<<<<< HEAD
//----- models -----

//----- bases ----
=======
// ----- models -----

=======
>>>>>>> 34ed535 (.)
// ----- bases ----
>>>>>>> b1dceab (up)
=======
// ----- models -----

// ----- bases ----
>>>>>>> a758bd5 (.)
>>>>>>> 52b4ada (up)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
<<<<<<< HEAD
class CreateNotifyThemesTable extends XotBaseMigration {
    //use XotBaseMigrationTrait;
=======
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
>>>>>>> 52b4ada (up)

    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    public function up() {
        //-- CREATE --
=======
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
>>>>>>> 52b4ada (up)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 52b4ada (up)

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
<<<<<<< HEAD
=======
            if (! $this->hasColumn('body_html')) {
                $table->text('body_html')->nullable();
            }
>>>>>>> 52b4ada (up)

        }); //end update
    }

    //end function up
<<<<<<< HEAD
}
=======
=======
>>>>>>> 8b046e1 (.)
>>>>>>> 468f0a0 (.)
=======
>>>>>>> fe06862 (.)
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- bases ----
<<<<<<< HEAD
<<<<<<< HEAD
=======
//----- models -----

//----- bases ----
>>>>>>> 468f0a0 (.)
=======
>>>>>>> 3a62aee (up)
=======
>>>>>>> fe06862 (.)
>>>>>>> 1c1596b (up)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
class CreateNotifyThemesTable extends XotBaseMigration
{
    // use XotBaseMigrationTrait;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    //use XotBaseMigrationTrait;
>>>>>>> 468f0a0 (.)
=======
>>>>>>> 3a62aee (up)
=======
>>>>>>> fe06862 (.)
>>>>>>> 1c1596b (up)

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // -- CREATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        //-- CREATE --
>>>>>>> 468f0a0 (.)
=======
>>>>>>> 3a62aee (up)
=======
>>>>>>> fe06862 (.)
>>>>>>> 1c1596b (up)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('lang')->nullable();
                $table->string('type')->nullable();
                $table->string('subject')->nullable();
                $table->text('body')->nullable();
            }
        );

=======
=======
=======
>>>>>>> a758bd5 (.)
>>>>>>> 52b4ada (up)
        // -- UPDATE --
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
                if (! $this->hasColumn('theme')) {
                    $table->string('theme')->nullable();
                }
                if (! $this->hasColumn('from_email')) {
                    $table->string('from_email')->nullable();
                }
                if (! $this->hasColumn('logo_src')) {
                    $table->string('logo_src')->nullable();
                }
                if (! $this->hasColumn('logo_width')) {
                    $table->integer('logo_width')->nullable();
                }
                if (! $this->hasColumn('logo_height')) {
                    $table->integer('logo_height')->nullable();
                }

                if (! $this->hasColumn('view_params')) {
                    $table->json('view_params');
                }
            }
        ); // end update
    }

    // end function up
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
}
=======

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
>>>>>>> 3a62aee (up)
}
<<<<<<< HEAD
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8b046e1 (.)
>>>>>>> 468f0a0 (.)
=======
}
>>>>>>> fe06862 (.)
>>>>>>> 1c1596b (up)
=======
>>>>>>> b1dceab (up)
=======
>>>>>>> a758bd5 (.)
}
>>>>>>> 52b4ada (up)
