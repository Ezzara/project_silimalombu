<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Kategori;

class Catalog extends Component
{
    public $search = '';
    public $option = '';
    public function render()
    {
        return view('livewire.catalog', [
            'product' => Produk::where('nm_produk','like','%'.$this->search.'%')
                    ->when ($this->option != '', function ($q)
                    {
                        return $q->where('kd_kategori', '=', $this->option);
                    }
                )
                    ->paginate(''),
            'kategori' => Kategori::paginate()
        ]);
    }
}
