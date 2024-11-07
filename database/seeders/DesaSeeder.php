<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $desas = [
            // Kecamatan Bengkalis (kecamatan_id = 1)
            ['name' => 'Air Putih', 'kecamatan_id' => 1],
            ['name' => 'Damai', 'kecamatan_id' => 1],
            ['name' => 'Kelapapati', 'kecamatan_id' => 1],
            ['name' => 'Kelebuk', 'kecamatan_id' => 1],
            ['name' => 'Kelemantan', 'kecamatan_id' => 1],
            ['name' => 'Kelemantan Barat', 'kecamatan_id' => 1],
            ['name' => 'Ketam Putih', 'kecamatan_id' => 1],
            ['name' => 'Kuala Alam', 'kecamatan_id' => 1],
            ['name' => 'Meskom', 'kecamatan_id' => 1],
            ['name' => 'Palkun', 'kecamatan_id' => 1],
            ['name' => 'Pangkalan Batang', 'kecamatan_id' => 1],
            ['name' => 'Pangkalan Batang Barat', 'kecamatan_id' => 1],
            ['name' => 'Pedekik', 'kecamatan_id' => 1],
            ['name' => 'Pematang Duku', 'kecamatan_id' => 1],
            ['name' => 'Pematang Duku Timur', 'kecamatan_id' => 1],
            ['name' => 'Penampi', 'kecamatan_id' => 1],
            ['name' => 'Penebal', 'kecamatan_id' => 1],
            ['name' => 'Prapat Tunggal', 'kecamatan_id' => 1],
            ['name' => 'Sebauk', 'kecamatan_id' => 1],
            ['name' => 'Sungai Alam', 'kecamatan_id' => 1],
            ['name' => 'Sekodi', 'kecamatan_id' => 1],
            ['name' => 'Senderek', 'kecamatan_id' => 1],
            ['name' => 'Senggoro', 'kecamatan_id' => 1],
            ['name' => 'Simpang Ayam', 'kecamatan_id' => 1],
            ['name' => 'Sungai Batang', 'kecamatan_id' => 1],
            ['name' => 'Teluk Latak', 'kecamatan_id' => 1],
            ['name' => 'Tameran', 'kecamatan_id' => 1],
            ['name' => 'Wonosari', 'kecamatan_id' => 1],
            ['name' => 'Bengkalis Kota', 'kecamatan_id' => 1],
            ['name' => 'Damon', 'kecamatan_id' => 1],
            ['name' => 'Rimba Sekampung', 'kecamatan_id' => 1],

            // Kecamatan Bantan (kecamatan_id = 2)
            ['name' => 'Bantan Air', 'kecamatan_id' => 2],
            ['name' => 'Bantan Sari', 'kecamatan_id' => 2],
            ['name' => 'Bantan Tengah', 'kecamatan_id' => 2],
            ['name' => 'Bantan Timur', 'kecamatan_id' => 2],
            ['name' => 'Bantan Tua', 'kecamatan_id' => 2],
            ['name' => 'Berancah', 'kecamatan_id' => 2],
            ['name' => 'Deluk', 'kecamatan_id' => 2],
            ['name' => 'Jangkang', 'kecamatan_id' => 2],
            ['name' => 'Kembung Baru', 'kecamatan_id' => 2],
            ['name' => 'Kembung Luar', 'kecamatan_id' => 2],
            ['name' => 'Mentayan', 'kecamatan_id' => 2],
            ['name' => 'Muntai', 'kecamatan_id' => 2],
            ['name' => 'Muntai Barat', 'kecamatan_id' => 2],
            ['name' => 'Pambang Baru', 'kecamatan_id' => 2],
            ['name' => 'Pampang Pesisir', 'kecamatan_id' => 2],
            ['name' => 'Pasiran', 'kecamatan_id' => 2],
            ['name' => 'Resam Lapis', 'kecamatan_id' => 2],
            ['name' => 'Selat Baru', 'kecamatan_id' => 2],
            ['name' => 'Suka Maju', 'kecamatan_id' => 2],
            ['name' => 'Teluk Lancar', 'kecamatan_id' => 2],
            ['name' => 'Teluk Pambang', 'kecamatan_id' => 2],
            ['name' => 'Teluk Papal', 'kecamatan_id' => 2],
            ['name' => 'Ulu Pulau', 'kecamatan_id' => 2],

            // Kecamatan Bukit Batu (kecamatan_id = 3)
            ['name' => 'Batang Duku', 'kecamatan_id' => 3],
            ['name' => 'Bukit Batu', 'kecamatan_id' => 3],
            ['name' => 'Buruk Bakul', 'kecamatan_id' => 3],
            ['name' => 'Dompas', 'kecamatan_id' => 3],
            ['name' => 'Pangkalan Jambi', 'kecamatan_id' => 3],
            ['name' => 'Pakning Asal', 'kecamatan_id' => 3],
            ['name' => 'Sejangat', 'kecamatan_id' => 3],
            ['name' => 'Sukajadi', 'kecamatan_id' => 3],
            ['name' => 'Sungai Selari', 'kecamatan_id' => 3],
            ['name' => 'Sungai Pakning', 'kecamatan_id' => 3],

            // Kecamatan Mandau (kecamatan_id = 4)
            ['name' => 'Bathin Betuah', 'kecamatan_id' => 4],
            ['name' => 'Harapan Baru', 'kecamatan_id' => 4],
            ['name' => 'Air Jamban', 'kecamatan_id' => 4],
            ['name' => 'Babussalam', 'kecamatan_id' => 4],
            ['name' => 'Balik Alam', 'kecamatan_id' => 4],
            ['name' => 'Batang Serosa', 'kecamatan_id' => 4],
            ['name' => 'Duri Barat', 'kecamatan_id' => 4],
            ['name' => 'Duri Timur', 'kecamatan_id' => 4],
            ['name' => 'Gajah Sakti', 'kecamatan_id' => 4],
            ['name' => 'Pematang Pudu', 'kecamatan_id' => 4],
            ['name' => 'Makeruh', 'kecamatan_id' => 4],

            // Kecamatan Rupat (kecamatan_id = 5)
            ['name' => 'Darul Aman', 'kecamatan_id' => 5],
            ['name' => 'Dungun Baru', 'kecamatan_id' => 5],
            ['name' => 'Hutan Panjang', 'kecamatan_id' => 5],
            ['name' => 'Makeruh', 'kecamatan_id' => 5],
            ['name' => 'Pancur Jaya', 'kecamatan_id' => 5],
            ['name' => 'Pangkalan Nyirih', 'kecamatan_id' => 5],
            ['name' => 'Pangkalan Pinang', 'kecamatan_id' => 5],
            ['name' => 'Parit Kebumen', 'kecamatan_id' => 5],
            ['name' => 'Sri Tanjung', 'kecamatan_id' => 5],
            ['name' => 'Sukarjo Mesin', 'kecamatan_id' => 5],
            ['name' => 'Sungai Cingam', 'kecamatan_id' => 5],
            ['name' => 'Teluk Lecah', 'kecamatan_id' => 5],
            ['name' => 'Batu Panjang', 'kecamatan_id' => 5],
            ['name' => 'Pergam', 'kecamatan_id' => 5],
            ['name' => 'Tanjung Kapal', 'kecamatan_id' => 5],
            ['name' => 'Terkul', 'kecamatan_id' => 5],

            // Kecamatan Rupat Utara (kecamatan_id = 6)
            ['name' => 'Hutan Ayu', 'kecamatan_id' => 6],
            ['name' => 'Kadur', 'kecamatan_id' => 6],
            ['name' => 'Suka Damai', 'kecamatan_id' => 6],
            ['name' => 'Puteri Sembilan', 'kecamatan_id' => 6],
            ['name' => 'Tanjung Medang', 'kecamatan_id' => 6],
            ['name' => 'Tanjung Punak', 'kecamatan_id' => 6],
            ['name' => 'Teluk Rhu', 'kecamatan_id' => 6],
            ['name' => 'Titi Akar', 'kecamatan_id' => 6],

            // Kecamatan Siak Kecil (kecamatan_id = 7)
            ['name' => 'Bandar Jaya', 'kecamatan_id' => 7],
            ['name' => 'Koto Raja', 'kecamatan_id' => 7],
            ['name' => 'Langkat', 'kecamatan_id' => 7],
            ['name' => 'Liang Banir', 'kecamatan_id' => 7],
            ['name' => 'Lubuk Garam', 'kecamatan_id' => 7],
            ['name' => 'Lubuk Gaung', 'kecamatan_id' => 7],
            ['name' => 'Lubuk Muda', 'kecamatan_id' => 7],
            ['name' => 'Muara Dua', 'kecamatan_id' => 7],
            ['name' => 'Sadar Jaya', 'kecamatan_id' => 7],
            ['name' => 'Sepotong', 'kecamatan_id' => 7],
            ['name' => 'Sumber Jaya', 'kecamatan_id' => 7],
            ['name' => 'Sungai Nibung', 'kecamatan_id' => 7],
            ['name' => 'Sungai Limau', 'kecamatan_id' => 7],
            ['name' => 'Sungai Siput', 'kecamatan_id' => 7],
            ['name' => 'Tanjung Belit', 'kecamatan_id' => 7],
            ['name' => 'Tanjung Damai', 'kecamatan_id' => 7],
            ['name' => 'Tanjung Datuk', 'kecamatan_id' => 7],

            // Kecamatan Pinggir (kecamatan_id = 8)
            ['name' => 'Balai Pungut', 'kecamatan_id' => 8],
            ['name' => 'Buluh Apo', 'kecamatan_id' => 8],
            ['name' => 'Muara Basung', 'kecamatan_id' => 8],
            ['name' => 'Pangkalan Libut', 'kecamatan_id' => 8],
            ['name' => 'Pinggir', 'kecamatan_id' => 8],
            ['name' => 'Semunai', 'kecamatan_id' => 8],
            ['name' => 'Sungai Meranti', 'kecamatan_id' => 8],
            ['name' => 'Tengganau', 'kecamatan_id' => 8],
            ['name' => 'Balai Raja', 'kecamatan_id' => 8],
            ['name' => 'Titian Antui', 'kecamatan_id' => 8],

            // Kecamatan Bandar Laksamana (kecamatan_id = 9)
            ['name' => 'Api Api', 'kecamatan_id' => 9],
            ['name' => 'Bukit Kerikil', 'kecamatan_id' => 9],
            ['name' => 'Parit Satu Api Api', 'kecamatan_id' => 9],
            ['name' => 'Sepahat', 'kecamatan_id' => 9],
            ['name' => 'Tanjung Leban', 'kecamatan_id' => 9],
            ['name' => 'Temiang', 'kecamatan_id' => 9],
            ['name' => 'Tenggayun', 'kecamatan_id' => 9],

            // Kecamatan Talang Muandau (kecamatan_id = 10)
            ['name' => 'Beringin', 'kecamatan_id' => 10],
            ['name' => 'Koto Pait Beringin', 'kecamatan_id' => 10],
            ['name' => 'Kuala Penaso', 'kecamatan_id' => 10],
            ['name' => 'Melibur', 'kecamatan_id' => 10],
            ['name' => 'Serai Wangi', 'kecamatan_id' => 10],
            ['name' => 'Tasik Serai', 'kecamatan_id' => 10],
            ['name' => 'Tasik Serai Barat', 'kecamatan_id' => 10],
            ['name' => 'Tasik Serai Timur', 'kecamatan_id' => 10],
            ['name' => 'Tasik Tebing Serai', 'kecamatan_id' => 10],

            // Kecamatan Bathin Solapan (kecamatan_id = 11)
            ['name' => 'Air Kulim', 'kecamatan_id' => 11],
            ['name' => 'Balai Makam', 'kecamatan_id' => 11],
            ['name' => 'Bathin Sobanga', 'kecamatan_id' => 11],
            ['name' => 'Boncah Mahang', 'kecamatan_id' => 11],
            ['name' => 'Buluh Manis', 'kecamatan_id' => 11],
            ['name' => 'Bumbung', 'kecamatan_id' => 11],
            ['name' => 'Kesumbo Ampai', 'kecamatan_id' => 11],
            ['name' => 'Pamesi', 'kecamatan_id' => 11],
            ['name' => 'Pematang Obo', 'kecamatan_id' => 11],
            ['name' => 'Petani', 'kecamatan_id' => 11],
            ['name' => 'Sebangar', 'kecamatan_id' => 11],
            ['name' => 'Simpang Padang', 'kecamatan_id' => 11],
            ['name' => 'Tambusai Batang Dui', 'kecamatan_id' => 11],
        ];

        foreach ($desas as $desa) {
            Desa::create($desa);
        }
    }
}
