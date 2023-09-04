<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateContactsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->morphs('model');
                $table->string('contact_type')->nullable();
                $table->string('value')->nullable();
                $table->timestamp('verified_at')->nullable();
                $table->timestamps();
                $table->string('updated_by')->nullable()->after('updated_at');
                $table->string('created_by')->nullable()->after('created_at');
            }
        );
    }
}
