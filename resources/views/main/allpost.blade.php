@extends('maindashboard')
@section('content')
    <h5 style="text-align: center;
    color: #979797;
    font-size: 25px;
    font-family: cursive;
    font-weight: 600;
    margin: 20px;
">
        All posts
    </h5>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">handle</th>
            <th scope="col">title</th>
            <th scope="col">category</th>
            <th scope="col">img</th>
            <th scope="col">function</th>
        </tr>

        </thead>

        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">
            @if(isset($post->user->name))
                {{$post->user->name}}
            @else
                some one
                @endif
            </th>
            <td>{{$post->title}}</td>
            <td>{{$post->category->name}}</td>
            <td><img src="{{asset('image/'.$post->url)}}" class="img-sm"></td>
            <td>
                <a href="posts/{{$post->id}}/view" class="btn btn-secondary btn-sm" style="padding: 0px 6px"><i class="fas fa-eye"></i></a>
                @if(Auth::id() == $post->user->id)
                <a href="posts/{{$post->id}}/edit" class="btn btn-primary btn-sm" style="padding: 0px 6px"><i class="fas fa-edit"></i></a>
                @endif
                @if(Auth::id() == $post->user->id)
                <a href="posts/{{$post->id}}/delete" class="btn btn-danger btn-sm" style="padding: 0px 6px"><i class="fas fa-trash"></i></a>
                @endif
            </td>
        </tr>


        </tbody>
        @endforeach
    </table>

    <strong style="text-align: center">{{ $posts->links() }}</strong>


@stop
