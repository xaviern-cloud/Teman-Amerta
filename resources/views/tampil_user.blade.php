<?php
include_once("dbconnection.php");

// Ambil data lengkap (id, username, email, password, created_at)
$query  = "SELECT id, username, email, password, created_at, role FROM users";
$result = mysqli_query($dbconnection, $query);

if (!$result) {
    die("Gagal mengambil data dari MySQL: " . mysqli_error($dbconnection));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        table { border-collapse: collapse; width: 85%; margin: 20px auto; font-family: sans-serif; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; word-break: break-all; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even){ background-color: #f2f2f2; }
        code { font-family: monospace; font-size: 12px; color: #d63384; }
    </style>
</head>

    <body class="background-datapage">
        <div class="terhubung-database">
            <?php echo "Terhubung ke database: " . $dbname; ?>
        </div>

        <div class="button-container">
            <a href="login.php" class="button-login_data">Login Page</a>
            <a href="dashboard.php" class="button-login_data">Dashboard</a>
        </div>

        <div class="data-container">
            <h1 style="text-align: center;">Daftar User</h1>
            <table>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password (Hashed)</th>
                            <th>Waktu Registrasi</th>
                            <th>Role</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($row['username'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($row['email'] ?? '-'); ?></td>
                            <td><code><?= htmlspecialchars($row['password'] ?? '-'); ?></code></td>
                            <td><?= htmlspecialchars($row['created_at'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($row['role'] ?? '-') ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
        </div>
    </body>
</html>
