<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
class CreateNotifyThemeablesTable extends XotBaseMigration
{
=======
class CreateNotifyThemeablesTable extends XotBaseMigration {
>>>>>>> 18a2c03 (up)
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    public function up()
    {
=======
    public function up() {
>>>>>>> 18a2c03 (up)
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('model');
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('updated_at')) {
                    $table->timestamps();
                }
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable()->after('updated_at');
                    $table->string('created_by')->nullable()->after('created_at');
                }
                if (! $this->hasColumn('notify_theme_id')) {
                    $table->integer('notify_theme_id')->nullable();
                }
            }
        );
    }
}
