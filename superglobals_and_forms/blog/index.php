<?php 

include_once('./layout/header.php'); 
$query = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

?>
    <main class="max-w-screen-lg mx-auto">
        <section class="p-10 flex flex-col gap-3 justify-center items-center bg-white rounded-lg shadow-lg mb-8">
            <h1 class="text-2xl font-bold my-3">Latest Post</h1>
            <?php if (mysqli_num_rows($result)) :?>
                <?php foreach ($result as $post) :?>
                    <div class="p-5 shadow-md rounded-md">
                        <h1 class="font-bold"><?= $post['title'] ?></h1>
                        <p class=""><?= $post['body'] ?></p>
                        <p class="">Posted on: <?= $post['created_at'] ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </main>
<?php include_once('./layout/footer.php'); ?>