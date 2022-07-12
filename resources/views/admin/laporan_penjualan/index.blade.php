@extends ('layouts.adminapp')

@push('script')
    @livewireScripts
@endpush

@section ('content')
    <div class="col-lg-8 pl-5 pt-5 mt-2">
        <p>Laporan Penjualan</p>
        <div class="card w-100">
            <div class="card-header text-white lead">
                Laporan Penjualan
            </div>
            <div class="card-body">
                @livewire('penjualan-table')
            </div>
        </div>
    </div>
@endsection