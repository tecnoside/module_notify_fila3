<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Notify\Models\Contact;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class CreateNotifyContactsTable extends XotBaseMigration
{
=======
class CreateNotifyContactsTable extends XotBaseMigration {
>>>>>>> 0972249 (up)
=======
class CreateNotifyContactsTable extends XotBaseMigration {
>>>>>>> fe06862 (.)
=======
class CreateNotifyContactsTable extends XotBaseMigration
{
>>>>>>> 42f9249 (.)
=======
class CreateNotifyContactsTable extends XotBaseMigration {
>>>>>>> 70cdb0c (up)
    protected ?string $model_class = Contact::class;

    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function up()
    {
=======
    public function up() {
>>>>>>> 0972249 (up)
=======
    public function up() {
>>>>>>> fe06862 (.)
=======
    public function up()
    {
>>>>>>> 42f9249 (.)
=======
    public function up() {
>>>>>>> 70cdb0c (up)
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->morphs('model');
                $table->string('contact_type')->nullable();
                $table->string('value')->nullable();
                $table->integer('user_id')->nullable();
                $table->timestamp('verified_at')->nullable();
                $table->timestamps();
                $table->string('updated_by')->nullable();
                $table->string('created_by')->nullable();
            }
        );
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('token')) {
                    $table->string('token')->nullable();
                }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            }
        );
=======
            });
>>>>>>> 0972249 (up)
=======
            });
>>>>>>> fe06862 (.)
=======
            }
        );
>>>>>>> 42f9249 (.)
=======
            });
>>>>>>> 70cdb0c (up)
    }
}
