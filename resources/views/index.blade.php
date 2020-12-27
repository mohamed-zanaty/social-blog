<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='{{asset('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic')}}' rel='stylesheet' type='text/css'>
  <link href='{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')}}' rel='stylesheet' type='text/css'>


  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

</head>

<body>
@include('main.nav')
  <!--    END NAV       -->
  @if(Auth::check())
  <div class="personal-inf">
  <div class="container">
    <div class="row">
      <div class="col-md-6 " >

        <h5 class="welcome">Welcome: </h5><b class="user-name" style="cursor: text">

                    {{ Auth::user()->name}}
              <div style="display: inline-block; background: white; border-radius:50%; width: 40px; height: 40px; position: relative;
        right: 0%;
    top: 9px; ">
                  @if(Auth::user()->url)
                      <img src="{{asset('image/'.Auth::user()->url)}}"  style="max-width: 35px;
    position: absolute;
    top: 1%;
    left: 6%;
    max-height: 47px;
    border-radius: 70px; ">
                  @else
                    <img src="{{asset('image/user.png')}}" style="max-width: 30px; position: absolute; top: 10%; left: 10% " >
                      @endif
              </div>
          </b> <blockquote style="color: #0c5460">  You Can Communicate With Other! </blockquote>


      </div>

      <div class="col-md-6">
        <h5 class="welcome">Have Any Posts</h5><b class="user-name"><a href="{{route('create.post')}}">Create Post <i class="far fa-plus-square"></i></a></b>
      </div>
    </div>
  </div>
  </div>
  @endif
        <!-- sssssssssss -->
  <div class="post">
        <!-- Page Content -->
        <div class="container">

          <div class="row">
              <!-- Sidebar Widgets Column -->


            <!-- Blog Entries Column -->
            <div class="col-12">
                <div style="max-width: 75%; margin: auto; min-width: 70%">

                    <!-- POSTS     -->
             @yield('content')

                </div>

            </div>


              <!-- Categories Widget -->










          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->
  </div>

  <!-- Footer -->

    <!--START FOOTER-->



    <footer>
      <div class="container">
        <div class="row">


          <div class="col-md-6">
            <div class="foot2">
              <h3 >What we offer </h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>

            </div>

          </div>

          <div class="col-md-6">
            <div class="foot2">
                  <h3>Our Goal:</h3>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            </div>
          </div>
        </div>
      </div>
    </footer>




    <!--END FOOTER-->
    <!--copy Right-->




    <section class="copy">
      <div class="container">
        <a class="navbar-brand" style="color: white;" href="#">
          <i class="fas fa-blog"></i>
            5dmatk
        </a>

        <ul >
          <li> <i class="fab fa-whatsapp"></i></li>
          <li>  <i class="fab fa-twitter"></i></li>
          <li>  <i class="fab fa-facebook"></i></li>
          <li> <i class="fab fa-google-plus-square"></i>
        </ul>
      </div>
    </section>
    <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/like.js')}}"></script>
<script>
    var url = "{{route('like')}}";
    var url_dis = "{{route('dislike')}}";
    var token = "{{Session::token()}}";
</script>

</body>

</html>
