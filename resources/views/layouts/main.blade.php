@php $locale = session()->get('locale'); @endphp

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Coder Notepad</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset ('css/main.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Yetta - Coder Notepad</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('home') }}">@lang('public.home')</a>
                        </li>
                        
                        @guest                        
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('notes.index') }}">@lang('public.notes')</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('auth.login') }}">@lang('public.log_in')</a>
                        </li>

                        @else
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('notes.create') }}">@lang('public.add_note')</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('auth.logout') }}">@lang('public.logout')</a>
                        </li>
                        @endguest
                    </ul>
                </div>

                {{-- LOCALIZATION FLAG MENU --}}
                <div class="dropdown" style="margin-left: 50px;">
                    <button class="btn btn-secondary dropdown-toggle navbar-main" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        @switch($locale)
                            @case('pl')
                            <img src="{{asset('assets/img/flags/pl.png')}}" width="25px">
                            @break

                            @case('en')
                            <img src="{{asset('assets/img/flags/gb.png')}}" width="25px">
                            @break

                            @default
                            <img src="{{asset('assets/img/flags/pl.png')}}" width="25px">
                        @endswitch
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li>
                            <a role="button" href="lang/pl" class="dropdown-item" type="button">
                                <img src="{{asset('assets/img/flags/pl.png')}}" width="25px">&nbsp;&nbsp;
                                <span style="vertical-align: middle;">@lang('public.polish')</span>
                            </a>
                        </li>
                        <li>  
                            <a role="button" href="lang/en" class="dropdown-item" type="button">
                                <img src="{{ asset('assets/img/flags/gb.png') }}" width="25px">&nbsp;&nbsp;
                                <span style="vertical-align: middle;">@lang('public.english')</span>
                            </a>    
                        </li>
                    </ul>
                </div>
                {{-- LOCALIZATION FLAG MENU --}}

            </div>
        </nav>

        @yield('content')

        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Yetta</h4>
                        <p class="lead mb-0">
                            @lang('public.description_of_footer_1')
                            <br />
                            @lang('public.description_of_footer_2')
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">@lang('public.code_download')</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/pangeon/yetta"><i class="fab fa-github"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">@lang('public.requirements')</h4>
                        <p class="lead mb-0">
                            @lang('public.description_of_footer_3')
                            <a href="https://laravel.com/" style="text-decoration: none">Laravel</a> 
                            @lang('public.description_of_footer_4')
                            <a href="https://startbootstrap.com/theme/freelancer" style="text-decoration: none">Freelancer</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy;&nbsp; <a href="https://cecherz.pl/" style="text-decoration: none">{{ $author }}</a>&nbsp; {{ date('Y') }}&nbsp; - @lang('public.version'): {{ $version }}</small></div>
        </div>
        <script src="https://kit.fontawesome.com/a0c9248b8d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
