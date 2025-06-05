<x-layout>
    <x-slot name="title">Searching</x-slot>
    @if(empty($index))
    <div class="mb-4 p-4 card shadow hidden">
        <h2>Searching</h2>
        <p>Binary search adalah algoritma pencarian efisien yang digunakan untuk menemukan suatu nilai dalam array yang telah terurut. Cara kerjanya adalah dengan membandingkan nilai target dengan elemen di tengah array; jika cocok, pencarian selesai, jika target lebih kecil maka pencarian dilanjutkan di setengah kiri, dan jika lebih besar maka di setengah kanan. Proses ini terus dibagi dua hingga nilai ditemukan atau jangkauan pencarian habis.
        </p>
    </div>

    <div class="mb-4 p-4 card shadow hidden">
        <form method="POST" action="{{ route('searching.post') }}">
            @csrf
            <label class="form-label" for="numbers">Masukkan angka (pisahkan dengan koma):</label><br>
            <input class="form-control" type="text" name="numbers" id="numbers" placeholder="Contoh: 1,3,2,8,4">

            <br>
            
            <label class="form-label" for="target">Angka yang dicari</label>
            <input class="form-control" type="number" name="target" id="target" placeholder="Contoh: 2">

            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
    </div>

    @else
    <a href="{{ route('searching.index') }}" class="btn btn-secondary mb-4 hidden">Kembali</a>
    <div class="p-4 card shadow hidden">
        <p><strong>Array Awal:</strong> {{ implode(', ', $original) }}</p>
        <p><strong>Setelah Sort:</strong> {{ implode(', ', $sorted) }}</p>
        <p><strong>Target:</strong> {{ $target }}</p>
        @if ($index !== null)
        <p style="color:green;">Angka {{ $target }} ditemukan di index ke-{{ $index }}.</p>
        @else
        <p style="color:red;">Angka {{ $target }} tidak ditemukan.</p>
        @endif
    </div>
    @endif
</x-layout>