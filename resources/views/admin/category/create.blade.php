@extends('admin.master')

@section('title', 'Category - Create')

@section('content-master')
    <h1>CategoryController - Action Create</h1>
    <!-- route('admin.category.store') -> name cua route ben web.php -->
    <form action="{{ route('admin.category.store') }}" method="POST">
        <!-- csrf -> tao 1 token ao, neu k de vao, khi bam submit se bi error 419 (expired) -->
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