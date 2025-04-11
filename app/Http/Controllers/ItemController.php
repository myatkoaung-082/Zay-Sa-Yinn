<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    //
    public function show_buyed_items(){
        $items = Item::with('images','user') // Example if you have images relationship
        ->whereNotNull('buyed_date') // Only get bought items
        ->orderBy('buyed_date', 'desc')
        ->paginate(10);
        return view('items',compact('items'));
    }
    public function add(Request $request){
        $messages = [
            'itemBuyedDate.required' => 'Item Buyed Date field is required.',
            'itemBuyedDate.date' => 'Item Buyed Date must be a valid date.',
            'itemName.required' => 'Item Name field is required.',
            'itemName.string' => 'Item Name must be a string.',
            'itemName.max' => 'Item Name may not be greater than 255 characters.',
            'itemPrice.required' => 'Item Price field is required.',
            'itemPrice.numeric' => 'Item Price must be a numeric value.',
            'itemPrice.min' => 'Item Price must be at least 0.',
            'itemImages.array' => 'Item Images must be an array.',
            'itemImages.min' => 'Item Images must contain at least one image.',
            'itemImages.*.image' => 'Each item image must be an image.',
            'itemImages.*.mimes' => 'Each item image must be a file of type: jpeg, png, jpg.',
            'itemImages.*.max' => 'Each item image may not be greater than 2048 kilobytes.',
        ];

        // Validate request
        $validator = Validator::make($request->all(), [
            'itemBuyedDate' => 'required|date', // Ensure it's a valid date
            'itemName' => 'required|string|max:255', // Ensure it's a string with max length 255
            'itemPrice' => 'required|numeric|min:0', // Ensure it's a numeric value and non-negative
            'itemImages' => 'nullable|array|min:1', // Ensure it's an array with at least one item
            'itemImages.*' => 'image|mimes:jpeg,png,jpg|max:2048', // Validate each image in the array
        ], $messages);

        $errors = [];

        if ($validator->fails() || !empty($errors)) {
            $allErrors = array_merge($validator->errors()->toArray(), $errors);
            return response()->json(['status' => false, 'errors' => $allErrors]);
        }

            // Create the item record
    $item = Item::create([
        'name' => $request->itemName,
        'price' => $request->itemPrice,
        'buyed_date' => $request->itemBuyedDate,
        'user_id' => Auth::user()->id
    ]);

         // Handle itemImages uploads if they exist
    if ($request->hasFile('itemImages')) {
        $imageNames = [];
        
        foreach ($request->file('itemImages') as $image) {
            // Generate unique filename
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            
            // Store image in public/images/items directory
            $image->move(public_path('images/items'), $imageName);
            
            // Save just the filename
            $imageNames[] = $imageName;
        }

        // Save image names to database (assuming you have an images relationship)
        $item->images()->createMany(
            array_map(fn($name) => ['image_name' => $name], $imageNames)
        );
    }
        
        return response()->json(['status' => true, 'message' => 'Item added successfully!']);
    }
}

