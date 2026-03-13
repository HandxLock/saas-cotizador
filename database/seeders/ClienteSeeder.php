<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClienteSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('clientes')->insert([
      [
        'user_id' => 1,
        'rut' => '12345678-9',
        'nombre' => 'Juan Pérez',
        'razon_social' => 'Empresa XYZ',
        'email' => 'juan.perez@example.com',
        'created_at' => now(),
        'updated_at' => now(),
      ],
    ]);
  }
}
