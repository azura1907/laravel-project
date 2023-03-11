<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('admin.category.index');
    }

    public function create() {
        return view('admin.category.create');
    }

    public function edit($id) {
        //tao param_id = $id de truyen id xuong function update
        return view('admin.category.edit', ['param_id' => $id]);
    }

    public function delete($id) {
        echo "This will delete category $id";
        return view('admin.category.delete');
    }

    public function store (Request $request) {
        //$data = $request->only('name', 'detail','order');
        //thay vi khai bao $data nhu tren -> de ngan gon hon thi lam nhu ben duoi, lay het tru token
        $data = $request->except('_token');
    }

    //lay param_id da lay duoc ben tren edit, dua vao de update
    public function update (Request $request, $param_id) {
        $data = $request->except('_token');
    }

    public function getAllCategory () {
        $category = CategoryModel::all();
        return $category;
    }
}
