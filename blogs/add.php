<?php
include "../includes/db.php";
include "../includes/header.php";
?>

<div class="blog-form">

    <h2>Add New Blog</h2>

    <form method="POST" enctype="multipart/form-data">

        <label>Title</label>
        <input type="text" name="title" required>

        <label>Subtitle</label>
        <input type="text" name="subtitle" required>

        <label>Content</label>
        <textarea name="content" required></textarea>

        <label>Main Image</label>
        <input type="file" name="image" required>

        <button type="submit">Save Blog</button>

        <p class="note">Images will be stored in assets/images/blogs</p>

    </form>

</div>

<?php include "../includes/footer.php"; ?>
