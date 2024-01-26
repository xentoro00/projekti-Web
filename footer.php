<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>


footer {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin-top: auto;
    background-color: #585d73;
    padding: 60px 10%;
    box-sizing: border-box; 
    position: relative; 
    border-top:1px solid black;
    margin-top:10px;
}


footer ul{
    list-style: none;
}

footer .footer-col{
    width: 25%;
}

footer .footer-col h4{
    position: relative;
    margin-bottom: 30px;
    font-weight: 400;
    font-size: 22px;
    color: #f1bc0d;
    text-transform: capitalize;
}

footer .footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    background-color: #27c0ac;
    height: 2px;
    width: 40px;
}

footer ul li:not(:last-child){
    margin-bottom: 8px;
}

footer ul li a{
    display: block;
    font-size: 19px;
    text-transform: capitalize;
    color: #bdb6b6;
    text-decoration: none;
    transition: 0.4s;
}

footer ul li a:hover{
    color: white;
    padding-left: 2px;
}

footer .links a{
    display: inline-block;
    height: 44px;
    width: 44px;
    color: white;
    background-color: rgba(40, 130, 214, 0.8);
    margin: 0 8px 8px 0;
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: 0.4s;
}

footer .links a:hover{
    color: #4d4f55;
    background-color: white;
}

@media(max-width: 740px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
        text-align: center;
    }

    .footer-col h4::before{
        all: unset;
    }
}

@media(max-width: 555px){
    .footer-col{
        width: 100%;
    }
}
</style>
</head>
<body>
<footer>
    <div class="footer-col">
        <h4>Shop</h4>
        <ul>
            <li><a href="#">All Products</a></li>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Desktops</a></li>
            <li><a href="#">Accessories</a></li>
        </ul>
    </div>
    <div class="footer-col">
        <h4>Computer Components</h4>
        <ul>
            <li><a href="#">Graphics Cards</a></li>
            <li><a href="#">Memory (RAM)</a></li>
            <li><a href="#">Storage</a></li>
            <li><a href="#">Processors</a></li>
        </ul>
    </div>
    <div class="footer-col">
        <h4>Information</h4>
        <ul>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer-col">
        <h4>Connect With Us</h4>
        <div class="links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </div>
</footer>

</body>
</html>