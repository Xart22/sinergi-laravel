<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {!! SEO::generate() !!}
        @vite(['resources/css/app.css','resources/js/app.js'])
        @if(!empty($globalJsonLd)) @foreach($globalJsonLd as $item)
        <script type="application/ld+json">
            {!! json_encode($item, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
        </script>
        @endforeach @endif @stack('head')

        <style>
            .whatsapp-float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 20px;
                right: 20px;
                background-color: #25d366;
                color: #fff;
                border-radius: 50%;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                z-index: 1000;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
            }

            .whatsapp-float:hover {
                transform: scale(1.1);
                background-color: #1ebe5b;
            }

            .whatsapp-float img {
                width: 45px;
                height: 45px;
            }
        </style>
    </head>

    <body>
        <a
            href="https://wa.me/6281313103366"
            class="whatsapp-float"
            target="_blank"
            aria-label="Chat via WhatsApp"
        >
            <img src="{{ asset('assets/images/wa.png') }}" alt="WhatsApp" />
        </a>
        <nav
            class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600"
        >
            <div
                class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
            >
                <a
                    href="/"
                    class="flex items-center space-x-3 rtl:space-x-reverse"
                >
                    <img
                        src="{{ asset('assets/logo/sinergi.png') }}"
                        class="h-12"
                        alt="Sinergi Logo"
                    />
                </a>
                <div
                    class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
                >
                    <button
                        data-collapse-toggle="navbar-sticky"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 17 14"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15"
                            />
                        </svg>
                    </button>
                </div>
                <div
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-sticky"
                >
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                    >
                        <li>
                            <a
                                href="{{ route('landing.home') }}"
                                class="block py-2 px-3 text-white bg-gold rounded md:bg-transparent md:text-gold md:p-0"
                                aria-current="page"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{ route('landing.about') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gold md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >About</a
                            >
                        </li>
                        <li class="relative group">
                            {{-- 1 Checkbox tak terlihat untuk toggle (tanpa JS) --}}
                            <input
                                id="services-toggle"
                                type="checkbox"
                                class="peer hidden md:hidden"
                            />

                            {{-- 2 Tombol/label: mobile = toggle via checkbox; desktop = hover area --}}
                            <label
                                for="services-toggle"
                                class="flex cursor-pointer items-center justify-between py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gold md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
                            >
                                Services
                                <svg
                                    class="ml-1 h-4 w-4 transition-transform duration-200 peer-checked:rotate-180 md:group-hover:rotate-180"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7"
                                    />
                                </svg>
                            </label>

                            {{-- 3 Submenu: mobile = peer-checked; desktop = hover --}}
                            <ul
                                class="mt-1 hidden min-w-[320px] space-y-1 rounded-lg border border-gray-100 bg-white shadow-lg dark:bg-gray-800 dark:border-gray-700 z-20 peer-checked:block md:absolute md:left-0 md:top-full md:mt-2 md:hidden overflow-y-auto max-h-80 md:group-hover:block"
                            >
                                <li>
                                    <a
                                        href="{{
                                            route('landing.service.iso')
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-b-lg"
                                    >
                                        Sertifikasi ISO
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{
                                            route(
                                                'landing.service.sertifikasi.show',
                                                'skk-konstruksi'
                                            )
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-t-lg"
                                    >
                                        Sertifikat Kompetensi Kerja Konstruksi (
                                        SKK )
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{
                                            route(
                                                'landing.service.sertifikasi.show',
                                                'sbujk'
                                            )
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >
                                        Sertifikasi Badan Usaha Jasa Konstruksi
                                        ( SBUJK )
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{
                                            route(
                                                'landing.service.sertifikasi.show',
                                                'sertifikat-standar-oss-rba'
                                            )
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >
                                        Pendampingan Sertifikat Standar ( OSS
                                        RBA )
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{
                                            route(
                                                'landing.service.sertifikasi.show',
                                                'smk3'
                                            )
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >
                                        Sertifikasi SMK3
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{
                                            route(
                                                'landing.service.sertifikasi.show',
                                                'sbujptl'
                                            )
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >
                                        Sertifikat Badan Usaha Jasa Penunjang
                                        Tenaga Listrik ( SBUJPTL )
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{
                                            route(
                                                'landing.service.sertifikasi.show',
                                                'skttk-ketenagalistrikan'
                                            )
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >
                                        Sertifikasi Kompetensi Tenaga Teknik
                                        Ketenagalistrikan ( SKTTK )
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{
                                            route(
                                                'landing.service.sertifikasi.show',
                                                'skttk-ketenagalistrikan'
                                            )
                                        }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >
                                        Izin Usaha Jasa Penunjang Tenaga Listrik
                                        ( IUJPTL )
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a
                                href="{{ route('landing.contact') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gold md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-20 mb-20">@yield('content')</div>

        <footer class="w-full p-4 bg-gold border-t border-gray-200 shadow">
            <div class="mx-auto container p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a
                            href="https://flowbite.com/"
                            class="flex items-center rounded-lg bg-white shadow-xs p-2"
                        >
                            <img
                                src="{{ asset('assets/logo/sinergi.png') }}"
                                class="h-12 me-3"
                                alt="FlowBite Logo"
                            />
                        </a>
                        <div class="flex mt-4 space-x-4">
                            <a
                                href="https://github.com/themesberg/flowbite"
                                class="text-white hover:text-blue-600 border border-white rounded-md p-2 hover:bg-white"
                            >
                                <svg
                                    class="w-6 h-6"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </a>
                            <a
                                href="https://github.com/themesberg/flowbite"
                                class="text-white hover:text-blue-600 border border-white rounded-md p-2 hover:bg-white"
                            >
                                <svg
                                    class="w-6 h-6"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill="currentColor"
                                        fill-rule="evenodd"
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="mb-6 md:mb-0">
                        <h2
                            class="mb-6 text-sm font-semibold text-white uppercase dark:text-white"
                        >
                            Quik Links
                        </h2>
                        <ul
                            class="text-gray-500 dark:text-gray-400 font-medium"
                        >
                            <li class="md:mb-4">
                                <a
                                    href="/"
                                    class="text-white hover:text-gray-500"
                                    >Home</a
                                >
                            </li>
                            <li class="md:mb-4">
                                <a
                                    href="{{ route('landing.about') }}"
                                    class="text-white hover:text-gray-500"
                                    >About</a
                                >
                            </li>
                            <li class="md:mb-4">
                                <a
                                    href="https://tailwindcss.com/"
                                    class="text-white hover:text-gray-500"
                                    >Services</a
                                >
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2
                            class="mb-6 text-sm font-semibold text-white uppercase dark:text-white"
                        >
                            Contact Us
                        </h2>
                        <ul
                            class="text-gray-500 dark:text-gray-400 font-medium"
                        >
                            <li>
                                <a
                                    href="https://github.com/themesberg/flowbite"
                                    class="inline-flex items-center hover:text-gray-500 text-white"
                                    ><svg
                                        class="w-6 h-6"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-width="2"
                                            d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"
                                        />
                                    </svg>
                                    &nbsp; info@s.sinergisertifikasi.com
                                </a>
                            </li>
                            <li>
                                <a
                                    href="https://discord.gg/4eeurUVvTy"
                                    class="inline-flex hover:text-gray-500 text-white"
                                >
                                    <svg
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        class="w-6 h-6"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        />
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"
                                        />
                                    </svg>
                                    JL.Idi Adimaja III No.09 RT.003 <br />
                                    RW.012 Kelurahan Gumuruh,<br />Batununggal,
                                    Kota Bandung,<br />40275
                                </a>
                            </li>
                            <li>
                                <a
                                    href="https://discord.gg/4eeurUVvTy"
                                    class="inline-flex items-center hover:text-gray-500 text-white"
                                >
                                    <svg
                                        class="w-6 h-6"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"
                                        />
                                    </svg>

                                    +62 821-1917-4777
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        @yield('script')
    </body>
</html>
