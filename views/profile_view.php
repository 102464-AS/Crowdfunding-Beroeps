<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acount pagina</title>
    <link rel="stylesheet" href="./styles/profile.css">
</head>
<body>
    <?php
    include("./header.php");
    ?>

    <div id="container">

    <div id="side-bar"> 
        <div id="side-account">
            <div id="profile-img-container">
                 <img src="./images/account.png">
            </div>
            <div id="profile-name"><h1><?=$userData[0]["username"];?></h1></div>
        </div>
        <div id="side-bar-recent-donations">
            <h1>Total Donations</h1>

            <div id="donations-container">
                <div class="donation">
                    <h1 id="title">Total:</h1>
                    <h1 id="price">€<?=$userData[0]["total_donations"]?></h1>
                </div>
            </div>
        </div>
    </div>


    <div id="form_container">
    <form id="styled-form" onsubmit="showWipAlert(event)">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?=$userData[0]["name"]?>"  required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?=$userData[0]["email"]?>" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value=".........." required>
        </div>

        <button type="submit" id="submit-btn">
            ➤
        </button>
    </form>
    </div>
    </div>

    <script>
    function showWipAlert(event) {
        event.preventDefault(); 
        alert("⚠️ This feature is a work in progress!");
    }
    </script>    
</body>
</html>