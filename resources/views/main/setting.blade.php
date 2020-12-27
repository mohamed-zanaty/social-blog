@extends('maindashboard')
@section('content')

    <h5 style="text-align: center;
    color: #979797;
    font-size: 25px;
    font-family: cursive;
    font-weight: 600;
    margin: 20px;
">
        Settings
    </h5>



    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">status</th>
            <th scope="col">update</th>
        </tr>
        </thead>
        <tbody>
        <form action="{{route('setting.like.store')}}">
            @csrf
        <tr>
            <th scope="row">1</th>
            <td>like</td>
            <td>Stop/run like</td>
            <td><input type="checkbox" {{
    $like == 1 ? 'checked' : ''}} name="like"  >
</td>
            <td><button type="submit" class="btn btn-primary" > change</button></td>
        </tr>
        </form>



        <form action="{{route('setting.create.store')}}">
            @csrf
        <tr>
            <th scope="row">4</th>
            <td>create</td>
            <td>Stop/run create posts</td>
            <td><input type="checkbox" {{
    $create == 1 ? 'checked' : ''}} name="create">
            </td>
            <td><button type="submit" class="btn btn-primary" > change</button></td>
        </tr>
        </form>



        </tbody>
    </table>







    <form action="{{route('setting.title.store')}}" autocomplete="off">
        @csrf
        <div class="row" >
            <div class="col-md-6">
                <div style="margin: 40px; text-align: center" >

                    <textarea required autocomplete="false"  style="border: none;
    background: #ffe8ea;
        border-bottom: 1px solid #d3709d; font-size: 30px;" class="form-control"  placeholder="Logo name" name="title"></textarea>
                </div>

            </div>
            <div class="col-md-6">
                <div style="margin: 40px; text-align: center;">
                    <input type="submit" style="width: 20%" class="btn btn-secondary" value="change">
                </div>
            </div>

        </form>


    @stop
