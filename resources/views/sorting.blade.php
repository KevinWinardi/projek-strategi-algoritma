<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    @if(empty($result))
    <div class="mb-4 p-4 card shadow hidden">
        <h2>Sorting</h2>
        <p>Bubble sort dan selection sort adalah dua algoritma penyortiran sederhana yang bekerja dengan cara berbeda. Bubble sort membandingkan elemen-elemen berdekatan dan menukarnya jika urutannya salah, proses ini diulang hingga seluruh elemen tersusun, sehingga elemen terbesar “menggelembung” ke akhir setiap iterasi. Sementara itu, selection sort bekerja dengan mencari elemen terkecil dari sisa daftar yang belum diurutkan, lalu menukarnya dengan elemen pada posisi saat ini, dan mengulangi langkah ini hingga seluruh daftar tersusun.
        </p>
    </div>

    <div class="mb-4 p-4 card shadow hidden">
        <form method="POST" action="{{ route('sorting.post') }}">
            @csrf
            <div class="mb-3">
                <label for="array" class="form-label">Masukkan Array (dipisahkan dengan koma)</label>
                <input type="text" name="array" id="array" class="form-control" placeholder="Contoh: 5,3,1,4,2" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Metode Sorting</label>
                <select name="method" class="form-select">
                    <option value="Bubble">Bubble Sort</option>
                    <option value="Selection">Selection Sort</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Kirim</button>
        </form>
    </div>

    @else
    <a href="{{ route('sorting.index') }}" class="btn btn-secondary mb-4 hidden">Kembali</a>
    <div class="p-4 card shadow hidden">
        <h2 class="mb-4">{{ $method }} Sorting</h2>

        <div class="mt-4">
            <h5>Array Awal:</h5>
            <p>{{ implode(', ', $result) }}</p>

            <h5>Hasil Sorting:</h5>
            <p>{{ implode(', ', $sorted) }}</p>

            <h5>Waktu eksekusi</h5>
            <p>{{ $executionTime }}</p>
        </div>
    </div>
    @endif
</x-layout>