@extends('app.layouts.app') @section('head') @endsection @section('content')

<div class="relative md:w-full mb-4">
    <img
        src="{{ asset('assets/images/hero-service.png') }}"
        alt="hero image"
        class="w-full md:h-96 object-fill"
    />
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center md:w-1/2 md:top-1/3 md:left-[22vw] md:transform-none"
    >
        <h1 class="text-center text-white text-2xl md:text-6xl font-bold">
            About Us
        </h1>
        <p class="text-center text-white text-2xl md:text-2xl">
            Home / <span class="font-bold">About</span>
        </p>
    </div>
</div>

<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div
        class="flex flex-col md:flex-row items-center md:flex-wrap md:justify-between"
    >
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-4xl md:text-5xl font-bold text-[#D1AC27] mb-2">
                Siapa itu <span class="text-[#13554D]">SINERGI?</span>
            </h2>
            <p class="text-gray-700 mb-4">
                <strong>SINERGI</strong> merupakan kolaborasi strategis yang
                menggabungkan berbagai organisasi, lembaga, dan penyedia jasa
                dengan visi dan misi yang selaras, berkomitmen untuk mencapai
                kesuksesan bersama. Kami menghadirkan beragam layanan terkait
                sertifikasi dalam satu platform terpadu, memungkinkan proses
                yang lebih mudah, cepat, efektif, dan efisien bagi pengguna.
                Dengan konsep One Stop Service,
                <strong>SINERGI</strong> menyediakan solusi menyeluruh untuk
                kebutuhan Pelatihan, Pembinaan, Sertifikasi, dan berbagai
                layanan pendukung lainnya, yang dirancang untuk memenuhi standar
                kualitas dan kebutuhan khusus dunia usaha. Melalui
                <strong>SINERGI</strong>, kami membantu bisnis Anda tumbuh dan
                berkembang dengan memenuhi persyaratan yang berlaku, serta
                memastikan kesiapan perusahaan dalam menghadapi persaingan yang
                dinamis dan tantangan masa depan.
            </p>
        </div>

        <div class="w-full md:w-1/3 p-4">
            <img
                src="{{ asset('assets/images/about.png') }}"
                alt="About Us Image"
                class="w-full h-auto rounded-lg shadow-md"
            />
        </div>
    </div>

    <div class="mt-8">
        <h2
            class="text-3xl md:text-4xl font-bold text-center text-[#D1AC27] mb-6"
        >
            Visi & Misi
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-semibold text-[#13554D] mb-4">Visi</h3>
                <p class="text-gray-700">
                    Menjadi pusat layanan sertifikasi terkemuka yang
                    mengintegrasikan berbagai organisasi dan lembaga, serta
                    memberikan solusi inovatif untuk mendukung pertumbuhan
                    bisnis yang berkelanjutan dan berdaya saing di tingkat
                    nasional maupun internasional.
                </p>
            </div>
            <div
                class="bg-[url('{{
                    asset('assets/images/mission-bg.png')
                }}')] bg-cover bg-center p-6 rounded-lg shadow-md text-white"
            >
                <h3 class="text-2xl font-semibold text-[#13554D] mb-4">Misi</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>
                        Menyediakan layanan sertifikasi yang komprehensif dan
                        berkualitas tinggi.
                    </li>
                    <li>
                        Membangun kemitraan strategis dengan berbagai organisasi
                        dan lembaga terkait.
                    </li>
                    <li>
                        Memfasilitasi proses sertifikasi yang mudah, cepat, dan
                        efisien bagi pengguna.
                    </li>
                    <li>
                        Memberikan pelatihan dan pembinaan yang relevan untuk
                        meningkatkan kompetensi bisnis.
                    </li>
                    <li>
                        Menjaga standar etika dan profesionalisme dalam setiap
                        layanan yang diberikan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
