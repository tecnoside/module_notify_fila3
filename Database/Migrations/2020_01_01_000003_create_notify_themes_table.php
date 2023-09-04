<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
//----- models -----

//----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
class CreateNotifyThemesTable extends XotBaseMigration {
    //use XotBaseMigrationTrait;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //-- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('lang')->nullable();
                $table->string('type')->nullable();
                $table->string('subject')->nullable();
                $table->text('body')->nullable();
            }
        );


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

        }); //end update
    }

    //end function up
}
=======
=======
>>>>>>> 8b046e1 (.)
>>>>>>> 468f0a0 (.)
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- models -----

// ----- bases ----
<<<<<<< HEAD
=======
//----- models -----

//----- bases ----
>>>>>>> 468f0a0 (.)
=======
>>>>>>> 3a62aee (up)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
class CreateNotifyThemesTable extends XotBaseMigration {
    // use XotBaseMigrationTrait;
<<<<<<< HEAD
=======
    //use XotBaseMigrationTrait;
>>>>>>> 468f0a0 (.)
=======
>>>>>>> 3a62aee (up)

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
<<<<<<< HEAD
=======
        //-- CREATE --
>>>>>>> 468f0a0 (.)
=======
>>>>>>> 3a62aee (up)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('lang')->nullable();
                $table->string('type')->nullable();
                $table->string('subject')->nullable();
                $table->text('body')->nullable();
            }
        );

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
            }
        ); // end update
    }

    // end function up
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
