<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount()
    {
        $this->product_cat = 'All Category';
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }

    public function render()
    {
        $default_lang = get_default_language();
        $categories = MainCategory::where('translation_lang', $default_lang)->get();
        return view('livewire.header-search-component', ['categories' => $categories]);
    }
}
