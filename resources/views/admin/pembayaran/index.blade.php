@extends('admin.sidebar')

@section('title', 'Data Pembayaran')

@section('page-title', 'Data Pembayaran Customer')

@section('content')

<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    {{-- HEADER --}}
    <div class="flex items-center justify-between px-8 py-6 border-b border-gray-100">

        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                Data Pembayaran Customer
            </h2>

            <p class="text-sm text-gray-400 mt-1">
                Daftar pembayaran customer MoodFit
            </p>
        </div>

        {{-- SEARCH --}}
        <form method="GET">

            <input type="text"
                   name="search"
                   placeholder="Cari customer..."
                   class="w-72 px-5 py-3 rounded-2xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-yellow-400">

        </form>

    </div>

    {{-- TABLE --}}
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-5 text-left text-sm font-semibold text-gray-600">
                        No
                    </th>

                    <th class="px-6 py-5 text-left text-sm font-semibold text-gray-600">
                        Customer
                    </th>

                    <th class="px-6 py-5 text-left text-sm font-semibold text-gray-600">
                        Produk
                    </th>

                    <th class="px-6 py-5 text-left text-sm font-semibold text-gray-600">
                        Total
                    </th>

                    <th class="px-6 py-5 text-left text-sm font-semibold text-gray-600">
                        Metode
                    </th>

                    <th class="px-6 py-5 text-left text-sm font-semibold text-gray-600">
                        Status
                    </th>

                    <th class="px-6 py-5 text-left text-sm font-semibold text-gray-600">
                        Tanggal
                    </th>

                </tr>

            </thead>

            <tbody class="divide-y divide-gray-100">

                {{-- DATA 1 --}}
                <tr class="hover:bg-gray-50 transition">

                    <td class="px-6 py-5 text-gray-700">
                        1
                    </td>

                    <td class="px-6 py-5">

                        <div>
                            <h3 class="font-semibold text-gray-800">
                                Andi Pratama
                            </h3>

                            <p class="text-sm text-gray-400">
                                andi@gmail.com
                            </p>
                        </div>

                    </td>

                    <td class="px-6 py-5 text-gray-700">
                        Oversize Hoodie
                    </td>

                    <td class="px-6 py-5 font-semibold text-gray-800">
                        Rp 350.000
                    </td>

                    <td class="px-6 py-5">
                        QRIS
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-600 px-4 py-2 rounded-xl text-sm font-semibold">
                            Success
                        </span>

                    </td>

                    <td class="px-6 py-5 text-gray-500">
                        20 Mei 2026
                    </td>

                </tr>

                {{-- DATA 2 --}}
                <tr class="hover:bg-gray-50 transition">

                    <td class="px-6 py-5 text-gray-700">
                        2
                    </td>

                    <td class="px-6 py-5">

                        <div>
                            <h3 class="font-semibold text-gray-800">
                                Sinta Amelia
                            </h3>

                            <p class="text-sm text-gray-400">
                                sinta@gmail.com
                            </p>
                        </div>

                    </td>

                    <td class="px-6 py-5 text-gray-700">
                        Cargo Pants
                    </td>

                    <td class="px-6 py-5 font-semibold text-gray-800">
                        Rp 420.000
                    </td>

                    <td class="px-6 py-5">
                        Bank Transfer
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-yellow-100 text-yellow-600 px-4 py-2 rounded-xl text-sm font-semibold">
                            Pending
                        </span>

                    </td>

                    <td class="px-6 py-5 text-gray-500">
                        19 Mei 2026
                    </td>

                </tr>

                {{-- DATA 3 --}}
                <tr class="hover:bg-gray-50 transition">

                    <td class="px-6 py-5 text-gray-700">
                        3
                    </td>

                    <td class="px-6 py-5">

                        <div>
                            <h3 class="font-semibold text-gray-800">
                                Rizky Maulana
                            </h3>

                            <p class="text-sm text-gray-400">
                                rizky@gmail.com
                            </p>
                        </div>

                    </td>

                    <td class="px-6 py-5 text-gray-700">
                        Denim Jacket
                    </td>

                    <td class="px-6 py-5 font-semibold text-gray-800">
                        Rp 550.000
                    </td>

                    <td class="px-6 py-5">
                        E-Wallet
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-red-100 text-red-600 px-4 py-2 rounded-xl text-sm font-semibold">
                            Failed
                        </span>

                    </td>

                    <td class="px-6 py-5 text-gray-500">
                        18 Mei 2026
                    </td>

                </tr>

<tbody class="divide-y divide-gray-100">

@foreach ($pembayarans as $item)
<tr class="hover:bg-gray-50 transition">

    <td class="px-6 py-5 text-gray-700">
        {{ $loop->iteration }}
    </td>

    <td class="px-6 py-5">
        {{ $item->nama_customer }}
    </td>

    <td class="px-6 py-5">
        {{ $item->produk }}
    </td>

    <td class="px-6 py-5 font-semibold">
        Rp {{ number_format($item->total, 0, ',', '.') }}
    </td>

    <td class="px-6 py-5">
        {{ $item->metode_pembayaran }}
    </td>

    <td class="px-6 py-5">
        {{ $item->status }}
    </td>

    <td class="px-6 py-5 text-gray-500">
        {{ $item->created_at->format('d M Y') }}
    </td>

    {{-- ACTION --}}
    <td class="px-6 py-5">

        <form action="{{ route('pembayaran.destroy', $item->id) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus data ini?')">

            @csrf
            @method('DELETE')

            <button type="submit"
                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                Hapus
            </button>

        </form>

    </td>

</tr>
@endforeach

</tbody>
            
            </tbody>

        </table>
        <tbody>
@foreach ($pembayarans as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->nama_customer }}</td>
    <td>{{ $item->jumlah }}</td>

    <td class="flex gap-2">


        </form>

    </td>
</tr>
@endforeach
</tbody>
</form>

    </div>

</div>

@endsection