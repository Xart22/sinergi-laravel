<?php
return [
    // ===========================
    // SKK Konstruksi (LPJK)
    // ===========================
    'skk-konstruksi' => [
        'code' => 'SKK Konstruksi (LPJK)',
        'title' => 'Sertifikat Kompetensi Kerja Konstruksi',
        'tagline' => 'Legalitas kompetensi tenaga kerja konstruksi sesuai ketentuan LPJK.',
        'description' => 'SKK Konstruksi (d/h SKA/SKT) adalah sertifikasi kompetensi individu tenaga kerja bidang jasa konstruksi sebagai bukti pemenuhan kualifikasi dan klasifikasi sesuai ketentuan LPJK. Bermanfaat untuk kebutuhan proyek/tender, pemenuhan regulasi, dan pengakuan profesional.',
        'audience' => ['Tenaga Ahli/Trampil Konstruksi', 'Engineer/Arsitek', 'Estimator', 'Site Manager', 'Manajemen Proyek'],
        'benefits' => [
            'Pengakuan resmi kompetensi individu',
            'Memenuhi persyaratan proyek/tender',
            'Meningkatkan kredibilitas profesional',
            'Akses peluang kerja yang lebih luas',
            'Kesesuaian dengan ketentuan LPJK',
        ],
        // Contoh level & bidang (sesuaikan kebutuhanmu)
        'levels' => ['Tenaga Trampil (TKT 1–3)', 'Tenaga Ahli (TKA 7–9)'],
        'scopes' => [
            'Manajemen Konstruksi',
            'Bangunan Gedung',
            'Jalan & Jembatan',
            'Sumber Daya Air',
            'MEP',
        ],
        'requirements' => [
            // Dokumen wajib umum (silakan sesuaikan asosiasi/LSP)
            'Identitas: KTP & NPWP',
            'Ijazah pendidikan terakhir (sesuai level)',
            'CV/Daftar Riwayat Pekerjaan',
            'Pengalaman kerja/portofolio proyek (Kontrak/SPK, BA, foto kerja) bila diminta',
            'Pas foto terbaru',
            'Surat pernyataan kebenaran data',
            // Dokumen badan usaha (jika diajukan oleh perusahaan) – opsional
            'Akta Badan Usaha & SK Menkumham (terakhir) – opsional',
            'NIB & NPWP Badan Usaha – opsional',
        ],
        'process' => [
            'Konsultasi & pemilihan level/bidang',
            'Pengumpulan & verifikasi dokumen',
            'Pendaftaran ke LSP/Asosiasi sesuai skema',
            'Asesmen kompetensi (uji portofolio/wawancara/ujian—bergantung skema)',
            'Penerbitan sertifikat & registrasi',
        ],
        'deliverables' => [
            'Sertifikat Kompetensi Kerja (digital/fisik sesuai penerbit)',
            'Berita acara/rekam asesmen (bila tersedia)',
            'Panduan perpanjangan/upgrade level',
        ],
        'faqs' => [
            ['q' => 'Berapa lama prosesnya?', 'a' => 'Umumnya 2–6 minggu tergantung kelengkapan dokumen, jadwal asesmen, dan penerbitan oleh LSP/LPJK.'],
            ['q' => 'Apakah SKA/SKT masih berlaku?', 'a' => 'Saat ini digunakan istilah SKK. Jika kamu punya SKA/SKT, konsultasikan opsi konversi/penyesuaian sesuai ketentuan terbaru.'],
        ],
    ],

    // ==============================================
    // SKTTK DJK ESDM (Tenaga Teknik Ketenagalistrikan)
    // ==============================================
    'skttk-ketenagalistrikan' => [
        'code' => 'SKTTK DJK ESDM',
        'title' => 'Sertifikasi Kompetensi Tenaga Teknik Ketenagalistrikan',
        'tagline' => 'Bukti kompetensi tenaga teknik ketenagalistrikan sesuai ketentuan DJK ESDM.',
        'description' => 'SKTTK adalah sertifikasi kompetensi untuk tenaga teknik ketenagalistrikan sebagai pemenuhan persyaratan legal dan keselamatan kerja pada kegiatan instalasi, operasi, pemeliharaan, dan inspeksi ketenagalistrikan. Mendukung kepatuhan regulasi dan keselamatan instalasi.',
        'audience' => ['Teknisi/Engineer Listrik', 'Supervisor Operasi & Pemeliharaan', 'Inspektur K3 Listrik', 'Kontraktor/Installer'],
        'benefits' => [
            'Pemenuhan persyaratan legal ketenagalistrikan',
            'Peningkatan keselamatan & keandalan instalasi',
            'Kepercayaan pemilik aset/PLN/instansi',
            'Mobilitas kerja & peluang proyek lebih luas',
            'Kesesuaian dengan ketentuan DJK ESDM',
        ],
        // Contoh level/lingkup (silakan sesuaikan dengan skema aktual)
        'levels' => ['Operator', 'Teknisi', 'Supervisor', 'Ahli (sesuai skema LSP)'],
        'scopes' => [
            'Instalasi Tegangan Rendah',
            'Operasi & Pemeliharaan',
            'Pengujian & Pemeriksaan',
            'Keselamatan & K3 Ketenagalistrikan',
        ],
        'requirements' => [
            'Identitas: KTP & NPWP',
            'Ijazah pendidikan terakhir (SMK/D3/S1 sesuai skema)',
            'CV/Daftar Riwayat Pekerjaan',
            'Portofolio pengalaman relevan (surat pengalaman/paklaring, foto kerja)',
            'Sertifikat pelatihan/kompetensi pendukung (bila ada)',
            'Pas foto terbaru',
            'Surat pernyataan kebenaran data',
            // jika diajukan oleh perusahaan (opsional)
            'NIB/NPWP Badan Usaha – opsional',
            'Surat penugasan dari perusahaan – opsional',
        ],
        'process' => [
            'Konsultasi level & penentuan skema',
            'Pengumpulan & verifikasi dokumen',
            'Registrasi asesmen pada LSP/asesor',
            'Pelaksanaan asesmen (teori/praktik/portofolio sesuai skema)',
            'Penerbitan sertifikat kompetensi',
        ],
        'deliverables' => [
            'Sertifikat SKTTK (sesuai penerbit)',
            'Rekam asesmen/berita acara (bila tersedia)',
            'Panduan perpanjangan/upgrade level',
        ],
        'faqs' => [
            ['q' => 'Masa berlaku berapa lama?', 'a' => 'Mengacu pada ketentuan penerbit/LSP (umumnya 3 tahun). Lakukan pemeliharaan/rekertifikasi sesuai syarat.'],
            ['q' => 'Apakah perlu SLO?', 'a' => 'SLO terkait laik operasi instalasi. SKTTK fokus pada kompetensi personal. Keduanya bisa saling melengkapi sesuai kebutuhan proyek.'],
        ],

    ],
    'k3' => [
        'code' => 'K3',
        'title' => 'Pelatihan K3 (Keselamatan & Kesehatan Kerja)',
        'tagline' => 'Bangun budaya K3 yang proaktif, kurangi insiden & downtime.',
        'description' => 'Layanan pendampingan K3 untuk membangun budaya keselamatan kerja yang kuat melalui identifikasi bahaya, pengendalian risiko, pelatihan, dan tata kelola K3 yang efektif. Cocok untuk perusahaan yang ingin menurunkan tingkat insiden, meningkatkan kepatuhan, dan memperbaiki kinerja operasional.',
        'audience' => ['Manufaktur', 'Konstruksi', 'Pertambangan', 'Logistik & Warehouse', 'F&B', 'Rumah Sakit'],
        'benefits' => [
            'Identifikasi bahaya & pengendalian risiko (HIRADC/JSA)',
            'Penurunan angka kecelakaan & penyakit akibat kerja',
            'Kepatuhan persyaratan K3 & audit pelanggan',
            'Peningkatan awareness & partisipasi pekerja',
            'Kinerja operasional lebih stabil (downtime menurun)',
        ],
        'levels' => ['Fundamental (Starter)', 'Intermediate (Program Tahunan)', 'Advanced (Integrasi dengan SMK3/ISO 45001)'],
        'scopes' => [
            'Penyusunan kebijakan & sasaran K3',
            'HIRADC/JSA & program pengendalian risiko',
            'Prosedur kerja aman, permit to work, LOTO',
            'Investigasi insiden & tindakan perbaikan',
            'Pelatihan & kampanye K3',
            'Pemantauan kinerja & pelaporan',
        ],
        'requirements' => [
            'Profil perusahaan & jenis proses/aktivitas',
            'Daftar potensi bahaya di area kerja (jika ada)',
            'Data insiden/near-miss (jika ada)',
            'Struktur organisasi & penanggung jawab K3',
            'Kebijakan/prosedur K3 yang sudah ada (jika ada)',
        ],
        'process' => [
            'Kickoff & asesmen awal (gap/risiko)',
            'Penyusunan roadmap K3 & prioritas',
            'Implementasi program & pelatihan',
            'Monitoring, inspeksi & coaching lapangan',
            'Evaluasi, audit internal & perbaikan',
        ],
        'deliverables' => [
            'Kebijakan & Sasaran K3',
            'Dokumen HIRADC/JSA & rencana pengendalian',
            'Prosedur kerja aman & form inspeksi',
            'Materi & catatan pelatihan',
            'Laporan evaluasi & rekomendasi perbaikan',
        ],
        'faqs' => [
            ['q' => 'Apakah layanan bisa disesuaikan industri?', 'a' => 'Bisa. Kami menyesuaikan risiko khas tiap industri dan peraturan yang relevan.'],
            ['q' => 'Apakah harus punya tim K3 internal?', 'a' => 'Tidak wajib. Namun penunjukan penanggung jawab internal akan mempercepat implementasi & keberlanjutan program.'],
        ],
    ],

    // ===========================
    // SMK3 (Pendampingan Implementasi & Audit Internal)
    // ===========================
    'smk3' => [
        'code' => 'SMK3',
        'title' => 'Pendampingan SMK3',
        'tagline' => 'Sistem Manajemen K3 yang terstruktur & siap diaudit.',
        'description' => 'Pendampingan perancangan dan implementasi Sistem Manajemen K3 (SMK3) yang terstruktur—mulai dari kebijakan, perencanaan, pengendalian operasional, hingga audit internal dan tinjauan manajemen—agar organisasi siap menghadapi audit pihak ketiga dan meningkatkan kinerja K3 secara berkelanjutan.',
        'audience' => ['Manufaktur', 'Konstruksi', 'Oil & Gas', 'Pertambangan', 'Logistik', 'Utilities'],
        'benefits' => [
            'Kerangka SMK3 yang sistematis & terdokumentasi',
            'Integrasi manajemen risiko ke proses kerja',
            'Kesiapan audit pihak ketiga/klien',
            'Peningkatan compliance & kinerja K3',
            'Peningkatan budaya keterlibatan pekerja',
        ],
        'levels' => ['Implementasi Baru', 'Penguatan & Pemeliharaan', 'Integrasi dengan standar lain (mis. ISO 45001)'],
        'scopes' => [
            'Kebijakan, perencanaan & sasaran K3',
            'Identifikasi bahaya, penilaian & pengendalian risiko',
            'Kompetensi, pelatihan & komunikasi K3',
            'Pengendalian operasional (SOP, permit, LOTO, kontraktor)',
            'Kesiapsiagaan & tanggap darurat',
            'Monitoring kinerja, audit internal & Tinjauan Manajemen',
        ],
        'requirements' => [
            'Profil perusahaan & proses kritikal',
            'Struktur organisasi & penanggung jawab K3',
            'Data risiko/insiden historis (jika ada)',
            'Daftar peraturan/izin relevan (jika ada)',
            'Sumber daya & jadwal implementasi yang disepakati',
        ],
        'process' => [
            'Gap assessment & rencana kerja (roadmap)',
            'Penyusunan dokumen SMK3 & sosialisasi',
            'Implementasi & pendampingan lapangan',
            'Audit internal & Tinjauan Manajemen',
            'Persiapan audit pihak ketiga (pre-assessment)',
        ],
        'deliverables' => [
            'Manual/kebijakan & sasaran K3',
            'Prosedur & form SMK3 (termasuk HIRADC/JSA)',
            'Rencana tanggap darurat & catatan latihan',
            'Catatan pemantauan kinerja & inspeksi',
            'Laporan audit internal & bukti Tinjauan Manajemen',
        ],
        'faqs' => [
            ['q' => 'Berapa lama implementasi SMK3?', 'a' => 'Tergantung skala & kesiapan awal. Umumnya 8–16 minggu untuk implementasi dasar hingga siap audit internal.'],
            ['q' => 'Apakah harus bersertifikasi pihak ketiga?', 'a' => 'Tidak wajib. Namun audit pihak ketiga membantu pengakuan eksternal & kepercayaan pelanggan.'],
        ],
    ],
    'sbujk' => [
        'code' => 'SBUJK',
        'title' => 'Sertifikasi Badan Usaha Jasa Konstruksi',
        'tagline' => 'Legalitas badan usaha konstruksi untuk mengikuti proyek & tender.',
        'description' => 'SBUJK adalah sertifikat legalitas dan kualifikasi Badan Usaha Jasa Konstruksi sebagai bukti kemampuan teknis dan manajerial untuk melaksanakan pekerjaan konstruksi. Sertifikat ini mengakui klasifikasi, subklasifikasi, dan kualifikasi badan usaha sehingga dapat memenuhi persyaratan proyek/tender serta perizinan berbasis risiko melalui OSS.',
        'audience' => ['PT/CV/Firma/Perseorangan BUJK', 'Kontraktor & Konsultan Konstruksi', 'BUMN/BUMD & Anak Usaha', 'Kemitraan/KSO'],
        'benefits' => [
            'Memenuhi persyaratan tender/kontrak pekerjaan konstruksi',
            'Pengakuan kemampuan pada klasifikasi & subklasifikasi tertentu',
            'Akses proyek pemerintah & swasta yang mensyaratkan SBU',
            'Kredibilitas & kepercayaan pihak pemilik pekerjaan',
            'Sinkron dengan perizinan OSS berbasis risiko',
        ],
        // contoh tingkatan kualifikasi—silakan sesuaikan regulasi terkini
        'levels' => ['Kecil (K)', 'Menengah (M1/M2)', 'Besar (B1/B2)'],
        // contoh klasifikasi—sesuaikan dengan kebutuhanmu
        'scopes' => [
            'Bangunan Gedung',
            'Pekerjaan Sipil (Jalan/Jembatan/SDP)',
            'Mekanikal',
            'Elektrikal',
            'Tata Lingkungan',
            'Arsitektur/Perencanaan (Konsultansi)',
        ],
        // daftar persyaratan umum—aman & generik
        'requirements' => [
            'Akta Pendirian & Perubahan berikut SK Kemenkumham (terakhir)',
            'Nomor Induk Berusaha (NIB) aktif di OSS',
            'NPWP Badan Usaha & PKP (bila ada)',
            'KBLI sesuai bidang jasa konstruksi',
            'Struktur Organisasi & penanggung jawab BUJK',
            'Tenaga kerja bersertifikat (SKK) sesuai subklasifikasi & jumlah minimal',
            'Data peralatan utama (bila disyaratkan subklasifikasi tertentu)',
            'Pengalaman pekerjaan/kontrak (BA, SPK, referensi) sesuai kualifikasi',
            'Laporan pajak/SSP (bila dipersyaratkan)',
            'Alamat & bukti domisili usaha (termasuk foto lokasi kantor)',
            'Logo & Company Profile (opsional)',
        ],
        'process' => [
            'Konsultasi penentuan klasifikasi, subklasifikasi & kualifikasi',
            'Kelengkapan & verifikasi dokumen (legal, tenaga kerja, peralatan, pengalaman)',
            'Registrasi & sinkronisasi data melalui OSS/LPJK sesuai mekanisme',
            'Verifikasi & penilaian (administrasi/teknis) oleh pihak terkait',
            'Penerbitan SBUJK & aktivasi untuk keperluan perizinan/tender',
        ],
        'deliverables' => [
            'Sertifikat Badan Usaha Jasa Konstruksi (digital/fisik sesuai penerbit)',
            'Rekap data klasifikasi/subklasifikasi & kualifikasi BUJK',
            'Panduan pemeliharaan/perpanjangan & perubahan data',
        ],
        'faqs' => [
            [
                'q' => 'Apakah wajib memiliki tenaga bersertifikat SKK?',
                'a' => 'Umumnya ya. Jumlah & jenjang SKK menyesuaikan klasifikasi/subklasifikasi serta kualifikasi (K/M/B).'
            ],
            [
                'q' => 'Berapa lama proses penerbitan SBUJK?',
                'a' => 'Tergantung kelengkapan data & antrian verifikasi. Secara umum 2–6 minggu sejak dokumen lengkap.'
            ],
            [
                'q' => 'Apa hubungan SBUJK dengan OSS?',
                'a' => 'SBUJK menjadi bagian dari pemenuhan Persyaratan Dasar/Perizinan Berusaha berbasis risiko di OSS agar BUJK dapat beroperasi dan mengikuti tender.'
            ],
        ],
    ],
    'sbujptl' => [
        'code' => 'SBUJPTL',
        'title' => 'Sertifikat Badan Usaha Jasa Penunjang Tenaga Listrik',
        'tagline' => 'Legalitas badan usaha penunjang ketenagalistrikan untuk operasional & tender.',
        'description' => 'SBUJPTL adalah sertifikat legalitas dan kualifikasi bagi Badan Usaha Jasa Penunjang Tenaga Listrik sebagai bukti kemampuan teknis, manajerial, dan pemenuhan persyaratan keselamatan ketenagalistrikan. Berguna untuk perizinan berbasis risiko, kemitraan dengan pemilik aset/PLN, serta pemenuhan syarat proyek/tender.',
        'audience' => ['PT/CV BUJPTL', 'Kontraktor/Instalatur Listrik', 'Konsultan Ketenagalistrikan', 'Maintenance & Testing Provider', 'Penyedia Jasa Inspeksi/K3 Listrik'],
        'benefits' => [
            'Pengakuan resmi atas klasifikasi/subklasifikasi ketenagalistrikan',
            'Akses proyek & kemitraan dengan pemilik instalasi/PLN',
            'Kepatuhan terhadap persyaratan keselamatan & regulasi',
            'Kredibilitas & daya saing meningkat pada tender',
            'Sinkron dengan perizinan OSS berbasis risiko',
        ],
        // contoh level/kualifikasi — sesuaikan ketentuan terbaru jika diperlukan
        'levels' => ['Kecil (K)', 'Menengah (M1/M2)', 'Besar (B1/B2)'],
        // contoh lingkup — sesuaikan subklasifikasi yang kamu layani
        'scopes' => [
            'Perencanaan & Konsultansi Ketenagalistrikan',
            'Pemasangan/Instalasi Tegangan Rendah/menengah (sesuai izin)',
            'Pengujian & Pemeriksaan (testing & commissioning)',
            'Pemeliharaan (operation & maintenance)',
            'Keselamatan & K3 Ketenagalistrikan',
        ],
        'requirements' => [
            'Akta Pendirian & Perubahan + SK Kemenkumham (terakhir)',
            'NIB aktif di OSS & NPWP Badan Usaha',
            'KBLI sesuai layanan penunjang ketenagalistrikan',
            'Struktur Organisasi & penanggung jawab teknis',
            'Tenaga teknik bersertifikat (SKTTK/Sertifikat kompetensi terkait) sesuai subklasifikasi & jumlah minimal',
            'Daftar peralatan utama/alat ukur (kalibrasi bila dipersyaratkan)',
            'Pengalaman pekerjaan/kontrak relevan (SPK, BA, referensi) sesuai kualifikasi',
            'Dokumen K3/SMK3 relevan (kebijakan, prosedur, bukti pelatihan) bila dipersyaratkan',
            'Alamat & bukti domisili kantor (foto lokasi, papan nama)',
            'Company Profile & logo (opsional)',
        ],
        'process' => [
            'Konsultasi penentuan klasifikasi/subklasifikasi & kualifikasi',
            'Kompilasi & verifikasi dokumen legal, teknis, peralatan, dan pengalaman',
            'Registrasi & sinkronisasi data melalui OSS/mekanisme instansi terkait',
            'Verifikasi & penilaian administrasi/teknis oleh pihak berwenang',
            'Penerbitan SBUJPTL & aktivasi untuk perizinan/tender',
        ],
        'deliverables' => [
            'Sertifikat Badan Usaha Jasa Penunjang Tenaga Listrik (digital/fisik sesuai penerbit)',
            'Ringkasan klasifikasi/subklasifikasi & kualifikasi BUJPTL',
            'Panduan pemeliharaan/perubahan data & perpanjangan',
        ],
        'faqs' => [
            [
                'q' => 'Apakah wajib memiliki tenaga teknik bersertifikat?',
                'a' => 'Umumnya ya. Jumlah & jenjang sertifikasi tenaga teknik menyesuaikan subklasifikasi dan kualifikasi (K/M/B) yang diajukan.'
            ],
            [
                'q' => 'Berapa lama proses SBUJPTL?',
                'a' => 'Bergantung kelengkapan data dan antrian verifikasi. Rata-rata 2–6 minggu setelah dokumen lengkap.'
            ],
            [
                'q' => 'Apa bedanya SBUJPTL dengan SBUJK?',
                'a' => 'SBUJPTL khusus untuk jasa penunjang ketenagalistrikan (instalasi, O&M, pengujian, inspeksi, dsb), sedangkan SBUJK untuk jasa konstruksi bangunan/sipil/MEP.'
            ],
        ],
    ], // ===========================
    // IUJPTL (Izin Usaha Jasa Penunjang Tenaga Listrik)
    // ===========================
    'iujptl' => [
        'code' => 'IUJPTL',
        'title' => 'Izin Usaha Jasa Penunjang Tenaga Listrik',
        'tagline' => 'Perizinan operasional BUJPTL melalui OSS berbasis risiko.',
        'description' => 'IUJPTL adalah izin berusaha bagi Badan Usaha Jasa Penunjang Tenaga Listrik yang diperlukan untuk melaksanakan kegiatan perencanaan, pemasangan, pengujian, operasi & pemeliharaan instalasi ketenagalistrikan. Layanan ini membantu sinkronisasi data legal, teknis, dan keselamatan untuk mendapatkan izin melalui OSS berbasis risiko.',
        'audience' => ['PT/CV BUJPTL', 'Kontraktor/Instalatur Listrik', 'Konsultan/K3 Listrik', 'Operator & Maintenance Provider'],
        'benefits' => [
            'Pemenuhan legalitas operasional BUJPTL',
            'Akses proyek/tender yang mensyaratkan izin aktif',
            'Sinkron dengan OSS berbasis risiko & data SBUJPTL',
            'Kepercayaan pemilik aset/PLN & regulator meningkat',
            'Pendampingan dokumen teknis & K3 yang relevan',
        ],
        // (opsional) klasifikasi risiko/lingkup layanan; sesuaikan praktikmu
        'scopes' => [
            'Perencanaan & Konsultansi',
            'Instalasi/Pemasangan (sesuai tegangan & lingkup izin)',
            'Pengujian & Pemeriksaan (testing & commissioning)',
            'Operation & Maintenance (O&M)',
            'Inspeksi/K3 Ketenagalistrikan',
        ],
        // kualifikasi usaha sering mengacu pada data SBUJPTL – tampilkan ringan saja
        'levels' => ['Kecil (K)', 'Menengah (M1/M2)', 'Besar (B1/B2)'],

        // Persyaratan umum — dibuat generik & aman
        'requirements' => [
            'Akta Pendirian & Perubahan + SK Kemenkumham (terakhir)',
            'NIB aktif di OSS & NPWP Badan Usaha',
            'KBLI sesuai kegiatan penunjang ketenagalistrikan',
            'Sertifikat Badan Usaha Jasa Penunjang Tenaga Listrik (SBUJPTL) yang sesuai lingkup',
            'Penanggung jawab teknis & tenaga teknik bersertifikat (SKTTK/sertifikasi setara) sesuai subklasifikasi',
            'Daftar peralatan utama/alat ukur (sertifikat kalibrasi bila dipersyaratkan)',
            'Dokumen K3/SMK3 yang relevan (kebijakan, SOP, catatan pelatihan) bila dipersyaratkan',
            'Alamat & bukti domisili kantor, foto papan nama',
            'Kelengkapan administrasi tambahan di OSS (form komitmen, dll.)',
        ],

        'process' => [
            'Konsultasi lingkup, subklasifikasi & kualifikasi usaha',
            'Kompilasi & verifikasi dokumen legal, teknis, K3, dan data SBUJPTL',
            'Pendaftaran & pengisian data melalui OSS berbasis risiko',
            'Pemenuhan komitmen & verifikasi administrasi/teknis oleh instansi terkait',
            'Penerbitan IUJPTL & aktivasi status izin untuk operasional/tender',
        ],

        'deliverables' => [
            'Dokumen IUJPTL (sesuai format OSS/instansi terkait)',
            'Ringkasan data izin: lingkup, subklasifikasi, masa berlaku',
            'Panduan pemeliharaan izin & perubahan data (perluasan lingkup/penanggung jawab)',
        ],

        'faqs' => [
            [
                'q' => 'Apakah wajib punya SBUJPTL dulu?',
                'a' => 'Umumnya ya. Data SBUJPTL (klasifikasi/subklasifikasi & kualifikasi) menjadi basis dalam perizinan IUJPTL di OSS.'
            ],
            [
                'q' => 'Berapa lama proses IUJPTL?',
                'a' => 'Tergantung kelengkapan dokumen & antrian verifikasi. Umumnya 2–6 minggu sejak dokumen lengkap dan komitmen terpenuhi.'
            ],
            [
                'q' => 'Apakah tenaga SKTTK harus dilampirkan?',
                'a' => 'Biasanya diminta. Jumlah/jenjang disesuaikan dengan lingkup layanan dan kualifikasi usaha yang diajukan.'
            ],
        ],
    ], // ===========================
    // Sertifikat Standar OSS RBA
    // ===========================
    'sertifikat-standar-oss-rba' => [
        'code' => 'Sertifikat Standar OSS RBA',
        'title' => 'Pendampingan Sertifikat Standar (OSS RBA)',
        'tagline' => 'Penuhi komitmen standar berusaha sesuai tingkat risiko & KBLI.',
        'description' => 'Sertifikat Standar pada OSS RBA adalah pemenuhan komitmen standar usaha untuk KBLI tertentu berdasarkan tingkat risiko (rendah, menengah, tinggi). Layanan ini membantu pemetaan KBLI, verifikasi dokumen, pemenuhan komitmen, hingga terbitnya Sertifikat Standar agar usaha sah beroperasi dan memenuhi syarat audit/tender.',
        'audience' => ['PT/CV/Perseorangan', 'UMKM', 'Perusahaan Multi-Outlet', 'Konsultan/Operator Fasilitas', 'Kontraktor/Jasa Teknis'],
        'benefits' => [
            'Kepastian legalitas sesuai tingkat risiko & KBLI',
            'Sinkron dengan NIB & perizinan berbasis risiko',
            'Panduan pemenuhan komitmen yang terstruktur',
            'Mempercepat proses operasional & kepatuhan',
            'Siap audit instansi teknis/pelanggan',
        ],
        // contoh lingkup (generik—sesuaikan kebutuhan)
        'scopes' => [
            'Pemetaan KBLI & penilaian tingkat risiko',
            'Checklist pemenuhan standar per KBLI',
            'Dokumen teknis & K3 yang relevan',
            'Dokumen lingkungan (SPPL/UKL-UPL/AMDAL) bila dipersyaratkan',
            'Pengajuan & pemenuhan komitmen di OSS',
            'Pendampingan verifikasi instansi teknis',
        ],
        // level tidak wajib, tapi sering terkait kategori risiko
        'levels' => ['Risiko Rendah', 'Risiko Menengah', 'Risiko Tinggi'],

        // Persyaratan umum (dibuat aman & generik lintas sektor)
        'requirements' => [
            'Akta Pendirian/Perubahan & SK Kemenkumham (terakhir)',
            'NIB aktif & NPWP Badan Usaha/Pribadi',
            'KBLI kegiatan usaha yang diajukan',
            'Data lokasi usaha & bukti domisili (foto/papan nama)',
            'Dokumen lingkungan (SPPL/UKL-UPL/AMDAL) bila dipersyaratkan',
            'Dokumen teknis & K3/SMK3 yang relevan dengan KBLI',
            'Tenaga kompeten/penanggung jawab teknis (bila diminta)',
            'Daftar peralatan/sarana prasarana (bila diminta)',
            'Form komitmen & pernyataan pemenuhan standar di OSS',
        ],

        'process' => [
            'Konsultasi: pemetaan KBLI & tingkat risiko (RBA)',
            'Kompilasi & verifikasi dokumen (legal, teknis, K3, lingkungan)',
            'Pengisian data & pengajuan komitmen pada OSS',
            'Pemenuhan komitmen/inspeksi/verifikasi instansi teknis (jika ada)',
            'Penerbitan Sertifikat Standar & sinkron status izin',
        ],

        'deliverables' => [
            'Sertifikat Standar (hasil OSS) untuk KBLI terkait',
            'Ringkasan pemenuhan standar & catatan verifikasi',
            'Panduan pemeliharaan izin & perubahan data (perluasan KBLI/outlet)',
        ],

        'faqs' => [
            [
                'q' => 'Apa bedanya NIB dan Sertifikat Standar?',
                'a' => 'NIB adalah identitas berusaha. Sertifikat Standar adalah bukti pemenuhan komitmen standar untuk KBLI/risiko tertentu sehingga usaha sah beroperasi.'
            ],
            [
                'q' => 'Berapa lama prosesnya?',
                'a' => 'Bergantung kelengkapan dokumen & apakah perlu verifikasi lapangan. Umumnya 1–4 minggu setelah komitmen & dokumen lengkap.'
            ],
            [
                'q' => 'Apakah semua KBLI butuh Sertifikat Standar?',
                'a' => 'Tidak. Hanya KBLI dengan tingkat risiko tertentu. Kami bantu cek KBLI & kebutuhan komitmennya di OSS.'
            ],
        ],
    ],


];
