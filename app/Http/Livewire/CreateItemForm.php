<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class CreateItemForm extends Component
{
    public Item $item;
    public $business_id;

    protected $rules = [
        'item.name' => 'required|string',
        'item.description' => 'required|string',
    ];

    public function save()
    {
        $this->validate();

        $this->item->save();

        if (!empty($this->item->id) && !is_null($this->item->id))
        {
            return redirect("/dashboard");
        }


    }

    public function mount($business_id)
    {
        $this->business_id = $business_id;
    }

    public function render()
    {
        return view('livewire.create-item-form');
    }
}
