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

<div class="blog-container">

    <h2><?php echo htmlspecialchars($blog['title']); ?></h2>
    <h4><?php echo htmlspecialchars($blog['subtitle']); ?></h4>

    <img src="../assets/images/blogs/<?php echo htmlspecialchars($blog['image']); ?>">

    <p><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>

    <?php if (!empty($blog['image2'])): ?>
        <img src="../assets/images/blogs/<?php echo htmlspecialchars($blog['image2']); ?>">
    <?php endif; ?>

    <?php if (!empty($blog['image3'])): ?>
        <img src="../assets/images/blogs/<?php echo htmlspecialchars($blog['image3']); ?>">
    <?php endif; ?>

    <?php if (!empty($blog['extra_content'])): ?>
        <p><?php echo nl2br(htmlspecialchars($blog['extra_content'])); ?></p>
    <?php endif; ?>

    <a class="blog-back" href="index.php">← Back to blogs</a>

</div>





