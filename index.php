<?php
$output = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah = isset($_POST['jumlah']) ? intval($_POST['jumlah']) : 0;
    $jenis = isset($_POST['jenis']) ? htmlspecialchars($_POST['jenis']) : '';

    if ($jumlah > 0 && !empty($jenis)) {
        $output = "Ada $jumlah $jenis berenang di Kali`.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mari Berhitung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Masukkan Jumlah Hewan</label>
                <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Masukkan Nama Hewan</label>
                <input type="text" name="jenis" class="form-control" id="exampleFormControlInput2" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if (!empty($output)): ?>
            <div class="mt-3 alert alert-info">
                <?php echo $output; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
