<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(Fornecedor_seeder::class);
        $this->call(site_contato_seeder::class);
        $this->call(MotivoContatoSeeder::class);
    }
}
