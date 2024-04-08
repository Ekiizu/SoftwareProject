<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            'category' => 'required|string|in:Dairy,Meat,Fruit,Vegetable,Bread',
            'created_at' => 'required|date',
            'last_updated' => 'required|date',
            'expiration_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'confirmation' => 'required|accepted',
        ];
    }
}

