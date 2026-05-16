<x-app-layout>
    <div class="py-12">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold">Dashboard HRD</h2>
            
            <div class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-3">
                <div class="p-6 bg-white border border-gray-200 rounded">
                    <h3 class="text-sm font-medium text-gray-500">Total Karyawan</h3>
                    <p class="mt-2 text-3xl font-bold">150</p>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded">
                    <h3 class="text-sm font-medium text-gray-500">Jadwal Mendatang</h3>
                    <p class="mt-2 text-3xl font-bold">2</p>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded">
                    <h3 class="text-sm font-medium text-gray-500">Status MCU</h3>
                    <p class="mt-2 text-3xl font-bold">120 Selesai</p>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-semibold">Riwayat Kunjungan</h3>
                <table class="w-full mt-4 text-left border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="py-3">Tanggal</th>
                            <th class="py-3">Jumlah Karyawan</th>
                            <th class="py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3">2026-05-20</td>
                            <td class="py-3">50</td>
                            <td class="py-3">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
