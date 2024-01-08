@extends('layouts.app')


@section('shape')
    <button type="button" class="btn btn-success">Create post</button>
<hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">posted by</th>
            <th scope="col">Created at</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['posted by']}}</td>
            <td>{{$post->created_at->format('Y-m-d')}}</td>

{{--            @dd($post->created_at)--}}
            <td>
{{--               <a href="/posts/{{$post->id}}}" class="btn btn-primary">View</a>--}}
               <a href="{{route('post.show' , $post->id)}}" class="btn btn-primary">View</a>
               <a class="btn btn-info">Info</a>
               <a class="btn btn-danger">Danger</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endsection



