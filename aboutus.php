<?php
session_start(); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="901f44f7aac1fc5c163c01c5542e014b.jpg" />
</head>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .row {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.column {
    width: 25.3%;
    margin-bottom: 16px;
    padding: 0 8px;
    display: inline-block;
}


        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
            border-radius: 10px;
        }

        img {
            border-radius: 15px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            color: #010101;
        }

        .cardc {
            padding: 16px;
        }

        .container::after,
        .row::after {
            content: '';
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        h2 {
            margin-bottom: 5px;
        }

        p {
            margin-bottom: 4px;
        }

        .button {
            border: none;
            border-radius: 5px;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>
<?php include 'header.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <h2 style="text-align: center">Team</h2>

    <div class="row">
    <?php
    include 'config.php';
    $sql = "SELECT * FROM about";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="column">
            <div class="card">
                <img src="data:image/jpeg;base64,<?php echo $row['image']; ?>" style="width:100%;">
                <div class="cardc">
                    <h2><?php echo $row['name']; ?></h2>
                    <p class="title"><?php echo $row['position']; ?></p>
                    <button onclick="redirectToContact()" class="button">Contact</button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
    <?php include 'footer.php'; ?>

    <script>
        function redirectToContact() {
            window.location.href = 'contact.php';
        }
    </script>

</body>


</html>

