<?php
require_once 'auth.php';
requireLogin();
require_once '../includes/db.php';

// Fetch all projects
$stmt = $pdo->query('SELECT * FROM projects ORDER BY created_at DESC');
$projects = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Portfolio Admin</a>
    <div class="d-flex align-items-center">
        <span class="text-light me-3">Welcome, <?= htmlspecialchars($_SESSION['username']) ?></span>
        <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Projects</h2>
        <a href="add_project.php" class="btn btn-dark">Add New Project</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Tech</th>
                            <th class="pe-4 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($projects) > 0): ?>
                            <?php foreach($projects as $p): ?>
                            <tr>
                                <td class="ps-4"><?= $p['id'] ?></td>
                                <td>
                                    <?php if($p['thumbnail_image']): ?>
                                        <img src="../assets/images/uploads/<?= htmlspecialchars($p['thumbnail_image']) ?>" alt="Thumbnail" width="60" height="40" style="object-fit: cover; border-radius: 4px;">
                                    <?php else: ?>
                                        <span class="text-muted small">None</span>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-bold"><?= htmlspecialchars($p['title']) ?></td>
                                <td><span class="badge bg-secondary"><?= htmlspecialchars($p['technologies']) ?></span></td>
                                <td class="pe-4 text-end">
                                    <a href="edit_project.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="delete_project.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="5" class="text-center py-5 text-muted">No projects found. Create your first project!</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
