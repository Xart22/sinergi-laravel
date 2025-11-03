@extends('app.layouts.app') @section('head') @vite(['resources/js/service.js'])
@endsection @section('content')
<section class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    {{-- Hero --}}
    <div class="pt-4 pb-8">
        <span
            class="inline-flex items-center rounded-full bg-gold/10 text-gold px-3 py-1 text-xs font-medium ring-1 ring-gold/30"
        >
            {{ $iso["code"] }}
        </span>
        <h1 class="mt-3 text-3xl font-bold">{{ $iso["title"] }}</h1>
        <p class="mt-3 text-lg text-gray-600 dark:text-gray-300">
            {{ $iso["tagline"] }}
        </p>

        <!-- description -->
        <p class="mt-3 text-gray-700 dark:text-gray-300">
            {{ $iso["description"] }}
        </p>
    </div>

    {{-- Ringkasan & Manfaat --}}
    <div class="grid gap-8 md:grid-cols-3">
        <div class="md:col-span-2">
            <h2 class="text-xl font-semibold">Ruang Lingkup</h2>
            <p class="mt-3 text-gray-700 dark:text-gray-300">
                {{ $iso["scope"] }}
            </p>

            <h2 class="mt-8 text-xl font-semibold">Klausul/Kontrol Kunci</h2>
            <ul class="mt-3 space-y-2 list-disc pl-6">
                @foreach($iso['key_clauses'] as $li)
                <li>{{ $li }}</li>
                @endforeach
            </ul>

            <h2 class="mt-8 text-xl font-semibold">Deliverables</h2>
            <ul class="mt-3 space-y-2 list-disc pl-6">
                @foreach($iso['deliverables'] as $li)
                <li>{{ $li }}</li>
                @endforeach
            </ul>

            <x-iso-requirements />

            {{-- Tahapan Implementasi --}}
            <section class="mt-10">
                <h3 class="text-xl font-semibold">Tahapan Implementasi</h3>
                <ol class="mt-4 space-y-2 list-decimal pl-6">
                    <li>
                        Kickoff & pengisian <em>Initial Form</em> (penentuan
                        scope & rencana kerja)
                    </li>
                    <li>Gap Assessment & rencana tindakan (Roadmap)</li>
                    <li>Penyusunan kebijakan, prosedur & formulir</li>
                    <li>Penerapan & sosialisasi, simulasi bukti rekaman</li>
                    <li>Audit internal & Tinjauan Manajemen</li>
                    <li>Pendampingan Audit Sertifikasi (Stage 1 & Stage 2)</li>
                </ol>
            </section>

            {{-- FAQ --}}
            @if(!empty($iso['faqs']))
            <section class="mt-10">
                <h3 class="text-xl font-semibold">Pertanyaan Umum</h3>
                <div class="mt-4 space-y-4">
                    @foreach($iso['faqs'] as $f)
                    <details class="group rounded-lg border p-4">
                        <summary class="cursor-pointer font-medium">
                            {{ $f["q"] }}
                        </summary>
                        <p class="mt-2 text-gray-700 dark:text-gray-300">
                            {{ $f["a"] }}
                        </p>
                    </details>
                    @endforeach
                </div>
            </section>
            @endif
        </div>

        <aside>
            <div class="rounded-2xl border p-5 sticky top-24">
                <h3 class="text-base font-semibold">Siapa yang Cocok</h3>
                <ul class="mt-3 space-y-2 list-disc pl-6">
                    @foreach($iso['audience'] as $li)
                    <li>{{ $li }}</li>
                    @endforeach
                </ul>

                <h3 class="mt-6 text-base font-semibold">Manfaat Utama</h3>
                <ul class="mt-3 space-y-2 list-disc pl-6">
                    @foreach($iso['benefits'] as $li)
                    <li>{{ $li }}</li>
                    @endforeach
                </ul>

                <div class="mt-6">
                    <a
                        href="https://wa.me/6281313103366?text={{
                            rawurlencode('Saya mau tanya '.$iso['code'])
                        }}"
                        class="inline-flex w-full items-center justify-center rounded-lg bg-gold text-white px-4 py-2 hover:bg-gold/90"
                        target="_blank"
                    >
                        Konsultasi via WhatsApp
                    </a>
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection
