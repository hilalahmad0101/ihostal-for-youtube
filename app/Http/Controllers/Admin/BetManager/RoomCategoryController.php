<?php

namespace App\Http\Controllers\Admin\BetManager;

use App\Http\Controllers\Controller;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function index()
    {
        $room_categorys = RoomCategory::latest()->get();
        return view('admin.room_categorys.list', compact('room_categorys'));
    }
    public function create()
    {
        return view('admin.room_categorys.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:room_categories,name'
        ]);
        RoomCategory::create($validate);
        return to_route('admin.room_categorys.list')->with('success', 'RoomCategory create successfully');
    }
    public function edit($id)
    {
        $room_category = RoomCategory::findOrFail($id);
        return view('admin.room_categorys.update', compact('room_category'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);
        RoomCategory::findOrFail($id)->update($validate);
        return to_route('admin.room_categorys.list')->with('success', 'RoomCategory updates successfully');
    }

    public function delete($id)
    { 
        RoomCategory::findOrFail($id)->delete();
        return to_route('admin.room_categorys.list')->with('success', 'RoomCategory Delete successfully');
    }
}
