<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('admin.user.index');
    }

    public function create() {
        return view('admin.user.create');
    }

    public function edit($id) {
        echo "This will edit user $id";
        return view('admin.user.edit');
    }

    public function delete($id) {
        echo "This will delete user $id";
        return view('admin.user.delete');
    }
}
