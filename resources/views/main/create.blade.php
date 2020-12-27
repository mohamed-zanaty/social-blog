@extends('index')
@section('content')


    <h1 style="margin-left: 13px; color: grey">
        Write :
    </h1>


    @foreach($stops as $stop)
        @if($stop->value == 1)
            <div class="col-12" >
                <div style=" color: red; margin: 50px">
                    <h1>"oops you can't Write Post Now "</h1>
                </div>

            </div>
        @else
            <form style="box-shadow: 1px 1px 5px -1px; padding: 10px; border-radius: 5px; margin: 20px" enctype="multipart/form-data" action="create-post/{{Auth::user()->id}}/store" method="post" >
                @csrf
        {{-- Success       --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}

                    </div>
                @endif
        {{--  end success      --}}
                <div class="form-group">
                    <label for="formGroupExampleInput">title</label>
                    <input required min="5" autocomplete="off" type="text" maxlength="20" class="form-control" id="formGroupExampleInput" placeholder="your title" name="title">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">description</label>
                    <input max="190" required type="text" class="form-control" id="formGroupExampleInput2" name="description" placeholder="desc..">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">image</label>
                    <input  style="cursor: pointer" type="file" required class="form-control" id="formGroupExampleInput2" name="url" placeholder="photo">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput2">category</label>
                <select style="margin-bottom: 20px " class="form-control" name="category_id" id="formGroupExampleInput2" required>

                   @foreach($categories as $category)
                    <option  value="{{$category->id}}">{{$category->name}}</option>
                   @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">tags</label>
                <select class="form-control" name="tags[]" required multiple>
                   @foreach($tags as $tag)
                    <option  value="{{$tag->id}}">{{$tag->name}}</option>
                   @endforeach
                </select>
            </div>
                <input type="submit" style="margin: 10px; width: 70px; border-radius: 5px; padding: 3px 10px" class="btn-primary" value="submit">
            </form>
        @endif
    @endforeach
@stop
