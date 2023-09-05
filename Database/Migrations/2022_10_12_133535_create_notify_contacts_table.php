<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Notify\Models\Contact;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateNotifyContactsTable extends XotBaseMigration
{
    protected ?string $model_class = Contact::class;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $blueprint): void {
                $blueprint->increments('id');
                $blueprint->morphs('model');
                $blueprint->string('contact_type')->nullable();
                $blueprint->string('value')->nullable();
                $blueprint->integer('user_id')->nullable();
                $blueprint->timestamp('verified_at')->nullable();
                $blueprint->timestamps();
                $blueprint->string('updated_by')->nullable();
                $blueprint->string('created_by')->nullable();
            }
        );
        $this->tableUpdate(
            function (Blueprint $blueprint): void {
                if (! $this->hasColumn('token')) {
                    $blueprint->string('token')->nullable();
                }
            }
        );
    }
}
