<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        // menambahkan data task dengan query builder
        $this->db->table('tasks')->insert([
        'name' => 'Perkenalkan nama saya',
        'description' => 'Budiono Siregar cita-cita Kapal Lawud.',
        'done' => false
        ]);
    }
}
