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
            'recomendation' => 'Membuat penentuan strategi dalam manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah penentuan tingkat otoritas sudah sesuai dengan manajemen organisasi pengembangan perangkat lunak?',
            'recomendation' => 'Mementukan tingkat otoritas sesuau dengan manajemen organisasi pengembangan perangkat lunak.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah penentuan tugas dan tanggung jawab sudah sesuai dengan manajemen pengembangan perangkat lunak?',
            'recomendation' => 'Menentukan tugas dan tanggung jawab sesuai dengan manajemen pengembangan perangkat lunak.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pelatihan untuk memberikan pemahaman tentang peran dan tanggung jawab kepada risk owner?',
            'recomendation' => 'Membuat pelatihan untuk memberikan pemahaman tentang peran dan tanggung jawab kepada risk owner',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Penetapan Konteks
        [
            'question' => 'Apakah ada dokumen mengenai tingkat otoritas atau penentuan wewenang?',
            'recomendation' => 'Membuat dokumen mengenai tingkat otoritas atau penentuan wewenang.',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen yang mengatur tentang tugas dan tanggung jawab?',
            'recomendation' => 'Membuat dokumen yang mengatur tentang tugas dan tanggung jawab.',
            'type' => 'document',
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
            'recomendation' => 'Mendokumentasikan sumberdaya TI, proses bisnis, aplikasi, serta proses manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan pengumpulan, klasifikasi, analisis data untuk menentukan risiko dan faktor penyebab terjadinya risiko pengembangan perangkat lunak?',
            'recomendation' => 'Mengumpulkan, mengklasifikasi, serta menganalisis data untuk mennetukan risiko dan faktor penyebab terjadinya risiko pengembangan perangkat lunak.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan pendokumentasian tentang risiko yang berdampak pada pengembangan perangkat lunak?',
            'recomendation' => 'Mendokumentasikan tentang risiko yang berdampak pada pengembangan perangkat lunak.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah dalam manajemen risiko pengembangan perangkat lunak ada peran yang bertanggung jawab terhadap risiko (risk owner)?',
            'recomendation' => 'Membuat peran yang bertanggung jawab terhadap risiko (risk owner).',
            'risk_management_id' => '2',
            'category_id' => '1',
            'type' => null,
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pelatihan atau training terkait tugas dan tanggung jawab masing-masing, sehingga stakeholder paham akan tugas dan tanggung jawabnya dalam mengembangkan perangkat lunak?',
            'recomendation' => 'Mengadakan pelatihan terkait tugas dan tanggung jawab masing-masing.',
            'risk_management_id' => '2',
            'category_id' => '1',
            'type' => null,
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukukan pengawasan untuk memastikan kesesuaian peran risk owner?',
            'recomendation' => 'Mengawasi risk owner untuk memastikan bahwa melakukan sesuai peran.',
            'risk_management_id' => '2',
            'category_id' => '1',
            'type' => null,
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Identifikasi Risiko
        [
            'question' => 'Apakah ada dokumen profil risiko atau risk register?',
            'recomendation' => 'Membuat dokumen profil risiko atau risk register.',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen yang berisi tentang risiko pengembangan perangkat lunak dan juga faktor penyebabnya?',
            'recomendation' => 'Membuat dokumen yang berisi tentang risiko pengembangat perangkat lunak dan juga faktor penyebabnya.',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen yang berisi tentang peran dan tanggung jawab risk owner?',
            'recomendation' => 'Membuat dokumen yang berisi tentang peran dan tanggung jawab risk owner.',
            'type' => 'document',
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
            'recomendation' => 'Membuat informasi risiko pengembangan perangkat lunak didalam profil risiko.',
            'risk_management_id' => '3',
            'category_id' => '1',
            'type' => null,
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan penanganan risiko didalam profil risiko atau risk register?',
            'recomendation' => 'Melakukan tindakan penanganan risiko didalam profil risiko.',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah terdapat persetujuan toleransi risiko yang dapat diterima perusahaan?',
            'recomendation' => 'Membuat persetujuan toleransi risiko yang dapat diterima perusahaan.',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan identifikasi kebutuhan untuk penanganan atau mitigasi risiko?',
            'recomendation' => 'Melakukan identifikasi kebutuhan untuk penanganan atau mitigasi risiko.',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Analisis Risiko
        [
            'question' => 'Apakah ada dokumen persetujuan tentang batas risiko yang dapat diterima?',
            'recomendation' => 'Membuat dokumen persetujuan tentang batas risiko yang dapat diterima.',
            'type' => 'document',
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
            'recomendation' => 'Mempersiapkan, melakukan pengujian terhadap rencana dan langkah-langkah yang harus diambil ketika terjadi risiko yang memberikan dampak buruk.',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Perencanaan Manajemen Risiko
        [
            'question' => 'Apakah ada dokumen mengenai perencanaan penanganan atau mitigasi risiko?',
            'recomendation' => 'Membuat dokumen mengenai perencanaan penanganan atau mitigasi risiko.',
            'type' => 'document',
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
            'recomendation' => 'Melaporkan masalah terkait risiko pengembangan
            perangkat lunak ke kepala UPT TIK UNTAN.',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melaporkan hasil analisis risiko kepada stakeholder
            pengembang perangkat lunak?',
            'recomendation' => 'Melaporkan hasil analisis risiko kepada stakeholder
            pengembang perangkat lunak.',
            'type' => null,
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
            'recomendation' => 'Membuat laporan terkait risiko pengembangan perangkat
            lunak untuk kepala UPT TIK UNTAN.',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada laporan hasil analisis risiko untuk stakeholder
            pengembang perangkat lunak?',
            'recomendation' => 'Membuat laporan hasil analisis risiko untuk stakeholder
            pengembang perangkat lunak.',
            'type' => 'document',
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
            'recomendation' => 'Menerapkan perencanaan yang tepat untuk
            meminimalisir dampak ketika risiko terjadi.',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Mitigasi Risiko
        [
            'question' => 'Apakah ada dokumen terkait penanganan risiko?',
            'recomendation' => 'Membuat dokumen terkait penanganan risiko.',
            'type' => 'document',
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
            'recomendation' => 'Memantau terkait pengelolaan profil
            risiko atau risk register.',
            'type' => null,
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah melakukan pemantauan tujuan utama tata kelola dan
            proses manajemen risiko?',
            'recomendation' => 'Melakukan pemantauan tujuan utama tata kelola dan
            proses manajemen risiko.',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah didalam profil risiko atau risk register terdapat status
            risiko?',
            'recomendation' => 'Membuat status risiko didalam profil risiko atau risk register.',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Pemantauan Risiko
        [
            'question' => 'Apakah ada dokumen atau laporan mengenai status risiko?',
            'recomendation' => 'Membuat dokumen atau laporan mengenai status risiko.',
            'type' => 'document',
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
            'recomendation' => 'Melakukan proses evaluasi manajemen risiko.',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah pernah memberikan rekomendasi perbaikan terkait
            manajemen risiko pengembangan perangkat lunak?',
            'recomendation' => 'Memberikan rekomendasi perbaikan terkait
            manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 0 WP Evaluasi Risiko
        [
            'question' => 'Apakah ada dokumen terkait rekomendasi perbaikan yang
            digunakan sebagai bahan evaluasi organisasi kedepanya?',
            'recomendation' => 'Membauat dokumen terkait rekomendasi perbaikan yang
            digunakan sebagai bahan evaluasi organisasi kedepanya.',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Penetapan Konteks
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses penentuan strategi
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses penentuan strategi pengembangan perangkat lunak.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait identifikasi strategi
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait identifikasi strategi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses penentuan strategi
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses penentuan strategi pengembangan perangkat lunak.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            menentukan strategi pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam menentukan strategi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses penentuan strategi
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses penentuan strategi pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam menentukan starategi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam menentukan strategi pengembangan perangkat lunak.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk mengidentifikasi
            strategi pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam mengidentifikasi strategi pengembangan perangkat lunak.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian strategi
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian strategi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait strategi?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yan efektif terkait strategi.',
            'risk_management_id' => '1',
            'type' => null,
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan strategi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan strategi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses penentuan strategi
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses penentuan strategi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses penentuan strategi pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses penentuan strategi
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan penentuan strategi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan penentuan strategi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk penentuan strategi
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk penentuan strategi
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan penentuan strategi pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan penentuan strategi
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah penentuan strategi pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan penentuan strategi pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk penentuan strategi
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk penentuan strategi
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam penentuan strategi pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam penentuan strategi pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam penentuan strategi pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam penentuan strategi
            pengembangan perangkat
            lunak secara jelas',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam penentuan strategi pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja penentuan strategi
            pengembangan perangkat
            lunak sesuai standar',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai penentuan strategi pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai penentuan strategi
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa strategi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa strategi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk strategi
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk strategi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk strategi pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk strategi
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses maupun produk',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa strategi
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan strategi pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa strategi pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran strategi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas
            perangkat lunak',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa perangkat lunak
            yang dilakukan',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan adanya perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan adanya
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala',
            'type' => null,
            'risk_management_id' => '1',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Identifikasi Risiko
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses identifikasi risiko
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses identifikasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait proses identifikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait identifikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses identifikasi risiko
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses identifikasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            proses identifikasi risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam proses identifikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses identifikasi risiko
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses identifikasi risiko pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam identifikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam identifikasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk mengidentifikasi
            risiko pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam mengidentifikasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '2',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian proses identifikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian proses identifikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait identifikasi risiko?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yang efektif terkait identifikasi risiko.',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan proses identifikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan proses identifikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses proses identifikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses proses identifikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses proses identifikasi risiko pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses proses identifikasi risiko
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan proses identifikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan proses identifikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk proses identifikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk proses identifikasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan proses identifikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan proses identifikasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah proses identifikasi risiko pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan proses identifikasi risiko pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'risk_management_id' => '2',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk proses identifikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk proses identifikasi risiko
            pengembangan perangkat
            lunak',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam proses identifikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam proses identifikasi risiko pengembangan perangkat
            lunak',
            'risk_management_id' => '2',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam proses identifikasi risiko pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam proses identifikasi risiko
            pengembangan perangkat
            lunak secara jelas',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam proses identifikasi risiko pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja proses identifikasi risiko
            pengembangan perangkat
            lunak sesuai standar',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai proses identifikasi risiko pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai proses identifikasi risiko
            pengembangan perangkat
            lunak',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa proses identifikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa proses identifikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk proses identifikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk proses identifikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk proses identifikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk proses identifikasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses identifikasi risiko maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses identifikasi risiko maupun produk',
            'type' => null,
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa proses identifikasi risiko
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan proses identifikasi risiko pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa proses identifikasi risiko pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran proses identifikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas dalam proses identifikasi risiko
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas dalam proses identifikasi risiko
            perangkat lunak',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa dalam proses identifikasi risiko perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa dalam proses identifikasi risiko perangkat lunak
            yang dilakukan',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran dalam proses identifikasi risiko
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran dalam proses identifikasi risiko untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi dalam proses identifikasi risiko untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi dalam proses identifikasi risiko
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi dalam proses identifikasi risiko?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi dalam proses identifikasi risiko',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan proses identifikasi risiko
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan proses identifikasi risiko
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam proses identifikasi risiko
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam proses identifikasi risiko perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan proses identifikasi risiko
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan proses identifikasi risiko
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'risk_management_id' => '2',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi dalam proses identifikasi risiko?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi dalam proses identifikasi risiko untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan dalam proses identifikasi risiko perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan dalam proses identifikasi risiko
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi proses identifikasi risiko dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi proses identifikasi risiko',
            'type' => null,
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala dalam proses identifikasi risiko?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala dalam proses identifikasi risiko',
            'type' => null,
            'risk_management_id' => '2',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Analisis Risiko
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses analisis risiko
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses analisis risiko pengembangan perangkat lunak.',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '2',
            'type' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait proses analisis risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait analisis risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses analisis risiko
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses analisis risiko pengembangan perangkat lunak.',
            'risk_management_id' => '3',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            proses analisis risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam proses analisis risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses analisis risiko
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses analisis risiko pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '3',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam proses analisis risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam proses analisis risiko pengembangan perangkat lunak.',
            'risk_management_id' => '3',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk menganalisis risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam menganalisis risiko pengembangan perangkat lunak.',
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '2',
            'type' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian proses analisis risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian proses analisis risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait analisis risiko?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yang efektif terkait analisis risiko.',
            'risk_management_id' => '3',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan proses analisis risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan proses analisis risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses proses analisis risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses proses analisis risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses proses analisis risiko pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses proses analisis risiko
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan proses analisis risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan proses analisis risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk proses analisis risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk proses analisis risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan proses analisis risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan proses analisis risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah proses analisis risiko pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan proses analisis risiko pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'type' => null,
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk proses analisis risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk proses analisis risiko
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam proses analisis risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam proses analisis risiko pengembangan perangkat
            lunak',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam proses analisis risiko pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam proses analisis risiko
            pengembangan perangkat
            lunak secara jelas',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam proses analisis risiko pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja proses analisis risiko
            pengembangan perangkat
            lunak sesuai standar',
            'type' => null,
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai proses analisis risiko pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai proses analisis risiko
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa proses analisis risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa proses analisis risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk proses analisis risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk proses analisis risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk proses analisis risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk proses analisis risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses analisis risiko maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses analisis risiko maupun produk',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '4',
            'type' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa proses analisis risiko
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan proses analisis risiko pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa proses analisis risiko pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran proses analisis risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas dalam proses analisis risiko
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas dalam proses analisis risiko
            perangkat lunak',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa dalam proses analisis risiko perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa dalam proses analisis risiko perangkat lunak
            yang dilakukan',
            'type' => null,
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran dalam proses analisis risiko
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran dalam proses analisis risiko untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi dalam proses analisis risiko untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi dalam proses analisis risiko
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'risk_management_id' => '3',
            'category_id' => '2',
            'type' => null,
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi dalam proses analisis risiko?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi dalam proses analisis risiko',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan proses analisis risiko
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan proses analisis risiko
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam proses analisis risiko
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam proses analisis risiko perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan proses analisis risiko
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan proses analisis risiko
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi dalam proses analisis risiko?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi dalam proses analisis risiko untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan dalam proses analisis risiko perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan dalam proses analisis risiko
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi proses analisis risiko dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi proses analisis risiko',
            'risk_management_id' => '3',
            'type' => null,
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala dalam proses analisis risiko?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala dalam proses analisis risiko',
            'type' => null,
            'risk_management_id' => '3',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Perencanaan Manajemen Risiko
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses perencanaan manajemen risiko
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses perencanaan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait proses perencanaan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait perencanaan manajemen risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses perencanaan manajemen risiko
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses perencanaan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '4',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            proses perencanaan manajemen risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam proses perencanaan manajemen risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses perencanaan manajemen risiko
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses perencanaan manajemen risiko pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam proses perencanaan manajemen risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam proses perencanaan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '4',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk merencankan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam merencankan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '4',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian proses perencanaan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian proses perencanaan manajemen risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait perencanaan manajemen risiko?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yang efektif terkait perencanaan manajemen risiko.',
            'risk_management_id' => '4',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan proses perencanaan manajemen risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan proses perencanaan manajemen risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses proses perencanaan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses proses perencanaan manajemen risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses proses perencanaan manajemen risiko pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan proses perencanaan manajemen risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan proses perencanaan manajemen risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk proses perencanaan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan proses perencanaan manajemen risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah proses perencanaan manajemen risiko pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan proses perencanaan manajemen risiko pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'type' => null,
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk proses perencanaan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam proses perencanaan manajemen risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam proses perencanaan manajemen risiko pengembangan perangkat
            lunak',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam proses perencanaan manajemen risiko pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak secara jelas',
            'type' => null,
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam proses perencanaan manajemen risiko pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak sesuai standar',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai proses perencanaan manajemen risiko pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa proses perencanaan manajemen risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa proses perencanaan manajemen risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk proses perencanaan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk proses perencanaan manajemen risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk proses perencanaan manajemen risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk proses perencanaan manajemen risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses perencanaan manajemen risiko maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses perencanaan manajemen risiko maupun produk',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa proses perencanaan manajemen risiko
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan proses perencanaan manajemen risiko pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa proses perencanaan manajemen risiko pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran proses perencanaan manajemen risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas dalam proses perencanaan manajemen risiko
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas dalam proses perencanaan manajemen risiko
            perangkat lunak',
            'type' => null,
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa dalam proses perencanaan manajemen risiko perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa dalam proses perencanaan manajemen risiko perangkat lunak
            yang dilakukan',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran dalam proses perencanaan manajemen risiko
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran dalam proses perencanaan manajemen risiko untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi dalam proses perencanaan manajemen risiko untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi dalam proses perencanaan manajemen risiko
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi dalam proses perencanaan manajemen risiko?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi dalam proses perencanaan manajemen risiko',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan proses perencanaan manajemen risiko
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan proses perencanaan manajemen risiko
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'type' => null,
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam proses perencanaan manajemen risiko
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam proses perencanaan manajemen risiko perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan proses perencanaan manajemen risiko
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan proses perencanaan manajemen risiko
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi dalam proses perencanaan manajemen risiko?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi dalam proses perencanaan manajemen risiko untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan dalam proses perencanaan manajemen risiko perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan dalam proses perencanaan manajemen risiko
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '4',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi proses perencanaan manajemen risiko dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi proses perencanaan manajemen risiko',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala dalam proses perencanaan manajemen risiko?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala dalam proses perencanaan manajemen risiko',
            'risk_management_id' => '4',
            'type' => null,
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Komunikasi Risiko
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses komunikasi risiko
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses komunikasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait proses komunikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait komunikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses komunikasi risiko
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses komunikasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '5',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            proses komunikasi risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam proses komunikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses komunikasi risiko
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses komunikasi risiko pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '5',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam proses komunikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam proses komunikasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '5',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk merencankan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam merencankan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '2',
            'type' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian proses komunikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian proses komunikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait komunikasi risiko?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yang efektif terkait komunikasi risiko.',
            'risk_management_id' => '5',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan proses komunikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan proses komunikasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses proses komunikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses proses komunikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses proses komunikasi risiko pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses proses komunikasi risiko
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan proses komunikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan proses komunikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk proses komunikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk proses komunikasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan proses komunikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan proses komunikasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah proses komunikasi risiko pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan proses komunikasi risiko pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk proses komunikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk proses komunikasi risiko
            pengembangan perangkat
            lunak',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam proses komunikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam proses komunikasi risiko pengembangan perangkat
            lunak',
            'risk_management_id' => '5',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam proses komunikasi risiko pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam proses komunikasi risiko
            pengembangan perangkat
            lunak secara jelas',
            'risk_management_id' => '5',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam proses komunikasi risiko pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja proses komunikasi risiko
            pengembangan perangkat
            lunak sesuai standar',
            'risk_management_id' => '5',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai proses komunikasi risiko pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai proses komunikasi risiko
            pengembangan perangkat
            lunak',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa proses komunikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa proses komunikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk proses komunikasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk proses komunikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk proses komunikasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk proses komunikasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses komunikasi risiko maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses komunikasi risiko maupun produk',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa proses komunikasi risiko
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan proses komunikasi risiko pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa proses komunikasi risiko pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran proses komunikasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas dalam proses komunikasi risiko
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas dalam proses komunikasi risiko
            perangkat lunak',
            'type' => null,
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa dalam proses komunikasi risiko perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa dalam proses komunikasi risiko perangkat lunak
            yang dilakukan',
            'risk_management_id' => '5',
            'category_id' => '2',
            'type' => null,
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran dalam proses komunikasi risiko
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran dalam proses komunikasi risiko untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi dalam proses komunikasi risiko untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi dalam proses komunikasi risiko
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'risk_management_id' => '5',
            'category_id' => '2',
            'type' => null,
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi dalam proses komunikasi risiko?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi dalam proses komunikasi risiko',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan proses komunikasi risiko
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan proses komunikasi risiko
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'risk_management_id' => '5',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam proses komunikasi risiko
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam proses komunikasi risiko perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan proses komunikasi risiko
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan proses komunikasi risiko
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'type' => null,
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi dalam proses komunikasi risiko?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi dalam proses komunikasi risiko untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan dalam proses komunikasi risiko perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan dalam proses komunikasi risiko
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi proses komunikasi risiko dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi proses komunikasi risiko',
            'type' => null,
            'risk_management_id' => '5',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala dalam proses komunikasi risiko?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala dalam proses komunikasi risiko',
            'risk_management_id' => '5',
            'category_id' => '2',
            'type' => null,
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Mitigasi Risiko
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses mitigasi risiko
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses mitigasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '6',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait proses mitigasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait mitigasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses mitigasi risiko
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses mitigasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '6',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            proses mitigasi risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam proses mitigasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses mitigasi risiko
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses mitigasi risiko pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '6',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam proses mitigasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam proses mitigasi risiko pengembangan perangkat lunak.',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk merencankan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam merencankan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian proses mitigasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian proses mitigasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait mitigasi risiko?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yang efektif terkait mitigasi risiko.',
            'risk_management_id' => '6',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan proses mitigasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan proses mitigasi risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses proses mitigasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses proses mitigasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses proses mitigasi risiko pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses proses mitigasi risiko
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan proses mitigasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan proses mitigasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk proses mitigasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk proses mitigasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan proses mitigasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan proses mitigasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah proses mitigasi risiko pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan proses mitigasi risiko pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'type' => null,
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk proses mitigasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk proses mitigasi risiko
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam proses mitigasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam proses mitigasi risiko pengembangan perangkat
            lunak',
            'risk_management_id' => '6',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam proses mitigasi risiko pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam proses mitigasi risiko
            pengembangan perangkat
            lunak secara jelas',
            'type' => null,
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam proses mitigasi risiko pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja proses mitigasi risiko
            pengembangan perangkat
            lunak sesuai standar',
            'risk_management_id' => '6',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai proses mitigasi risiko pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai proses mitigasi risiko
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa proses mitigasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa proses mitigasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk proses mitigasi risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk proses mitigasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk proses mitigasi risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk proses mitigasi risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses mitigasi risiko maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses mitigasi risiko maupun produk',
            'risk_management_id' => '6',
            'category_id' => '1',
            'type' => null,
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa proses mitigasi risiko
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan proses mitigasi risiko pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa proses mitigasi risiko pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran proses mitigasi risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas dalam proses mitigasi risiko
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas dalam proses mitigasi risiko
            perangkat lunak',
            'type' => null,
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa dalam proses mitigasi risiko perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa dalam proses mitigasi risiko perangkat lunak
            yang dilakukan',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran dalam proses mitigasi risiko
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran dalam proses mitigasi risiko untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi dalam proses mitigasi risiko untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi dalam proses mitigasi risiko
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'risk_management_id' => '6',
            'category_id' => '2',
            'type' => null,
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi dalam proses mitigasi risiko?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi dalam proses mitigasi risiko',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan proses mitigasi risiko
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan proses mitigasi risiko
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam proses mitigasi risiko
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam proses mitigasi risiko perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan proses mitigasi risiko
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan proses mitigasi risiko
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi dalam proses mitigasi risiko?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi dalam proses mitigasi risiko untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan dalam proses mitigasi risiko perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan dalam proses mitigasi risiko
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '6',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi proses mitigasi risiko dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi proses mitigasi risiko',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala dalam proses mitigasi risiko?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala dalam proses mitigasi risiko',
            'risk_management_id' => '6',
            'type' => null,
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Pemantauan Risiko
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses pemantauan risiko
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses pemantauan risiko pengembangan perangkat lunak.',
            'risk_management_id' => '7',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait proses pemantauan risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pemantauan risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses pemantauan risiko
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses pemantauan risiko pengembangan perangkat lunak.',
            'risk_management_id' => '7',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            proses pemantauan risiko pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam proses pemantauan risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses pemantauan risiko
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses pemantauan risiko pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '7',
            'category_id' => '1',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam proses pemantauan risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam proses pemantauan risiko pengembangan perangkat lunak.',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk merencankan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam merencankan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '7',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian proses pemantauan risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian proses pemantauan risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait pemantauan risiko?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yang efektif terkait pemantauan risiko.',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan proses pemantauan risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan proses pemantauan risiko pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses proses pemantauan risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses proses pemantauan risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses proses pemantauan risiko pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses proses pemantauan risiko
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan proses pemantauan risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan proses pemantauan risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk proses pemantauan risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk proses pemantauan risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan proses pemantauan risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan proses pemantauan risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah proses pemantauan risiko pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan proses pemantauan risiko pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk proses pemantauan risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk proses pemantauan risiko
            pengembangan perangkat
            lunak',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam proses pemantauan risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam proses pemantauan risiko pengembangan perangkat
            lunak',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam proses pemantauan risiko pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam proses pemantauan risiko
            pengembangan perangkat
            lunak secara jelas',
            'type' => null,
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam proses pemantauan risiko pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja proses pemantauan risiko
            pengembangan perangkat
            lunak sesuai standar',
            'risk_management_id' => '7',
            'category_id' => '2',
            'type' => null,
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai proses pemantauan risiko pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai proses pemantauan risiko
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa proses pemantauan risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa proses pemantauan risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk proses pemantauan risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk proses pemantauan risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk proses pemantauan risiko pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk proses pemantauan risiko
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses pemantauan risiko maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses pemantauan risiko maupun produk',
            'risk_management_id' => '7',
            'category_id' => '1',
            'type' => null,
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa proses pemantauan risiko
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan proses pemantauan risiko pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa proses pemantauan risiko pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran proses pemantauan risiko pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas dalam proses pemantauan risiko
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas dalam proses pemantauan risiko
            perangkat lunak',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa dalam proses pemantauan risiko perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa dalam proses pemantauan risiko perangkat lunak
            yang dilakukan',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran dalam proses pemantauan risiko
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran dalam proses pemantauan risiko untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi dalam proses pemantauan risiko untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi dalam proses pemantauan risiko
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '4',
            'type' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi dalam proses pemantauan risiko?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi dalam proses pemantauan risiko',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan proses pemantauan risiko
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan proses pemantauan risiko
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam proses pemantauan risiko
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam proses pemantauan risiko perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan proses pemantauan risiko
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan proses pemantauan risiko
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'risk_management_id' => '7',
            'category_id' => '1',
            'type' => null,
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi dalam proses pemantauan risiko?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi dalam proses pemantauan risiko untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan dalam proses pemantauan risiko perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan dalam proses pemantauan risiko
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '7',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi proses pemantauan risiko dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi proses pemantauan risiko',
            'risk_management_id' => '7',
            'type' => null,
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala dalam proses pemantauan risiko?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala dalam proses pemantauan risiko',
            'risk_management_id' => '7',
            'category_id' => '2',
            'type' => null,
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Evaluasi Risiko
        //Lvl 2.1
        [
            'question' => 'Apakah kinerja dalam proses evaluasi
            pengembangan perangkat lunak diidentifikasi?',
            'recomendation' => 'Mengidentifikasi kinerja dalam proses evaluasi pengembangan perangkat lunak.',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '2',
            'type' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait proses evaluasi
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait evaluasi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah kinerja dalam proses evaluasi
            pengembangan perangkat lunak direncanakan dan dipantau?',
            'recomendation' => 'Merencanakan dan memantau kinerja dalam proses evaluasi pengembangan perangkat lunak.',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen laporan terkait pemantauan dalam
            proses evaluasi pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen laporan terkait pemantauan dalam proses evaluasi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => ' Apakah kinerja dalam proses evaluasi
            pengembangan perangkat lunak sesuai dengan rencana?',
            'recomendation' => 'Menyesuaikan kinerja dalam proses evaluasi pengembangan perangkat lunak sesuai dengan rencana.',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab untuk melakukan
            identifikasi dalam proses evaluasi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat peran yang bertanggungjawab untuk melakukan identifikasi dalam proses evaluasi pengembangan perangkat lunak.',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 2.2
        [
            'question' => 'Apakah ada informasi yang digunakan untuk merencankan manajemen risiko
            pengembangan perangkat lunak?',
            'recomendation' => 'Mencari informasi untuk digunakan dalam merencankan manajemen risiko pengembangan perangkat lunak.',
            'risk_management_id' => '8',
            'category_id' => '2',
            'type' => null,
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen terkait pengendalian proses evaluasi
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat dokumen terkait pengendalian proses evaluasi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pihak yang terlibat untuk memastikan komunikasi
            yang efektif terkait evaluasi?',
            'recomendation' => 'Membuat peran yang terlibat untuk memastikan komunikasi yang efektif terkait evaluasi.',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen peninjauan proses evaluasi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat dokumen peninjauan proses evaluasi pengembangan perangkat lunak.',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Lvl 3.1
        [
            'question' => 'Apakah ada panduan dan prosedur
            dalam mendefinisikan standar proses proses evaluasi
            pengembangan perangkat lunak?',
            'recomendation' => 'Membuat panduan dan
            prosedur dalam
            mendefinisikan standar
            proses proses evaluasi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya pemetaan secara detail untuk
            proses proses evaluasi pengembangan perangkat lunak
            dengan urutan yang diharapkan?',
            'recomendation' => 'Adanya pemetaan secara
            detail untuk proses proses evaluasi
            pengembangan perangkat
            lunak dengan urutan yang
            diharapkan',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya detail identifikasi peran dan
            kompetensi yang dibutuhkan dalam
            menjalankan proses evaluasi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat detail identifikasi
            peran dan kompetensi yang
            dibutuhkan dalam
            menjalankan proses evaluasi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kebijakan dan standar
            infrastruktur yang dibutuhkan untuk proses evaluasi
            pengembangan perangkat lunak?',
            'recomendation' => 'Adanya kebijakan dan
            standar infrastruktur yang
            dibutuhkan untuk proses evaluasi
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada kriteria yang layak dan
            data yang dibutuhkan untuk
            memonitor keefektifan proses evaluasi pengembangan
            perangkat lunak?',
            'recomendation' => 'Adanya kriteria yang layak
            dan data yang dibutuhkan
            untuk memonitor keefektifan proses evaluasi
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 3.2
        [
            'question' => 'Apakah proses evaluasi pengembangan perangkat
            lunak sesuai dengan standar yang telah
            ditetapkan?',
            'recomendation' => 'Melakukan proses evaluasi pengembangan
            perangkat lunak sesuai
            dengan standar yang telah
            ditetapkan',
            'type' => null,
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada yang bertanggung jawab
            dalam melakukan penugasan dan
            komunikasi peran untuk proses evaluasi
            pengembangan perangkat lunak?',
            'recomendation' => 'Menetapkan tanggung jawab
            dan melakukan penugasan
            serta komunikasi peran untuk proses evaluasi
            pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah personil yang terlibat sesuai
            dengan kompetensi dan pengalaman
            yang ada dalam proses evaluasi pengembangan
            perangkat lunak?',
            'recomendation' => 'Melibatkan personil yang
            sesuai secara kompetensi dan
            pengalaman dalam proses evaluasi pengembangan perangkat
            lunak',
            'type' => null,
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah sumber daya dan fasilitas yang
            dibutuhkan dalam proses evaluasi pengembangan
            perangkat lunak dialokasikan dengan
            jelas?',
            'recomendation' => 'Mengalokasikan sumber
            daya dan fasilitas yang
            dibutuhkan dalam proses evaluasi
            pengembangan perangkat
            lunak secara jelas',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah infrastruktur dan lingkungan
            kerja dalam proses evaluasi pengembangan perangkat
            lunak dikelola dan digunakan sesuai
            standar?',
            'recomendation' => 'Mengelola infrastruktur dan
            lingkungan kerja proses evaluasi
            pengembangan perangkat
            lunak sesuai standar',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya data mengenai proses evaluasi pengembangan
            perangkat lunak yang dikumpulkan
            dan dianalisis sebagai dasar perbaikan
            secara berkelanjutan?',
            'recomendation' => 'Mengumpulkan dan
            menganalisa data mengenai proses evaluasi
            pengembangan perangkat
            lunak',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '2',
            'level_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.1
        [
            'question' => 'Apakah ada ketetapan dalam
            mengukur performa proses evaluasi pengembangan
            perangkat lunak?',
            'recomendation' => 'Membuat ketetapan
            pengukuran performa proses evaluasi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail tujuan untuk proses evaluasi
            pengembangan perangkat lunak?',
            'recomendation' => 'Mempunyai detail tujuan
            untuk proses evaluasi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada detail ukuran dan
            indikator untuk proses evaluasi pengembangan
            perangkat lunak?',
            'recomendation' => 'Mempunyai detail ukuran
            dan indikator untuk proses evaluasi
            pengembangan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah rencana dan pengukuran
            proses evaluasi maupun produk diidentifikasi?',
            'recomendation' => 'Melakukan identifikasi
            rencana dan pengukuran
            proses evaluasi maupun produk',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah hasil pengukuran performa proses evaluasi
            pengembangan perangkat lunak
            dianalisa dan dilaporkan?',
            'recomendation' => 'Menganalisis dan
            melaporkan hasil
            pengukuran performa untuk
            memantau sejauh mana
            tujuan proses evaluasi pengembangan
            perangkat lunak telah
            tercapai',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen hasil
            pengukuran untuk menggambarkan
            performa proses evaluasi pengembangan perangkat
            lunak yang dilakukan?',
            'recomendation' => 'Membuat dan menggunakan
            dokumen hasil pengukuran proses evaluasi pengembangan
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 4.2
        [
            'question' => 'Adanya penetapan detail teknik analisa
            dan kontrol untuk mengukur efektifitas dalam proses evaluasi
            perangkat lunak?',
            'recomendation' => 'Menetapkan detail teknik
            analisa dan kontrol untuk
            mengukur efektifitas dalam proses evaluasi
            perangkat lunak',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Adanya parameter dan standar untuk
            mengontrol performa dalam proses evaluasi perangkat lunak
            yang dilakukan?',
            'recomendation' => 'Menetapkan parameter dan
            standar untuk mengontrol
            performa dalam proses evaluasi perangkat lunak
            yang dilakukan',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada analisis hasil pengukuran dalam proses evaluasi
            untuk menentukan masalah yang perlu
            diperhatikan dan dilakukan perbaikan?',
            'recomendation' => 'Menganalisa hasil
            pengukuran dalam proses evaluasi untuk
            menentukan masalah yang
            perlu diperhatikan dan
            dilakukan perbaikan',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada tindakan koreksi dalam proses evaluasi untuk
            mengatasi masalah kontrol perangkat
            lunak?',
            'recomendation' => 'Melakukan tindakan koreksi dalam proses evaluasi
            untuk mengatasi masalah
            kontrol perangkat lunak',
            'risk_management_id' => '8',
            'category_id' => '2',
            'type' => null,
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada modifikasi terhadap
            batasan control setelah tindakan
            koreksi dalam proses evaluasi?',
            'recomendation' => 'Melakukan modifikasi
            terhadap batasan control
            setelah tindakan koreksi dalam proses evaluasi',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.1
        [
            'question' => 'Apakah ada rencana peningkatan proses evaluasi
            perangkat lunak untuk mendukung
            tujuan UPT. TIK UNTAN?',
            'recomendation' => 'Adanya rencana peningkatan proses evaluasi
            perangkat lunak untuk
            mendukung tujuan UPT. TIK
            UNTAN',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada identifikasi variasi dalam proses evaluasi
            perangkat lunak?',
            'recomendation' => 'Mengidentifikasi variasi
            dalam proses evaluasi perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada rencana peningkatan proses evaluasi
            perangkat lunak berdasarkan analisis
            peluang peningkatan teknologi yang
            baru?',
            'recomendation' => 'Adanya rencana peningkatan proses evaluasi
            perangkat lunak berdasarkan
            analisis peluang peningkatan
            teknologi yang baru',
            'risk_management_id' => '8',
            'type' => null,
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada dokumen strategi
            implementasi dalam proses evaluasi?',
            'recomendation' => 'Membuat dokumen strategi
            implementasi dalam proses evaluasi untuk
            mencapai tujuan dan
            meningkatkan perangkat
            lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '1',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        //Level 5.2
        [
            'question' => 'Apakah ada penilaian dampak dari
            perubahan dalam proses evaluasi perangkat lunak?',
            'recomendation' => 'Memiliki penilaian dampak
            dari perubahan dalam proses evaluasi
            perangkat lunak',
            'type' => 'document',
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah implementasi proses evaluasi dari perubahan
            disetujui, dikelola, dan memberikan
            hasil yang berdampak?',
            'recomendation' => 'Menyetujui, mengelola, dan
            menghasilkan strategi
            implementasi proses evaluasi',
            'type' => null,
            'risk_management_id' => '8',
            'category_id' => '2',
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'question' => 'Apakah ada pendekatan kualitas
            proyek setelah implementasi secara
            berkala dalam proses evaluasi?',
            'recomendation' => 'Adanya pendekatan kualitas
            proyek setelah implementasi
            secara berkala dalam proses evaluasi',
            'risk_management_id' => '8',
            'category_id' => '2',
            'type' => null,
            'level_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],


        ]

    );
    }
}
