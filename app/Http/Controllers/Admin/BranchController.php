<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\BranchCategory;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::latest()->get();
        return view('admin.branch.list', compact('branches'));
    }

    public function create()
    {
        $branch_category = BranchCategory::latest()->get();
        return view('admin.branch.create', compact('branch_category'));
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'branch_category_id' => 'required|exists:branch_categories,id',
            'branch_name' => 'required',
            'branch_alias' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'capacity' => 'required',
            'footer' => 'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,JPG,JPEG,PNG|max:1024',
            'address' => 'required',
        ]);

        $logo = "";
        if ($request->file('logo')) {
            $logo = $request->file('logo')->store('branch/logo', 'public');
        }

        $validation['logo'] = $logo;

        Branch::create($validation);

        return to_route('admin.branch.list')->with('success', 'Branch create successfully');
    }

    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
        $branch_category = BranchCategory::latest()->get();
        return view('admin.branch.update', compact('branch_category', 'branch'));
    }


    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'branch_category_id' => 'required|exists:branch_categories,id',
            'branch_name' => 'required',
            'branch_alias' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'capacity' => 'required',
            'footer' => 'required',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,JPG,JPEG,PNG|max:1024',
            'address' => 'required',
        ]);

        $branch = Branch::findOrFail($id);
        $logo = "";
        if ($request->file('logo')) {
            $logo = $request->file('logo')->store('branch/logo', 'public');
        } else {
            $logo = $branch->logo;
        }

        $validation['logo'] = $logo;

        $branch->update($validation);

        return to_route('admin.branch.list')->with('success', 'Branch update successfully');
    }

    public function delete($id)
    {
        // $branch = Branch::findOrFail($id)->delete();
        Branch::destroy($id);
        return to_route('admin.branch.list')->with('success', 'Branch delete successfully');
    }
}
