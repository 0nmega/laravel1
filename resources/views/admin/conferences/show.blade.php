@extends('layouts.app')

@section('content')
    <h1>Konferencija: {{ $conference->title }}</h1>
    <p>{{ $conference->description }}</p>
    <p>Data: {{ $conference->date }}</p>

    <h2>Registruotis į konferenciją</h2>

    <form method="POST" action="{{ route('conferences.register', $conference->id) }}">
        @csrf
        <input type="text" name="name" placeholder="Vardas" required>
        <input type="email" name="email" placeholder="El. paštas" required>
        <button type="submit">Registruotis</button>
    </form>
@endsection
