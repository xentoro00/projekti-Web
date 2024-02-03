<style>
        main{
            padding-left:18rem;
        }
        .layoutSidenav_nav {
            background-color: #212529;
            position: fixed;
            height: 100vh;
        }

        .sb-sidenav {
            width: 15rem;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .sb-sidenav-menu {
            flex-grow: 1;
            overflow-y: auto;
        }

        .sb-sidenav-menu-heading {
            padding: 10px;
            color: #818182;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 10px;
            text-decoration: none;
            color: #fff;
        }

        .sb-nav-link-icon {
            margin-right: 10px;
        }

        .nav-link:hover {
            background-color: #343a40;
        }
        .nav > div{
            padding-bottom:55px;
        }
    </style>
 <div class="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">ADMIN DASHBOARD</div>
                            <a class="nav-link" href="../dashboard/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                 
                            <a class="nav-link" href="../Products/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Manage Products
                            </a>
                            <a class="nav-link" href="../Products/add.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Add Products
                            </a>
                            <a class="nav-link" href="../Contacts/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Manage Contact Us
                            </a>
                            </a>
                            <a class="nav-link" href="../Categories/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Manage Categories
                            </a>

                            <a class="nav-link" href="../Reports/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-calendar"></i></div>
                                B/w Dates Report
                            </a>

                            <a class="nav-link" href="../Users/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                Manage Users
                            </a>
                            
                            <a class="nav-link" href="../AboutUs/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-calendar"></i></div>
                                Edit AboutUs
                            </a>

                            <a class="nav-link" href="../dashboard/logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Signout
                            </a>
                        </div>
                    </div>
                
                </nav>
            </div>