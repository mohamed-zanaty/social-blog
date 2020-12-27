@extends('index')
@section('content')
    <h1 style="margin-left: 13px; color: grey">
        send feed back :
    </h1>
    <form style="box-shadow: 1px 1px 5px -1px; padding: 10px; border-radius: 5px; margin: 20px" action="{{route('contact.store')}}" method="post">
        @csrf
        {{-- Success       --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}

            </div>
        @endif
        {{--  end success      --}}
        <div class="form-group">
            <label for="exampleFormControlInput1">Your Name</label>
            <input name="name" type="text" class="form-control" maxlength="15" id="exampleFormControlInput1" required placeholder="john ma..">
        </div>

        <label for="customRange2">Your Evaluation</label>
        <input type="range" name="evaluation" required  class="custom-range" min="10" max="100" id="customRange2">


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Your Message</label>
            <textarea name="message" class="form-control" required placeholder="content" minlength="20" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <input type="submit" class="btn btn-info" value="Send">
    </form>
@stop
