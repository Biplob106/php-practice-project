<?php   
        require base_path('view/partial/head.php');
        require base_path('view/partial/nav.php');
        require base_path('view/partial/banner.php');
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <li>
            <p><?= htmlspecialchars( $note['body'])?></p>
        </li>
        <form method="POST" class="mt-6 flex  text-red-500">
            <button type="submit">Delete</button>
        </form>
    </div>
</main>
<?php require base_path('view/partial/footer.php')?>