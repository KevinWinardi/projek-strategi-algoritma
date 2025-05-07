<x-layout>
    <div class="container-sm">
        <form class="card shadow-sm w-25 mx-auto p-3 m-3">
            <div>
                <label for="suku" class="form-label">Suku fibonacci</label>
                <input type="number" class="form-control" id="suku" name="suku" min="0">
            </div>
            <button type="submit" class="btn btn-secondary mt-2">Submit</button>
        </form>
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
</x-layout>