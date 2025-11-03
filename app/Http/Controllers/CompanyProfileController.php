<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Support\JsonLdBuilder;


class CompanyProfileController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.index');
    }




    public function about()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.about');
    }


    public function contact()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.contact');
    }

    public function service($slug)
    {
        $conf = config('kompetensi')[$slug] ?? null;

        abort_if(!$conf, 404);

        $title = ($conf['code'] ?? '') . ' – ' . ($conf['title'] ?? '');
        $desc  = $conf['description'] ?? $conf['tagline'] ?? '';

        SEOTools::setTitle($title);
        SEOTools::setDescription($desc);

        // JSON-LD khusus halaman (pakai builder yang sama dengan ISO)
        $pageJsonLd = array_values(array_filter([
            \App\Support\JsonLdBuilder::serviceFromArray($slug, $conf),   // method baru (lihat bawah)
            \App\Support\JsonLdBuilder::breadcrumbGeneric([
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'Services', 'url' => url('/services')],
                ['name' => $conf['code'], 'url' => route('landing.service.sertifikasi.show', $slug)],
            ]),
            !empty($conf['faqs']) ? \App\Support\JsonLdBuilder::faqFromArray($conf['faqs']) : null,
        ]));

        return view('app.company.services.kompetensi-show', compact('slug', 'conf', 'pageJsonLd'));
    }

    public function k3()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.services.k3');
    }

    public function iso()
    {

        $iso = [
            // ==== 9001 ====
            'iso-9001-2015' => [
                'code' => 'ISO 9001:2015',
                'description' => 'ISO 9001:2015 adalah standar internasional untuk Sistem Manajemen Mutu yang menetapkan kerangka kerja bagi organisasi untuk secara konsisten memberikan produk dan layanan berkualitas tinggi. Penerapan standar ini membantu meningkatkan kepuasan pelanggan, efisiensi operasional, serta reputasi organisasi melalui pendekatan berbasis risiko dan perbaikan berkelanjutan.',
                'title' => 'Sistem Manajemen Mutu (SMM)',
                'tagline' => 'Bangun mutu yang konsisten, tingkatkan kepuasan pelanggan.',
                'audience' => ['Manufaktur', 'Jasa', 'Distribusi & Logistik', 'Pemerintahan', 'Edukasi & Kesehatan'],
                'benefits' => [
                    'Kepuasan pelanggan meningkat melalui kontrol proses yang konsisten',
                    'Efisiensi operasional & pengurangan cacat/keluhan',
                    'Kepatuhan persyaratan regulasi & kontrak pelanggan',
                    'Budaya perbaikan berkelanjutan (PDCA & risk-based thinking)',
                    'Daya saing & kredibilitas merek meningkat',
                ],
                'scope' => 'Perancangan dan implementasi SMM berbasis Annex SL, termasuk pemetaan proses, KPI mutu, pengendalian dokumen, audit internal, dan tinjauan manajemen.',
                'key_clauses' => [
                    'Konteks organisasi & kebutuhan pihak berkepentingan',
                    'Kepemimpinan & perencanaan berbasis risiko',
                    'Dukungan (kompetensi, komunikasi, informasi terdokumentasi)',
                    'Operasi (perencanaan, pengendalian perubahan, outsourcing)',
                    'Evaluasi kinerja (monitoring, audit internal, Tinjauan Manajemen)',
                    'Peningkatan (tindakan korektif & continual improvement)',
                ],
                'deliverables' => [
                    'Kebijakan Mutu & Sasaran Mutu (KPI)',
                    'Prosedur inti SMM & flow proses',
                    'Matriks risiko & peluang',
                    'Formulir & rekaman operasional',
                    'Rencana & laporan audit internal',
                    'Bukti Tinjauan Manajemen',
                ],
                'faqs' => [
                    ['q' => 'Berapa lama implementasi?', 'a' => 'Umumnya 6–12 minggu tergantung skala proses & kesiapan dokumen.'],
                    ['q' => 'Apakah perlu semua proses terdokumentasi?', 'a' => 'Dokumentasi proporsional: cukup untuk menjamin kendali & konsistensi, tidak harus berlebihan.'],
                ],
            ],

            // ==== 14001 ====
            'iso-14001-2015' => [
                'code' => 'ISO 14001:2015',
                'description' => 'ISO 14001:2015 memberikan pedoman bagi organisasi dalam mengelola tanggung jawab lingkungannya secara sistematis. Standar ini membantu mengurangi dampak negatif terhadap lingkungan, mengoptimalkan penggunaan sumber daya, dan memastikan kepatuhan terhadap peraturan lingkungan yang berlaku, sehingga mendukung keberlanjutan jangka panjang.',
                'title' => 'Sistem Manajemen Lingkungan (SML)',
                'tagline' => 'Kurangi dampak lingkungan, tingkatkan kepatuhan & efisiensi sumber daya.',
                'audience' => ['Manufaktur', 'Konstruksi', 'Pertambangan', 'Perhotelan', 'F&B', 'Utilities'],
                'benefits' => [
                    'Identifikasi & kendali aspek/ dampak lingkungan',
                    'Kepatuhan regulasi lingkungan (izin, limbah, emisi)',
                    'Penghematan energi & bahan baku',
                    'Pengurangan limbah & biaya pembuangan',
                    'Citra hijau & kepercayaan stakeholder',
                ],
                'scope' => 'SML berbasis Annex SL: identifikasi aspek-dampak, kewajiban kepatuhan, program lingkungan, kesiapsiagaan & respons darurat, pemantauan kinerja.',
                'key_clauses' => [
                    'Aspek & dampak lingkungan signifikan',
                    'Kewajiban kepatuhan & evaluasinya',
                    'Tujuan & rencana pencapaian',
                    'Kontrol operasional & pemasok',
                    'Kesiapsiagaan & respons darurat',
                    'Evaluasi kinerja & peningkatan',
                ],
                'deliverables' => [
                    'Daftar aspek & penilaian signifikansi',
                    'Register peraturan & evaluasi kepatuhan',
                    'Program & target lingkungan',
                    'Prosedur pengendalian limbah/emisi/B3',
                    'Rencana keadaan darurat',
                    'Laporan pemantauan kinerja',
                ],
                'faqs' => [
                    ['q' => 'Apakah perlu AMDAL?', 'a' => 'Tidak selalu. ISO 14001 fokus pada sistem; kewajiban AMDAL/UKL-UPL mengikuti regulasi setempat.'],
                ],
            ],

            // ==== 45001 ====
            'iso-45001-2018' => [
                'code' => 'ISO 45001:2018',
                'description' => 'ISO 45001:2018 adalah standar global yang berfokus pada kesehatan dan keselamatan kerja. Standar ini membantu organisasi menciptakan tempat kerja yang aman, mencegah kecelakaan dan penyakit akibat kerja, serta meningkatkan kesejahteraan karyawan melalui pendekatan manajemen risiko yang terstruktur.',
                'title' => 'Sistem Manajemen K3 (SMK3)',
                'tagline' => 'Tempat kerja aman & sehat, produktivitas meningkat.',
                'audience' => ['Konstruksi', 'Manufaktur', 'Pertambangan', 'Logistik', 'Rumah Sakit'],
                'benefits' => [
                    'Identifikasi bahaya & pengendalian risiko K3',
                    'Penurunan kecelakaan & penyakit kerja',
                    'Kepatuhan regulasi K3',
                    'Keterlibatan pekerja & budaya keselamatan',
                    'Pengurangan biaya insiden & downtime',
                ],
                'scope' => 'Sistem K3 mencakup HIRADC, perizinan K3, program SMK3, kesiapsiagaan darurat, pemantauan kinerja, audit internal, dan tinjauan manajemen.',
                'key_clauses' => [
                    'Konsultasi & partisipasi pekerja',
                    'Identifikasi bahaya, penilaian & pengendalian risiko',
                    'Kontrol operasional, perizinan, kompetensi',
                    'Kesiapsiagaan & tanggap darurat',
                    'Monitoring, investigasi insiden, CAPA',
                ],
                'deliverables' => [
                    'Kebijakan K3 & sasaran K3',
                    'HIRADC/JSA & daftar APD',
                    'Program K3 & pelatihan',
                    'Rencana tanggap darurat',
                    'Catatan inspeksi, toolbox meeting',
                    'Audit internal & tinjauan manajemen',
                ],
                'faqs' => [
                    ['q' => 'Apakah wajib dokter perusahaan?', 'a' => 'Mengikuti regulasi nasional & level risiko. ISO 45001 menuntut kontrol kompeten, bukan jabatan spesifik.'],
                ],
            ],

            // ==== 22000 ====
            'iso-22000-2018' => [
                'code' => 'ISO 22000:2018',
                'description' => 'ISO 22000:2018 mengintegrasikan prinsip HACCP dan manajemen risiko untuk menjamin keamanan pangan di seluruh rantai pasok. Standar ini memastikan bahwa setiap tahap produksi dan distribusi makanan memenuhi persyaratan keamanan, sehingga meningkatkan kepercayaan konsumen dan memenuhi ketentuan regulasi nasional maupun internasional.',

                'title' => 'Sistem Manajemen Keamanan Pangan (SMKP)',
                'tagline' => 'Keamanan pangan terjamin di seluruh rantai pasok.',
                'audience' => ['F&B', 'Catering', 'Ritel Pangan', 'Distribusi Dingin', 'Produsen Bahan Pangan'],
                'benefits' => [
                    'Integrasi HACCP, PRP & manajemen risiko',
                    'Pengendalian bahaya biologis, kimia & fisik',
                    'Kepercayaan pasar & pemenuhan persyaratan pelanggan',
                    'Kesiapan terhadap penarikan produk (recall)',
                    'Kepatuhan regulasi keamanan pangan',
                ],
                'scope' => 'Perancangan SMKP meliputi analisis bahaya, PRP/OPRP, rencana HACCP, kontrol traceability, komunikasi rantai pasok, verifikasi & validasi.',
                'key_clauses' => [
                    'Program prasyarat (PRP) & infrastruktur higienis',
                    'Analisis bahaya, CCP/OPRP & batas kritis',
                    'Sistem penelusuran & recall',
                    'Komunikasi internal/eksternal',
                    'Verifikasi, validasi & pengendalian ketidaksesuaian',
                ],
                'deliverables' => [
                    'Rencana HACCP & daftar PRP/OPRP',
                    'Prosedur hygiene & sanitasI',
                    'Rencana traceability & recall',
                    'Form pemantauan CCP/OPRP',
                    'Audit internal & tinjauan manajemen',
                ],
                'faqs' => [
                    ['q' => 'Bedanya dengan HACCP saja?', 'a' => 'ISO 22000 = sistem manajemen lengkap (Annex SL) yang mengintegrasikan HACCP + PRP + PDCA level organisasi.'],
                ],
            ],

            // ==== 27001 ====
            'iso-27001-2022' => [
                'code' => 'ISO/IEC 27001:2022',
                'description' => 'ISO 27001:2022 menetapkan kerangka kerja untuk melindungi aset informasi organisasi dari ancaman internal maupun eksternal. Dengan pendekatan berbasis risiko, standar ini membantu menerapkan kontrol keamanan yang efektif, menjaga kerahasiaan, integritas, dan ketersediaan data, serta meningkatkan kepercayaan mitra bisnis dan pelanggan.',

                'title' => 'Sistem Manajemen Keamanan Informasi (SMKI)',
                'tagline' => 'Lindungi kerahasiaan, integritas, dan ketersediaan informasi.',
                'audience' => ['Fintech', 'Perbankan', 'Healthcare', 'Pemerintahan', 'SaaS & Data Center'],
                'benefits' => [
                    'Kerangka ISMS berbasis risiko & konteks',
                    'Kontrol Annex A (atribut: people, physical, technological)',
                    'Kepatuhan (mis. PDP, GDPR setara, kontrak klien)',
                    'Kepercayaan pelanggan & mitra meningkat',
                    'Kesiapsiagaan insiden & kontinuitas TI',
                ],
                'scope' => 'Lingkup ISMS, penilaian & perlakuan risiko, SoA, kebijakan & kontrol keamanan, awareness, respons insiden, audit internal & tinjauan manajemen.',
                'key_clauses' => [
                    'Penetapan lingkup & inventaris aset',
                    'Penilaian risiko & rencana perlakuannya',
                    'Pernyataan Penerapan (SoA)',
                    'Kontrol Annex A (akses, kriptografi, logging, BCM TI)',
                    'Manajemen insiden & pemulihan',
                ],
                'deliverables' => [
                    'Risk Register & Risk Treatment Plan',
                    'Statement of Applicability (SoA)',
                    'Kebijakan & SOP keamanan informasi',
                    'Rencana respons insiden & uji',
                    'Audit internal & Management Review',
                ],
                'faqs' => [
                    ['q' => 'Apakah wajib semua kontrol Annex A?', 'a' => 'Tidak. Pilih berbasis risiko & konteks, tercermin di SoA.'],
                ],
            ],

            // ==== 22301 ====
            'iso-22301-2019' => [
                'code' => 'ISO 22301:2019',
                'description' => 'ISO 22301:2019 membantu organisasi mempersiapkan diri terhadap gangguan operasional, seperti bencana alam, serangan siber, atau kegagalan infrastruktur. Dengan standar ini, organisasi dapat memastikan keberlangsungan layanan penting, meminimalkan dampak insiden, dan mempercepat proses pemulihan bisnis.',

                'title' => 'Sistem Manajemen Keberlangsungan Bisnis (SMKB)',
                'tagline' => 'Tetap operasional saat terjadi gangguan.',
                'audience' => ['Perbankan', 'Telekomunikasi', 'Data Center', 'Logistik', 'Pemerintahan'],
                'benefits' => [
                    'Identifikasi layanan penting & RTO/RPO',
                    'BIA & penilaian risiko gangguan',
                    'Strategi & rencana kelangsungan (BCP/DRP)',
                    'Uji skenario & simulasi berkala',
                    'Kepercayaan regulator & pelanggan',
                ],
                'scope' => 'BIA, risk assessment, strategi BCM, rencana BCP/DRP, struktur komando krisis, latihan & evaluasi, audit & tinjauan manajemen.',
                'key_clauses' => [
                    'Konteks & kebutuhan pihak berkepentingan',
                    'BIA & penentuan prioritas pemulihan',
                    'Strategi BCM & sumber daya',
                    'Prosedur respons insiden & komunikasi',
                    'Latihan, evaluasi & perbaikan',
                ],
                'deliverables' => [
                    'Dokumen BIA & risk register',
                    'Strategi BCM & rencana BCP/DRP',
                    'Daftar layanan kritikal & dependensi',
                    'Log uji/simulasi & perbaikan',
                    'Audit internal & Management Review',
                ],
                'faqs' => [
                    ['q' => 'Apakah wajib gabung dengan 27001?', 'a' => 'Tidak wajib, namun integrasi ISMS + BCM memperkuat ketahanan organisasi.'],
                ],
            ],

            // ==== 20000-1 ====
            'iso-iec-20000-1-2018' => [
                'code' => 'ISO/IEC 20000-1:2018',
                'description' => 'ISO/IEC 20000-1:2018 adalah standar internasional untuk manajemen layanan TI yang berfokus pada penyampaian layanan yang handal, efisien, dan berorientasi pada pelanggan. Standar ini membantu organisasi menyelaraskan layanan TI dengan kebutuhan bisnis, meningkatkan kepuasan pengguna, serta mendukung tata kelola TI yang efektif.',

                'title' => 'Sistem Manajemen Layanan TI (ITSM)',
                'tagline' => 'Layanan TI yang andal, terukur, dan berorientasi pelanggan.',
                'audience' => ['MSP', 'SaaS', 'Enterprise IT', 'Telekomunikasi', 'Fintech'],
                'benefits' => [
                    'Keselarasan layanan TI dengan kebutuhan bisnis',
                    'Proses incident, problem, change, release yang terkendali',
                    'SLA/OLA yang jelas & terukur',
                    'Kontinuitas layanan & manajemen kapasitas',
                    'Kepuasan pengguna & efisiensi biaya',
                ],
                'scope' => 'Desain & transisi layanan, manajemen permintaan, SLA, katalog layanan, incident/problem/change, aset & konfigurasi (CMDB), layanan cloud.',
                'key_clauses' => [
                    'Perencanaan & kendali layanan',
                    'Desain, transisi & deliver layanan',
                    'Relationship & agreement (SLA/OLA/UC)',
                    'Supply chain/pemasok',
                    'Resolusi & kontrol (incident, problem, change)',
                ],
                'deliverables' => [
                    'Kebijakan & katalog layanan',
                    'SLA/OLA & matrix KPI',
                    'Prosedur ITSM (incident/problem/change/release)',
                    'CMDB/asset register',
                    'Rencana kontinuitas layanan TI',
                ],
                'faqs' => [
                    ['q' => 'Harus pakai ITIL?', 'a' => 'Sangat kompatibel. ISO 20000-1 selaras dengan praktik ITIL namun fokus pada sistem manajemennya.'],
                ],
            ],

            // ==== 50001 ====
            'iso-50001-2018' => [
                'code' => 'ISO 50001:2018',
                'description' => 'ISO 50001:2018 memberikan panduan bagi organisasi dalam meningkatkan efisiensi penggunaan energi melalui pendekatan berbasis data. Standar ini membantu mengurangi biaya operasional, menurunkan emisi gas rumah kaca, dan mendukung upaya transisi menuju praktik bisnis yang lebih ramah lingkungan.',

                'title' => 'Sistem Manajemen Energi (SME)',
                'tagline' => 'Kurangi biaya energi, dorong efisiensi & dekarbonisasi.',
                'audience' => ['Manufaktur Energi-Intensif', 'Gedung Komersial', 'Utilities', 'Pertambangan'],
                'benefits' => [
                    'Baseline & indikator kinerja energi (EnPI/EnB)',
                    'Identifikasi peluang penghematan (EnPI targets)',
                    'Integrasi metering & monitoring',
                    'Pengurangan emisi GRK & biaya operasional',
                    'Kepatuhan & akses insentif hijau',
                ],
                'scope' => 'Penetapan EnMS, review energi, EnB & EnPI, target & rencana aksi, M&T, kompetensi & awareness energi, verifikasi kinerja.',
                'key_clauses' => [
                    'Tinjauan energi & konsumsi signifikan (SEU)',
                    'Baseline energi (EnB) & EnPI',
                    'Perencanaan tujuan & rencana',
                    'Desain & pengadaan energi',
                    'Monitoring, pengukuran & verifikasi',
                ],
                'deliverables' => [
                    'Peta SEU & daftar peluang efisiensi',
                    'EnB/EnPI & dashboard kinerja',
                    'Rencana aksi & ROI energi',
                    'Prosedur operasi & maintenance efisien',
                    'Audit internal & MR',
                ],
                'faqs' => [
                    ['q' => 'Butuh smart meter?', 'a' => 'Tidak wajib, tapi monitoring yang baik mempercepat penghematan & bukti kinerja.'],
                ],
            ],

            // ==== 13485 ====
            'iso-13485-2016' => [
                'code' => 'ISO 13485:2016',
                'description' => 'ISO 13485:2016 dirancang khusus untuk produsen dan penyedia perangkat medis. Standar ini memastikan setiap produk alat kesehatan memenuhi persyaratan regulasi, keamanan, dan kualitas, serta meningkatkan kepercayaan konsumen terhadap keandalan dan keselamatan produk medis yang dihasilkan.',

                'title' => 'Sistem Manajemen Mutu untuk Alat Kesehatan',
                'tagline' => 'Keamanan & keandalan perangkat medis sesuai regulasi.',
                'audience' => ['Produsen Alat Kesehatan', 'Distributor Medis', 'Sterilisasi', 'Komponen Medis'],
                'benefits' => [
                    'Kepatuhan regulasi perangkat medis',
                    'Manajemen risiko produk sepanjang siklus hidup',
                    'Kontrol desain, validasi proses & traceability',
                    'Ketertelusuran & pengendalian sterilitas',
                    'Kepercayaan pasar & akses tender',
                ],
                'scope' => 'QMS alat kesehatan: desain & pengembangan, manajemen risiko (ISO 14971), kontrol pemasok, validasi proses, sterilisasi, complaint & vigilance.',
                'key_clauses' => [
                    'File teknis & kontrol desain',
                    'Validasi proses & sterilisasi',
                    'Traceability & pengendalian lot/batch',
                    'Post-market surveillance & vigilance',
                    'Pengendalian pemasok kritis',
                ],
                'deliverables' => [
                    'Kebijakan mutu & perencanaan desain',
                    'Risk management file (ISO 14971)',
                    'Prosedur validasi/sterilisasi',
                    'Prosedur complaint & CAPA',
                    'Audit internal & MR',
                ],
                'faqs' => [
                    ['q' => 'Harus punya fasilitas steril?', 'a' => 'Boleh outsourcing ke pihak tersertifikasi dengan kontrol & validasi yang memadai.'],
                ],
            ],

            // ==== 37001 ====
            'iso-37001-2016' => [
                'code' => 'ISO 37001:2016',
                'description' => 'ISO 37001:2016 membantu organisasi dalam mencegah, mendeteksi, dan menangani praktik penyuapan melalui penerapan kebijakan integritas dan kontrol internal yang kuat. Standar ini meningkatkan transparansi, akuntabilitas, dan kepercayaan publik terhadap etika bisnis organisasi.',
                'title' => 'Sistem Manajemen Anti Penyuapan (SMAP)',
                'tagline' => 'Bangun budaya integritas & anti-suap di seluruh organisasi.',
                'audience' => ['Konstruksi', 'Energi', 'Pemerintahan', 'Keuangan', 'BUMN'],
                'benefits' => [
                    'Kebijakan anti-suap & due diligence mitra',
                    'Kontrol hadiah, donasi & sponsorship',
                    'Whistleblowing & investigasi',
                    'Pelatihan & komunikasi etika',
                    'Kepercayaan regulator & mitra bisnis',
                ],
                'scope' => 'Perancangan SMAP: kebijakan, risk assessment penyuapan, kontrol keuangan & non-keuangan, investigasi, tindakan korektif & perbaikan.',
                'key_clauses' => [
                    'Kepemimpinan & budaya integritas',
                    'Penilaian risiko penyuapan',
                    'Due diligence pihak ketiga',
                    'Kontrol finansial & non-finansial',
                    'Pelaporan, investigasi, sanksi & remediasi',
                ],
                'deliverables' => [
                    'Kebijakan & kode etik anti-suap',
                    'Register risiko & kontrol hadiah/donasi',
                    'Prosedur pelaporan & investigasi',
                    'Pelatihan & catatan keikutsertaan',
                    'Audit internal & MR',
                ],
                'faqs' => [
                    ['q' => 'Apakah menggantikan program kepatuhan lain?', 'a' => 'SMAP melengkapi program kepatuhan. Integrasi dengan ISO 9001/27001/ lainnya disarankan.'],
                ],
            ],
        ];

        return view('app.company.service', compact('iso'));
    }

    public function sertifikasiIso($slug)
    {

        $iso = [
            // ==== 9001 ====
            'iso-9001-2015' => [
                'code' => 'ISO 9001:2015',
                'description' => 'ISO 9001:2015 adalah standar internasional untuk Sistem Manajemen Mutu yang menetapkan kerangka kerja bagi organisasi untuk secara konsisten memberikan produk dan layanan berkualitas tinggi. Penerapan standar ini membantu meningkatkan kepuasan pelanggan, efisiensi operasional, serta reputasi organisasi melalui pendekatan berbasis risiko dan perbaikan berkelanjutan.',
                'title' => 'Sistem Manajemen Mutu (SMM)',
                'tagline' => 'Bangun mutu yang konsisten, tingkatkan kepuasan pelanggan.',
                'audience' => ['Manufaktur', 'Jasa', 'Distribusi & Logistik', 'Pemerintahan', 'Edukasi & Kesehatan'],
                'benefits' => [
                    'Kepuasan pelanggan meningkat melalui kontrol proses yang konsisten',
                    'Efisiensi operasional & pengurangan cacat/keluhan',
                    'Kepatuhan persyaratan regulasi & kontrak pelanggan',
                    'Budaya perbaikan berkelanjutan (PDCA & risk-based thinking)',
                    'Daya saing & kredibilitas merek meningkat',
                ],
                'scope' => 'Perancangan dan implementasi SMM berbasis Annex SL, termasuk pemetaan proses, KPI mutu, pengendalian dokumen, audit internal, dan tinjauan manajemen.',
                'key_clauses' => [
                    'Konteks organisasi & kebutuhan pihak berkepentingan',
                    'Kepemimpinan & perencanaan berbasis risiko',
                    'Dukungan (kompetensi, komunikasi, informasi terdokumentasi)',
                    'Operasi (perencanaan, pengendalian perubahan, outsourcing)',
                    'Evaluasi kinerja (monitoring, audit internal, Tinjauan Manajemen)',
                    'Peningkatan (tindakan korektif & continual improvement)',
                ],
                'deliverables' => [
                    'Kebijakan Mutu & Sasaran Mutu (KPI)',
                    'Prosedur inti SMM & flow proses',
                    'Matriks risiko & peluang',
                    'Formulir & rekaman operasional',
                    'Rencana & laporan audit internal',
                    'Bukti Tinjauan Manajemen',
                ],
                'faqs' => [
                    ['q' => 'Berapa lama implementasi?', 'a' => 'Umumnya 6–12 minggu tergantung skala proses & kesiapan dokumen.'],
                    ['q' => 'Apakah perlu semua proses terdokumentasi?', 'a' => 'Dokumentasi proporsional: cukup untuk menjamin kendali & konsistensi, tidak harus berlebihan.'],
                ],
            ],

            // ==== 14001 ====
            'iso-14001-2015' => [
                'code' => 'ISO 14001:2015',
                'description' => 'ISO 14001:2015 memberikan pedoman bagi organisasi dalam mengelola tanggung jawab lingkungannya secara sistematis. Standar ini membantu mengurangi dampak negatif terhadap lingkungan, mengoptimalkan penggunaan sumber daya, dan memastikan kepatuhan terhadap peraturan lingkungan yang berlaku, sehingga mendukung keberlanjutan jangka panjang.',
                'title' => 'Sistem Manajemen Lingkungan (SML)',
                'tagline' => 'Kurangi dampak lingkungan, tingkatkan kepatuhan & efisiensi sumber daya.',
                'audience' => ['Manufaktur', 'Konstruksi', 'Pertambangan', 'Perhotelan', 'F&B', 'Utilities'],
                'benefits' => [
                    'Identifikasi & kendali aspek/ dampak lingkungan',
                    'Kepatuhan regulasi lingkungan (izin, limbah, emisi)',
                    'Penghematan energi & bahan baku',
                    'Pengurangan limbah & biaya pembuangan',
                    'Citra hijau & kepercayaan stakeholder',
                ],
                'scope' => 'SML berbasis Annex SL: identifikasi aspek-dampak, kewajiban kepatuhan, program lingkungan, kesiapsiagaan & respons darurat, pemantauan kinerja.',
                'key_clauses' => [
                    'Aspek & dampak lingkungan signifikan',
                    'Kewajiban kepatuhan & evaluasinya',
                    'Tujuan & rencana pencapaian',
                    'Kontrol operasional & pemasok',
                    'Kesiapsiagaan & respons darurat',
                    'Evaluasi kinerja & peningkatan',
                ],
                'deliverables' => [
                    'Daftar aspek & penilaian signifikansi',
                    'Register peraturan & evaluasi kepatuhan',
                    'Program & target lingkungan',
                    'Prosedur pengendalian limbah/emisi/B3',
                    'Rencana keadaan darurat',
                    'Laporan pemantauan kinerja',
                ],
                'faqs' => [
                    ['q' => 'Apakah perlu AMDAL?', 'a' => 'Tidak selalu. ISO 14001 fokus pada sistem; kewajiban AMDAL/UKL-UPL mengikuti regulasi setempat.'],
                ],
            ],

            // ==== 45001 ====
            'iso-45001-2018' => [
                'code' => 'ISO 45001:2018',
                'description' => 'ISO 45001:2018 adalah standar global yang berfokus pada kesehatan dan keselamatan kerja. Standar ini membantu organisasi menciptakan tempat kerja yang aman, mencegah kecelakaan dan penyakit akibat kerja, serta meningkatkan kesejahteraan karyawan melalui pendekatan manajemen risiko yang terstruktur.',
                'title' => 'Sistem Manajemen K3 (SMK3)',
                'tagline' => 'Tempat kerja aman & sehat, produktivitas meningkat.',
                'audience' => ['Konstruksi', 'Manufaktur', 'Pertambangan', 'Logistik', 'Rumah Sakit'],
                'benefits' => [
                    'Identifikasi bahaya & pengendalian risiko K3',
                    'Penurunan kecelakaan & penyakit kerja',
                    'Kepatuhan regulasi K3',
                    'Keterlibatan pekerja & budaya keselamatan',
                    'Pengurangan biaya insiden & downtime',
                ],
                'scope' => 'Sistem K3 mencakup HIRADC, perizinan K3, program SMK3, kesiapsiagaan darurat, pemantauan kinerja, audit internal, dan tinjauan manajemen.',
                'key_clauses' => [
                    'Konsultasi & partisipasi pekerja',
                    'Identifikasi bahaya, penilaian & pengendalian risiko',
                    'Kontrol operasional, perizinan, kompetensi',
                    'Kesiapsiagaan & tanggap darurat',
                    'Monitoring, investigasi insiden, CAPA',
                ],
                'deliverables' => [
                    'Kebijakan K3 & sasaran K3',
                    'HIRADC/JSA & daftar APD',
                    'Program K3 & pelatihan',
                    'Rencana tanggap darurat',
                    'Catatan inspeksi, toolbox meeting',
                    'Audit internal & tinjauan manajemen',
                ],
                'faqs' => [
                    ['q' => 'Apakah wajib dokter perusahaan?', 'a' => 'Mengikuti regulasi nasional & level risiko. ISO 45001 menuntut kontrol kompeten, bukan jabatan spesifik.'],
                ],
            ],

            // ==== 22000 ====
            'iso-22000-2018' => [
                'code' => 'ISO 22000:2018',
                'description' => 'ISO 22000:2018 mengintegrasikan prinsip HACCP dan manajemen risiko untuk menjamin keamanan pangan di seluruh rantai pasok. Standar ini memastikan bahwa setiap tahap produksi dan distribusi makanan memenuhi persyaratan keamanan, sehingga meningkatkan kepercayaan konsumen dan memenuhi ketentuan regulasi nasional maupun internasional.',

                'title' => 'Sistem Manajemen Keamanan Pangan (SMKP)',
                'tagline' => 'Keamanan pangan terjamin di seluruh rantai pasok.',
                'audience' => ['F&B', 'Catering', 'Ritel Pangan', 'Distribusi Dingin', 'Produsen Bahan Pangan'],
                'benefits' => [
                    'Integrasi HACCP, PRP & manajemen risiko',
                    'Pengendalian bahaya biologis, kimia & fisik',
                    'Kepercayaan pasar & pemenuhan persyaratan pelanggan',
                    'Kesiapan terhadap penarikan produk (recall)',
                    'Kepatuhan regulasi keamanan pangan',
                ],
                'scope' => 'Perancangan SMKP meliputi analisis bahaya, PRP/OPRP, rencana HACCP, kontrol traceability, komunikasi rantai pasok, verifikasi & validasi.',
                'key_clauses' => [
                    'Program prasyarat (PRP) & infrastruktur higienis',
                    'Analisis bahaya, CCP/OPRP & batas kritis',
                    'Sistem penelusuran & recall',
                    'Komunikasi internal/eksternal',
                    'Verifikasi, validasi & pengendalian ketidaksesuaian',
                ],
                'deliverables' => [
                    'Rencana HACCP & daftar PRP/OPRP',
                    'Prosedur hygiene & sanitasI',
                    'Rencana traceability & recall',
                    'Form pemantauan CCP/OPRP',
                    'Audit internal & tinjauan manajemen',
                ],
                'faqs' => [
                    ['q' => 'Bedanya dengan HACCP saja?', 'a' => 'ISO 22000 = sistem manajemen lengkap (Annex SL) yang mengintegrasikan HACCP + PRP + PDCA level organisasi.'],
                ],
            ],

            // ==== 27001 ====
            'iso-27001-2022' => [
                'code' => 'ISO/IEC 27001:2022',
                'description' => 'ISO 27001:2022 menetapkan kerangka kerja untuk melindungi aset informasi organisasi dari ancaman internal maupun eksternal. Dengan pendekatan berbasis risiko, standar ini membantu menerapkan kontrol keamanan yang efektif, menjaga kerahasiaan, integritas, dan ketersediaan data, serta meningkatkan kepercayaan mitra bisnis dan pelanggan.',

                'title' => 'Sistem Manajemen Keamanan Informasi (SMKI)',
                'tagline' => 'Lindungi kerahasiaan, integritas, dan ketersediaan informasi.',
                'audience' => ['Fintech', 'Perbankan', 'Healthcare', 'Pemerintahan', 'SaaS & Data Center'],
                'benefits' => [
                    'Kerangka ISMS berbasis risiko & konteks',
                    'Kontrol Annex A (atribut: people, physical, technological)',
                    'Kepatuhan (mis. PDP, GDPR setara, kontrak klien)',
                    'Kepercayaan pelanggan & mitra meningkat',
                    'Kesiapsiagaan insiden & kontinuitas TI',
                ],
                'scope' => 'Lingkup ISMS, penilaian & perlakuan risiko, SoA, kebijakan & kontrol keamanan, awareness, respons insiden, audit internal & tinjauan manajemen.',
                'key_clauses' => [
                    'Penetapan lingkup & inventaris aset',
                    'Penilaian risiko & rencana perlakuannya',
                    'Pernyataan Penerapan (SoA)',
                    'Kontrol Annex A (akses, kriptografi, logging, BCM TI)',
                    'Manajemen insiden & pemulihan',
                ],
                'deliverables' => [
                    'Risk Register & Risk Treatment Plan',
                    'Statement of Applicability (SoA)',
                    'Kebijakan & SOP keamanan informasi',
                    'Rencana respons insiden & uji',
                    'Audit internal & Management Review',
                ],
                'faqs' => [
                    ['q' => 'Apakah wajib semua kontrol Annex A?', 'a' => 'Tidak. Pilih berbasis risiko & konteks, tercermin di SoA.'],
                ],
            ],

            // ==== 22301 ====
            'iso-22301-2019' => [
                'code' => 'ISO 22301:2019',
                'description' => 'ISO 22301:2019 membantu organisasi mempersiapkan diri terhadap gangguan operasional, seperti bencana alam, serangan siber, atau kegagalan infrastruktur. Dengan standar ini, organisasi dapat memastikan keberlangsungan layanan penting, meminimalkan dampak insiden, dan mempercepat proses pemulihan bisnis.',

                'title' => 'Sistem Manajemen Keberlangsungan Bisnis (SMKB)',
                'tagline' => 'Tetap operasional saat terjadi gangguan.',
                'audience' => ['Perbankan', 'Telekomunikasi', 'Data Center', 'Logistik', 'Pemerintahan'],
                'benefits' => [
                    'Identifikasi layanan penting & RTO/RPO',
                    'BIA & penilaian risiko gangguan',
                    'Strategi & rencana kelangsungan (BCP/DRP)',
                    'Uji skenario & simulasi berkala',
                    'Kepercayaan regulator & pelanggan',
                ],
                'scope' => 'BIA, risk assessment, strategi BCM, rencana BCP/DRP, struktur komando krisis, latihan & evaluasi, audit & tinjauan manajemen.',
                'key_clauses' => [
                    'Konteks & kebutuhan pihak berkepentingan',
                    'BIA & penentuan prioritas pemulihan',
                    'Strategi BCM & sumber daya',
                    'Prosedur respons insiden & komunikasi',
                    'Latihan, evaluasi & perbaikan',
                ],
                'deliverables' => [
                    'Dokumen BIA & risk register',
                    'Strategi BCM & rencana BCP/DRP',
                    'Daftar layanan kritikal & dependensi',
                    'Log uji/simulasi & perbaikan',
                    'Audit internal & Management Review',
                ],
                'faqs' => [
                    ['q' => 'Apakah wajib gabung dengan 27001?', 'a' => 'Tidak wajib, namun integrasi ISMS + BCM memperkuat ketahanan organisasi.'],
                ],
            ],

            // ==== 20000-1 ====
            'iso-iec-20000-1-2018' => [
                'code' => 'ISO/IEC 20000-1:2018',
                'description' => 'ISO/IEC 20000-1:2018 adalah standar internasional untuk manajemen layanan TI yang berfokus pada penyampaian layanan yang handal, efisien, dan berorientasi pada pelanggan. Standar ini membantu organisasi menyelaraskan layanan TI dengan kebutuhan bisnis, meningkatkan kepuasan pengguna, serta mendukung tata kelola TI yang efektif.',

                'title' => 'Sistem Manajemen Layanan TI (ITSM)',
                'tagline' => 'Layanan TI yang andal, terukur, dan berorientasi pelanggan.',
                'audience' => ['MSP', 'SaaS', 'Enterprise IT', 'Telekomunikasi', 'Fintech'],
                'benefits' => [
                    'Keselarasan layanan TI dengan kebutuhan bisnis',
                    'Proses incident, problem, change, release yang terkendali',
                    'SLA/OLA yang jelas & terukur',
                    'Kontinuitas layanan & manajemen kapasitas',
                    'Kepuasan pengguna & efisiensi biaya',
                ],
                'scope' => 'Desain & transisi layanan, manajemen permintaan, SLA, katalog layanan, incident/problem/change, aset & konfigurasi (CMDB), layanan cloud.',
                'key_clauses' => [
                    'Perencanaan & kendali layanan',
                    'Desain, transisi & deliver layanan',
                    'Relationship & agreement (SLA/OLA/UC)',
                    'Supply chain/pemasok',
                    'Resolusi & kontrol (incident, problem, change)',
                ],
                'deliverables' => [
                    'Kebijakan & katalog layanan',
                    'SLA/OLA & matrix KPI',
                    'Prosedur ITSM (incident/problem/change/release)',
                    'CMDB/asset register',
                    'Rencana kontinuitas layanan TI',
                ],
                'faqs' => [
                    ['q' => 'Harus pakai ITIL?', 'a' => 'Sangat kompatibel. ISO 20000-1 selaras dengan praktik ITIL namun fokus pada sistem manajemennya.'],
                ],
            ],

            // ==== 50001 ====
            'iso-50001-2018' => [
                'code' => 'ISO 50001:2018',
                'description' => 'ISO 50001:2018 memberikan panduan bagi organisasi dalam meningkatkan efisiensi penggunaan energi melalui pendekatan berbasis data. Standar ini membantu mengurangi biaya operasional, menurunkan emisi gas rumah kaca, dan mendukung upaya transisi menuju praktik bisnis yang lebih ramah lingkungan.',

                'title' => 'Sistem Manajemen Energi (SME)',
                'tagline' => 'Kurangi biaya energi, dorong efisiensi & dekarbonisasi.',
                'audience' => ['Manufaktur Energi-Intensif', 'Gedung Komersial', 'Utilities', 'Pertambangan'],
                'benefits' => [
                    'Baseline & indikator kinerja energi (EnPI/EnB)',
                    'Identifikasi peluang penghematan (EnPI targets)',
                    'Integrasi metering & monitoring',
                    'Pengurangan emisi GRK & biaya operasional',
                    'Kepatuhan & akses insentif hijau',
                ],
                'scope' => 'Penetapan EnMS, review energi, EnB & EnPI, target & rencana aksi, M&T, kompetensi & awareness energi, verifikasi kinerja.',
                'key_clauses' => [
                    'Tinjauan energi & konsumsi signifikan (SEU)',
                    'Baseline energi (EnB) & EnPI',
                    'Perencanaan tujuan & rencana',
                    'Desain & pengadaan energi',
                    'Monitoring, pengukuran & verifikasi',
                ],
                'deliverables' => [
                    'Peta SEU & daftar peluang efisiensi',
                    'EnB/EnPI & dashboard kinerja',
                    'Rencana aksi & ROI energi',
                    'Prosedur operasi & maintenance efisien',
                    'Audit internal & MR',
                ],
                'faqs' => [
                    ['q' => 'Butuh smart meter?', 'a' => 'Tidak wajib, tapi monitoring yang baik mempercepat penghematan & bukti kinerja.'],
                ],
            ],

            // ==== 13485 ====
            'iso-13485-2016' => [
                'code' => 'ISO 13485:2016',
                'description' => 'ISO 13485:2016 dirancang khusus untuk produsen dan penyedia perangkat medis. Standar ini memastikan setiap produk alat kesehatan memenuhi persyaratan regulasi, keamanan, dan kualitas, serta meningkatkan kepercayaan konsumen terhadap keandalan dan keselamatan produk medis yang dihasilkan.',

                'title' => 'Sistem Manajemen Mutu untuk Alat Kesehatan',
                'tagline' => 'Keamanan & keandalan perangkat medis sesuai regulasi.',
                'audience' => ['Produsen Alat Kesehatan', 'Distributor Medis', 'Sterilisasi', 'Komponen Medis'],
                'benefits' => [
                    'Kepatuhan regulasi perangkat medis',
                    'Manajemen risiko produk sepanjang siklus hidup',
                    'Kontrol desain, validasi proses & traceability',
                    'Ketertelusuran & pengendalian sterilitas',
                    'Kepercayaan pasar & akses tender',
                ],
                'scope' => 'QMS alat kesehatan: desain & pengembangan, manajemen risiko (ISO 14971), kontrol pemasok, validasi proses, sterilisasi, complaint & vigilance.',
                'key_clauses' => [
                    'File teknis & kontrol desain',
                    'Validasi proses & sterilisasi',
                    'Traceability & pengendalian lot/batch',
                    'Post-market surveillance & vigilance',
                    'Pengendalian pemasok kritis',
                ],
                'deliverables' => [
                    'Kebijakan mutu & perencanaan desain',
                    'Risk management file (ISO 14971)',
                    'Prosedur validasi/sterilisasi',
                    'Prosedur complaint & CAPA',
                    'Audit internal & MR',
                ],
                'faqs' => [
                    ['q' => 'Harus punya fasilitas steril?', 'a' => 'Boleh outsourcing ke pihak tersertifikasi dengan kontrol & validasi yang memadai.'],
                ],
            ],

            // ==== 37001 ====
            'iso-37001-2016' => [
                'code' => 'ISO 37001:2016',
                'description' => 'ISO 37001:2016 membantu organisasi dalam mencegah, mendeteksi, dan menangani praktik penyuapan melalui penerapan kebijakan integritas dan kontrol internal yang kuat. Standar ini meningkatkan transparansi, akuntabilitas, dan kepercayaan publik terhadap etika bisnis organisasi.',
                'title' => 'Sistem Manajemen Anti Penyuapan (SMAP)',
                'tagline' => 'Bangun budaya integritas & anti-suap di seluruh organisasi.',
                'audience' => ['Konstruksi', 'Energi', 'Pemerintahan', 'Keuangan', 'BUMN'],
                'benefits' => [
                    'Kebijakan anti-suap & due diligence mitra',
                    'Kontrol hadiah, donasi & sponsorship',
                    'Whistleblowing & investigasi',
                    'Pelatihan & komunikasi etika',
                    'Kepercayaan regulator & mitra bisnis',
                ],
                'scope' => 'Perancangan SMAP: kebijakan, risk assessment penyuapan, kontrol keuangan & non-keuangan, investigasi, tindakan korektif & perbaikan.',
                'key_clauses' => [
                    'Kepemimpinan & budaya integritas',
                    'Penilaian risiko penyuapan',
                    'Due diligence pihak ketiga',
                    'Kontrol finansial & non-finansial',
                    'Pelaporan, investigasi, sanksi & remediasi',
                ],
                'deliverables' => [
                    'Kebijakan & kode etik anti-suap',
                    'Register risiko & kontrol hadiah/donasi',
                    'Prosedur pelaporan & investigasi',
                    'Pelatihan & catatan keikutsertaan',
                    'Audit internal & MR',
                ],
                'faqs' => [
                    ['q' => 'Apakah menggantikan program kepatuhan lain?', 'a' => 'SMAP melengkapi program kepatuhan. Integrasi dengan ISO 9001/27001/ lainnya disarankan.'],
                ],
            ],
        ];
        if ($slug && isset($iso[$slug])) {
            $iso = $iso[$slug];
            $pageJsonLd = array_values(array_filter([
                JsonLdBuilder::serviceFromIso($slug),
                JsonLdBuilder::breadcrumbForIso($slug),
                JsonLdBuilder::faqFromIso($slug),
            ]));
            SEOTools::setTitle($iso['title'] . ' - Sinergi Sertifikasi');
            SEOTools::setDescription($iso['description'] ?? 'This is my page description');
            return view('app.company.services.service-iso', compact('iso', 'pageJsonLd'));
        } else {
            return view('app.company.service', compact('iso'));
        }
    }
}
