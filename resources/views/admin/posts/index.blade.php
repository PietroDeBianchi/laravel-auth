@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td colspan="2">{{$post->title}}</td>
            <td>{{$post->slug}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection