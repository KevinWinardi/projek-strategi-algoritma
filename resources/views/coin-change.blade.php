<x-layout>
    <x-slot name="title">Coin Change</x-slot>
    @if(empty($result))
    <div class="mb-4 p-4 card shadow hidden">
        <h2>Coin Change</h2>
        <p>Coin Change adalah masalah algoritma klasik dalam pemrograman dan matematika dinamis yang bertujuan untuk menentukan jumlah minimum koin yang dibutuhkan untuk mencapai jumlah tertentu dari nilai uang yang tersedia. Diberikan sejumlah jenis koin dengan denominasi tertentu, tantangannya adalah menyusun kombinasi koin yang totalnya sama dengan nilai target, dengan jumlah koin sesedikit mungkin. Masalah ini sering diselesaikan menggunakan pendekatan dynamic programming karena melibatkan submasalah yang tumpang tindih dan keputusan optimal lokal untuk membangun solusi global. Coin change banyak digunakan dalam konteks keuangan digital, vending machine, dan sistem transaksi otomatis.
        </p>
    </div>

    <div class="mb-4 p-4 card shadow hidden">

        <form action="{{ route('coin-change.post') }}" method="POST">
            @csrf
            <label class="form-label">Masukkan angka koin (dipisahkan dengan koma tanpa spasi)</label><br>
            <input type="text" name="coins" class="form-control" placeholder="Contoh: 1000,500,200" required>
            
            <br>

            <label class="form-label">Target jumlah (pastikan nilainya lebih besar daripada angka koin terbesar sebelumnya)</label><br>
            <input type="number" name="target" class="form-control" placeholder="15500" required><br>

            <button type="submit" class="btn btn-primary">Proses</button>
        </form>
    </div>
    @else
    <a href="{{ route('coin-change.index') }}" class="btn btn-secondary mb-4 hidden">Kembali</a>
    <div class="p-4 card shadow hidden">
        <h2>Hasil Greedy Coin Change</h2>
        <p><strong>Target:</strong> {{ $target }}</p>
        <p><strong>Nilai Koin:</strong> {{ implode(', ', $coins) }}</p>

        <h4>Solusi Optimal:</h4>
        <ul>
            @foreach ($result as $coin => $jumlah)
            <li>{{ $jumlah }} x {{ $coin }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</x-layout>