<?php
include "../includes/db.php";
include "../includes/header.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "<p>Invalid blog ID</p>";
    include "../includes/footer.php";
    exit;
}

$stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<p>Blog not found</p>";
    include "../includes/footer.php";
    exit;
}

$blog = $result->fetch_assoc();
?>

<h2><?php echo htmlspecialchars($blog['title']); ?></h2>
<h4><?php echo htmlspecialchars($blog['subtitle']); ?></h4>

<img src="../assets/images/blogs/<?php echo htmlspecialchars($blog['image']); ?>" width="500"><br><br>

<p><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>

<a href="index.php">← Back to blogs</a>

<?php include "../includes/footer.php"; ?>
