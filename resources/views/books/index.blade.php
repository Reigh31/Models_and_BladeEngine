@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Books List</h1>
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ISBN</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Author</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Description</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date Published</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($books as $book)
                <tr>
                    <td class="text-left py-3 px-4">{{ $book->id }}</td>
                    <td class="text-left py-3 px-4">{{ $book->isbn }}</td>
                    <td class="text-left py-3 px-4">{{ $book->title }}</td>
                    <td class="text-left py-3 px-4">{{ $book->author }}</td>
                    <td class="text-left py-3 px-4">{{ $book->description }}</td>
                    <td class="text-left py-3 px-4">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
