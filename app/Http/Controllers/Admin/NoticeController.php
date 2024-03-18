<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::latest()->get();
        return view('admin.notice.list', compact('notices'));
    }


    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        $validate=$request->validate([
            'title' => 'required',
            'date' => 'required',
            'content' => 'required'
        ]);

        Notice::create($validate);

        return to_route('admin.notice.list')->with('success','Notice create successfully');
    }

    public function edit($id){
        $notice=Notice::findOrFail($id);
        return view('admin.notice.update',compact('notice'));
    }


    public function update(Request $request,$id)
    {
        $validate=$request->validate([
            'title' => 'required',
            'date' => 'required',
            'content' => 'required'
        ]);

        Notice::findOrFail($id)->update($validate);

        return to_route('admin.notice.list')->with('success','Notice update successfully');
    }

    public function delete($id){
        Notice::destroy($id);
        return to_route('admin.notice.list')->with('success','Notice delete successfully');
    }
}
