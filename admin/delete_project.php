<?php
require_once 'auth.php';
requireLogin();
require_once '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch image path to delete it
    $stmt = $pdo->prepare('SELECT thumbnail_image FROM projects WHERE id = ?');
    $stmt->execute([$id]);
    $project = $stmt->fetch();
    
    if ($project) {
        $imageName = $project['thumbnail_image'];
        if ($imageName) {
            $target_file = "../assets/images/uploads/" . $imageName;
            if (file_exists($target_file)) {
                unlink($target_file);
            }
        }
        
        $deleteStmt = $pdo->prepare('DELETE FROM projects WHERE id = ?');
        $deleteStmt->execute([$id]);
    }
}
header('Location: index.php');
exit;
?>
