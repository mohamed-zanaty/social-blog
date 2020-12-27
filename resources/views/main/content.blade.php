@extends('index')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}

        </div>
    @endif

    @foreach ($posts as $post)

        <div class="media" style="margin-bottom: 30px;">

            @if(isset($post->user->url))
            <img src="{{asset('image/'.$post->user->url )}}" width="140" class="align-self-start mr-3"style="box-shadow: 1px 1px 5px -1px; box-shadow: 1px 1px 5px -1px;
                    border-radius: 50%;
                    max-width: 98px;
                    /* line-height: 31; */
                    height: 88px;">
            @else
                <img src="{{asset('image/user.png')}}" width="140" class="align-self-start mr-3"style="box-shadow: 1px 1px 5px -1px; box-shadow: 1px 1px 5px -1px;
                        border-radius: 50%;
                        max-width: 98px;
                        /* line-height: 31; */
                        height: 88px;">
            @endif
                <div class="media-body" style=" border-radius: 20px!important;">
                        <h1 class="mt-0" style="color: #800064;">{{$post->title}}</h1>

                        <p style="color: #938bac; font-weight: 500; " > {{$post->description}} ...
                            @if(Auth::check())

                            <a href="{{route('home.post', [$post->id , Auth::user()->id])}}" style=" color: #005dc2; cursor: pointer; font-weight: 500">Read more</a>
                            @endif
                             </p>

                         @if($post->url)
                        <img style="max-width: 70%; min-width: 65%; margin: auto;text-align: center; border-radius: 5px" src="{{asset('image/'.$post->url)}}">
                        @endif

                    {{--        edit    --}}

                    @if(isset(Auth::user()->id) && $post->user_id == Auth::user()->id)
                        <div style="margin-top: 5px">
                            <a class="btn btn-primary" href="{{route('home.update.view', $post->id)}}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="{{route('home.delete', $post->id)}}"><i class="fas fa-trash"></i></a>
                        </div>
                    @endif
                    <hr>

                </div>
        </div>

    @endforeach

    <!-- Pagination -->



    @stop
