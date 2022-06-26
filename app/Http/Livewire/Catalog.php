<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;

class Catalog extends Component
{
    public function render()
    {
        return view('livewire.catalog', [
            'listing' => Produk::whereLike('nm_produk', $this->search ?? ''),
        ]);
    }
}
