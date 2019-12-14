@extends('base')

<title>Write Post</title>
{{--@section('title')Write Post@endsection--}}

@section('content')

    <a href="{{route('add.category')}}" class="btn btn-success">Add Category</a>
    <a href="" class="btn btn-primary">All Category</a>

    <br><br>
    <p>Add post</p>
    <form action="#" method="post">
        @csrf

        <input type="text" name="title" placeholder="title..."><br><br>

        <select name="category_id">
            <option>fk</option>
            <option>fk</option>
        </select><br><br>

        <input type="text" name="details" placeholder="details..."><br><br>

        <input type="file" name="image"><br><br>

        <button type="submit" class="btn btn-warning">SUBMIT</button>
    </form>

@endsection
