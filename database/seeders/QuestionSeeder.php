<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(
        //Lvl 0 BP Penetapan Konteks
        [
            'question' => 'Apakah ada penentuan strategi dalam manajemen risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat penentuan strategi dalam manajemen risiko pengembangan perangkat lunak',
            'risk_management' => '1',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah penentuan tingkat otoritas sudah sesuai dengan manajemen organisasi pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management' => '1',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah penentuan tugas dan tanggung jawab sudah sesuai dengan manajemen pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management' => '1',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah ada pelatihan untuk memberikan pemahaman tentang peran dan tanggung jawab kepada risk owner?',
            'recomendation' => '',
            'risk_management' => '1',
            'category' => '2',
            'level' => '1',
        ],

        //Lvl 0 WP Penetapan Konteks
        [
            'question' => 'Apakah ada dokumen mengenai tingkat otoritas atau penentuan wewenang?',
            'recomendation' => '',
            'risk_management' => '1',
            'category' => '3',
            'level' => '1',
        ],
        [
            'question' => 'Apakah ada dokumen yang mengatur tentang tugas dan tanggung jawab?',
            'recomendation' => '',
            'risk_management' => '1',
            'category' => '3',
            'level' => '1',
        ],

        //Lvl 0 BP Identifikasi Risiko
        [
            'question' => 'Apakah melakukan pendokumentasian sumberdaya TI, proses bisnis, aplikasi, serta proses manajemen risiko pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah melakukan pengumpulan, klasifikasi, analisis data untuk menentukan risiko dan faktor penyebab terjadinya risiko pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah melakukan pendokumentasian tentang risiko yang berdampak pada pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah dalam manajemen risiko pengembangan perangkat lunak ada peran yang bertanggung jawab terhadap risiko (risk owner)?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah ada pelatihan atau training terkait tugas dan tanggung jawab masing-masing, sehingga stakeholder paham akan tugas dan tanggung jawabnya dalam mengembangkan perangkat lunak?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '2',
            'level' => '1',
        ],
        [
            'question' => 'Apakah melakukukan pengawasan untuk memastikan kesesuaian peran risk owner?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '2',
            'level' => '1',
        ],

        //Lvl 0 WP Identifikasi Risiko
        [
            'question' => 'Apakah ada dokumen profil risiko atau risk register?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '3',
            'level' => '1',
        ],
        [
            'question' => 'Apakah ada dokumen yang berisi tentang risiko pengembangan perangkat lunak dan juga faktor penyebabnya?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '3',
            'level' => '1',
        ],
        [
            'question' => 'Apakah ada dokumen yang berisi tentang peran dan tanggung jawab risk owner?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '3',
            'level' => '1',
        ],

        //Lvl 0 BP Analisis Risiko
        [
            'question' => 'Apakah ada dokumen profil risiko atau risk register?',
            'recomendation' => '',
            'risk_management' => '2',
            'category' => '3',
            'level' => '1',
        ],
    );
    }
}
