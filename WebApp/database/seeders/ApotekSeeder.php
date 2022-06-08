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
                'name' => 'Apotek Kimia Farma',
                'address' => 'Jl. Terusan Buah Batu No.265 - 267, Kujangsari, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40287',
                'jam_operasi' => '07.00 - 22.00',
                'telp' => "(021) 87770227"
            ],

            [
                'name' => 'Apotek Indah Jaya 24 Jam Bojongsoang Bandung',
                'address' => 'Jalan Raya Bojongsoang Raya No. 87 Bekas Bank BJB, Sebelah Bank BTN, Kabupaten Bandung, Jawa Barat 40287',
                'jam_operasi' => 'Buka 24 Jam',
                'telp' => " 0851-6324-5454"
            ],
   
            [
                'name' => 'Apotek Sulistia Farma',
                'address' => 'Jalan Margacinta No.14a, Margacinta - Buah Batu, Cijaura, Kec. Buahbatu, Kota Bandung, Jawa Barat 40287',
                'jam_operasi' => '08.00 - 00.00',
                'telp' => "(022) 7560842"
            ],

            [
                'name' => 'Apotek Griya Farma',
                'address' => 'Jl. Raya Bojongsoang No.Raya, Lengkong, Bojongsoang, Bandung Regency, West Java 40287',
                'jam_operasi' => '07.00 - 23.00',
                'telp' => "(022) 7508140"
            ],

            [
                'name' => 'Apotek K-24 Karawitan',
                'address' => 'Jl. Karawitan No.60-A, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264',
                'jam_operasi' => 'Buka 24 Jam',
                'telp' => "(022) 7307878"
            ],

            [
                'name' => 'Apotek Kordon',
                'address' => 'Jl. Terusan Buah Batu No.274 A, Kujangsari, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40286',
                'jam_operasi' => '03.30 - 20.00',
                'telp' => "0821-2609-6003"
            ],

            [
                'name' => 'Jaya Abadi Pharmacies',
                'address' => 'Jl. Buah Batu No.245, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40265',
                'jam_operasi' => '08.00 - 21.00',
                'telp' => "(022) 7304273"
            ],

            [
                'name' => 'Apotek Kimia Farma M. Toha',
                'address' => '01, Jl. Moch. Toha No.274 b-c, Karasak, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40243',
                'jam_operasi' => '07.30 - 22.00',
                'telp' => "(022) 42831235"
            ],

            [
                'name' => 'Titi Murni Pharmacy',
                'address' => 'Jl. Kramat Raya No.128, RT.1/RW.8, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430',
                'jam_operasi' => '07.00 - 23.00',
                'telp' => "0812-1079-2137"
            ],

            [
                'name' => 'Apotek Antasari',
                'address' => 'Jalan Aipda K. S. Tubun, RT.13/RW.3, Petamburan, Kota Jakarta Pusat, Daerah, Khusus Ibukota Jakarta 11410, Indonesia, RT.12/RW.3, Petamburan, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10260',
                'jam_operasi' => '08.00 - 21.00',
                'telp' => "(021) 53671368"
            ],

        ];
        DB::table('apoteks')->insert($data);
    }
}