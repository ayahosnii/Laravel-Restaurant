<?php

namespace App\Http\Livewire;

use App\Models\admin\MainCategory;
use Livewire\Component;

class FilterComponent extends Component
{
    public $filterCat;
    public function mount($categories)
    {
        $this->categories = $categories;
    }

    public function filterCat()
    {
        dd($this->categories);
    }
    public function render()
    {
        $default_lang = get_default_language();


        $categories = MainCategory::where('translation_lang', $default_lang)->get();

        return view('livewire.filter-component', ['categories' => $categories]);
    }
}
