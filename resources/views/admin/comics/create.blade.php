@extends('admin.templates.base')

@section('pageTitle', 'Create page')

@section('pageMain')

    <h1>Insert new Comic</h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="thumb">Img Cover link</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
        </div>
        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
        </div>

        <button>Save</button>
    </form>
    <a href="{{ route('comics.index') }}">Vai a Comics</a>

@endsection
