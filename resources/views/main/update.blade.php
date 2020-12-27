@extends('index')
@section('content')
    <h1 style="margin-left: 13px; color: grey">
        Update:
    </h1>
    <form style="box-shadow: 1px 1px 5px -1px; padding: 10px; border-radius: 5px; margin: 20px" enctype="multipart/form-data"  method="get" action="{{route('home.update.post', $post->id)}}" >
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput">name</label>
            <input required min="5" type="text" value="{{$post->title}}" class="form-control" id="formGroupExampleInput" placeholder="your title" name="title">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">description</label>
            <input max="190" required type="text" value="{{$post->description}}" class="form-control" id="formGroupExampleInput2" name="description" placeholder="desc..">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">image</label>
            <input  style="cursor: pointer" type="file" required class="form-control" id="formGroupExampleInput2" name="url" placeholder="photo">
        </div>

        <select class="form-control" name="category_id" required >
            @foreach($cats as $cat)
                <option  value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>



        <select class="form-control" name="tags[]" required multiple>
            @foreach($tags as $tag)
                <option  value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>

        <input type="submit" style="margin: 10px; width: 70px; border-radius: 5px; padding: 3px 10px" class="btn-primary" value="submit">

    </form>
@stop
