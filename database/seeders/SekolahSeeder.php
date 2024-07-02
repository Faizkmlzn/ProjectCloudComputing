<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      collect([
        [
          'name' => 'SMP REKAYASA',
          'npsn' => '41428792',
          // 'nss' => '12345678',
          'telepon' => '0212242198',
          'email' => 'info@smprekayasa.sch.id',
          'alamat' => 'Jl. Raya Indonesia No. 1945',
          'kodepos' => '46123',
          'website' => 'smprekayasa.sch.id',
          'kepsek' => 'Mamat Alkatiri S, M.Pd',
          'nipkepsek' => '196520021242141424',
        ],
      ])->each(function($sekolah){
        Sekolah::create($sekolah);
      });
    }
}
