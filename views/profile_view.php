<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acount pagina</title>
    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="icon" type="image/x-icon" href="./images/logo.png">
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
            <div id="works-header">
                <h1 id="works-title">My Works</h1>
                <button id="add-work-btn" onclick="openAddWorkModal()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </div>
            
            <div id="works-list">
                <!-- Works will be populated by PHP -->
                <?php            
                foreach($works as $index => $work):
                ?>
                <div class="work-item" data-index="<?= $index ?>" id="<?= $work['work_id'] ?>">
                    <div class="work-photo">
                        <?php if(!empty($work['photo'])): ?>
                            <img src="<?= $work['photo'] ?>" alt="<?= $work['title'] ?>">
                        <?php else: ?>
                            <div class="work-photo-placeholder">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="work-content">
                        <h3 class="work-title"><?= $work['title'] ?></h3>
                        <p class="work-description"><?= $work['description'] ?></p>
                        <div class="work-meta">
                            <span class="work-role"><?= $work['role'] ?>: <?= $work['name'] ?></span>
                            <span class="work-amount">€<?= number_format($work['amount'], 2) ?></span>
                        </div>
                    </div>
                    <div class="item-actions">
                        <button class="edit-btn" onclick="editWork(<?= $work['work_id'] ?>)">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                        </button>
                        <button class="delete-btn" onclick="deleteWork(<?= $work['work_id'] ?>)">
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
                <h2>Edit Profile</h2>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?=$userData[0]["name"]?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?=$userData[0]["email"]?>" required>
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" id="password" name="password" value=".........." required>
                </div>

                <div class="form-group">
                    <label for="password">New Password Repeat</label>
                    <input type="password" id="password" name="password" value=".........." required>
                </div>

                <button type="submit" id="submit-btn">
                    ➤
                </button>
            </form>
        </div>
    </div>
    </div>

    <!-- Add Work Modal -->
    <div id="add-work-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Work</h2>
                <button class="close-modal" onclick="closeAddWorkModal()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            
            <iframe name="hidden_upload_frame" id="hidden_upload_frame" style="display:none;"></iframe>
            <form action="./pages/upload/uploadWorks.php" id="add-work-form" method="POST" enctype="multipart/form-data" target="hidden_upload_frame">  
                <div class="form-group">
                    <label for="work-title">Title *</label>
                    <input type="text" id="work-title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="work-description">Description *</label>
                    <textarea id="work-description" name="description" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="work-photo">Upload Photo</label>
                    <input type="file" id="work-photo" name="photo" accept="image/*" required>
                </div>

                <div class="form-group">
                  <label for="work-video">Video URL</label>
                  <input 
                    type="url" 
                    id="work-video" 
                    name="video_url" 
                    placeholder="https://youtube.com/..." 
                    required
                  >
                </div>

                <div class="form-group">
                    <label for="work-role">Role *</label>
                    <select id="work-role" name="role" required>
                        <option value="">Select a role</option>
                        <option value="Creator">Creator</option>
                        <option value="Contributor">Contributor</option>
                        <option value="Supporter">Supporter</option>
                        <option value="Organizer">Organizer</option>
                    </select>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-cancel" onclick="closeAddWorkModal()">Cancel</button>
                    <button type="submit" class="btn-submit">Add Work</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function showWipAlert(event) {
        event.preventDefault(); 
        alert("This feature is a work in progress!");
    }

    function editWork(id) {
        alert("This feature is a work in progress!");
    }

    function deleteWork(id) {
        if (confirm("Are you sure you want to delete this work?")) {
            fetch('delete_work.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `workId=${id}`
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    }

    const form = document.getElementById('add-work-form');
                            
    form.addEventListener('submit', function() {
        closeAddWorkModal()
        console.log("form is sumbiting")
    });


    function openAddWorkModal() {
        document.getElementById('add-work-modal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeAddWorkModal() {
        document.getElementById('add-work-modal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('add-work-modal');
        if (event.target === modal) {
            closeAddWorkModal();
        }
    }
    </script>    
</body>
</html>