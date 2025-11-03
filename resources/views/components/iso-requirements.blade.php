@props(['title' => 'Persyaratan Dokumen'])

<section class="mt-10">
    <h3 class="text-xl font-semibold">{{ $title }}</h3>
    <ul class="mt-4 space-y-2 list-disc pl-6">
        <li>Akta Badan Usaha berikut SK Menkumham (Akta terakhir)</li>
        <li>Nomor Induk Berusaha (NIB)</li>
        <li>NPWP Badan Usaha</li>
        <li>Company Profile <span class="text-gray-500">(opsional)</span></li>
        <li>
            Struktur Organisasi
            <span class="text-gray-500">(tertera nama personal)</span>
        </li>
        <li>Logo Badan Usaha <span class="text-gray-500">(opsional)</span></li>
        <li>
            Daftar Absensi Rapat
            <span class="text-gray-500">(bertandatangan)</span>
        </li>
        <li>
            Initial Form
            <span class="text-gray-500">(data awal & scope layanan)</span>
        </li>
    </ul>
</section>
