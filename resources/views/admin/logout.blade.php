@extends ('layouts/adminapp')
@section ('content')
<div class="col-lg-8 pl-5 pt-5 mt-2">
    <p>Keluar</p>
    <div class="card w-100">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div class="row pd-5">
                    <div class="col-md-3 p-5"></div>
                    <div class="col-md-6 p-5 m-5 text-center rounded" style="background-color: white;">
                        <p class=" p-5">Apakah anda yakin untuk keluar?</p>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" class="btn px-5 mr-2 text-white" style="background-color: #3E8412 ;">
                            Ya
                        </a>
                        <a href="{{ url()->previous() }}" class="btn px-5 mr-2 text-white" style="background-color: #3E8412 ;">Tidak</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </div>

            </blockquote>
        </div>
    </div>
</div>
</div>

@endsection