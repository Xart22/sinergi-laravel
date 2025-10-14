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
        <h1 class="text-center text-white text-2xl md:text-6xl font-bold">
            Our Services
        </h1>
        <p class="text-center text-white text-2xl md:text-2xl">
            Home / <span class="font-bold">Services</span>
        </p>
    </div>
</div>
<div class="container mx-auto p-4 md:flex flex-col hidden">
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul
            class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400"
            id="tabs-example"
            role="tablist"
        >
            <li class="me-2" role="presentation">
                <button
                    class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                    id="profile-tab-example"
                    type="button"
                    role="tab"
                    aria-controls="profile-example"
                    aria-selected="false"
                >
                    ISO
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                    id="dashboard-tab-example"
                    type="button"
                    role="tab"
                    aria-controls="dashboard-example"
                    aria-selected="false"
                >
                    SKA / SKT
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                    id="settings-tab-example"
                    type="button"
                    role="tab"
                    aria-controls="settings-example"
                    aria-selected="false"
                >
                    K3 & SMK3
                </button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                    id="contacts-tab-example"
                    type="button"
                    role="tab"
                    aria-controls="contacts-example"
                    aria-selected="false"
                >
                    SBU LPJK
                </button>
            </li>
        </ul>
    </div>
    <div id="tabContentExample">
        <div
            class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
            id="profile-example"
            role="tabpanel"
            aria-labelledby="profile-tab-example"
        >
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul
                    class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400"
                    id="tabs-iso"
                    role="tablist"
                >
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="iso-9001-tab"
                            type="button"
                            role="tab"
                            aria-controls="iso-9001"
                            aria-selected="false"
                        >
                            ISO 9001:2015
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="iso-14001-tab"
                            type="button"
                            role="tab"
                            aria-controls="iso-14001"
                            aria-selected="false"
                        >
                            ISO 14001:2015
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="iso-45001-tab"
                            type="button"
                            role="tab"
                            aria-controls="iso-45001"
                            aria-selected="false"
                        >
                            ISO 45001:2018
                        </button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="iso-22000-tab"
                            type="button"
                            role="tab"
                            aria-controls="iso-22000"
                            aria-selected="false"
                        >
                            ISO 22000:2018
                        </button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="iso-18001-tab"
                            type="button"
                            role="tab"
                            aria-controls="iso-18001"
                            aria-selected="false"
                        >
                            OHSAS 18001:2007
                        </button>
                    </li>
                </ul>
            </div>
            <div id="tabIsoContent">
                <div
                    class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                    id="iso-9001"
                    role="tabpanel"
                    aria-labelledby="iso-9001-tab"
                >
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        This is some placeholder content the
                        <strong
                            class="font-medium text-gray-800 dark:text-white"
                            >Profile tab's associated content</strong
                        >. Clicking another tab will toggle the visibility of
                        this one for the next. The tab JavaScript swaps classes
                        to control the content visibility and styling.
                    </p>
                </div>
                <div
                    class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                    id="iso-14001"
                    role="tabpanel"
                    aria-labelledby="iso-14001-tab"
                >
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        This is some placeholder content the
                        <strong
                            class="font-medium text-gray-800 dark:text-white"
                            >Dashboard tab's associated content</strong
                        >. Clicking another tab will toggle the visibility of
                        this one for the next. The tab JavaScript swaps classes
                        to control the content visibility and styling.
                    </p>
                </div>
                <div
                    class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                    id="iso-45001"
                    role="tabpanel"
                    aria-labelledby="iso-45001-tab"
                >
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        This is some placeholder content the
                        <strong
                            class="font-medium text-gray-800 dark:text-white"
                            >Settings tab's associated content</strong
                        >. Clicking another tab will toggle the visibility of
                        this one for the next. The tab JavaScript swaps classes
                        to control the content visibility and styling.
                    </p>
                </div>
                <div
                    class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                    id="iso-22000"
                    role="tabpanel"
                    aria-labelledby="iso-22000-tab"
                >
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        This is some placeholder content the
                        <strong
                            class="font-medium text-gray-800 dark:text-white"
                            >Contacts tab's associated content</strong
                        >. Clicking another tab will toggle the visibility of
                        this one for the next. The tab JavaScript swaps classes
                        to control the content visibility and styling.
                    </p>
                </div>
                <div
                    class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
                    id="iso-18001"
                    role="tabpanel"
                    aria-labelledby="iso-18001-tab"
                >
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        This is some placeholder content the
                        <strong
                            class="font-medium text-gray-800 dark:text-white"
                            >Contacts tab's associated content</strong
                        >. Clicking another tab will toggle the visibility of
                        this one for the next. The tab JavaScript swaps classes
                        to control the content visibility and styling.
                    </p>
                </div>
            </div>
        </div>
        <div
            class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
            id="dashboard-example"
            role="tabpanel"
            aria-labelledby="dashboard-tab-example"
        >
            <p class="text-sm text-gray-500 dark:text-gray-400">
                This is some placeholder content the
                <strong class="font-medium text-gray-800 dark:text-white"
                    >Dashboard tab's associated content</strong
                >. Clicking another tab will toggle the visibility of this one
                for the next. The tab JavaScript swaps classes to control the
                content visibility and styling.
            </p>
        </div>
        <div
            class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
            id="settings-example"
            role="tabpanel"
            aria-labelledby="settings-tab-example"
        >
            <p class="text-sm text-gray-500 dark:text-gray-400">
                This is some placeholder content the
                <strong class="font-medium text-gray-800 dark:text-white"
                    >Settings tab's associated content</strong
                >. Clicking another tab will toggle the visibility of this one
                for the next. The tab JavaScript swaps classes to control the
                content visibility and styling.
            </p>
        </div>
        <div
            class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800"
            id="contacts-example"
            role="tabpanel"
            aria-labelledby="contacts-tab-example"
        >
            <p class="text-sm text-gray-500 dark:text-gray-400">
                This is some placeholder content the
                <strong class="font-medium text-gray-800 dark:text-white"
                    >Contacts tab's associated content</strong
                >. Clicking another tab will toggle the visibility of this one
                for the next. The tab JavaScript swaps classes to control the
                content visibility and styling.
            </p>
        </div>
    </div>
