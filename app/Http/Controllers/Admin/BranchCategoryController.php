<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BranchCategory;
use Illuminate\Http\Request;

class BranchCategoryController extends Controller
{
    public function index()
    {
        $branch_categorys = BranchCategory::latest()->get();
        return view('admin.branch_categorys.list', compact('branch_categorys'));
    }
    public function create()
    {
        return view('admin.branch_categorys.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:branch_categories,name'
        ]);
        BranchCategory::create($validate);
        return to_route('admin.branch_categorys.list')->with('success', 'BranchCategory create successfully');
    }
    public function edit($id)
    {
        $branch_category = BranchCategory::findOrFail($id);
        return view('admin.branch_categorys.update', compact('branch_category'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);
        BranchCategory::findOrFail($id)->update($validate);
        return to_route('admin.branch_categorys.list')->with('success', 'BranchCategory updates successfully');
    }

    public function delete($id)
    { 
        BranchCategory::findOrFail($id)->delete();
        return to_route('admin.branch_categorys.list')->with('success', 'BranchCategory Delete successfully');
    }
}
