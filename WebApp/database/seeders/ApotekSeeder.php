<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apotek;
use Illuminate\Support\Facades\DB;

class ApotekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Apotek Abadi',
                'address' => 'Jln apalah',
                'jam_operasi' => '00.00 - 23.59',
                'telp' => "(021) 569871"
            ],

            [
                'name' => 'Apotek Muji Harapan',
                'address' => 'Jln Jasa Karya no 4',
                'jam_operasi' => '08.00 - 22.00',
                'telp' => "(021) 834501"
            ],
   
            [
                'name' => 'Apotek Aneka Farma',
                'address' => 'Jl. Peta Selatan Blok D12/1',
                'jam_operasi' => '07.00 - 23.00',
                'telp' => "(021) 5422930"
            ],

            [
                'name' => 'Apotek Citra Lestari',
                'address' => 'Jl. Citra Garden 1',
                'jam_operasi' => '08.00 - 23.00',
                'telp' => "(021) 6184805"
            ],

            [
                'name' => 'Apotek Farma Farma',
                'address' => 'Jl. Kesehatan Blok N1/6',
                'jam_operasi' => '07.00 - 23.00',
                'telp' => "(021) 5454695"
            ],

            [
                'name' => 'Apotek Guna Sehat',
                'address' => 'Jl. Tampak Siring Raya Blok H2/1',
                'jam_operasi' => '07.00 - 20.00',
                'telp' => "(021) 5402344"
            ],

            [
                'name' => 'Apotek Medikita',
                'address' => 'Jl. Permata Taman Palem',
                'jam_operasi' => '08.00 - 23.00',
                'telp' => "(021) 5390544"
            ],

            [
                'name' => 'Apotek Aneka Farma',
                'address' => 'Jl. Peta Selatan Blok D',
                'jam_operasi' => '07.00 - 23.00',
                'telp' => "(021) 5422930"
            ],

            [
                'name' => 'Apotek Kimia Farma',
                'address' => 'Jl. Menceng Raya No.24',
                'jam_operasi' => '07.00 - 23.00',
                'telp' => "(021) 6192034"
            ],

            [
                'name' => 'Apotek Berkah Jaya',
                'address' => 'Jl. Utan Jati Kalideres Blok B7',
                'jam_operasi' => '07.00 - 23.00',
                'telp' => "(021) 5435062"
            ],

        ];
        DB::table('apoteks')->insert($data);
    }
}