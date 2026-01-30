<?php
include "../includes/header.php";
include "data.php";
?>

<h2>All Blogs</h2>

<ul>
<?php foreach ($blogs as $id => $blog): ?>
    <li>
        <a href="blog.php?id=<?php echo $id; ?>">
            <?php echo $blog['title']; ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<?php include "../includes/footer.php"; ?>
