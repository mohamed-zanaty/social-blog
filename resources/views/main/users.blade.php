@extends('maindashboard')
@section('content')
    <h5 style="text-align: center;
    color: #979797;
    font-size: 25px;
    font-family: cursive;
    font-weight: 600;
    margin: 20px;
">
        All Users
    </h5>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">avatar</th>
            <th scope="col">function</th>
        </tr>

        </thead>

        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            @if($user->url)
                <td><img src="{{asset('image/'.$user->url)}}" class="img-sm"></td>
            @else
                <td><img src="{{asset('image/user.png')}}" class="img-sm"></td>
            @endif
                <td>

                <a href="users/{{$user->id}}/delete" class="btn btn-danger btn-lg" style="padding: 3px 10px"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <strong style="text-align: center">{{ $users->links() }}</strong>


@stop
