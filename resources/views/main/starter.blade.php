@extends('maindashboard')

@section('content')
    <!-- /.content-header -->
      @if(session('update'))
          <div class="alert alert-success">
              {{session('update')}}

          </div>
  @endif
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            <h5 style="text-align: center;
    color: #979797;
    font-size: 25px;
    font-family: cursive;
    font-weight: 600;
">
                Update Your profile
            </h5>
          <form enctype="multipart/form-data" method="post" action="{{route('update', Auth::user()->id)}}">
              @csrf
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="formGroupExampleInput" style="font-size: 18px;
                                                                        font-family: monospace;
                                                                        color: #7faad2;
                                                                    ">
                              name
                          </label>
                          <input required min="5" type="text" maxlength="20" class="form-control" style="border: none;
    background: #ffe8ea;
    border-bottom: 1px solid #d3709d;"
                                 id="formGroupExampleInput" placeholder="your name" value="{{$user->name}}" name="name">
                          @error('name')
                          <span class="text text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="formGroupExampleInput" style="font-size: 18px;
                                                                        font-family: monospace;
                                                                        color: #7faad2;
                                                                    ">
                             avatar
                          </label>
                          <input  type="file"   class="form-control" style="border: none;
    background: #ffe8ea;
    border-bottom: 1px solid #d3709d;"
                                 id="formGroupExampleInput"  placeholder="" name="url">
                          @error('url')
                          <span class="text text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>




                  <div class="col-12">
                      <div class="form-group">
                          <label for="formGroupExampleInput" style="font-size: 18px;
                                                                        font-family: monospace;
                                                                        color: #7faad2;
                                                                    ">
                           new or old password to sve changes
                          </label>
                          <input required min="6" type="text"  class="form-control" style="border: none;
    background: #ffe8ea;
    border-bottom: 1px solid #d3709d;"
                                 id="formGroupExampleInput"  name="password">
                          @error('password')
                          <span class="text text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>

                  <div class="col-12">
                      <div class="form-group">
                          <label for="formGroupExampleInput" style="font-size: 18px;
                                                                        font-family: monospace;
                                                                        color: #7faad2;
                                                                    ">
                              confirm password
                          </label>
                          <input required min="6" type="text" class="form-control" style="border: none;
    background: #ffe8ea;
    border-bottom: 1px solid #d3709d;"
                                 id="formGroupExampleInput"  name="password_confirmation">
                          @error('password_confirmation')
                          <span class="text text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>
                    <input type="submit" class="btn btn-outline-danger" style="margin: 10px">

              </div>
          </form>
             <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 @stop
