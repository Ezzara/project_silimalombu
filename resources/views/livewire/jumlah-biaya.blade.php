<div>
    <p class="mt-3">Pengiriman : JNE Reguler</p>
        <label class="mr-sm-2" for="inlineFormCustomSelect">Provinsi Tujuan :</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name=kd_provinsi wire:model="ongkir">
                @foreach ($biaya as $biaya)
                <option value="{{$biaya->id}}">{{$biaya->nm_provinsi}} (Rp.{{$biaya->biaya_kirim}})</option>
                @endforeach
            </select>
                
    <div class="text-right mt-3">
        @php ($subtotal = 0)
        @foreach (session('cart') as $cart)
            @php ($subtotal += $cart['price'] * $cart['quantity'])
        @endforeach
        <p>Subtotal Produk Rp.{{ $subtotal }}</p>
        <p>Ongkos Kirim Rp. {{ $biaya_kirim }} </p>
        <p>Total Pembayaran <b>Rp.{{ $total }}</b></p>
        <input type="hidden" name="biaya_total" value="{{ $total }}">
    </div>
</div>
