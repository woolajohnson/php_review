<?php
include_once('./layout/header.php');  
$title = "";
$body = "";
$title_error = "";
$body_error = "";

if (isset($_POST['submit'])) {
    if (empty($_POST['title'])) {
        $title_error = "Title cannot be empty!";
    } else {
        $title = $_POST['title'];
    }
    if (empty($_POST['body'])) {
        $body_error = "Body content cannot be empty!";
    } else {
        $body = $_POST['body'];
    }
    if ($_POST['title'] && $_POST['body']) {
        $query = "INSERT INTO posts (title, body) VALUES ('$title', '$body')";
        mysqli_query($conn, $query);
        header("Location: index.php");
        exit;
    }
} 
?>
    <main class="max-w-screen-lg mx-auto mb-4">
        <section class="flex justify-center items-center my-10">
            <form action="" method="POST" class="p-10 flex flex-col gap-3 w-[25rem] shadow-md rounded-lg">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="indent-2 py-2 rounded-md">
                <small class="text-red-500 text-sm"><?= $title_error ?></small>
                <label for="body">Body</label>
                <textarea type="text" id="body" name="body" class="indent-2 py-2 rounded-md"></textarea>
                <small class="text-red-500 text-sm"><?= $body_error ?></small>
                <button type="submit" name="submit" class="px-4 py-2.5 mt-1 font-semibold bg-black text-white rounded-md">Add</button>
            </form>
        </section>
    </main>
<?php include_once('./layout/footer.php'); ?>