<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
     

     header {
         position: fixed;
         z-index: 1000;
         box-shadow: 0 5px 5px rgba(57, 63, 72, 0.3);
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding:5px;
         height: 100px;
         min-width: 410px;
         width: 100%;
         background-color: white;
         top: 0;
         left: 0;
         right: 0;

     }

     header .left {
         display: flex;
         align-items: center;
         width:100%;
         justify-content: space-between;
         
         
        }
        header .left div:first-child{
            
         padding-left:20px;
        }
        header .left .hamburger-menu{
            
         padding-right:20px;
        }

     header .left a img {
         height: 90px;
     }

     header .right {
         display: flex;
         align-items: center;
         padding-right:20px;
         width:100%;
         justify-content: center;
     }

     .header-menu {
         list-style-type: none;
         display: flex;
         align-items: center;
     }

     header .menu-item {
         display: inline-flex;
         margin-right: 20px;
     }

     header .menu-item a {
         min-width: 32px;
         max-height: 32px;
         display: flex;
         align-items: center;
         text-decoration: none;
         justify-content:center;
     }


     header .header-menu .submenu {
         position: absolute;
         top: 100%;
         left: 0;
         background-color: white;
         box-shadow: 0 5px 5px rgba(57, 63, 72, 0.3);
         display: none;
         padding: 10px;
         z-index: 1000;
     }

     header .header-menu .submenu a {
         display: block;
         padding: 5px 0;
         text-decoration: none;
         color: grey;
     }



     header .menu-item a:hover {
        color: #3498db; 
    }
    header .header-menu .submenu:hover {
        display: block;
    }

    header .header-menu .submenu a:hover {
        color: #3498db; 
    }
    .dropdown {
            display: inline-block;
            min-width: 100px;
        }

        .dropdown-button {
            color: #fff;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: inherit;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content button {
            background-color: #333;
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            width:100%;
            border:0;
        }
        .dropdown-content a:not(:first-child) button {
            cursor:pointer;

        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
   
   
        nav {
      display: flex;
      justify-content: space-around;
      overflow: hidden;
      box-shadow: 0 5px 5px rgba(57, 63, 72, 0.3);

    }

    nav a {
      color: black;
      text-decoration: none;
      padding: 14px 0;
      text-align: center;
      min-width:100px;
    }

    .hamburger-menu {
      display: none;
      cursor: pointer;
    }

    @media screen and (max-width: 650px) {
        header{
            flex-direction:column;
            height:auto;
            justify-content:none;
        }
        nav {
        display: none;
        flex-direction: column;
      }

      nav.show {
        display: flex;
      }

      nav a {
        width: 100%;
        text-align: center;
      }

      .hamburger-menu {
        display: block;
      }
      
    }
     
 </style>


</head>
<body>
<?php 
    $username = isset($_SESSION["username"]) == true ? $_SESSION["username"] : "Not Logged in!";

?>
    <header>
        <div class="left">
            <div class="">

                <a href="index.php">
                    <img src="./images/logo.png" alt="logo">
                </a>
            </div>
            <div class="hamburger-menu">&#9776;</div>
        </div>
        <div class="right">
  
  <nav>
    <a href="./shop.php">Shop</a>
    <a href="./aboutus.php">About Us</a>
    <a href="./contact.php">Contact Us</a>
    <a href="checkout.php"><img src="./images/checkout.png" alt="checkout"></a>
                <div class="dropdown">
                    <a id="loginBtn" class="dropdown-button">
                        <img src="./images/login.png" alt="login">
                    </a>
                    <div class="dropdown-content" >
                            <button disabled><?php echo $username ?></button>
                            <a href="./login.php">
                                <button>Login</button>
                            </a>
                            <a href="./logout.php?originUrl=<?php echo basename($_SERVER['PHP_SELF']);?>">
                                <button>Log out</button>
                            </a>
                    </div> 
                </div>
                </li>
            </ul> 
        </div></nav>
    </header>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const hamburgerMenu = document.querySelector('.hamburger-menu');
      const nav = document.querySelector('nav');

      hamburgerMenu.addEventListener('click', function() {
        nav.classList.toggle('show');
      });
    });
  </script>
</body>
</html>
