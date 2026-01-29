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

        <?php foreach ($works as $work) { ?>
            <a href="./donatie.php?work_id=<?= $work['work_id'] ?>">
                <div class="photobox">
                    <img class="itemimgs" 
                         src="<?= htmlspecialchars($work['photo']) ?>" 
                         alt="<?= htmlspecialchars($work['title']) ?>">
                    
                    <p class="itemname">
                        <?= htmlspecialchars($work['title']) ?>
                    </p>
                </div>
            </a>
        <?php } ?>

    </div>
</div>


    <div id="filter"></div>
</div>

</body>
</html>
