@extends('app.layouts.app') @section('head') @vite(['resources/js/service.js'])
@endsection @section('content')

<div class="relative md:w-full">
    <img
        src="{{ asset('assets/images/hero-service.png') }}"
        alt="hero image"
        class="w-full md:h-96 object-fill"
    />
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center md:w-1/2 md:top-1/3 md:left-[22vw] md:transform-none"
    >
        <h1 class="text-center text-white text-2xl md:text-4xl font-bold">
            Our Services
        </h1>
        <p class="text-center text-white text-xl md:text-2xl">
            Home / Services / <span class="font-bold">K3 & SMK3</span>
        </p>
    </div>
</div>

<div class="w-full p-4 md:w-1/2 mx-auto">
    <h2 class="text-2xl md:text-4xl font-bold text-[#D1AC27] mb-3">
        Solusi K3 & SMK3 yang Praktis, Terukur, dan Lulus Audit
    </h2>

    <!-- badges -->
    <div class="flex flex-wrap gap-2 mb-4">
        <span
            class="px-3 py-1 rounded-full text-xs md:text-sm bg-[#13554D]/10 text-[#13554D] font-semibold"
        >
            Sesuai PP No. 50/2012
        </span>
        <span
            class="px-3 py-1 rounded-full text-xs md:text-sm bg-[#D1AC27]/10 text-[#D1AC27] font-semibold"
        >
            Siap Audit Sertifikasi
        </span>
        <span
            class="px-3 py-1 rounded-full text-xs md:text-sm bg-gray-100 text-gray-700 font-semibold"
        >
            Budaya Zero Accident
        </span>
    </div>

    <p class="text-gray-700 text-sm md:text-base mb-4 leading-relaxed">
        Kami membantu perusahaan membangun
        <span class="font-semibold"
            >sistem K3 & SMK3 yang benar-benar bekerja di lapangan</span
        >—bukan sekadar dokumen. Mulai dari identifikasi bahaya, pengendalian
        risiko, pembentukan P2K3, hingga pendampingan audit, semua disusun agar
        <span class="font-semibold">aman, efisien, dan memenuhi regulasi</span>.
    </p>

    <!-- hasil/manfaat yang didapat -->
    <h3 class="text-lg md:text-xl font-semibold text-[#13554D] mb-2">
        Apa yang Anda Dapat
    </h3>
    <ul
        class="list-disc list-inside text-gray-700 text-sm md:text-base mb-4 space-y-2"
    >
        <li>
            <span class="font-semibold">Roadmap & KPI K3</span> per divisi untuk
            menurunkan insiden secara terukur.
        </li>
        <li>
            <span class="font-semibold">Dokumen SMK3 lengkap</span> (kebijakan,
            SOP/IK, formulir, rekaman) sesuai PP No. 50/2012.
        </li>
        <li>
            <span class="font-semibold">HIRADC/JSA</span> yang aplikatif +
            pengendalian risiko yang realistis.
        </li>
        <li>
            <span class="font-semibold">Pembentukan & pelatihan P2K3</span>
            untuk penggerak budaya K3.
        </li>
        <li>
            <span class="font-semibold"
                >Simulasi audit & pendampingan sertifikasi</span
            >
            (Perak/Emas/Platinum).
        </li>
    </ul>

    <!-- layanan inti -->
    <h3 class="text-lg md:text-xl font-semibold text-[#13554D] mb-2">
        Layanan Inti
    </h3>
    <ul
        class="list-disc list-inside text-gray-700 text-sm md:text-base mb-4 space-y-2"
    >
        <li>
            <span class="font-semibold">Konsultasi K3:</span> baseline survey,
            legal register, gap analysis.
        </li>
        <li>
            <span class="font-semibold">Implementasi SMK3:</span> desain sistem,
            penyusunan dokumen, coaching implementasi.
        </li>
        <li>
            <span class="font-semibold">Pelatihan K3:</span> awareness SMK3,
            hazard identification, emergency response, investigasi insiden.
        </li>
        <li>
            <span class="font-semibold">Audit Internal & Evaluasi:</span>
            simulasi audit, corrective & preventive action (CAPA).
        </li>
    </ul>

    <!-- proses kerja -->
    <h3 class="text-lg md:text-xl font-semibold text-[#13554D] mb-2">
        Proses Kerja 4 Langkah
    </h3>
    <ol
        class="list-decimal list-inside text-gray-700 text-sm md:text-base mb-4 space-y-2"
    >
        <li>
            <span class="font-semibold">Assessment 360°</span> & gap analysis.
        </li>
        <li>
            <span class="font-semibold">Desain Sistem</span> & penyusunan
            dokumen wajib.
        </li>
        <li>
            <span class="font-semibold">Implementasi & Pelatihan</span> di area
            kerja kunci.
        </li>
        <li>
            <span class="font-semibold"
                >Audit Internal & Pendampingan Sertifikasi</span
            >
            sampai lulus.
        </li>
    </ol>

    <!-- tingkatan sertifikasi -->
    <div class="bg-gray-50 rounded-lg p-4 mb-5">
        <p class="text-gray-700 text-sm md:text-base">
            <span class="font-semibold">Tingkatan Sertifikasi SMK3:</span>
            <span class="font-semibold text-amber-700">Perak</span> (60–84%),
            <span class="font-semibold text-yellow-600">Emas</span> (85–100%),
            <span class="font-semibold text-gray-900">Platinum</span> (budaya K3
            berkelanjutan).
        </p>
    </div>

    <!-- CTA -->
    <div class="flex flex-col sm:flex-row gap-3">
        <a
            href="{{ route('landing.contact') }}"
            class="inline-block text-center px-5 py-3 rounded-lg bg-[#13554D] text-white font-semibold hover:bg-[#0f463f] transition"
        >
            Konsultasi Gratis
        </a>
        <a
            href="https://wa.me/62812XXXXXXX"
            class="inline-block text-center px-5 py-3 rounded-lg border border-[#13554D] text-[#13554D] font-semibold hover:bg-[#13554D]/5 transition"
        >
            Butuh Penawaran Resmi?
        </a>
    </div>
</div>

@endsection
