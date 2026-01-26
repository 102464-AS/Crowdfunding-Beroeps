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

    <div id="main-content">
        <!-- User Works Section -->
        <div id="works-container">
            <h1 id="works-title">My Works</h1>
            
            <div id="works-list">
                <?php               
                foreach($works as $work):
                ?>
                <div class="work-item" data-id="<?= $work['id'] ?>">
                    <span class="item-title"><?= $work['title'] ?></span>
                    <div class="item-actions">
                        <button class="edit-btn" onclick="editWork(<?= $work['id'] ?>)">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                        </button>
                        <button class="delete-btn" onclick="deleteWork(<?= $work['id'] ?>)">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Profile Form -->
        <div id="form_container">
            <form id="styled-form" onsubmit="showWipAlert(event)">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?=$userData[0]["name"]?>" required>
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
    </div>

    <script>
    function showWipAlert(event) {
        event.preventDefault(); 
        alert("⚠️ This feature is a work in progress!");
    }

    function editWork(id) {
        alert("Edit work #" + id);
        // Add your edit functionality here
    }

    function deleteWork(id) {
        if(confirm("Are you sure you want to delete this work?")) {
            // Add your delete functionality here
            alert("Delete work #" + id);
        }
    }
    </script>    
</body>
</html>