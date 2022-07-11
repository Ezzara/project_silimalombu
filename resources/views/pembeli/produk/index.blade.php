@extends ('layouts.userapp')

@push('script')
    @livewireScripts
@endpush

@section ('content')
<div class="container-fluid">
    <div class="row">
        <h3 class="mx-auto my-5 pl-5"> Semua Produk</h3>
    </div>
    @livewire('catalog')
</div>
@endsection