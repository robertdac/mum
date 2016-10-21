<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pide tu comida!!!</title>
    <script type="text/javascript" src="{{ url('/bower_components/jquery/dist/jquery.min.js')  }}"></script>

    <link href="{{  url('/bower_components/bootstrap/dist/css/bootstrap.min.css')  }}" rel="stylesheet">

    <style>

        body {
            padding-top: 70px;
        }

    </style>

</head>

<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">mum'm</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('vista')  }}"><img class="img-resposive" width="30px" height="30px"
                                                         src="{{ url('/img/service.svg')  }}"></a></li>
                <li><a href="./">Total: {{ session()->get('total')   }} € <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    {{--    <div class="jumbotron">
           <h1>Navbar example</h1>
           <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It
               includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
           <p>To see the difference between static and fixed top navbars, just scroll.</p>
           <p>
               <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
           </p>
       </div>

   --}}
    @yield('content')


    <hr>


    <footer>
        <p class="pull-right"><a href="#">subir</a></p>
        <p>Mum'm 2016</p>
    </footer>
</div> <!-- /container -->



<script src="{{ url('/bower_components/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
</body>
</html>




