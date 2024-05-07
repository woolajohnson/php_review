<?php 
include_once('./layout/header.php'); 
if (isset($_POST['submit'])) {
    $valid_exts = ['png', 'jpg', 'webp'];

    $fileName = $_FILES['upload']['name'];
    $fileSize = $_FILES['upload']['size'];
    $fileTempName = $_FILES['upload']['tmp_name'];
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    
    if ($fileSize <= 5000000 && in_array($fileExt, $valid_exts)) {
        move_uploaded_file($fileTempName, "./uploads/$fileName");
    } else {
        echo "There is an error!";
    }
}
?>
    <section class="max-w-screen-lg mx-auto flex justify-center items-center">
        <form action="" method="POST" class="p-10 rounded-md shadow-lg" enctype="multipart/form-data">
            <input type="file" name="upload" id="upload">
            <button type="submit" name="submit" class="px-4 py-2.5 mt-1 font-semibold bg-black text-white rounded-md">Upload</button>
        </form>
    </section>
<?php include_once('./layout/footer.php'); ?>