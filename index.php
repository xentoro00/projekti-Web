<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        
    </script>
</head>
<body>

    <?php include 'header.php';  include 'popupMsg.php'; ?>
<main>
    <div class="main-div">
        <div class="description">
            <div>
                <p>
                    Welcome to our PC Store, where innovation meets expertise for an elevated computing experience.
                </p>
                <div class="frame">
                    <a href="./shop.php">

                        <button  class="shopnow-btn">Shop now</button>
                    </a>
                </div>

            </div>
        </div>
        
        <div class="img-div">
            <img class="main-image" src="./images/tabel.png" alt="computer" usemap="#table">
            <map name="table">
                <area shape="rect" coords="370, 60, 895, 366" alt="monitor" href="shop.php?categoryID=1">
                <area shape="poly" coords="750, 523, 922, 526, 901, 536, 905, 581, 947, 592,981, 586, 970, 544,  930, 528, 1070, 527, 1191, 617, 793, 614" alt="mousepad" href="shop.php?categoryID=3">
                <area shape="poly" coords="1014, 126, 1148, 101, 1331, 103, 1316, 514, 1272, 526, 1135, 525, 1008, 440" alt="Computer" href="shop.php?categoryID=2">
                <area shape="poly" coords="359, 499, 743, 501, 769, 586, 317, 587" alt="Computer" href="shop.php?categoryID=5">
                <area shape="poly" coords="133, 533, 141, 474, 107, 414, 113, 358, 159, 311, 209, 301, 275, 334, 291, 391, 277, 449, 248, 481, 247, 512, 267, 517, 261, 543, 195, 558, 136, 550" alt="Computer" href="shop.php?categoryID=6">
                <area shape="poly" style="postition:relative,z-index:100" coords="901, 536, 905, 581,947, 592,981, 586, 970, 544,  930, 528" alt="Computer" href="shop.php?categoryID=4">
            </map>
            
        </div>
    </div>    


    
    <div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <a href="shop.php?categoryID=2">
            <img src="./Produktet/m2.png" style="width:70%">
            <div class="textslide">Yeyian Gaming Desktop</div>
        </a>
    </div>



        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <a href="shop.php?categoryID=1">
            <img src="./Produktet/m4.png" style="width:70%">
            <div class="textslide">ASUS 34" 240 Hz OLED Curved Gaming Monitor</div>
        </div>

    
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <a href="shop.php?categoryID=2">
            <img src="./Produktet/m33.png" style="width:55%">
            <div class="textslide">Cobratype Gaming PC - Intel Core i7-12700F, RTX 4070, </div>
        </div>


        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</main>

</body>
<script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
<?php include 'footer.php'; ?>

</html>
