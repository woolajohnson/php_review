<?php
include('./config/db_config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">
    <header class="max-w-screen-lg mx-auto mb-11">
        <nav class="flex bg-white h-20 justify-between items-center px-8 shadow-lg rounded-bl-lg rounded-br-lg">
            <a href="index.php" class="font-semibold">Home</a>
            <a href="post_create.php" class="font-semibold">New Post</a>
            <a href="file_upload.php" class="font-semibold">File upload</a>
        </nav>
    </header>