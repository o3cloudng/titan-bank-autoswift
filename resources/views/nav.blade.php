@extends('layouts.layout')

@section('nav')
<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="pt-4 pl-4 pr-4 pb-0 text-uppercase"> Hi superadmin</div>
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Menu</div>
                                <a href="{{ route('dashboard') }}" class="nav-link collapsed">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboards
                <!-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
            </a>
                            <a href="register.php" class="nav-link collapsed">
                <div class="nav-link-icon"><i data-feather="user-plus"></i></div>
                Register User
                <!-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
            </a>
            <a href="users.php" class="nav-link collapsed">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                Users
                <!-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
            </a>
                            <a href="pass-reset.php" class="nav-link collapsed">
                <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                Password reset
            </a>
            <a href="logout.php" class="nav-link collapsed">
                <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                Logout
            </a>
        </div>
    </div>
    <div class="sidenav-footer text-center">
        <div class="sidenav-footer-content text-center">
            <!-- <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">Valerie Luna</div> -->
            <img src="images/titan-logo-box.png" width="50%" height="20%" />
            <div class="sidenav-footer-subtitle">
                
            </div>
            <!-- <div class="sidenav-footer-title">UNITY BANK OF NIGERIA</div> -->
        </div>
    </div>
</nav>
</div>  
@endsection