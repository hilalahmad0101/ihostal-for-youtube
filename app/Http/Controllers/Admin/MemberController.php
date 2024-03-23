<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Memeber;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $members=Memeber::latest()->get();
    }
    public function create(){}
    public function store(Request $request){}
    public function edit($id){}
    public function update(Request $request,$id){}
    public function delete($id){}
}
