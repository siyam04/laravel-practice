@extends('base')

<title>Add Category</title>

@section('content')

    <p>Add Category</p>

    <form action="{{route('store.category')}}" method="post">
        @csrf

        <input type="text" name="category_name" placeholder="category name..."><br><br>

        <input type="text" name="slug" placeholder="slug..."><br><br>

        <button type="submit" class="btn btn-danger">SUBMIT</button>
    </form>

@endsection

