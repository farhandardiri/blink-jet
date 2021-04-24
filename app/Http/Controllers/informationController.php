<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\information;

class informationController extends Controller
{
    public function view()
    {
        return view('name');
    }

    public function store(Request $request)
    {
        $data = new information;
        $data->name = $request->name;
        $data->address = $request->address;

        if ($request->file('image')) {
            $image = $request->file('image');
            $imagename =  date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload'), $imagename);
            $data['image'] = $imagename;
        }
        $data->save();
        return back();
    }
}
