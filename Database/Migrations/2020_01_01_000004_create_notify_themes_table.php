<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
//----- models -----

//----- bases ----
=======
// ----- models -----

// ----- bases ----
>>>>>>> b1dceab (up)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateThemesTable.
 */
class CreateNotifyThemesTable extends XotBaseMigration {
<<<<<<< HEAD
    //use XotBaseMigrationTrait;
=======
    // use XotBaseMigrationTrait;
>>>>>>> b1dceab (up)

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
<<<<<<< HEAD
        //-- CREATE --
=======
        // -- CREATE --
>>>>>>> b1dceab (up)
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
            }
        ); // end update
    }

    // end function up
>>>>>>> b1dceab (up)
}
