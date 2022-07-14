
<div class="container-lg-12">
    <div class="row mt-3 ">
        <select class="form-select" wire:model="option">
            <option value="">Semua</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        <table class="table bg-light">
            <tr>
                <th>Kode</th>
                <th>ID Order</th>
                <th>Username</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Alamat</th>
                <th>Tanggal Transaksi</th>
                <th>Harga Total</th>
            </tr>
            @foreach ($data as $keranjang)
                <tr>
                    <td>{{ $keranjang->id }}</td>
                    <td>{{ $keranjang->kd_order }}</td>
                    <td>{{ $keranjang->username }}</td>
                    <td>{{ $keranjang->nm_produk }}</td>
                    <td>{{ $keranjang->jumlah }}</td>
                    <td>{{ $keranjang->alamat_lengkap }}</td>
                    <td>{{ \Carbon\Carbon::parse($keranjang->tgl_transaksi)->translatedFormat('d F Y') }}</td>
                    <td>{{$keranjang->harga_total}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
