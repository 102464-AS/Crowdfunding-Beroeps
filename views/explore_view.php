<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/explorestyle.css">
</head>
<body>


    <?php
    include("./header.php");
    ?>


<div id="maincontent">
    <div id="imgs">

        <?php
        include './TestDataBase/test.php';

        foreach ($items as $item) { ?>
            <a href="donationPage/donation.html?id=<?= $item['id'] ?>">
                <div class="photobox">
                    <img class="itemimgs" src="<?= htmlspecialchars($item['img']) ?>"  alt="<?= htmlspecialchars($item['name']) ?>">
                    <p class="itemname"> <?= htmlspecialchars($item['name']) ?> </p>
                </div>
            </a>
        <?php } ?>
    </div>

    <div id="filter"></div>
</div>

</body>
</html>
