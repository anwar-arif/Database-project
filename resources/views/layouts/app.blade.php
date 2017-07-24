<!DOCTYPE html>
<html>
<head>
    @yield('title')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/submit-option-value')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/topnav.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <script src="{{asset('js/upper-right-dropdown-function.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/upper-right-dropdown.css')}}">
    <link rel="stylesheet" href="{{asset('css/test.css')}}">
    @yield('LinkerFiles')
</head>

<body>

<div class="topnav">

    <ul>
        @if ( ! Auth::guest())
        {{--<li><a href="#home">Home</a></li>--}}
        <li><a href="https://www.facebook.com/groups/droppers.group.cse.sust/" target="_blank">Facebook</a></li>
        <li><a href="/contact">Contact</a></li>
        @endif

        <ul style="float:left;">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li>
                    <ul>
                        <li>
                            <a href="{{ url('/logout') }}">
                                Logout
                            </a>
                        </li>

                        {{--search course--}}
                        <div class="pp_cont">
                        <form name="myform" id ="myform" method="post" action="/search">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <select id="course" class="select_course" name="course"  onchange="submitform();">
                                <option value="Select Course">Select Course</option>
                                <option value="CSE-137 Data Structure">CSE-137 Data Structure</option>
                                <option value="CSE-237 Algorithm Design & Analysis">CSE-237 Algorithm Design & Analysis</option>
                                <option value="CSE-233 OOP">CSE-233 OOP</option>
                                <option value="CSE-333 Database System">CSE-333 Database System</option>
                                <option value="CSE-361 Computer Networking">CSE-361 Computer Networking</option>
                                <option value="CSE-433 Artificial Intelligence">CSE-433 Artificial Intelligence</option>
                            </select>
                        </form>
                        <script type="text/javascript">
                            function submitform()
                            {
                                document.myform.submit();
                            }
                        </script>

                        {{--search date--}}
                        <form method="post" action="/SearchDate">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input name="date" id="datepicker" type="date" class="datepicker">
                            <input type="submit" name="submit">
                        </form>

                        <script type="text/javascript">
                            function submitform()
                            {
                                document.myform.submit();
                            }
                        </script>

                        {{--search batch post--}}
                        <form name="testform" id="testform" action="/SearchBatchPost" method="post" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <select id="batch" class="select_batch" name="batch"  onchange="testsubmitform();">
                                <option value="Select Batch">Select Batch</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                            </select>
                        </form>
                            <script type="text/javascript">
                                function testsubmitform()
                                {
                                    document.testform.submit();
                                }
                            </script>
                        </div>


                    </ul>
                </li>
            @endif
        </ul>

    </ul>

</div>

    <div>
        @if ( !Auth::guest() )
        <div class="sidenav" style="display: inline-block;">

            <br><br><br><br>
            <br><br><br><br>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/post-schedule">Post Schedule</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/about">About</a></li>
            </ul>

        </div>
        @endif

        <div style="display: inline-block;">
        <div class="test">

            @yield('content')


        </div>
        </div>
    </div>


</body>
</html>