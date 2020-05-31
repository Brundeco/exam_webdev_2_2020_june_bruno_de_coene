@extends('layouts.side')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Blog id</th>
                        <th>Blog title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }} </td>
                        <td> {{ $item->title }}</td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $item->id }}">
                                <button>Edit</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection