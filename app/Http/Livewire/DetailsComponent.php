<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $popular_products=Product::inRandomOrder()->limit(4)->get();
        $related_products=Product::where('caregory_id',$product->caregory_id)->inRandomOrder()->limit(4)->get();
        return view('livewire.details-component',
            [
                'product' => $product,
                'related_products'=>$related_products,
                'popular_products'=>$popular_products
            ])->layout('layouts.base');
    }
}
