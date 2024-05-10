<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Pesanan</title>
</head>

<body>

    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:login.php?pesan=belum_login");
    }
    ?>

    
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                
                    <div class="card-header">
                    <a class="btn btn-sm btn-danger" href="logout.php">LOGOUT</a>
                        DATA PESANAN
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">PESAN</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../koneksi.php');
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM pesanan");
                                // perulangan while
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                <tr>
                                    // increment
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['pesan'] ?></td>
                                    <td class="text-center">
                                        <a href="proses-pesanan.php?id=<?php echo $row['id'] ?>"
                                            class="btn btn-sm btn-danger">SUDAH DI PROSES</a>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        </script>
</body>

</html>