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

<?php include 'popupMsg.php'; ?>
<?php include 'header.php'; ?>
<main>
    <div class="main-div">
        <div class="description">
            <div>
                <p>
                    Welcome to our PC Store, where innovation meets expertise for an elevated computing experience.
                </p>
                <div class="frame">
                    <button class="shopnow-btn">Shop now</button>
                </div>

            </div>
        </div>
        
        <div class="img-div">
            <img class="main-image" src="./images/tabel.png" alt="computer" usemap="#table">
            
            <map name="table">
                <area shape="rect" coords="370,22,905,336" alt="Computer" href="monitor.htm">
                <area shape="poly" coords="900,503,931,494,968,511,984,549,954,558,914,553,905,543,900,523" alt="Computer" href="mouse.htm">
                <area shape="poly" coords="750,488,1071,494,1191,583,790,580" alt="Computer" href="mouse-pad.htm">
                <area shape="poly" coords="1014,92,1168,69,1338,67,1317,478,1134,479,1006,406" alt="Computer" href="computer.htm">
                <area shape="poly" coords="358,467,744,470,771,551,316,553" alt="Computer" href="keyboard.htm">
                <area shape="poly" coords="23,345,40,302,79,277,124,269,167,282,196,307,209,347,200,395,186,424,164,449,147,457,147,475,172,481,183,494,172,511,123,521,75,523,51,513,54,492,86,480,84,465,58,447,39,409,23,378" alt="Computer" href="headphones.htm">
            </map>
            
        </div>
    </div>    
</main>

</body>

<?php include 'footer.php'; ?>

</html>
