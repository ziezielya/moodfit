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

                    <th class="px-6 py-5 text-center text-sm font-semibold text-gray-600">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody class="divide-y divide-gray-100">

                @forelse ($pembayarans as $item)

                <tr class="hover:bg-gray-50 transition duration-200">

                    <td class="px-6 py-5 text-gray-700">
                        {{ $loop->iteration }}
                    </td>

                    <td class="px-6 py-5 font-medium text-gray-800">
                        {{ $item->nama_customer }}
                    </td>

                    <td class="px-6 py-5 text-gray-700">
                        {{ $item->produk }}
                    </td>

                    <td class="px-6 py-5 font-bold text-gray-800">
                        Rp {{ number_format($item->total, 0, ',', '.') }}
                    </td>

                    <td class="px-6 py-5">
                        {{ $item->metode_pembayarans }}
                    </td>

                    <td class="px-6 py-5">

                        <span class="px-3 py-1 rounded-full text-xs font-bold
                            @if($item->status == 'Lunas')
                                bg-green-100 text-green-700
                            @else
                                bg-yellow-100 text-yellow-700
                            @endif
                        ">
                            {{ $item->status }}
                        </span>

                    </td>

                    <td class="px-6 py-5 text-gray-500">
                        {{ $item->created_at->format('d M Y') }}
                    </td>

                    {{-- ACTION --}}
                    <td class="px-6 py-5 text-center">

                        <form action="{{ route('pembayaran.destroy', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-xl text-sm font-semibold transition">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="8" class="text-center py-10 text-gray-400">
                        Belum ada data pembayaran.
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection