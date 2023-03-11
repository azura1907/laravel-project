@extends('admin.master')

@section('title', 'Category - Edit')

@section('content-master')
    <h1>CategoryController - Action Edit</h1>
       <form action="{{ route('admin.category.update', ['id' => $param_id]) }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Detail</td>
                <td><input type="text" name="detail" id="detail"></td>
            </tr>
            <tr>
                <td>Order By</td>
                <td><input type="text" name="order" id="order"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
@endsection