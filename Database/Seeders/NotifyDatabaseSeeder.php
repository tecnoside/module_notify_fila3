<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class NotifyDatabaseSeeder extends Seeder {
<<<<<<< HEAD
=======
namespace Modules\Notify\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NotifyDatabaseSeeder extends Seeder
{
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
<<<<<<< HEAD
=======
    public function run()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
