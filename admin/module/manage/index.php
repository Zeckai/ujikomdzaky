<?php
session_start();

// Periksa apakah pengguna sudah login sebagai admin
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Hubungkan ke database
require_once 'config.php';

// Ambil data pengguna dari database
$sql = "SELECT * FROM login";
$result = mysqli_query($connection, $sql);

if (!$result) {
    die("Query Error: " . mysqli_error($connection));
}

// Inisialisasi array untuk menyimpan data pengguna
$users = [];

// Mengambil setiap baris hasil query sebagai array asosiatif
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

// Fungsi untuk menghapus pengguna
if (isset($_GET['delete'])) {
    $id_login = $_GET['delete'];
    $deleteQuery = "DELETE FROM login WHERE id_login = $id_login";
    $deleteResult = mysqli_query($connection, $deleteQuery);
    
    if (!$deleteResult) {
        die("Delete Error: " . mysqli_error($connection));
    }
    
    // Redirect kembali ke halaman manage_user.php setelah menghapus pengguna
    header("Location: manage_user.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Manage User</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id_login']; ?></td>
                    <td><?php echo $user['user']; ?></td>
                    <td><?php echo $user['namalengkap']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <!-- Tombol untuk menghapus pengguna -->
                        <a href="manage_user.php?delete=<?php echo $user['id_login']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
