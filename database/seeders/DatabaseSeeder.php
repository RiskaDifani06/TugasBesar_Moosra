<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\M_Alternatif;
use App\Models\M_Kriteria;
use App\Models\M_SubKriteria;
use App\Models\User;
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
        // User::create([
        //     'nama_admin' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin'),
        // ]);

        // M_Alternatif::create([
        //     'nama_mahasiswa' => 'Tedi',
        // ]);

        // M_Alternatif::create([
        //     'nama_mahasiswa' => 'Galuh',
        // ]);

        // M_Alternatif::create([
        //     'nama_mahasiswa' => 'Lana',
        // ]);

        // M_Kriteria::create([
        //     'nama_kriteria' => 'Nilai IPK',
        //     'bobot' => 25,
        //     'jenis_kriteria' => 'Benefit'
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '1',
        //     'nama_sub' => '1 - 2',
        //     'nilai' => 1,
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '1',
        //     'nama_sub' => '3 - 4',
        //     'nilai' => 4,
        // ]);

        // M_Kriteria::create([
        //     'nama_kriteria' => 'Etika',
        //     'bobot' => 20,
        //     'jenis_kriteria' => 'Benefit'
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '2',
        //     'nama_sub' => 'Jelek',
        //     'nilai' => 2,
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '2',
        //     'nama_sub' => 'Baik',
        //     'nilai' => 5,
        // ]);

        // M_Kriteria::create([
        //     'nama_kriteria' => 'Prestasi Non Akademik',
        //     'bobot' => 20,
        //     'jenis_kriteria' => 'Benefit'
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '3',
        //     'nama_sub' => 'Sedikit',
        //     'nilai' => 2,
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '3',
        //     'nama_sub' => 'Banyak',
        //     'nilai' => 6,
        // ]);

        // M_Kriteria::create([
        //     'nama_kriteria' => 'Jumlah Sertifikat Keahlian',
        //     'bobot' => 10,
        //     'jenis_kriteria' => 'Benefit'
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '4',
        //     'nama_sub' => 'Tidak Ada',
        //     'nilai' => 1,
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '4',
        //     'nama_sub' => 'Ada',
        //     'nilai' => 3,
        // ]);

        // M_Kriteria::create([
        //     'nama_kriteria' => 'Aktif Organisasi',
        //     'bobot' => 25,
        //     'jenis_kriteria' => 'Benefit'
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '5',
        //     'nama_sub' => 'Tidak',
        //     'nilai' => 1,
        // ]);

        // M_SubKriteria::create([
        //     'kriteria_id' => '5',
        //     'nama_sub' => 'Ya',
        //     'nilai' => 3,
        // ]);

        M_SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '95-100',
            'nilai' => 5,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '90-94',
            'nilai' => 4,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '85-89',
            'nilai' => 3,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '80-84',
            'nilai' => 2,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '<80',
            'nilai' => 1,
        ]);

        // id 8

        M_SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '95-100',
            'nilai' => 5,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '90-94',
            'nilai' => 4,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '85-89',
            'nilai' => 3,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '80-84',
            'nilai' => 2,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '<80',
            'nilai' => 1,
        ]);

        // id 9

        M_SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '95-100',
            'nilai' => 5,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '90-94',
            'nilai' => 4,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '85-89',
            'nilai' => 3,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '80-84',
            'nilai' => 2,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '<80',
            'nilai' => 1,
        ]);

        // id 10

        M_SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '95-100',
            'nilai' => 5,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '90-94',
            'nilai' => 4,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '85-89',
            'nilai' => 3,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '80-84',
            'nilai' => 2,
        ]);

        M_SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '<80',
            'nilai' => 1,
        ]);

    }
}
