@extends('admin.templates.base')

@section('pageTitle', 'Admin page')

@section('pageMain')
    <main>

        <h2>Admin di prova</h2>
        <a href="{{ route('comics.create') }}">Vai a Create</a>
        {{-- <a href="{{ route('comics.show') }}">Vai a Show</a> --}}
        <a href="{{ route('home') }}">Vai a home</a>

    </main>
@endsection
