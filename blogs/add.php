<?php
include "../includes/db.php";
include "../includes/header.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title    = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $content  = $_POST['content'];

    $imageName = $_FILES['image']['name'];
    $tmpName   = $_FILES['image']['tmp_name'];

    $newName = time() . "_" . $imageName;
    move_uploaded_file($tmpName, "../assets/images/blogs/" . $newName);

    $stmt = $conn->prepare(
        "INSERT INTO blogs (image, title, subtitle, content)
         VALUES (?, ?, ?, ?)"
    );
    $stmt->bind_param("ssss", $newName, $title, $subtitle, $content);
    $stmt->execute();

    echo "<p>Blog added successfully</p>";
}
?>

<h2>Add Blog</h2>

<form method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title" required><br><br>
    <input type="text" name="subtitle" placeholder="Subtitle" required><br><br>
    <textarea name="content" placeholder="Content" required></textarea><br><br>
    <input type="file" name="image" required><br><br>
    <button type="submit">Save Blog</button>
</form>

<?php include "../includes/footer.php"; ?>
