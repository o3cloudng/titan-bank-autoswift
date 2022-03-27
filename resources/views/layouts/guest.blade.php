
    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 14:52:15 GMT -->

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>AutoSwift Dashboard</title>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <link href="/css/styles.css" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"
            crossorigin="anonymous" />
        <link rel="icon" type="image/x-icon" href="/images/titan-logo-box.png" />
        <!--bootstrap datetimepicker css-->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
        <!--bootstrap datetimepicker js-->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
        </script>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script data-search-pseudo-elements defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/datatables.min.css" />
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
        </script> --}}
    </head>

    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a class="navbar-brand text-white" href="/">AutoSwift Dashboard</a>
            <!-- <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button> -->
                <form method="post" action="{{ route('search') }}" class="form-inline mr-auto d-none d-md-block">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-id-badge"></i></span>
                        </div>
                        <input class="form-control mr-sm-2 mr-2" name="reference" id="reference" type="search" :value="old('reference')"
                            placeholder="Reference ID"
                            value="" />

                        <!-- <div class="input-group"> -->
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white"><i class="fa fa-envelope-open"></i></span>
                            </div>
                            <input class="form-control mr-sm-2 col-md-1 col-1" name="msgtype" id="msgtype" type="search"
                                placeholder="Message Type"
                                value="" />
                            <select name="currency" id="" class="form-control mr-sm-2 mr-2 col-md-1" >
                                                            <option value="">
                                                                    </option>
                                                        <option value="NGN">NGN (&#8358;)</option>
                                <option value="USD">USD ($)</option>
                                <option value="GBP">GBP (£)</option>
                                <option value="EURO">Euro (€)</option>
                                <option value="">None</option>
                            </select>

                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white"><i class="fa fa-money-check"></i></span>
                            </div> -->
                            <input class="form-control mr-sm-2 col-md-1" name="amount" id="amount" type="search"
                                placeholder="Amount"
                                value="" />
                            </select>
                        <!-- </div> -->

                        <!-- <div class='input-group date' id='datetimepicker1'> -->
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input class="form-control mr-sm-2" type="date" id="start_date" name="start_date" type="search"
                                placeholder="Start Date"
                                value="2018-01-02" />
                        <!-- </div> -->

                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input class="form-control mr-sm-2" type="date" id="end_date" name="end_date" type="search"
                            placeholder="End Date"
                            value="2022-02-09" />
                        <div class="input-group-append">
                            <button name="submit" class="input-group-text bg-success text-white"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
        </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="pt-4 pl-4 pr-4 pb-0 text-uppercase"> 
                        @guest
                            Hi Guest
                        @endguest 
                        @auth
                            Welcome, {{ auth()->user()->name }}
                        @endauth
                    </div>
                    <div class="nav accordion" id="accordionSidenav">
                        @auth
                            <div class="sidenav-menu-heading">Menu</div>
                                <a href="{{ route('dashboard') }}" class="nav-link collapsed">
                                    <div class="nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                    Dashboards
                                </a>
                                <a href="{{ route('adduser') }}" class="nav-link collapsed">
                                    <div class="nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    Add New User
                                </a>
                                <a href="{{ route('listusers') }}" class="nav-link collapsed">
                                    <div class="nav-link-icon"><i class="fas fa-users"></i></div>
                                    List Users
                                    <!-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                                </a>
                                <a href="/old.php" class="nav-link collapsed">
                                    <div class="nav-link-icon"><i class="fas fa-key"></i></div>
                                    Password reset
                                </a>                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn mx-4 btn-small btn-danger" Type="submit"><i class="fas fa-sign-out-alt"></i> &nbsp; Logout</button>
                                </form>                                
                                @endauth
                            </div>
                    </div>
                    <div class="sidenav-footer text-center">
                        <div class="sidenav-footer-content text-center">
                            <!-- <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Valerie Luna</div> -->
                            <img src="/images/titan-logo-box.png" width="50%" height="20%" />
                            <div class="sidenav-footer-subtitle">
                                
                            </div>
                            <!-- <div class="sidenav-footer-title">UNITY BANK OF NIGERIA</div> -->
                        </div>
                    </div>
                </nav>
            </div>    
    <div id="layoutSidenav_content">
        {{-- @yield('content') --}}
        {{ $slot }}
    <footer class="footer mt-auto footer-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 small">Copyright &#xA9; 2022. Infonett Systems Ltd.</div>
                <div class="col-md-6 text-md-right small">
                    <!-- <a href="#!">Privacy Policy</a>
                    &#xB7;
                    <a href="#!">Terms &amp; Conditions</a> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- </div>
            </div> -->

    <script src="/js/scripts.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/datatables.min.js"></script>




    {{-- <script src="/assets/demo/datatables-demo.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
    {{-- <script src="/assets/demo/date-range-picker-demo.js"></script> --}}
    
    </body>        <!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 14:52:58 GMT -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        window.onload = function() {
            document.getElementById("download")
                .addEventListener("click", () => {
                    const text = this.document.getElementById("text");
                    console.log(text);
                    html2pdf().from(text).save();
                })
        }
    </script>

</html>