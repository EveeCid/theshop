<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>




    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}




    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}


    <link href="{{ asset('css/guest.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div >



            <header class="main-header">
                    <nav class="navbar navbar-static-top">
                      <div class="container">
                        <div class="navbar-header">
                          <a href="" class="navbar-brand"><b>THE</b>SHOP</a>
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ariculos <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Perfumes</a></li>
                                {{-- <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li> --}}
                              </ul>
                            </li>
                          </ul>
                          <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                            </div>
                          </form>
                        </div>
                        <!-- /.navbar-collapse -->
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                          <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                              <!-- Menu toggle button -->
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                  <!-- inner menu: contains the messages -->
                                  <ul class="menu">
                                    <li><!-- start message -->
                                      <a href="#">
                                        <div class="pull-left">
                                          <!-- User Image -->
                                          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                          Support Team
                                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                      </a>
                                    </li>
                                    <!-- end message -->
                                  </ul>
                                  <!-- /.menu -->
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                              </ul>
                            </li>
                            <!-- /.messages-menu -->

                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                              <!-- Menu toggle button -->
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                  <!-- Inner Menu: contains the notifications -->
                                  <ul class="menu">
                                    <li><!-- start notification -->
                                      <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                      </a>
                                    </li>
                                    <!-- end notification -->
                                  </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                              </ul>
                            </li>
                            <!-- Tasks Menu -->
                            <li class="dropdown tasks-menu">
                              <!-- Menu Toggle Button -->
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                  <!-- Inner menu: contains the tasks -->
                                  <ul class="menu">
                                    <li><!-- Task item -->
                                      <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                          Design some buttons
                                          <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                          <!-- Change the css width attribute to simulate progress -->
                                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                          </div>
                                        </div>
                                      </a>
                                    </li>
                                    <!-- end task item -->
                                  </ul>
                                </li>
                                <li class="footer">
                                  <a href="#">View all tasks</a>
                                </li>
                              </ul>
                            </li>
                            <!-- User Account Menu -->







                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>


                                        @else



                            <li class="dropdown user user-menu">
                              <!-- Menu Toggle Button -->
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{ asset('img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                              </a>
                              <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                  <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                                  <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since Nov. 2012</small>
                                  </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                  <div class="row">
                                    <div class="col-xs-4 text-center">
                                      <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                      <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                      <a href="#">Friends</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                  <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                  </div>
                                  <div class="pull-right">
                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                  </div>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              </ul>
                            </li>


                        @endguest













                          </ul>
                        </div>
                        <!-- /.navbar-custom-menu -->
                      </div>
                      <!-- /.container-fluid -->
                    </nav>
                  </header>




                  <div id="app">



        <main class="py-4">
            @yield('content')
        </main>
        </div>
</div>

    <script src="{{ asset('js/guest.js') }}" defer></script>
</body>
</html>
