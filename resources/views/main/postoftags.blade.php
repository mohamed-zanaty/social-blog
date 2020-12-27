@extends('index')
@section('content')
    <div class="row">
        <div class="col-12">
            <h3 style="    display: inline-block;
    color: #800064;">   Posts of {{$tags->name}} </h3> = <small style="font-size: 18px;
    color: #3d29d7;
    font-weight: 800;">{{$tags->posts()->count()}}</small>
        </div>
    </div>
    @foreach ($tags->posts as $post)

        <div class="media" style="margin-bottom: 30px;">
            @if($post->user->url)
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
                <div class="media-body" style=" border-radius: 20px!important;">
                        <h1 class="mt-0" style="color: #800064;">{{$post->title}}</h1>

                        <p style="color: #938bac; font-weight: 500; " > {{$post->description}} ... <a href="{{route('home.post', $post->id)}}" style=" color: #005dc2; cursor: pointer; font-weight: 500">Read more</a>... </p>
                        @if($post->url)
                        <img style="max-width: 70%; min-width: 65%; margin: auto;text-align: center; border-radius: 5px" src="{{asset('image/'.$post->url)}}">
                        @endif
                    {{--   likeeee         --}}
            @if(Auth::check())

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



                    {{--        edit    --}}

                    @if(isset(Auth::user()->id) && $post->user_id == Auth::user()->id)
                        <div style="margin-top: 5px">
                            <a class="btn btn-primary" href="{{route('home.update.view', $post->id)}}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="{{route('home.delete', $post->id)}}"><i class="fas fa-trash"></i></a>
                        </div>
                    @endif
                    </div>

        </div>
    @endforeach

    <!-- Pagination -->



    @stop
