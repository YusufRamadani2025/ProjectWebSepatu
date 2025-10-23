<?php
header('Content-Type: application/json');

// Koneksi ke database (Laragon default)
$host = 'localhost';
$db   = 'tb_sepatu'; // 👈 SESUAIKAN DI SINI
$user = 'root';
$pass = ''; // default Laragon: root tanpa password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Ambil data dari request (JSON)
    $input = json_decode(file_get_contents('php://input'), true);

    if (!$input) {
        echo json_encode(['status' => 'error', 'message' => 'Data tidak valid']);
        exit;
    }

    $nama = trim($input['nama']);
    $harga = trim($input['harga']);
    $alamat = trim($input['alamat']);
    $kategori = trim($input['kategori']);
    $ukuran = trim($input['ukuran']);

    // Validasi dasar
    if (empty($nama) || empty($harga) || empty($alamat) || empty($kategori) || empty($ukuran)) {
        echo json_encode(['status' => 'error', 'message' => 'Semua field wajib diisi']);
        exit;
    }

    // Simpan ke database
    $stmt = $pdo->prepare("INSERT INTO sepatu (nama, harga, alamat, kategori, ukuran) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nama, $harga, $alamat, $kategori, $ukuran]);

    echo json_encode(['status' => 'success', 'message' => 'Data sepatu berhasil disimpan!']);

} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}
?>