@extends('app.layouts.app') @section('head') @vite(['resources/js/service.js'])
@endsection @section('content')

<div class="relative md:w-full mb-3">
    <img
        src="{{ asset('assets/images/hero-service.png') }}"
        alt="hero image"
        class="w-full md:h-96 object-fill"
    />
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center md:w-1/2 md:top-1/3 md:left-[22vw] md:transform-none"
    >
        <h1 class="text-center text-white text-xl md:text-6xl font-bold">
            Our Services
        </h1>
        <p class="text-center text-white text-xl md:text-2xl">
            Home / Services / <span class="font-bold">ISO</span>
        </p>
    </div>
</div>

<section class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-semibold mb-6">Standar ISO yang Kami Tangani</h2>

    <ul class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($iso as $code => $item) @php $slug =
        Str::of($code)->replace([':', '/', ' '], '-')->lower(); $waText =
        rawurlencode("Halo, saya ingin konsultasi untuk {$code} -
        {$item['title']}"); @endphp

        <li
            class="group relative rounded-2xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden"
        >
            <div class="flex items-start gap-4 p-5">
                {{-- emblem / icon (optional image) --}}
                <div class="shrink-0">
                    <img
                        src="{{ asset('assets/images/service/'.$code.'.png') }}"
                        alt="Ikon {{ $code }}"
                        class="h-12 w-12 rounded-lg ring-1 ring-gray-200 dark:ring-gray-700 object-contain"
                        onerror="this.style.display='none';"
                        loading="lazy"
                    />
                    {{-- fallback svg jika gambar tidak ada --}}
                    <svg
                        class="h-12 w-12 text-gold/90 hidden"
                        aria-hidden="true"
                    >
                        <use href="#shield-check"></use>
                    </svg>
                </div>

                <div class="min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span
                            class="inline-flex items-center rounded-full bg-gold/10 text-gold px-2 py-0.5 text-xs font-medium ring-1 ring-gold/30"
                        >
                            {{ $item["code"] }}
                        </span>
                    </div>
                    <h3 class="text-base font-semibold leading-snug">
                        {{ $item["title"] }}
                    </h3>
                    <p
                        class="mt-2 text-sm text-gray-600 dark:text-gray-300 line-clamp-4"
                    >
                        {{ $item["description"] }}
                    </p>

                    <div class="mt-4 flex flex-wrap items-center gap-2">
                        <a
                            href="{{ route('landing.service.iso.slug', ['slug' => Str::of($code)->replace([':', '/', ' '], '-')->lower()]) }}"
                            class="inline-flex items-center rounded-lg border border-gray-300 dark:border-gray-700 px-3 py-1.5 text-sm hover:bg-gray-50 dark:hover:bg-gray-800 transition"
                        >
                            Pelajari
                            <svg
                                class="ml-1.5 h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>
                        </a>
                        <a
                            href="https://wa.me/6281313103366?text={{
                                $waText
                            }}"
                            target="_blank"
                            rel="noopener"
                            class="inline-flex items-center rounded-lg bg-gold text-white px-3 py-1.5 text-sm hover:bg-gold/90 transition"
                            aria-label="Konsultasi WhatsApp untuk {{ $code }}"
                        >
                            Konsultasi
                            <svg
                                class="ml-1.5 h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M20.52 3.48A11.94 11.94 0 0 0 12.06 0C5.46 0 .09 5.37.09 12c0 2.11.57 4.11 1.56 5.84L0 24l6.33-1.63A11.86 11.86 0 0 0 12.06 24c6.6 0 11.97-5.37 11.97-12 0-3.19-1.26-6.19-3.51-8.52ZM12.06 21.6c-1.99 0-3.85-.57-5.41-1.65l-.39-.24-3.75.96.99-3.66-.25-.42A9.53 9.53 0 0 1 2.52 12c0-5.27 4.28-9.55 9.54-9.55 2.56 0 4.96 1 6.77 2.82a9.4 9.4 0 0 1 2.78 6.73c0 5.27-4.28 9.6-9.55 9.6Zm5.47-6.95c-.3-.15-1.75-.86-2.02-.96-.27-.1-.46-.15-.66.15-.2.3-.77.96-.94 1.16-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.46-.88-.78-1.48-1.75-1.65-2.05-.17-.3-.02-.47.13-.62.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.66-1.59-.9-2.17-.24-.58-.48-.5-.66-.5h-.56c-.2 0-.52.08-.79.37-.27.3-1.04 1.02-1.04 2.48 0 1.46 1.06 2.88 1.2 3.08.15.2 2.1 3.21 5.07 4.5.71.31 1.26.49 1.69.63.71.22 1.35.19 1.86.12.57-.08 1.75-.72 2-1.42.25-.7.25-1.31.17-1.43-.08-.12-.27-.2-.57-.35Z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- dekorasi hover --}}
            <div
                class="pointer-events-none absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-gold/0 via-gold/40 to-gold/0 opacity-0 group-hover:opacity-100 transition"
            ></div>
        </li>
        @endforeach
    </ul>
</section>

{{-- SVG sprite (opsional; taruh sekali di layout) --}}
<svg width="0" height="0" class="hidden">
    <symbol id="shield-check" viewBox="0 0 24 24" fill="currentColor">
        <path
            d="M12 2 4 6v6c0 5 3.4 9.3 8 10 4.6-.7 8-5 8-10V6l-8-4Zm-1 13-3-3 1.4-1.4L11 11.2l3.6-3.6L16 9l-5 6Z"
        />
    </symbol>
</svg>

<div class="container mx-auto relative p-3">
    <img
        src="{{ asset('assets/images/hero-call.png') }}"
        alt="hero image"
        class="w-full object-cover"
    />
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-72 md:w-1/2 md:top-1/3 md:left-[22vw] md:transform-none"
    >
        <p
            class="text-center text-white text-xs md:text-2xl md:font-bold font-semibold"
        >
            Hubungi kami sekarang untuk solusi sertifikasi terbaik bagi bisnis
            Anda. Tim kami siap membantu!
        </p>
        <button
            type="button"
            class="text-white mt-3 bg-gold hover:bg-gold/90 focus:ring-4 focus:outline-none focus:ring-gold/50 font-medium rounded-lg md:px-5 md:py-2.5 px-2 py-1 text-center inline-flex items-center dark:focus:ring-gold/55 me-2 mb-2"
        >
            Hubungi Kami &nbsp;
            <svg
                class="w-6 h-6 text-white dark:text-white"
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
                    d="M19 12H5m14 0-4 4m4-4-4-4"
                />
            </svg>
        </button>
    </div>
</div>

@endsection
