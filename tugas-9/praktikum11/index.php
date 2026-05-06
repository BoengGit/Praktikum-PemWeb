<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
?>

<?php
include 'koneksi.php'; // Koneksi database

// Inisialisasi variabel pencarian
$search_judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$search_tahun = isset($_GET['tahun_terbit']) ? $_GET['tahun_terbit'] : '';

// Query untuk menampilkan daftar buku dengan filter pencarian
$query = "SELECT * FROM buku WHERE 1=1";

if (!empty($search_judul)) {
    $query .= " AND Judul LIKE '%" . $conn->real_escape_string($search_judul) . "%'";
}

if (!empty($search_tahun)) {
    $query .= " AND Tahun_Terbit = " . $conn->real_escape_string($search_tahun);
}

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Buku</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Toko Buku Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Buat Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lihat_transaksi.php">Lihat Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="logout.php" role="button">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Daftar Buku</h2>

        <form method="get" class="row g-3 mb-4">
            <div class="col-md-5">
                <label for="judul" class="form-label">Cari Berdasarkan Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul buku" value="<?php htmlspecialchars($search_judul) ?>">
            </div>

            <div class="col-md-3">
                <label for="tahun_terbit" class="form-label">Cari Berdasarkan Tahun Terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?php htmlspecialchars($search_tahun) ?>">
            </div>

            <div class="col-md-2 align-self-end">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>

            <div class="col-md-2 align-self-end">
                <a href="index.php" class="btn btn-secondary">Reset</a>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['ID'] ?></td>
                        <td><?php echo htmlspecialchars($row['Judul']) ?></td>
                        <td><?php echo htmlspecialchars($row['Penulis']) ?></td>
                        <td><?php echo $row['Tahun_Terbit'] ?></td>
                        <td>Rp<?php echo number_format($row['Harga'], 2) ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="hapus.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>