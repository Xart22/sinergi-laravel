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
            Contact Us
        </h1>
        <p class="text-center text-white text-2xl md:text-2xl">
            Home / <span class="font-bold">Contact</span>
        </p>
    </div>
</div>

<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-8xl mx-auto mb-8">
        <h2 class="text-3xl md:text-5xl font-bold text-[#D1AC27] mb-6">
            Lokasi <span class="text-[#13554D]">Kami</span>
        </h2>
        <div class="relative overflow-hidden" style="padding-top: 56.25%">
            <iframe
                class="absolute top-0 left-0 w-full h-full border-0 rounded-lg shadow-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.542917493405!2d107.63642349999999!3d-6.945098699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e919080911d5%3A0xa7008a6aa69f0907!2sSinergi%20Sertifikasi!5e0!3m2!1sen!2sid!4v1757851087353!5m2!1sen!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>
    <div
        class="flex md:flex-row flex-col md:space-x-8 space-y-8 md:space-y-0 mb-8"
    >
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl md:text-5xl font-bold text-[#D1AC27] mb-6">
                Informasi <span class="text-[#13554D]">Kontak</span>
            </h2>
            <div class="space-y-4 text-xs md:text-sm">
                <a href="mailto:info@s.sinergisertifikasi.com">
                    <div class="flex items-center">
                        <svg
                            class="w-6 h-6 text-[#13554D] mr-2"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            ></path>
                        </svg>
                        <span>info@s.sinergisertifikasi.com</span>
                    </div></a
                >
                <a href="tel:+6282119174777"
                    ><div class="flex items-center">
                        <svg
                            class="w-6 h-6 text-[#13554D] mr-2"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                            ></path>
                        </svg>
                        <span>+62 821-1917-4777</span>
                    </div></a
                >
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl md:text-5xl font-bold text-[#D1AC27] mb-6">
                Hubungi <span class="text-[#13554D]">Kami</span>
            </h2>
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label
                        for="name"
                        class="block text-sm font-medium text-gray-700"
                        >Name</label
                    >
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-[#13554D] focus:border-[#13554D]"
                    />
                </div>
                <div>
                    <label
                        for="email"
                        class="block text-sm font-medium text-gray-700"
                        >Email</label
                    >
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-[#13554D] focus:border-[#13554D]"
                    />
                </div>
                <div>
                    <label
                        for="message"
                        class="block text-sm font-medium text-gray-700"
                        >Message</label
                    >
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-[#13554D] focus:border-[#13554D]"
                    ></textarea>
                </div>
                <div>
                    <button
                        type="submit"
                        class="bg-[#13554D] text-white px-4 py-2 rounded-md hover:bg-[#0f4037] transition-colors duration-300"
                    >
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg text-center">
        <h2 class="text-2xl md:text-4xl font-bold text-[#13554D] mb-2">
            Butuh Bantuan Lebih Lanjut?
        </h2>
        <a
            class="mt-4 bg-[#25D366] text-white px-6 py-3 rounded-full hover:bg-[#1ebe5d] transition-colors duration-300 flex items-center justify-center mx-auto w-48 cursor-pointer"
            href="https://wa.me/6281313103366"
            target="_blank"
            rel="noopener noreferrer"
        >
            Whatsapp Kami
        </a>
    </div>
</div>
@endsection
