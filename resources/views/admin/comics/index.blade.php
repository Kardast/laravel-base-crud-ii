@extends('admin.templates.base')

@section('pageTitle', 'Admin page')

@section('pageMain')
    <main>

        <h2>Admin di prova</h2>
        <a href="{{ route('comics.create') }}">Vai a Create</a>
        {{-- <a href="{{ route('comics.show') }}">Vai a Show</a> --}}
        <a href="{{ route('home') }}">Vai a home</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>title</th>
                    <th>description</th>
                    {{-- <th>street</th> --}}
                    <th>thumb</th>
                    <th>price</th>
                    <th>series</th>
                    <th>sale date</th>
                    <th>type</th>
                    {{-- <th colspan="3">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        {{-- <td>{{ $comic->street }}</td> --}}
                        <td>{{ $comic->thumb }}</td>
                        {{-- <td><img src="{{ $comic->thumb }}" alt=""></td> --}}
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="" class="btn btn-primary">View</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="" method="post">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        {{-- <td>
                            <a href="{{ route('houses.show', ['house' => $house]) }}" class="btn btn-primary">View</a>
                        </td>
                        <td>
                            <a href="{{ route('houses.edit', ['house' => $house]) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('houses.destroy', ['house' => $house]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

    </main>
@endsection
