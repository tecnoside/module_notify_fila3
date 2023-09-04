<?php

<<<<<<< HEAD
// https://blog.quickadminpanel.com/laravel-notifications-with-database-driver-internal-messages/
declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateNotificationsTable extends XotBaseMigration
{
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Xot\Database\Migrations\XotBaseMigration;


class CreateNotificationsTable extends XotBaseMigration {

>>>>>>> 40ebae8 (up)
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    public function up()
    {
        // -- CREATE --
=======
    public function up(){
         // -- CREATE --
>>>>>>> 40ebae8 (up)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('type');
                $table->morphs('notifiable');
                $table->text('data');
                $table->timestamp('read_at')->nullable();
                $table->timestamps();
            }
        );
<<<<<<< HEAD
        // -- UPDATE --
=======
         // -- UPDATE --
>>>>>>> 40ebae8 (up)
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('updated_at')) {
                    $table->timestamps();
                }
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable()->after('updated_at');
                    $table->string('created_by')->nullable()->after('created_at');
                }
            }
        );
    }
<<<<<<< HEAD
}
=======

    
};
>>>>>>> 40ebae8 (up)
