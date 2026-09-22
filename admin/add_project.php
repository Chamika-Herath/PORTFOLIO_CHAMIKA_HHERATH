<?php
require_once 'auth.php';
requireLogin();
require_once '../includes/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $tech = trim($_POST['technologies']);
    $live_link = trim($_POST['live_link']);
    $github_link = trim($_POST['github_link']);
    
    $imageName = '';
    
    // Handle image upload
    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../assets/images/uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);
        
        $imageFileType = strtolower(pathinfo($_FILES["thumbnail"]["name"], PATHINFO_EXTENSION));
        $valid_extensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        
        if (in_array($imageFileType, $valid_extensions)) {
            $imageName = time() . '_' . uniqid() . '.' . $imageFileType;
            $target_file = $target_dir . $imageName;
            
            if (!move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
                $error = "Sorry, there was an error uploading your file.";
                $imageName = '';
            }
        } else {
            $error = "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
        }
    }
    
    if (empty($error)) {
        $stmt = $pdo->prepare('INSERT INTO projects (title, description, thumbnail_image, technologies, live_link, github_link) VALUES (?, ?, ?, ?, ?, ?)');
        if ($stmt->execute([$title, $description, $imageName, $tech, $live_link, $github_link])) {
            header('Location: index.php');
            exit;
        } else {
            $error = 'Failed to save project to database.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Project</h5>
                    <a href="index.php" class="btn btn-sm btn-outline-light">Back</a>
                </div>
                <div class="card-body">
                    <?php if($error): ?><div class="alert alert-danger"><?= htmlspecialchars($error) ?></div><?php endif; ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Technologies (e.g. PHP, JS, CSS)</label>
                                <input type="text" name="technologies" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Thumbnail Image</label>
                                <input type="file" name="thumbnail" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Live Preview Link URL</label>
                                <input type="url" name="live_link" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>GitHub Repository URL</label>
                                <input type="url" name="github_link" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Save Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
