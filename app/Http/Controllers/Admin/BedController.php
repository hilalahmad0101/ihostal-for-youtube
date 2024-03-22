<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use App\Models\Room;
use Illuminate\Http\Request;

class BedController extends Controller
{
    public function index()
    {
        $beds = Bed::latest()->get();
        return view('admin.bed.list', compact('beds'));
    }

    public function create()
    {
        $rooms = Room::latest()->get();
        return view('admin.bed.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'bed_no' => 'required',
            'room_id' => 'required|exists:rooms,id',
            'description' => 'required'
        ]);

        Bed::create($validate);

        return to_route('admin.bed.list')->with('success', 'Bed add successfully');
    }

    public function edit($id){
        $bed=Bed::findOrFail($id);
        $rooms=Room::latest()->get();
        return view('admin.bed.update', compact('bed','rooms'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'bed_no' => 'required',
            'room_id' => 'required|exists:rooms,id',
            'description' => 'required'
        ]);

        Bed::findOrFail($id)->update($validate);

        return to_route('admin.bed.list')->with('success', 'Bed update successfully');
    }


    public function delete($id){
        Bed::destroy($id);
        return to_route('admin.bed.list')->with('success', 'Bed delete successfully');
    }

}
