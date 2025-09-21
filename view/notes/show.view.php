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
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <a href="/note/edit?id=<?= $note['id'] ?>">Edit</a>
        </button>

        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>
<?php require base_path('view/partial/footer.php')?>