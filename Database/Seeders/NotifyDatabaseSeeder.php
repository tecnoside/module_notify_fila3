<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class NotifyDatabaseSeeder extends Seeder {
=======
namespace Modules\Notify\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NotifyDatabaseSeeder extends Seeder
{
>>>>>>> 42aa20e (.)
    /**
     * Run the database seeds.
     *
     * @return void
     */
<<<<<<< HEAD
    public function run() {
=======
    public function run()
    {
>>>>>>> 42aa20e (.)
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
