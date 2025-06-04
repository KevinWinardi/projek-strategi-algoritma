<x-layout>
    <x-slot name="title">Fibonacci</x-slot>
    @if(empty($result))
    <div class="mb-4 p-4 card shadow hidden">
        <h2>Fibonacci</h2>
        <p>Fibonacci adalah deret bilangan yang dimulai dari 0 dan 1, di mana setiap angka berikutnya merupakan hasil penjumlahan dari dua angka sebelumnya. Pola ini menghasilkan urutan seperti 0, 1, 1, 2, 3, 5, 8, 13, dan seterusnya. Deret Fibonacci ditemukan oleh matematikawan Italia Leonardo Fibonacci pada abad ke-13 dan memiliki banyak penerapan dalam berbagai bidang, termasuk matematika, ilmu komputer, dan alam-misalnya dalam pola pertumbuhan tanaman, susunan daun, atau jumlah spiral pada bunga matahari.
        </p>
    </div>

    <div class="mb-4 p-4 card shadow hidden">
        <form action="{{ route('fibonacci.post') }}" method="post">
            @csrf
            <div>
                <label for="suku" class="form-label">Suku fibonacci</label>
                <input type="number" class="form-control" id="suku" name="suku" min="0" placeholder="Masukkan angka" value="{{ old('suku') }}">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    @else
    <a href="{{ route('fibonacci.index') }}" class="btn btn-secondary mb-4 hidden">Kembali</a>
    <div class="p-4 card shadow hidden">
        <h2>Jumlah kelinci di bulan terakhir: {{ end($result) }}</h2>
        <table class="table table-bordered table-striped-columns text-center align-middle">
            <thead class="table-dark">
                <tr>
                    @for($i=0; $i < count($result); $i++)
                        <th scope="col" class="text-center">
                        <p>Bulan ke-{{ $i }}</p>
                        <p>{{ $result[$i] }}</p>
                        </th>
                        @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($result as $data)
                    <td>
                        @for($i=0; $i < $data; $i++)
                            <img class="gambar-kelinci text-center img-fluid d-block mx-auto my-2" src="{{ asset('img/kelinci.png') }}" alt="kelinci">
                            @endfor
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    @endif
</x-layout>