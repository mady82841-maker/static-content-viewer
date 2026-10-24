<?php
require_once 'content.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Content Viewer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <nav class="navbar">
            <div class="logo">ST<span>.</span></div>
            <span class="nav-label">STATIC CONTENT VIEWER</span>
        </nav>

        <section class="hero">
            <div class="hero-text">
                <span class="eyebrow">
                    <?php echo htmlspecialchars($content["label"]); ?>
                </span>

                <h1>
                    <?php echo htmlspecialchars($content["title"]); ?>
                </h1>

                <p>
                    <?php echo htmlspecialchars($content["description"]); ?>
                </p>

                <div class="bottom-note">
                    <span class="dot"></span>
                    SIMPLE CONTENT. BEAUTIFULLY PRESENTED.
                </div>
            </div>

            <div class="hero-image">
                <img
                    src="<?php echo htmlspecialchars($content["image"]); ?>"
                    alt="Sunlight over a peaceful landscape"
                >
                <div class="image-caption">Find beauty in the simple things.</div>
            </div>
        </section>

        <footer>
            <span>STATIC CONTENT VIEWER</span>
            <span>DESIGNED WITH CARE © 2026</span>
        </footer>
    </main>
</body>
</html>