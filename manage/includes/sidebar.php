<?php
$f = basename($_SERVER['PHP_SELF']);
$r = $_SESSION['role'];
?>
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WPMS Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($f == "index.php") echo "active"; ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Reservations
    </div>
    <!-- Nav Item - Charts -->


    
    <?php
    if ($r == 1) {
    ?>
        <li class="nav-item <?php if ($f == "approve.php") echo "active"; ?>">
            <a class="nav-link" href="approve.php">
                <i class="fas fa-fw fa-list-ul"></i>
                <span>Approve Reservations</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item <?php if ($f == "reserved.php") echo "active"; ?>">
            <a class="nav-link" href="reserved.php">
                <i class="fas fa-fw fa-check-double"></i>
                <span>Reserved</span></a>
        </li>
    <?php
    }else{
        ?>
<li class="nav-item <?php if ($f == "myreservations.php") echo "active"; ?>">
        <a class="nav-link" href="myreservations.php">
            <i class="fas fa-fw fa-list-ul"></i>
            <span>My Reservations</span></a>
    </li>

        <?php
    }
    ?>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Bookings
    </div>


    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($f == "events.php") echo "active"; ?>">
        <a class="nav-link" href="events.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Events</span></a>
    </li>

    <?php
    if ($_SESSION['role'] == 1) {
    ?>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Heading -->
        <div class="sidebar-heading">
            Users
        </div>
        <!-- Nav Item - Charts -->
        <li class="nav-item <?php if ($f == "users.php") echo "active"; ?>">
            <a class="nav-link" href="users.php">
                <i class="fas fa-users fa-clipboard-list"></i>
                <span>Users</span></a>
        </li>
    <?php
    }
    ?>
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>