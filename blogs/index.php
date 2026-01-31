<?php
include "../includes/db.php";
include "../includes/header.php";

$result = $conn->query("SELECT id, title, subtitle, image FROM blogs ORDER BY id DESC");
?>

<h2>Blogs</h2>

<?php if ($result && $result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div style="margin-bottom:30px;">
            <img src="../assets/images/blogs/<?php echo htmlspecialchars($row['image']); ?>" width="200"><br><br>
            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
            <p><?php echo htmlspecialchars($row['subtitle']); ?></p>
            <a href="view.php?id=<?php echo $row['id']; ?>">Read more</a>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>No blogs found.</p>
<?php endif; ?>

<?php include "../includes/footer.php"; ?>
