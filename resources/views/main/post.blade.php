@extends('index')
@section('content')

    <div class="media" style="margin: 20px">
        @if(isset($post->user->url))
            <img src="{{asset('image/'.$post->user->url)}}" width="140" class="align-self-start mr-3"style="box-shadow: 1px 1px 5px -1px; box-shadow: 1px 1px 5px -1px;
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
        <div class="media-body">
            <h1 class="mt-0" style="color: grey">{{$post->title}}</h1>


            <p style="color: #b27e7e; font-weight: 500">{{$post->description}}</p>


            @if($post->url)
                <img style="max-width: 85%; margin: auto; border-radius: 5px" src="{{asset('image/'.$post->url)}}">
            @endif

            <div class="about text-left">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <small>Category : </small> <a class="kind-of-cat" style="color: #005dc2">{{$post->category->name}}</a></li>
                        <li class="list-group-item"><small> posted at : </small> <b class="kind-of-cat" style="color: #005dc2; cursor: text"> {{$post->created_at->diffForHumans()}}</b></li>
                        <li class="list-group-item"><small> Tags </small> <b class="kind-of-cat" style="color: #005dc2;cursor: text">
                                @foreach($post->tags as $tag)
                             | {{$tag->name}} |
                                @endforeach
                            </b></li>
                        <li class="list-group-item"><small> By : </small> <b class="kind-of-cat" style="color: #005dc2;cursor: text">
                            @if(isset($post->user->name))
                                {{$post->user->name}}
                            @else
                                Some One
                                @endif
                            </b></li>
                    </ul>
            </div>
            {{--   likeeee         --}}
            @if(Auth::check())
                @foreach($stops as $stop)
                    @if($stop->value == 1)
                        <div class="col-12" >
                            <div style=" color: red; margin: 30px 0">
                                <h5>" Likes Was Stopped "</h5>
                            </div>

                        </div>


                    @else


                        @php
                            $like_count = 0;
                            $dislike_count = 0;

                            $like_status = 'btn btn-outline-secondary';
                            $dislike_status = 'btn btn-outline-secondary';
                        @endphp

                        @foreach($post->likes as $like)
                            @php
                                if($like->like == 1 )
                                    $like_count = $like_count + 1 ;

                                if($like->like == 0 )
                                    $dislike_count = $dislike_count + 1 ;

                               if($like->like == 1 && $like->user_id == Auth::user()->id)
                                   $like_status = 'btn btn-primary';

                               if($like->like == 0 && $like->user_id == Auth::user()->id)
                                   $dislike_status = 'btn btn-danger';
                            @endphp
                        @endforeach
                        <div class="like">
                            <button type="button" style="outline: none !important;" data-postid="{{$post->id}}_l"  data-like="{{$like_status}}" class="{{$like_status}} like">(<span class="like_count">{{$like_count}}</span>) <i class="far fa-thumbs-up"></i></button>
                            <button type="button"  data-postid="{{$post->id}}_d"  class="{{$dislike_status}} dislike">(<span class="dislike_count">{{$dislike_count}}</span>) <i class="far fa-thumbs-down"></i></button>
                        </div>


                    @endif
                @endforeach
            @endif
            @if(isset($post->user->id) && $post->user->id == Auth::user()->id)
            <div style="margin: 15px">
                <a class="btn btn-primary" href="{{route('home.update.view', $post->id)}}"><i class="fas fa-edit"></i></a>
                <a class="btn btn-danger" href="{{route('home.delete2', $post->id)}} "><i class="fas fa-trash"></i></a>
            </div>
            @endif
        </div>

    </div>

    @stop
