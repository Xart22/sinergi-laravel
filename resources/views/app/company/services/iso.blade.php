@extends('app.layouts.app') @section('head') @vite(['resources/js/service.js'])
@endsection @section('content')
<div class="w-full md:w-1/2 p-4 flex flex-col justify-center">
    <h2 class="text-2xl md:text-4xl font-bold text-[#D1AC27] mb-3">
        Layanan Sertifikasi & Implementasi ISO
    </h2>

    <!-- badges -->
    <div class="flex flex-wrap gap-2 mb-4">
        <span
            class="px-3 py-1 rounded-full text-xs md:text-sm bg-[#13554D]/10 text-[#13554D] font-semibold"
        >
            ISO 9001 · 14001 · 45001 · 22000 · 27001
        </span>
        <span
            class="px-3 py-1 rounded-full text-xs md:text-sm bg-[#D1AC27]/10 text-[#D1AC27] font-semibold"
        >
            Ready for Audit & Certification
        </span>
        <span
            class="px-3 py-1 rounded-full text-xs md:text-sm bg-gray-100 text-gray-700 font-semibold"
        >
            Sistem Manajemen Terstandar Internasional
        </span>
    </div>

    <p class="text-gray-700 text-sm md:text-base mb-4 leading-relaxed">
        Sertifikasi ISO bukan sekadar dokumen—ini adalah
        <span class="font-semibold">bukti komitmen</span> perusahaan pada
        kualitas, keselamatan, efisiensi, dan kepercayaan pelanggan. Kami
        mendampingi Anda <span class="font-semibold">end-to-end</span>: mulai
        <em>gap analysis</em>, penyusunan dokumen, pelatihan,
        <em>audit internal</em>, hingga lulus sertifikasi oleh lembaga
        terakreditasi.
    </p>

    <!-- manfaat ringkas -->
    <h3 class="text-lg md:text-xl font-semibold text-[#13554D] mb-2">
        Manfaat Utama
    </h3>
    <ul
        class="list-disc list-inside text-gray-700 text-sm md:text-base mb-4 space-y-2"
    >
        <li>
            <span class="font-semibold">Diakui internasional</span> & memperkuat
            peluang tender.
        </li>
        <li>
            <span class="font-semibold">Proses lebih efisien</span>, konsisten,
            dan terukur.
        </li>
        <li>
            <span class="font-semibold">Kepercayaan pelanggan</span> & reputasi
            brand meningkat.
        </li>
    </ul>

    <!-- jenis standar -->
    <h3 class="text-lg md:text-xl font-semibold text-[#13554D] mb-2">
        Standar ISO yang Kami Tangani
    </h3>
    <ul
        class="list-disc list-inside text-gray-700 text-sm md:text-base mb-4 space-y-2"
    >
        <li>
            <span class="font-semibold">ISO 9001:2015 (Mutu)</span> — sistem
            manajemen mutu berbasis proses & kepuasan pelanggan.
        </li>
        <li>
            <span class="font-semibold">ISO 14001:2015 (Lingkungan)</span> —
            pengendalian dampak lingkungan & efisiensi sumber daya.
        </li>
        <li>
            <span class="font-semibold">ISO 45001:2018 (K3)</span> — keselamatan
            & kesehatan kerja yang terstruktur.
        </li>
        <li>
            <span class="font-semibold">ISO 22000:2018 (Keamanan Pangan)</span>
            — jaminan keamanan pangan hulu-hilir.
        </li>
        <li>
            <span class="font-semibold"
                >ISO 27001:2022 (Keamanan Informasi)</span
            >
            — perlindungan data & penurunan risiko siber.
        </li>
        <li>
            <span class="font-semibold">ISO 22301:2019 (BCMS)</span> —
            keberlangsungan bisnis saat krisis.
        </li>
        <li>
            <span class="font-semibold">ISO/IEC 20000-1:2018 (Layanan TI)</span>
            — kualitas & keandalan layanan TI.
        </li>
        <li>
            <span class="font-semibold">ISO 50001:2018 (Energi)</span> —
            efisiensi energi & penurunan biaya operasional.
        </li>
        <li>
            <span class="font-semibold">ISO 13485:2016 (Alat Kesehatan)</span> —
            mutu & kepatuhan regulasi perangkat medis.
        </li>
        <li>
            <span class="font-semibold">ISO 37001 (SMAP)</span> — pencegahan &
            deteksi penyuapan, budaya integritas.
        </li>
    </ul>

    <!-- proses kerja -->
    <h3 class="text-lg md:text-xl font-semibold text-[#13554D] mb-2">
        Pendampingan dalam 5 Langkah
    </h3>
    <ol
        class="list-decimal list-inside text-gray-700 text-sm md:text-base mb-4 space-y-2"
    >
        <li>
            <span class="font-semibold">Gap Analysis</span> & legal register.
        </li>
        <li>
            <span class="font-semibold">Desain Sistem & Dokumentasi</span>
            (kebijakan, SOP/IK, formulir, rekaman).
        </li>
        <li>
            <span class="font-semibold">Implementasi & Pelatihan</span> agar
            sistem berjalan nyata di lapangan.
        </li>
        <li>
            <span class="font-semibold">Audit Internal</span> & perbaikan (CAPA)
            sampai siap sertifikasi.
        </li>
        <li>
            <span class="font-semibold">Pendampingan Audit Eksternal</span>
            sampai dinyatakan lulus.
        </li>
    </ol>

    <!-- highlight tambahan -->
    <div class="bg-gray-50 rounded-lg p-4 mb-5">
        <p class="text-gray-700 text-sm md:text-base">
            <span class="font-semibold">Paket integrasi sistem</span> tersedia
            untuk menggabungkan beberapa standar (mis. 9001, 14001, 45001)
            sehingga implementasi lebih efisien & biaya sertifikasi lebih hemat.
        </p>
    </div>

    <!-- CTA -->
    <div class="flex flex-col sm:flex-row gap-3">
        <a
            href=""
            class="inline-block text-center px-5 py-3 rounded-lg bg-[#13554D] text-white font-semibold hover:bg-[#0f463f] transition"
        >
            Konsultasi Sertifikasi ISO
        </a>
        <a
            href="https://wa.me/62812XXXXXXX"
            class="inline-block text-center px-5 py-3 rounded-lg border border-[#13554D] text-[#13554D] font-semibold hover:bg-[#13554D]/5 transition"
        >
            Minta Proposal & Timeline
        </a>
    </div>
</div>

@endsection
