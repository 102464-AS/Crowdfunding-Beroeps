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
            <div id="profile-name"><h1>Bob</h1></div>
        </div>
        <div id="side-bar-recent-donations">
            <h1>Donation</h1>

            <div id="donations-container">
                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

                <div class="donation">
                    <h1 id="title">Title</h1>
                    <h1 id="price">20</h1>
                </div>

            </div>
        </div>
    </div>


    <div id="form_container">
    <form id="styled-form">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" id="submit-btn">
            ➤
        </button>
    </form>
    </div>
    </div>
    
</body>
</html>