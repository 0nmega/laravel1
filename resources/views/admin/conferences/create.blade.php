@extends('layouts.app')

@section('content')
    <h1>Sukurti naują konferenciją</h1>
    <form method="POST" action="{{ route('admin.conferences.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Pavadinimas" required>
        <textarea name="description" placeholder="Aprašymas" required></textarea>
        <button type="submit">Sukurti</button>
    </form>
@endsection
