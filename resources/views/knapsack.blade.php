<x-layout>
    <x-slot name="title">Knapsack</x-slot>
    @if(empty($selectedItems))
    <div class="mb-4 p-4 card shadow hidden">
        <h2>Knapsack</h2>
        <p>Knapsack problem (masalah ransel) adalah salah satu masalah klasik dalam ilmu komputer dan matematika, khususnya dalam optimization dan dynamic programming. Tujuannya adalah memilih sejumlah item dari sekumpulan item yang tersedia untuk dimasukkan ke dalam sebuah "ransel", sehingga total nilai item maksimal tanpa melebihi kapasitas ransel.
        </p>
    </div>

    <div class="mb-4 p-4 card shadow hidden">
        <form action="{{ route('knapsack.post') }}" method="post">
            @csrf
            <div>
                <label for="capacity" class="form-label">Kapasitas</label>
                <input type="number" class="form-control" id="capacity" name="capacity" min="0" placeholder="Contoh: 10">
            </div>
            <p class="text-danger">Data diambil dari database products</p>
            <p class="d-inline-flex gap-1">
                <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Cek data &#x25BC;
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>

                            <tr>
                                <td class="fw-bold">Nama</td>
                                <td class="fw-bold">Berat</td>
                                <td class="fw-bold">Nilai</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>{{ $item->value }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="submit" class="d-block btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    @else
    <a href="{{ route('knapsack.index') }}" class="btn btn-secondary mb-4 hidden">Kembali</a>
    <div class="p-4 card shadow hidden">
        <h2>Hasil Knapsack Problem</h2>
        <p><strong>Kapasitas:</strong> {{ $capacity }}</p>
        <p><strong>Nilai Terbesar:</strong> {{ $maxValue }}</p>

        <h4>Barang terpilih:</h4>
        <ul>
            @foreach ($selectedItems as $item)
            <li>
                <strong>{{ $item['name'] }}</strong>
                (Berat: {{ $item['weight'] }} kg, Nilai: {{ $item['value'] }})
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</x-layout>