<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index() {
        return view('admin.product.index');
    }

    public function create() {
        return view('admin.product.create');
    }

    public function edit($id) {
        echo "This will edit product $id";
        return view('admin.product.edit');
    }

    public function delete($id) {
        echo "This will delete product $id";
        return view('admin.product.delete');
    }
}
