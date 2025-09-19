<?php   
        require base_path('view/partial/head.php');
        require base_path('view/partial/nav.php');
        require base_path('view/partial/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note):?>
        <li>
            <a href="note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
                <span><?= $note['body']?></span>
            </a>
        </li>
        <?php endforeach ?>


        <p>
            <a href="notes/create" class="text-blue-500 hover:underline">create note
        </p>
    </div>
</main>
<?php require base_path('view/partial/footer.php')?>