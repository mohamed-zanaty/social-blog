@extends('maindashboard')
@section('content')
    <h5 style="text-align: center;
    color: #979797;
    font-size: 25px;
    font-family: cursive;
    font-weight: 600;
    margin: 20px;
">
        Our Evaluation
    </h5>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">message</th>
            <th scope="col">evaluation</th>
            <th scope="col">time</th>
            <th scope="col">function</th>
        </tr>

        </thead>

        <tbody>
        @foreach($feedsback as $back)
        <tr>
            <th scope="row">{{$back->name}}</th>
            <td>{{$back->message}}</td>


            <td>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar"  aria-valuenow="{{$back->evaluation}}" aria-valuemin="10" style="width: {{$back->evaluation}}%" aria-valuemax="100"></div>
                </div>
            </td>
            <td>{{$back->created_at->diffForHumans()}}</td>
            <td>

                <a href="feeds/{{$back->id}}/delete" class="btn btn-danger btn-lg" style="padding: 3px 10px"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <strong style="text-align: center">{{ $feedsback->links() }}</strong>


@stop
