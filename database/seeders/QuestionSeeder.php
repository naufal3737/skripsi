<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        [
        //Lvl 0
        //Penetapan Konteks
        //Lvl 0 BP Penetapan Konteks
        [
            'question' => 'Apakah ada penentuan strategi dalam manajemen risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat penentuan strategi dalam manajemen risiko pengembangan perangkat lunak',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah penentuan tingkat otoritas sudah sesuai dengan manajemen organisasi pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah penentuan tugas dan tanggung jawab sudah sesuai dengan manajemen pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pelatihan untuk memberikan pemahaman tentang peran dan tanggung jawab kepada risk owner?',
            'recomendation' => '',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Penetapan Konteks
        [
            'question' => 'Apakah ada dokumen mengenai tingkat otoritas atau penentuan wewenang?',
            'recomendation' => '',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen yang mengatur tentang tugas dan tanggung jawab?',
            'recomendation' => '',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Identifikasi Risiko
        //Lvl 0 BP Identifikasi Risiko
        [
            'question' => 'Apakah melakukan pendokumentasian sumberdaya TI, proses bisnis, aplikasi, serta proses manajemen risiko pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan pengumpulan, klasifikasi, analisis data untuk menentukan risiko dan faktor penyebab terjadinya risiko pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan pendokumentasian tentang risiko yang berdampak pada pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah dalam manajemen risiko pengembangan perangkat lunak ada peran yang bertanggung jawab terhadap risiko (risk owner)?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pelatihan atau training terkait tugas dan tanggung jawab masing-masing, sehingga stakeholder paham akan tugas dan tanggung jawabnya dalam mengembangkan perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukukan pengawasan untuk memastikan kesesuaian peran risk owner?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Identifikasi Risiko
        [
            'question' => 'Apakah ada dokumen profil risiko atau risk register?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen yang berisi tentang risiko pengembangan perangkat lunak dan juga faktor penyebabnya?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen yang berisi tentang peran dan tanggung jawab risk owner?',
            'recomendation' => '',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Analilis Risiko
        //Lvl 0 BP Analisis Risiko
        [
            'question' => 'Apakah ada informasi risiko pengembangan perangkat lunak didalam profil risiko atau risk register?',
            'recomendation' => '',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan penanganan risiko didalam profil risiko atau risk register?',
            'recomendation' => '',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah terdapat persetujuan toleransi risiko yang dapat diterima perusahaan?',
            'recomendation' => '',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan identifikasi kebutuhan untuk penanganan atau mitigasi risiko?',
            'recomendation' => '',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Analisis Risiko
        [
            'question' => 'Apakah ada dokumen persetujuan tentang batas risiko yang dapat diterima?',
            'recomendation' => '',
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Perencanaan Manajemen Risiko
        //Lvl 0 BP Perencanaan Manajemen Risiko
        [
            'question' => 'Apakah mempersiapkan, melakukan pengujian terhadap rencana dan langkah-langkah yang harus diambil ketika terjadi risiko yang memberikan dampak buruk pada proses bisnis?',
            'recomendation' => '',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Perencanaan Manajemen Risiko
        [
            'question' => 'Apakah ada dokumen mengenai perencanaan penanganan atau mitigasi risiko?',
            'recomendation' => '',
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Komunikasi Risiko
        //Lvl 0 BP Komunikasi Risiko
        [
            'question' => 'Apakah melaporkan masalah terkait risiko pengembangan
            perangkat lunak ke kepala UPT TIK UNTAN?',
            'recomendation' => '',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melaporkan hasil analisis risiko kepada stakeholder
            pengembang perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Komunikasi Risiko
        [
            'question' => 'Apakah ada laporan terkait risiko pengembangan perangkat
            lunak untuk kepala UPT TIK UNTAN?',
            'recomendation' => '',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada laporan hasil analisis risiko untuk stakeholder
            pengembang perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Mitigasi Risiko
        //Lvl 0 BP Mitigasi Risiko
        [
            'question' => 'Apakah sudah menerapkan perencanaan yang tepat untuk
            meminimalisir dampak ketika risiko terjadi?',
            'recomendation' => '',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Mitigasi Risiko
        [
            'question' => 'Apakah ada dokumen terkait penanganan risiko?',
            'recomendation' => '',
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Pemantauan Risiko
        //Lvl 0 BP Pemantauan Risiko
        [
            'question' => 'Apakah melakukan pemantauan terkait pengelolaan profil
            risiko atau risk register?',
            'recomendation' => '',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan pemantauan tujuan utama tata kelola dan
            proses manajemen risiko?',
            'recomendation' => '',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah didalam profil risiko atau risk register terdapat status
            risiko?',
            'recomendation' => '',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Pemantauan Risiko
        [
            'question' => 'Apakah ada dokumen atau laporan mengenai status risiko?',
            'recomendation' => '',
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Evaluasi Risiko
        //Lvl 0 BP Evaluasi Risiko
        [
            'question' => 'Apakah proses evaluasi manajemen risiko pernah dilakukan
            sebelumnya?',
            'recomendation' => '',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah pernah memberikan rekomendasi perbaikan terkait
            manajemen risiko pengembangan perangkat lunak?',
            'recomendation' => '',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Evaluasi Risiko
        [
            'question' => 'Apakah ada dokumen terkait rekomendasi perbaikan yang
            digunakan sebagai bahan evaluasi organisasi kedepanya?',
            'recomendation' => '',
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        ]


    );
    }
}
