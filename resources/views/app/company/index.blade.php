@extends('app.layouts.app')
@section('content')


<div class=" md:relative md:h-[60vh]">
    <img src=" {{ asset('assets/images/hero.png') }}" class="w-full h-full object-cover " alt="hero image">
</div>

<div class="container mx-auto mt-3 p-3">
    <div class="md:w-1/2 text-center mx-auto ">
        <p class="md:text-3xl font-bold text-center mb-1 text-gold text-md">Layanan <span
                class="text-[#13554D]">Kami</span></p>
        <p class="text-center text-gray-600  text-xs md:text-base text-wrap">Temukan layanan sertifikasi kami yang
            komprehensif dan dirancang untuk memastikan kualitas, kepatuhan, dan keunggulan di setiap aspek bisnis Anda.
        </p>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-10 text-wrap">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <a href="{{ route('landing.service') }}">
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/iso.png') }}" class="w-20 h-20 object-contain" alt="ISO">
                    <div class="ml-3">
                        <h1 class="md:text-2xl text-md font-semibold mb-2 text-[#13554D] md:text-pretty">Sertifikasi ISO
                        </h1>
                        <p class="text-gray-600  text-xs md:text-base text-wrap">Kami menyediakan layanan pengurusan
                            Sertifikasi ISO yang mencakup berbagai standar
                            manajemen internasional untuk memastikan perusahaan Anda memenuhi standar global.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/skk-skktk.png') }}" class="w-20 h-20 object-contain" alt="SKA/SKK">
                <div class="ml-3">
                    <h1 class="md:text-2xl text-md font-semibold mb-2 text-[#13554D] md:text-pretty">Sertifikat
                        Kompetensi
                        Kerja / SKK
                    </h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Kami menyediakan layanan pengurusan
                        Kami menyediakan layanan pembuatan dan
                        perpanjangan Sertifikat Kompetensi Kerja /
                        SKK bagi tenaga ahli, memastikan kompetensi yang diakui dan siap mendukung proyek konstruksi.
                    </p>
                </div>
            </div>


        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/sbu-lpjk.png') }}" class="w-20 h-20 object-contain" alt="SBU">
                <div class="ml-3">
                    <h1 class="md:text-2xl text-md font-semibold mb-2 text-[#13554D] md:text-pretty">Sertifikasi Badan
                        Usaha
                        Kontruksi LPJK
                    </h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Kami membantu meningkatkan kredibilitas
                        dan kemampuan perusahaan Anda di sektor
                        konstruksi dengan Sertifikat Badan Usaha (SBU) dari LPJK.</p>
                </div>
            </div>

        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/k3.png') }}" class="w-20 h-20 object-contain" alt="SMK3">
                <div class="ml-3">
                    <h1 class="md:text-2xl text-md font-semibold mb-2 text-[#13554D] md:text-pretty">Sertifikasi K3 /
                        SMK3
                    </h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Kami mendukung perusahaan dalam
                        menciptakan Keselamatan dan kesehatan kerja di
                        lingkungan Anda melalui sertifikasi K3 dan Sistem Manajemen Kesehatan dan Keselamatan Kerja
                        (SMK3).</p>
                </div>
            </div>

        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/sbu-lpjk.png') }}" class="w-20 h-20 object-contain" alt="SBUJPTL">
                <div class="ml-3">
                    <h1 class="md:text-2xl text-md font-semibold mb-2 text-[#13554D] md:text-pretty">Sertifikat Badan
                        Usaha
                        Jasa Penunjang
                        Tenaga Listrik
                    </h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Kami membantu dalam pengurusan
                        Sertifikat Badan Usaha Jasa Penunjang Tenaga Listrik
                        agar bisnis Anda dapat beroperasi sesuai dengan regulasi yang berlaku.</p>
                </div>
            </div>

        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/skk-skktk.png') }}" class="w-20 h-20 object-contain" alt="SKTTK">
                <div class="ml-3">
                    <h1 class="md:text-2xl text-md font-semibold mb-2 text-[#13554D] md:text-pretty">Sertifikasi
                        Kompetensi
                        Tenaga Teknik
                        Ketenagalistrikan
                    </h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Kami menyediakan layanan pengurusan
                        Sertifikasi Kompetensi Tenaga Teknik
                        Ketenaga listrikan (SKTTK) untuk memastikan tenaga teknik memiliki kompetensi yang sesuai dengan
                        standar
                        nasional.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" container mx-auto flex flex-row mt-3 p-3">
    <div class="flex-1 hidden md:block h-full">
        <img src="{{ asset('assets/images/hero-1.png') }}" alt="hero image" class="h-full object-contain">
    </div>
    <div class="flex-1 w-96 flex flex-col justify-center p-3">
        <p class="md:text-3xl font-bold  mb-1 text-gold text-2xl text-center">Mengapa Memilih<span
                class="text-[#13554D]">
                Kami</span></p>
        <p class="text-gray-600  text-xs md:text-base  text-center">Memilih mitra yang tepat untuk mendukung
            bisnis
            Anda
            dalam mencapai standar kualitas dan kepatuhan adalah keputusan penting. Di PT Sinergi Sertifikasi, kami
            berkomitmen untuk memberikan layanan yang tidak hanya profesional, tetapi juga terpercaya dan berdampak
            positif pada keberlanjutan usaha Anda. Berikut adalah alasan mengapa kami adalah pilihan terbaik bagi
            kebutuhan sertifikasi dan legalitas bisnis Anda.</p>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex items-center ">
                <img src="{{ asset('assets/images/star.png') }}" class="w-20 h-20 object-contain" alt="star image">
                <div class="ml-3">
                    <h1 class="text-sm font-semibold mb-2 text-[#13554D] text-center"> Kualitas Terjamin dan Berstandar
                        Tinggi</h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Kami memiliki tim ahli berpengalaman yang
                        selalu mengutamakan
                        kualitas dan kepatuhan terhadap standar internasional, memastikan setiap layanan sertifikasi
                        yang kami berikan dapat diandalkan dan kredibel.</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/star.png') }}" class="w-20 h-20 object-contain" alt="star image">
                <div class="ml-3">
                    <h1 class="text-sm font-semibold mb-2 text-[#13554D] text-center">Layanan Komprehensif dan Tepat
                        Waktu</h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Dengan berbagai layanan yang kami tawarkan,
                        mulai dari
                        sertifikasi hingga pembuatan akta, kami memberikan solusi menyeluruh yang efisien dan tepat
                        waktu, membantu Anda memenuhi kebutuhan bisnis secara optimal.</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/star.png') }}" class="w-20 h-20 object-contain" alt="star image">
                <div class="ml-3">
                    <h1 class="text-sm font-semibold mb-2 text-[#13554D] text-center"> Pendampingan Profesional dan
                        Ramah</h1>
                    <p class="text-gray-600  text-xs md:text-base text-wrap">Kami tidak hanya menyediakan layanan,
                        tetapi juga pendampingan penuh dengan pendekatan profesional dan ramah, membantu Anda melalui
                        setiap tahap proses sertifikasi dengan mudah dan nyaman.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto  text-center p-3">

    <p class="md:text-3xl font-bold text-center mb-1 text-gold text-2xl">Mitra <span class="text-[#13554D]">Kami</span>
    </p>
    <p class="text-center text-gray-600  text-xs md:text-base text-wrap ">Kami telah bekerja sama dengan
        berbagai perusahaan
        dan lembaga di Indonesia, membantu mereka mencapai standar kualitas dan kepatuhan yang diinginkan. Berikut
        adalah beberapa mitra kami yang telah merasakan manfaat dari layanan sertifikasi kami.</p>


    <div class="grid grid-cols-3 md:grid-cols-5 gap-1 md:gap-10 p-4">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/andreana.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/chintai.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/csr.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/fraklyk.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/koin.jpg') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/komipo.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/mandala.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/pca.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/pemeta.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/repayo.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/shinko.jpg') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/sinergi.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/smk.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/sundaya.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/tjl.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/tsm.jpg') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/turbo.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/waagner.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/warmare.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('assets/images/wim.png') }}" alt="partner image" class="w-full h-32 object-contain">
        </div>
    </div>
</div>

<div class="container mx-auto relative p-3">
    <img src="{{ asset('assets/images/hero-call.png') }}" alt="hero image" class="w-full object-cover">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-72 md:w-1/2
        md:top-1/3 md:left-[22vw] md:transform-none ">
        <p class="text-center text-white text-xs md:text-2xl md:font-bold  font-semibold">Hubungi kami sekarang
            untuk
            solusi
            sertifikasi terbaik
            bagi bisnis Anda. Tim kami siap membantu!</p>
        <button type="button"
            class="text-white mt-3 bg-gold hover:bg-gold/90 focus:ring-4 focus:outline-none focus:ring-gold/50 font-medium rounded-lg  md:px-5 md:py-2.5 px-2 py-1 text-center inline-flex items-center dark:focus:ring-gold/55 me-2 mb-2">
            Hubungi Kami
            &nbsp;
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>


        </button>
    </div>
</div>


@endsection