</div>

<div class="mx-auto max-w-5xl p-3">
    <!-- Tabs (Mobile) -->
    <div class="md:hidden">
        <div class="relative">
            <!-- subtle bottom border -->
            <div
                class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent dark:via-gray-700"
            ></div>

            <ul
                id="tabs"
                role="tablist"
                class="flex snap-x snap-mandatory gap-2 overflow-x-auto pb-1 text-sm font-medium text-gray-500 dark:text-gray-400 [scrollbar-width:none]"
                style="-ms-overflow-style: none"
            >
                <!-- each button: data-target -> panel id -->
                <li class="shrink-0 snap-start">
                    <button
                        id="tab-skk"
                        data-target="panel-skk"
                        role="tab"
                        aria-controls="panel-skk"
                        aria-selected="true"
                        class="tab-btn inline-flex items-center gap-2 rounded-full px-4 py-2 transition hover:text-gray-700 dark:hover:text-gray-200"
                    >
                        <span>SKK</span>
                        <span
                            class="tab-indicator hidden h-[2px] w-full rounded bg-gold"
                        ></span>
                    </button>
                </li>
                <li class="shrink-0 snap-start">
                    <button
                        id="tab-skttk"
                        data-target="panel-skttk"
                        role="tab"
                        aria-controls="panel-skttk"
                        aria-selected="false"
                        class="tab-btn inline-flex items-center gap-2 rounded-full px-4 py-2 transition hover:text-gray-700 dark:hover:text-gray-200"
                    >
                        <span>SKTTK</span>
                        <span
                            class="tab-indicator hidden h-[2px] w-full rounded bg-gold"
                        ></span>
                    </button>
                </li>
                <li class="shrink-0 snap-start">
                    <button
                        id="tab-smk3"
                        data-target="panel-smk3"
                        role="tab"
                        aria-controls="panel-smk3"
                        aria-selected="false"
                        class="tab-btn inline-flex items-center gap-2 rounded-full px-4 py-2 transition hover:text-gray-700 dark:hover:text-gray-200"
                    >
                        <span>K3 / SMK3</span>
                        <span
                            class="tab-indicator hidden h-[2px] w-full rounded bg-gold"
                        ></span>
                    </button>
                </li>
                <li class="shrink-0 snap-start">
                    <button
                        id="tab-sbu"
                        data-target="panel-sbu"
                        role="tab"
                        aria-controls="panel-sbu"
                        aria-selected="false"
                        class="tab-btn inline-flex items-center gap-2 rounded-full px-4 py-2 transition hover:text-gray-700 dark:hover:text-gray-200"
                    >
                        <span>SBU LPJK</span>
                        <span
                            class="tab-indicator hidden h-[2px] w-full rounded bg-gold"
                        ></span>
                    </button>
                </li>
                <li class="shrink-0 snap-start">
                    <button
                        id="tab-sbujptl"
                        data-target="panel-sbujptl"
                        role="tab"
                        aria-controls="panel-sbujptl"
                        aria-selected="false"
                        class="tab-btn inline-flex items-center gap-2 rounded-full px-4 py-2 transition hover:text-gray-700 dark:hover:text-gray-200"
                    >
                        <span>SBUJPTL</span>
                        <span
                            class="tab-indicator hidden h-[2px] w-full rounded bg-gold"
                        ></span>
                    </button>
                </li>
                <li class="shrink-0 snap-start">
                    <button
                        id="tab-iso"
                        data-target="panel-iso"
                        role="tab"
                        aria-controls="panel-iso"
                        aria-selected="false"
                        class="tab-btn inline-flex items-center gap-2 rounded-full px-4 py-2 transition hover:text-gray-700 dark:hover:text-gray-200"
                    >
                        <span>ISO</span>
                        <span
                            class="tab-indicator hidden h-[2px] w-full rounded bg-gold"
                        ></span>
                    </button>
                </li>
            </ul>
        </div>

        <!-- Panels -->
        <div id="tab-panels" class="mt-3 space-y-2">
            <div
                id="panel-skk"
                role="tabpanel"
                aria-labelledby="tab-skk"
                class="tab-panel rounded-xl bg-gray-50 p-4 shadow-sm dark:bg-gray-800"
            >
                <p
                    class="text-sm leading-relaxed text-gray-700 dark:text-gray-300"
                >
                    Konten SKK. Jelaskan layanan, syarat, timeline, dan CTA
                    singkat.
                </p>
            </div>

            <div
                id="panel-skttk"
                role="tabpanel"
                aria-labelledby="tab-skttk"
                class="tab-panel hidden rounded-xl bg-gray-50 p-4 shadow-sm dark:bg-gray-800"
            >
                <p
                    class="text-sm leading-relaxed text-gray-700 dark:text-gray-300"
                >
                    Konten SKTTK. Tambahkan highlight benefit dan proses
                    pengajuan.
                </p>
            </div>

            <div
                id="panel-smk3"
                role="tabpanel"
                aria-labelledby="tab-smk3"
                class="tab-panel hidden rounded-xl bg-gray-50 p-4 shadow-sm dark:bg-gray-800"
            >
                <p
                    class="text-sm leading-relaxed text-gray-700 dark:text-gray-300"
                >
                    Konten K3 / SMK3. Sertakan ringkasan standar & audit.
                </p>
            </div>

            <div
                id="panel-sbu"
                role="tabpanel"
                aria-labelledby="tab-sbu"
                class="tab-panel hidden rounded-xl bg-gray-50 p-4 shadow-sm dark:bg-gray-800"
            >
                <p
                    class="text-sm leading-relaxed text-gray-700 dark:text-gray-300"
                >
                    Konten SBU LPJK. Tuliskan kategori, kualifikasi, dan
                    estimasi durasi.
                </p>
            </div>

            <div
                id="panel-sbujptl"
                role="tabpanel"
                aria-labelledby="tab-sbujptl"
                class="tab-panel hidden rounded-xl bg-gray-50 p-4 shadow-sm dark:bg-gray-800"
            >
                <p
                    class="text-sm leading-relaxed text-gray-700 dark:text-gray-300"
                >
                    Konten SBUJPTL. Jelaskan lingkup jasa dan dokumen yang
                    dibutuhkan.
                </p>
            </div>

            <div
                id="panel-iso"
                role="tabpanel"
                aria-labelledby="tab-iso"
                class="tab-panel hidden rounded-xl bg-gray-50 p-4 shadow-sm dark:bg-gray-800"
            >
                <p
                    class="text-sm leading-relaxed text-gray-700 dark:text-gray-300"
                >
                    Konten ISO. Cantumkan standar (9001/14001/45001) dan benefit
                    bisnis.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Minimal JS (vanilla) untuk toggle tab -->
<script>
    (function () {
        const tabs = document.querySelectorAll("#tabs .tab-btn");
        const panels = document.querySelectorAll("#tab-panels .tab-panel");

        function activate(targetId) {
            // de-activate all
            tabs.forEach((btn) => {
                btn.setAttribute("aria-selected", "false");
                btn.classList.remove(
                    "text-gray-900",
                    "dark:text-white",
                    "bg-gray-100",
                    "dark:bg-gray-700"
                );
            });
            panels.forEach((p) => p.classList.add("hidden"));
            // activate current
            const btn = document.querySelector(
                `#tabs .tab-btn[data-target="${targetId}"]`
            );
            const panel = document.getElementById(targetId);
            if (!btn || !panel) return;
            btn.setAttribute("aria-selected", "true");
            btn.classList.add(
                "text-gray-900",
                "dark:text-white",
                "bg-gray-100",
                "dark:bg-gray-700"
            );
            panel.classList.remove("hidden");
        }

        // click handlers
        tabs.forEach((btn) => {
            btn.addEventListener("click", () => activate(btn.dataset.target));
        });

        // set default (first tab) on load
        const first = tabs[0];
        if (first) activate(first.dataset.target);
    })();
</script>

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
