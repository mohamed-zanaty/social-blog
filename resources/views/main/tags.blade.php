@extends('maindashboard')
@section('content')
    <h5 style="text-align: center;
    color: #979797;
    font-size: 25px;
    font-family: cursive;
    font-weight: 600;
    margin: 20px;
">
        Our Tags
    </h5>

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}

        </div>
    @endif

    <div class="row" >

@foreach($tags as $tag)

        <div class="col-md-3">

            <div class="card" style=" width: 15rem; margin:10px auto; box-shadow: 1px 1px 5px -1px;     background-image: linear-gradient( to right , #979797, transparent);">

                <div class="card-body" style="text-align: center">
                    <h3 class="card-title" style="font-size: 28px;
    text-align: center !important;
    margin: 10px auto;
    width: 92%;
    font-family: sans-serif;
    font-weight: 700;
    color: #f9f9ff;">{{$tag->name}}</h3>
                    <p class="card-text" style="    line-height: 2;
        color: #898786;
    font-weight: 600;">Some quick example text to build   the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('tags.show',$tag->id)}}" class="btn btn-dark" >All Posts</a>
                </div>
            </div>
        </div>
@endforeach

    </div>

<form action="{{route('tags.store')}}" method="Post" >
    @csrf
    <div class="row" >
        <div class="col-md-6">
            <div style="margin: 40px; text-align: center" >

                <input required  type="text"  style="border: none;
    background: #ffe8ea;
    border-bottom: 1px solid #d3709d; font-size: 30px;" value="" class="form-control"  placeholder="new Tags" name="name">
            </div>

        </div>
        <div class="col-md-6">
            <div style="margin: 40px; text-align: center;">
               <input type="submit" style="width: 20%" class="btn btn-secondary" value="Add Tag">
            </div>
         </div>
    </div>
</form>
@stop
