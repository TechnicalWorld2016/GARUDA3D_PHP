<?php
include "../includes/db.php";
include "../includes/header.php";

$result = $conn->query("SELECT * FROM blogs ORDER BY id DESC");
?>

<div class="blog-container">
    <h2>All Blogs</h2>

    <div class="blog-list">

        <?php if ($result && $result->num_rows > 0): ?>

            <?php while ($row = $result->fetch_assoc()): ?>

                <div class="blog-card">
                    <?php if (!empty($row['image'])): ?>
                        <img src="../assets/images/blogs/<?php echo htmlspecialchars($row['image']); ?>">
                    <?php endif; ?>

                    <div class="blog-card-content">
                        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p><?php echo htmlspecialchars($row['subtitle']); ?></p>

                        <a href="view.php?id=<?php echo $row['id']; ?>">Read more →</a>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php else: ?>
            <p>No blogs found.</p>
        <?php endif; ?>

    </div>
</div>

<?php include "../includes/footer.php"; ?>
