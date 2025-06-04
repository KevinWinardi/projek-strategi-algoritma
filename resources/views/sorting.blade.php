<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="mb-4 p-4 card shadow hidden">
        <h2>Sorting</h2>
        <p>Bubble sort dan selection sort adalah dua algoritma penyortiran sederhana yang bekerja dengan cara berbeda. Bubble sort membandingkan elemen-elemen berdekatan dan menukarnya jika urutannya salah, proses ini diulang hingga seluruh elemen tersusun, sehingga elemen terbesar “menggelembung” ke akhir setiap iterasi. Sementara itu, selection sort bekerja dengan mencari elemen terkecil dari sisa daftar yang belum diurutkan, lalu menukarnya dengan elemen pada posisi saat ini, dan mengulangi langkah ini hingga seluruh daftar tersusun.
        </p>
    </div>

    <div class="mb-4 p-4 card shadow hidden">
        <form action="{{ route('fibonacci.post') }}" method="post">
            @csrf
            <div>
                <label for="suku" class="form-label">Suku fibonacci</label>
                <input type="number" class="form-control" id="suku" name="suku" min="0">
            </div>
            <button type="submit" class="btn btn-secondary mt-2">Submit</button>
        </form>
    </div>
</x-layout>