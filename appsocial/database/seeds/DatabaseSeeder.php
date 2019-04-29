<?php

use Illuminate\Database\Seeder;
use App\Models\usuario;

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

        usuario::create([
            'id' => 1,
            'nombre' => 'Dummy',
            'usuario' => 'Dummy',
            'correo' => 'Dummy@gmail.com',
            'password' => '1', // secret
          ]);
  
          usuario::create([
            'id' => 121,
            'nombre' => 'ClienteDummy',
            'usuario' => 'Dummy',
            'correo' => 'llangworth@example.net',
            'password' => '1', // secret
          ]);
    }
}
