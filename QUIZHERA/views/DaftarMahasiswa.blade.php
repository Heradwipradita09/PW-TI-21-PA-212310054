<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mahasiswa = [['nama' => 'Hera Dwi Pradita', 'npm' => '212310054', 'prodi' => 'Teknologi Informasi'], ['nama' => 'dwi pradita', 'npm' => '212310055', 'prodi' => 'Akuntansi'], ['nama' => 'Hera Pradita', 'npm' => '212310056', 'prodi' => 'Manajemen']];

            foreach ($mahasiswa as $mhs) {
                echo '<tr>';
                echo '<td>' . $mhs['nama'] . '</td>';
                echo '<td>' . $mhs['npm'] . '</td>';
                echo '<td>' . $mhs['prodi'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
