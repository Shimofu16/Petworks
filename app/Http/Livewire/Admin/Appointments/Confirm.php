<?php

namespace App\Http\Livewire\Admin\Appointments;

use App\Models\category;
use App\Models\Doctor;
use App\Models\product;
use App\Models\SoldProduct;
use Illuminate\Support\Collection;
use Livewire\Component;

class Confirm extends Component
{
    public $currentStep = 1;
    public $totalSteps = 2;
    public $doctors;
    public $appointment_id;
    public $categories;
    public $category_id;
    public $products = [];
    public $selected_products = [];
    public $productId;
    public $prevProductId;
    public $total = 0;
    public $once = true;

    /* dito yung variables ng inc */
    public $complaint;

    public function next()
    {
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function back()
    {
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function mount()
    {
        $this->doctors = Doctor::all();
        $this->categories = category::all();
    }
    public function increase($id)
    {
        try {
            $product = SoldProduct::where('appointment_id', $this->appointment_id)
                ->where('product_id', $id)
                ->firstOrFail();
            $product->quantity = $product->quantity + 1;
            $product->update();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function decrease($id)
    {
        try {
            $product = SoldProduct::where('appointment_id', $this->appointment_id)
                ->where('product_id', $id)
                ->firstOrFail();
            $product->quantity = $product->quantity - 1;
            $product->update();
            if ($product->quantity == 0) {
                $product->delete();
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function updatedProductId($productId)
    {
        $product = product::where('id', $productId)->first();
        try {
            $sold = SoldProduct::where('appointment_id', $this->appointment_id)
                ->where('product_id', $productId)
                ->firstOrFail();
            $sold->quantity = $sold->quantity + 1;
            $sold->update();
        } catch (\Throwable $th) {
            SoldProduct::create([
                'appointment_id' => $this->appointment_id,
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        $this->reset('productId');
    }
    public function render()
    {
        $this->total = 0;
        $this->selected_products = SoldProduct::where('appointment_id', $this->appointment_id)->get();
        foreach ($this->selected_products as $product) {
            $this->total = $this->total + ($product->product->price * $product->quantity);
        }
        $this->products = product::where('category_id', '=', $this->category_id)->get();
        return view('livewire.admin.appointments.confirm');
    }
}
