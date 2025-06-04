<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <!-- Rectangular Stats Cards -->
    <div class="mb-4">
        <div class="row">
            <div class="mb-3 col-md-6 col-lg-3 hidden">
                <div class="card shadow p-3">
                    <div>
                        <h3><i class="fa fa-table"></i> hai </h3>
                        <p>Total Kategori</p>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6 col-lg-3 hidden">
                <div class="card shadow p-3">
                    <div>
                        <h3><i class="fa fa-cube"></i> hai </h3>
                        <p>Total Produk</p>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6 col-lg-3 hidden">
                <div class="card shadow p-3">
                    <div>
                        <h3><i class="fa fa-address-book"></i> hai </h3>
                        <p>Total Customers</p>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6 col-lg-3 hidden">
                <div class="card shadow p-3">
                    <div>
                        <h3><i class="fa fa-heart"></i> hai </h3>
                        <p>Total Favorit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>