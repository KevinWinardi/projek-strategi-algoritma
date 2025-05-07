<x-layout>
    <div class="jumbotron">
        <h1 class="display-4">Temukan Barisan Ajaib Fibonacci!</h1>
        <p class="lead">Masukkan sebuah angka dan lihat bagaimana barisan angka legendaris ini terbentuk — cepat, akurat, dan interaktif.</p>
        <hr class="my-4">   
        <p class="lead">
            <a class="btn btn-secondary btn-lg" href="{{route('halamanHitungFibonacci', ['suku' => 6]) }}" role="button">Coba Sekarang</a>
        </p>
    </div>
    <div class="container">
        <div class="row">
            <h2>Sejarah</h2>
            <div class="col-md-8 fs-5">
                <p>Diawali dari seorang putera pedagang dari Pisa, Italia, yaitu Leonardo Pisano atau yang akrab disapa Fibonacci (artinya anak dari Bonacci). Fibonacci besar di lingkungan yang mayoritas bekerja sebagai pedagang, sehingga mengharuskannya untuk berhubungan dengan angka atau notasi aritmatika.</p>
                <p>Singkat cerita, ayah Fibonacci pergi ke Aljazair. Di sana, banyak Matematikawan Arab yang tingkat pengetahuannya lebih tinggi dibanding bangsa Eropa. Salah satunya, perhitungan matematis pedagang Pisa yang masih menggunakan angka romawi.</p>
                <p>Fibonacci termotivasi untuk mempelajari sistem penomoran baru kayak 1-9 dan angka 0 dengan seorang guru Arab. Ia juga belajar algoritma komputasi yang biasanya ada di transaksi bisnis. Saat ilmunya udah cukup matang dan makin luas, Fibonacci menuangkan semua pengetahuannya itu ke beberapa buku. Salah satu bukunya yang paling terkenal berjudul “Liber Abaci” (artinya buku perhitungan). </p>
            </div>
            <div class="col-md-4 text-center">
                <img class="rounded img-fluid" src="{{ asset('img/leonardo.png') }}" alt="Leonardo">
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center mb-5">Studi Kasus</h2>
        <p class="text-center fst-italic fs-2">"Dimulai dengan satu pasang kelinci (satu jantan dan satu betina), berapa pasang kelinci yang akan lahir dalam satu semester, jika setiap bulan setiap kelinci jantan dan betina melahirkan sepasang kelinci baru, dan pasangan kelinci baru itu mulai melahirkan pasangan kelinci tambahan setelah umur satu bulan?"</p>
        <a href="{{ route('halamanHitungFibonacci', ['suku' => 6]) }}" class="btn btn-secondary p-3 fs-5">Hitung Fibonacci</a>
    </div>
</x-layout>