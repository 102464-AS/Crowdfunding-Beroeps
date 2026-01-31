<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations</title>
    <link rel="stylesheet" href="./styles/donation.css">
    <link rel="icon" type="image/x-icon" href="./images/logo.png">
</head>
<body>
    <!--nav-->
    <?php
    include("./header.php");
    ?>

    <div id="work_id" data-work-id="<?=$work_id?>"></div>

    <!--nav end-->
    <div id="maincontent">
         <!--1-->
    <div id="work">
        <div id="name" class="divs"><p class="text" id="nametext"><?=$work[0]['title']?></p></div>

        <img id="mainImg" class="imgs" src="<?=$work[0]['photo']?>">

        <div id="description" class="divs"><p class="text"><?=$work[0]['description']?></p></div>
    </div>
    <!--1end-->
    <!--2-->
    <div id="donation-wrapper">
        <div id="donationTitle" class="donationDivs"><p id="donationTitletext">Donations</p></div>

        <div id="small" class="donationDivs"><p class="text">Small donation-></p></div>
        <div id="smallBTN" class="donationBTNS"><p class="text">€5</p></div>

        <div id="mediumBTN" class="donationBTNS"><p class="text">€10</p></div>
        <div id="medium" class="donationDivs"><p class="text"><-Medium donation</p></div>

        <div id="big" class="donationDivs"><p class="text">Big donation-></p></div>
        <div id="bigBTN" class="donationBTNS"><p class="text">€25</p></div>

        <div id="goalWrapper" class="donationDivs">
            <div id="goalTitleBox"><p id="goalTitle" class="goaltext" >Goal</p></div>

            <div id="goalbox">
                <p id="start" class="goaltext">€<?=$work[0]['amount']?></p>
                <p id="end" class="goaltext">€<?=$work[0]['goal']?></p>
                <div id="goalBar">
                    <div id="goal"></div>
                </div>
            </div>
        </div>
    </div>
    <!--2end-->
    </div>
   
    <script src="./js/donation.js"></script>
</body>
</html>