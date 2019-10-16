<?php

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
        // $this->call(UsersTableSeeder::class);
        $this-> call (estatus::class);
        $this-> call (genero::class);
        $this-> call (roles::class);
        $this-> call (tipodireccion::class);
        $this-> call (Categorias::class);

    }
}
