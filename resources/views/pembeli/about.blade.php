@extends ('layouts.userApp')
@section ('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mt-5"> Tentang Kami</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 mt-5 text-center">
            <img src="{{ asset('image/tentang.jpeg') }}" alt="" style="width:75%">
        </div>
        <div class="col-md-3 mt-5 lead">
            <h3 class="text-center mb-3">Profil Perusahaan</h3>
            <p class="text-justify">Ecovillage Silimalombu merupakan suatu UKM yang bergerak pada sektor pariwisata dan
                penjualan produk lokal.
                Didirikan oleh Ibu Ratnauli Gultom dan suaminya Thomas UKM ini mengedepankan konsep Eco-farm yang dimana
                memanfaatkan alam yaitu perkebunan dan pertanian,
                memberikan kualitas yang baik dalam proses pembuatan produk.
                Dengan terciptanya produk-produk hasil alam ini dapat membuat UKM Ecovillage Silimalombu menjadi salah
                satu organisasi yang berjaya dalam dunia usaha.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h2><u>Info Kontak</u></h2>
        </div>
    </div>

    <div class="row pb-5">
        <div class="col-md-2"></div>
        <div class="col-md-4 mt-5 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.845136676815!2d98.9109907153282!3d2.557210257217862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031e6654dd02ae7%3A0x49f4adeb2462a8c4!2sEcovillage%20Silimalombu%20homestay%2Ffarmstay!5e0!3m2!1sen!2sid!4v1656944299960!5m2!1sen!2sid" width="75%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-3 mt-5 lead">
            <h4>Alamat</h4>
            <p>Silimalombu, Kecamatan Onan Runggu, Kapupaten Samosir, Sumatera Utara, Indonesia, Kodepos 22094.</p>

            <h4>Email</h4>
            <p>r(at)laketoba.net</p>

            <h4>Telepon</h4>
            <p>+6281260858209</p>
        </div>
    </div>
</div>
@endsection