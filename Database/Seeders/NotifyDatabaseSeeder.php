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
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
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
>>>>>>> 8cd37156187c5a52f4a3a2836a5ddeb3c57e8dbf
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
