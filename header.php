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
         height: 100px;
         min-width: 410px;
         width: 100%;
         background-color: white;
         padding: 0px 30px;
         top: 0;
         left: 0;
         right: 0;

     }

     header .left {
         display: flex;
         align-items: center;
         padding-left: 20px; 

     }

     header .left a img {
         height: 90px;
     }

     header .right {
         display: flex;
         align-items: center;
     }

     .header-menu {
         list-style-type: none;
         display: flex;
         align-items: center;
     }

     .menu-item {
         display: inline-flex;
         margin-right: 20px;
     }

     .menu-item a {
         min-width: 32px;
         max-height: 32px;
         display: flex;
         align-items: center;
         text-decoration: none;
     }


     .header-menu .submenu {
         position: absolute;
         top: 100%;
         left: 0;
         background-color: white;
         box-shadow: 0 5px 5px rgba(57, 63, 72, 0.3);
         display: none;
         padding: 10px;
         z-index: 1000;
     }

     .header-menu .submenu a {
         display: block;
         padding: 5px 0;
         text-decoration: none;
         color: grey;
     }

     .menu-item.name {
         display: flex;
         align-items: center;
         margin-right: 20px; 
     }

     .menu-item.name h1 {
         font-size: 24px; 
         margin-left: 10px; 
         color: grey;

     }

     .menu-item a:hover {
        color: #3498db; 
    }
    .header-menu .submenu:hover {
        display: block;
    }

    .header-menu .submenu a:hover {
        color: #3498db; 
    }

   
   
     
 </style>


</head>
<body>

    <header>
    <div class="left">
            <a href="index.php">
                <img src="./images/logo.png" alt="logo">
            </a>
            <div class="menu-item name">
                <h1>ONLINE STORE </h1>
            </div>
        </div>
        <div class="right">
            <ul class="header-menu">

            <li class="menu-item">
                    <a href="shop.php">Shop</a>
                   
                </li>
                <li class="menu-item">
                    <a href="aboutus.php">About Us</a>
                </li>
               
                <li class="menu-item">
                    <a href="contact.php">Contact Us</a>
                </li>
                <li class="menu-item">
                    <a href="checkout.php"><img src="./images/checkout.png" alt="checkout"></a>
                </li>
                <li class="menu-item">
                    <a id="loginBtn" href="login.php">
                        <img src="./images/login.png" alt="login">
                        <p id="currentUser"></p>
                    </a>
                </li>
            </ul>
        </div>
    </header>


</body>
</html>
