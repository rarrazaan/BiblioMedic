<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
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
                'nama_obat' => 'OBH Combi',
                'komposisi' => 'Succus Liquiritiae, Ammonium Chloride, Ephedrine HCl, Paracetamol, Chlorpheniramine Maleate, Alcohol.',
                'khasiat' => 'Meredakan batuk yang disertai gejala-gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin.',
                'aturanPakai' => 'Anak-anak (6-12 tahun): 5 ml 1-4 x sehari, Dewasa (diatas 12 tahun): 15 ml 1 x 4 sehari.',
                'peringatan' => 'Memiliki efek samping: Mual, muntah, sakit perut, mulut kering, mengantuk.',
            ],

            [
                'nama_obat' => 'Antangin JRG',
                'komposisi' => 'Zingiberis Rhizoma, Panax ginseng radix extract, Blumea balsamifera folium, Menthae Folium, Royal jelly, madu.',
                'khasiat' => 'Membantu meredakan gejala masuk angin seperti meriang, pusing, mual.',
                'aturanPakai' => 'Untuk memelihara daya tahan tubuh: 2 x sehari 1 sachet, untuk mengatasi masuk angin: 3 - 4 x sehari 1 sachet, untuk mencegah mabuk perjalanan: 1 sachet sebelum melakukan perjalanan.',
                'peringatan' => 'Antangin JRG dikontraindikasikan penggunaannya oleh orang dengan kondisi kesehatan tertentu, seperti : Hipersensitif dan Wanita hamil dan menyusui.',
            ],

            [
                'nama_obat' => 'Sanmol',
                'komposisi' => 'Paracetamol.',
                'khasiat' => 'Meringankan rasa sakit pada keadaan sakit kepala, sakit gigi dan menurunkan demam.',
                'aturanPakai' => 'Obat dapat diminum sebelum atau sesudah makan.',
                'peringatan' => 'Sanmol dikontraindikasikan penggunaannya oleh penderita gangguan fungsi hati yang berat dan hipersensitivitas terhadap Paracetamol.',
            ],

            [
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'komposisi' => 'Diphenhydramnine HCl, Ammonium Cl, K-guaiacolsufonate, Na citrate, dan Menthol.',
                'khasiat' => 'Meringankan batuk berdahak.',
                'aturanPakai' => 'Dewasa: 2 sendok takar (10 ml) yang dikonsumsi 3-4 kali sehari. Anak usia 6-12 tahun: 1 sendok takar (5 ml) yang dikonsumsi 3-4 kali sehari atau menurut petunjuk dokter.',
                'peringatan' => 'Sanadryl Expectoran Sirup memiliki kontradiksi pada pasien dengan hipersentivitas terhadap komponen obat. Hati-hati dalam menggunakan obat ini pada penderita dengan gangguan hati, asma, glaukoma, MAOI, ibu hamil, dan anak-anak.',
            ],

            [
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'komposisi' => 'Vitamin C, Madu, Vitamin E, Vitamin B3, Vitamin B6, dan Vitamin B12.',
                'khasiat' => 'Mmembantu mencegah sariawan, meningkatkan kekebalan tubuh, dan sebagai antioksidan yang menangkal radikal bebas.',
                'aturanPakai' => '1 sachet per hari.',
                'peringatan' => 'Mengandung pemanis buatan aspartam.',
            ],
            
            [
                'nama_obat' => 'Stimuno Syrup',
                'komposisi' => 'Ekstrak Herba Phyllanthus niruri L.',
                'khasiat' => 'Membantu memperbaiki sistem imun dan membantu mempercepat proses penyembuhan dari sakit.',
                'aturanPakai' => 'Obat dapat diminum sesudah makan.',
                'peringatan' => 'Stimuno Syrup memiliki kontraindikasikan dengan pasien dengan kondisi sistem imun yang hiperaktif, misalnya pada pasien dengan riwayat penyakit autoimun atau hipersensitivitas.',
            ],

            [
                'nama_obat' => 'Vicks Vaporub',
                'komposisi' => 'Camphora, Menthol, dan Eucallyptus Oil.',
                'khasiat' => 'Penggunaan lokal pada kulit atau dihirup uapnya untuk meredakan gejala flu dan pilek pada orang dewasa dan anak-anak.',
                'aturanPakai' => 'Digunakan sesuai dengan kebutuhan.',
                'peringatan' => 'Jangan digunakan pada orang yang memiliki hipersensitivitas terhadap komponen obat ini.',
            ],

            [
                'nama_obat' => 'Komix Herbal',
                'komposisi' => 'Vitex negundo folium extract (lagundi), Zingiberis officinale Rosch Extract (jahe merah), Thymus vulgaris herba extract (thymi herba), Glycyrrhiza glabra radix extract (licorice), Oleum menthae piperitae (pepermint oil), Mel depuratum (madu).',
                'khasiat' => 'Obat batuk yang mengandung herbal yang efektif meredakan batuk.',
                'aturanPakai' => 'Dewasa : 3 x sehari 1 sendok makan (15ml) setelah makan, anak-anak : 3 x sehari 1/2 sendok makan (7.5ml) setelah makan.',
                'peringatan' => 'Simpan dalam wadah kering yang tertutup pada suhu ruangan dan terhindar dari sinar matahari langsung.',
            ],


        ];
        DB::table('obats')->insert($data);
    }
}