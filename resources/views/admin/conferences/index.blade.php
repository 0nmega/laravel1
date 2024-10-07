@extends('layouts.admin')
@section('content')
    <h1>All Conferences</h1>

    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($conferences as $conference)
            <tr>
                <td>{{ $conference->title }}</td>
                <td>{{ $conference->date }}</td>
                <td>{{ $conference->location }}</td>
                <td>
                    <a href="{{ route('admin.conferences.edit', $conference->id) }}">Edit</a>
                    <form action="{{ route('admin.conferences.destroy', $conference->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
