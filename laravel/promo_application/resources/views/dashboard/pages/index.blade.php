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
                <td>{{ ucfirst($item->page_title) }} page</td>
                <td class="flex-cell">
                    @if ($item->page_title === 'blog')
                    <a class="admin-btn btn-1" href="{{ route('blog.index') }}" class="btn">Edit</a>
                    @else
                    <a class="admin-btn btn-1" href="{{ route('pages.edit', $item->id) }}" class="btn">Edit</a>
                    @endif

                    {{-- <form action="{{ route('pages.delete', $item->id) }} method=" post"">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}">
                        <button class="admin-btn btn-delete">Delete</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection