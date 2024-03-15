<?php 
	@ob_start();
	session_start();
	if(!empty($_SESSION['admin'])){ }else{
		echo '<script>window.location="login.php";</script>';
        exit;
	}
	require 'config.php';
	include $view;
	$lihat = new view($config);
	$toko = $lihat -> toko();
	$hsl = $lihat -> penjualan();
?>
<html>
	<head>
		<title>.</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<style>
        /* Mengatur ukuran kertas dan tata letak cetakan */
        @media print {
            @page {
                size: 80mm 80mm; /* Atur ukuran kertas */
            }

            body {
                font-family: 'Courier New', Courier, monospace; /* Gunakan font monospace */
                font-size: 10pt; /* Ukuran font */
                margin: 0;
                padding: 0;
            }

            .container {
                padding: 10px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 10px;
            }

            table, th, td {
                border: 1px solid black;
            }

            th, td {
                padding: 5px;
                text-align: left;
            }

            .pull-right {
                text-align: right;
            }

            p {
                margin: 5px 0;
            }
        }
		</style>
	</head>
	<body>
		<script>window.print();</script>
		<div class="container">
    <div class="row">
        <div class="col-sm-12">
					<center>
						<p><?php echo $toko['nama_toko'];?></p>
						<p><?php echo $toko['alamat_toko'];?></p>
						<p>Tanggal : <?php  echo date("j F Y, G:i");?></p>
						<!-- <p>Kasir : <?php  echo htmlentities($_GET['nm_member']);?></p> -->
					</center>
					<table class="table table-bordered" style="width:100%;">
						<tr>
							<td>No.</td>
							<td>Barang</td>
							<td>Jumlah</td>
							<td>Total</td>
						</tr>
						<?php $no=1; foreach($hsl as $isi){?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $isi['nama_barang'];?></td>
							<td><?php echo $isi['jumlah'];?></td>
							<td><?php echo $isi['total'];?></td>
						</tr>
						<?php $no++; }?>
					</table>
					<div class="pull-right">
						<?php $hasil = $lihat -> jumlah(); ?>
						Total : Rp.<?php echo number_format($hasil['bayar']);?>,-
						<br/>
						Bayar : Rp.<?php echo number_format(htmlentities($_GET['bayar']));?>,-
						<br/>
						Kembali : Rp.<?php echo number_format(htmlentities($_GET['kembali']));?>,-
					</div>
					<div class="clearfix"></div>
					<center>
						
					</center>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>
