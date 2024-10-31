<!DOCTYPE html>
<html lang="en">
<?php
    include "head.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="assets/css/akunstyle.css">
    <link rel="stylesheet" href="assets/css/akunstyle.css">
</head>
<body>
<?php
    include "header.php";
?>
    <div class="sidebar">
        <img src="assets/png/anonim.png" alt="User Avatar">
        <div class="username">Nama Pengguna</div>
    </div>
    <div class="content">
        <div class="profile-card">
            <form action="/submit_profile" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="Dyllarzz">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="darrell.stronghold@gmail.com">
                </div>
                <div>
                    <label for="phone">Nomor Hp</label>
                    <input type="text" id="phone" name="phone" value="">
                </div>
                <div>
                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address" value="">
                </div>
                <div>
                    <label for="gender">Jenis Kelamin</label>
                    <select id="gender" name="gender">
                        <option value="none" selected> </option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <br>
                <div>
                    <input type="submit" value="Update Profile">
                </div>
            </form>
        </div>
    </div>
</body>
</html>