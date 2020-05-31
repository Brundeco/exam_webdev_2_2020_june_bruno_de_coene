@extends('layouts.side')

@section('content')

<div class="table-wrapper">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Page title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $item)
            <tr>
                <th scope="row"> {{ $item->id }} </th>
                <td>{{ $item->page_title }}</td>
                <td class="flex-cell">
                    <a class="admin-btn btn-1" href="{{ route('pages.edit', $item->id) }}" class="btn">Edit</a>
                    <form action="{{ route('pages.delete', $item->id) }} method=" post"">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}">
                        <button class="admin-btn btn-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection