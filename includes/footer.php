<?php
declare(strict_types=1);
?>
</main>
<?php require __DIR__ . '/site-footer.php'; ?>
<?php
if (!empty($pageScripts)) {
    if (is_array($pageScripts)) {
        foreach ($pageScripts as $snippet) {
            echo $snippet, "\n";
        }
    } else {
        echo $pageScripts, "\n";
    }
}
?>
</body>
</html>
