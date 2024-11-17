<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Laporan Kas</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Jenis</th>
                <th>Akun</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kasData as $kas): ?>
            <tr>
                <td><?= $kas['id']; ?></td>
                <td><?= date('Y-m-d', strtotime($kas['tanggal'])); ?></td>
                <td><?= $kas['deskripsi']; ?></td>
                <td><?= $kas['jenis']; ?></td>
                <td><?= $kas['akun']; ?></td>
                <td><?= number_format($kas['jumlah'], 0, ',', '.'); ?></td>
                <td><?= number_format($kas['harga'], 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
