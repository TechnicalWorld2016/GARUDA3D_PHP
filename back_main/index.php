<?php
include "includes/header.php";
include "includes/db.php";
?>

<style>
/* ===== GLOBAL ===== */
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    color: #333;
}
a { text-decoration: none; }

/* ===== HERO ===== */
.hero {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    color: #fff;
    padding: 90px 20px;
    text-align: center;
}
.hero h1 {
    font-size: 44px;
    margin-bottom: 10px;
    
    
}
.hero p {
    font-size: 18px;
    margin-bottom: 30px;
}
.hero .btn {
    background: #ff9800;
    color: #000;
    padding: 14px 28px;
    font-weight: bold;
    border-radius: 6px;
}

/* ===== SECTION ===== */
.section {
    max-width: 1100px;
    margin: auto;
    padding: 70px 20px;
}
.section h2 {
    text-align: center;
    margin-bottom: 40px;
}

/* ===== FEATURES ===== */
.features {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}
.feature {
    flex: 1;
    min-width: 260px;
    padding: 25px;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
}

/* ===== BLOG PREVIEW ===== */
.blogs {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}
.blog-card {
    flex: 1;
    min-width: 260px;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
}
.blog-card img {
    width: 100%;
    height: 270px;
    object-fit: static;
}
.blog-card .content {
    padding: 15px;
}
.blog-card h4 {
    margin: 10px 0;
}
.blog-card a {
    color: #0066cc;
    font-weight: bold;
}

/* ===== CTA ===== */
.cta {
    background: #203a43;
    color: #fff;
    text-align: center;
    padding: 60px 20px;
}
.cta .btn {
    background: #ff9800;
    color: #000;
    padding: 14px 28px;
    font-weight: bold;
    border-radius: 6px;
}
</style>

<!-- ===== HERO SECTION ===== -->
<section class="hero">
    <h1>Garuda 3D</h1>
    <p>Advanced 3D Printing • Engineering Insights • Real-World Innovation</p>
    <a class="btn" href="blogs/">Explore Blogs</a>
</section>

<!-- ===== ABOUT ===== -->
<section class="section">
    <h2>About Garuda 3D</h2>
    <p style="text-align:center; max-width:800px; margin:auto;">
        Garuda 3D focuses on additive manufacturing, engineering research,
        and technology education. We share real project experiences,
        practical blogs, and modern manufacturing knowledge.
    </p>
</section>

<!-- ===== FEATURES ===== -->
<section class="section">
    <h2>What We Do</h2>
    <div class="features">
        <div class="feature">
            <h3>3D Printing</h3>
            <p>Advanced additive manufacturing and rapid prototyping.</p>
        </div>
        <div class="feature">
            <h3>Engineering Blogs</h3>
            <p>Practical tutorials, research insights, and case studies.</p>
        </div>
        <div class="feature">
            <h3>Product Development</h3>
            <p>From idea to design to functional prototype.</p>
        </div>
    </div>
</section>

<!-- ===== LATEST BLOGS ===== -->
<section class="section">
    <h2>Latest Blogs</h2>
    <div class="blogs">
        <?php
        $result = $conn->query("SELECT id, title, subtitle, image FROM blogs ORDER BY id DESC LIMIT 3");
        if ($result && $result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
        <div class="blog-card">
            <img src="assets/images/blogs/<?php echo htmlspecialchars($row['image']); ?>">
            <div class="content">
                <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                <p><?php echo htmlspecialchars($row['subtitle']); ?></p>
                <a href="blogs/view.php?id=<?php echo $row['id']; ?>">Read More →</a>
            </div>
        </div>
        <?php
            endwhile;
        else:
        ?>
            <p>No blogs available.</p>
        <?php endif; ?>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta">
    <h2>Learn. Build. Innovate.</h2>
    <p>Explore Garuda 3D blogs and stay updated with engineering trends.</p>
    <a class="btn" href="blogs/">Go to Blogs</a>
</section>

<?php include "includes/footer.php"; ?>
