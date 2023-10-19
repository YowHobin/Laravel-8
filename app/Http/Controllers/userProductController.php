<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class userProductController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input = $request->all();


        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('home')
                        ->with('success','Announcement created successfully.');
    }
}
