<?php
session_start();
// cek user udah login belum | agar tidak sembarangan orang yg dapat menambahkan data
if (!isset($_SESSION["login"])) {
    header("Location: ../admin/login.php");
    exit;
}
require("../function/functions-item.php");

if (isset($_POST["submit"])) {
    // cek keberhasilan
    if (create($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil dimasukan!');
            document.location.href = '../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create(Add) Item</title>
    <link rel="stylesheet" href="../css/output.css">
</head>

<body>
    <div class="bg-bg2 py-5 text-white flex items-center fixed w-full justify-between px-10">
        <div class="flex items-end">
            <a href="../index.php">
                <h1 class="font-extrabold text-4xl">FIGURE STORE</h1>
            </a>
            <h1>.server side</h1>
        </div>
        <div class="flex gap-6">
            <a href="">
                <img src="../img/icon/pemesanan.png" class="w-[70px] lg:w-[45px] change-color">
            </a>
            <a href="../item/create.php">
                <img src="../img/icon/create.png" class="w-[66px] lg:w-[42px] change-color">
            </a>
            <a href="../admin/admin.php">
                <img src="../img/icon/admin.png" class="w-[66px] lg:w-[42px] change-color">
            </a>
            <a href="../index.php">
                <img src="../img/icon/logout.png" class="w-[65px] lg:w-[41px] change-color">
            </a>
        </div>
    </div>
    <div class="pt-32 px-10">
        <h1 class="text-xl font-bold">Create(Add) Item</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="flex flex-wrap">
                <div>
                    <li class="pt-3">
                        <label for="name">Item Name :</label><br>
                        <input type="text" name="name" id="name" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="code">Item Code :</label><br>
                        <input type="text" name="code" id="code" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="stock">Item Stock :</label><br>
                        <input type="text" name="stock" id="stock" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="price">Item Price :</label><br>
                        <input type="text" name="price" id="price" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="type">Item Type :</label><br>
                        <input type="text" name="type" id="type" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="source">Item Source :</label><br>
                        <input type="text" name="source" id="source" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="dimensions">Item Dimensions :</label><br>
                        <input type="text" name="dimensions" id="dimensions" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="material">Item Material :</label><br>
                        <input type="text" name="material" id="material" required class="border-2 border-black">
                    </li>
                    <li class="pt-3">
                        <label for="image">Item Image :</label><br>
                        <input type="file" name="image" id="image">
                    </li>
                </div>
                <div class="border-2 border-black w-fit h-fit p-2 mt-5">
                    <h1 class="font-bold">(Opsional) Foto tambahan jika ada</h1>
                    <li class="pt-3">
                        <label for="image1">Item Sub-Image1 :</label><br>
                        <input type="file" name="image1" id="image1">
                    </li>
                    <li class="pt-3">
                        <label for="image2">Item Sub-Image2 :</label><br>
                        <input type="file" name="image2" id="image2">
                    </li>
                    <li class="pt-3">
                        <label for="image3">Item Sub-Image3 :</label><br>
                        <input type="file" name="image3" id="image3">
                    </li>
                    <li class="pt-3">
                        <label for="image4">Item Sub-Image4 :</label><br>
                        <input type="file" name="image4" id="image4">
                    </li>
                </div>
            </ul>
            <button type="submit" name="submit" class="button-red mt-5">Submit</button>
        </form>
    </div>
</body>

</html>