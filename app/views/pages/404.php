<?php
    $pageTitle = "404";
    include __DIR__ . '/../layout/header.php';
    use App\core\Translation;
?>

    <body>
        <main>
            <div class="error-container">
                <div class="error-code">404</div>
                <div class="error-message"><?= Translation::get("404.errorMessage.title"); ?></div>
                <a class="home-link" href="/login"><?= Translation::get("404.errorMessage.backButton"); ?></a>
            </div>
        </main>

        <?php include __DIR__ . '/../layout/footer.php'; ?>

    </body>
</html>