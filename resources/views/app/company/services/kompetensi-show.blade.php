@extends('app.layouts.app') @section('title', ($conf['code'] ?? '') . ' – ' .
($conf['title'] ?? '')) @push('head') @if(!empty($pageJsonLd))
@foreach($pageJsonLd as $item)
<script type="application/ld+json">
    {!! json_encode($item, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
</script>
@endforeach @endif @endpush @section('content')
<section class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <header class="pt-4 pb-8">
        <span
            class="inline-flex items-center rounded-full bg-gold/10 text-gold px-3 py-1 text-xs font-medium ring-1 ring-gold/30"
        >
            {{ $conf["code"] }}
        </span>
        <h1 class="mt-3 text-3xl font-bold">{{ $conf["title"] }}</h1>
        @if(!empty($conf['tagline']))
        <p class="mt-3 text-lg text-gray-600 dark:text-gray-300">
            {{ $conf["tagline"] }}
        </p>
        @endif
    </header>

    <div class="grid gap-8 md:grid-cols-3">
        <div class="md:col-span-2">
            @if(!empty($conf['description']))
            <p class="text-gray-700 dark:text-gray-300">
                {{ $conf["description"] }}
            </p>
            @endif @if(!empty($conf['scopes']))
            <h2 class="mt-8 text-xl font-semibold">Lingkup/Skema</h2>
            <ul class="mt-3 space-y-2 list-disc pl-6">
                @foreach($conf['scopes'] as $li)
                <li>{{ $li }}</li>
                @endforeach
            </ul>
            @endif @if(!empty($conf['levels']))
            <h2 class="mt-8 text-xl font-semibold">Level</h2>
            <ul class="mt-3 space-y-2 list-disc pl-6">
                @foreach($conf['levels'] as $li)
                <li>{{ $li }}</li>
                @endforeach
            </ul>
            @endif

            <h2 class="mt-8 text-xl font-semibold">Tahapan Proses</h2>
            <ol class="mt-3 space-y-2 list-decimal pl-6">
                @foreach($conf['process'] as $li)
                <li>{{ $li }}</li>
                @endforeach
            </ol>

            <h2 class="mt-8 text-xl font-semibold">Deliverables</h2>
            <ul class="mt-3 space-y-2 list-disc pl-6">
                @foreach($conf['deliverables'] as $li)
                <li>{{ $li }}</li>
                @endforeach
            </ul>

            <h2 class="mt-8 text-xl font-semibold">Persyaratan Dokumen</h2>
            <ul class="mt-3 space-y-2 list-disc pl-6">
                @foreach($conf['requirements'] as $li)
                <li>{{ $li }}</li>
                @endforeach
            </ul>

            @if(!empty($conf['faqs']))
            <section class="mt-10">
                <h3 class="text-xl font-semibold">Pertanyaan Umum</h3>
                <div class="mt-4 space-y-4">
                    @foreach($conf['faqs'] as $f)
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
                @if(!empty($conf['audience']))
                <h3 class="text-base font-semibold">Cocok Untuk</h3>
                <ul class="mt-3 space-y-2 list-disc pl-6">
                    @foreach($conf['audience'] as $li)
                    <li>{{ $li }}</li>
                    @endforeach
                </ul>
                @endif @if(!empty($conf['benefits']))
                <h3 class="mt-6 text-base font-semibold">Manfaat</h3>
                <ul class="mt-3 space-y-2 list-disc pl-6">
                    @foreach($conf['benefits'] as $li)
                    <li>{{ $li }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="mt-6">
                    <a
                        href="https://wa.me/6281313103366?text={{
                            rawurlencode('Saya mau tanya '.$conf['code'])
                        }}"
                        target="_blank"
                        class="inline-flex w-full items-center justify-center rounded-lg bg-gold text-white px-4 py-2 hover:bg-gold/90"
                    >
                        Konsultasi via WhatsApp
                    </a>
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection
