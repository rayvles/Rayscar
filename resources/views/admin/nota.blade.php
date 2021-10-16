@php
    function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}     		
		return $hasil;
	}
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rayscar Transaksi</title>

    <style>
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>

</head>

<body>

    <table width="100%" style="margin-bottom: 25px">
        <tr>
            <td width="115px">
                <img src="{{ public_path('adminlte3')}}/dist/img/rays.png" alt="" width="90" />
            </td>
            <td valign="top">
                <h3 style="margin: 0; margin-bottom: 8px">Rayscar Indonesia</h3>
                <div>Jl. Harapan Bunda No. 12 Bandung</div>
                <div>www.Rayscar.com</div>
                <div>Telp 0895342249271</div>
            </td>
            <td valign="top" align="right">
                <div><b>Tgl {{date('d-M-Y', strtotime($transaksi->cash_tgl))}}</b></div>
                <div><b>No. {{$transaksi->kode_cash}}</b></div>
            </td>
        </tr>

    </table>

    <table>
        <tr>
            <td><b>Terima dari</b></td>
            <td>:</td>
            <td colspan="3"><u>{{strtoupper($transaksi->pembeli->nama_pembeli)}}</u></td>
        </tr>
        <tr>
            <td><b>Jumlah Uang</b></td>
            <td>:</td>
            <td colspan="3"><u>{{terbilang($transaksi->cash_bayar)}}</u></td>
        </tr>
        <tr>
            <td><b>Untuk Pembayaran</b></td>
            <td>:</td>
            <td colspan="3">Mobil {{$transaksi->mobil->merk}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Tipe / Jenis</td>
            <td>:</td>
            <td><u>{{$transaksi->mobil->type}}</u></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Warna</td>
            <td>:</td>
            <td><u>{{strtoupper($transaksi->mobil->warna)}}</u></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Atas Nama STNK</td>
            <td>:</td>
            <td><u>{{strtoupper($transaksi->pembeli->nama_pembeli)}}</u></td>
        </tr>
        <tr valign="top">
            <td></td>
            <td></td>
            <td>Alamat</td>
            <td>:</td>
            <td><u>{{strtoupper($transaksi->pembeli->alamat_pembeli)}}</u></td>
        </tr>
        <tr valign="top">
            <td><b>Keterangan</b></td>
            <td>:</td>
            <td colspan="3">Pembayaran {{$transaksi->pembeli->nama_pembeli}}</td>
        </tr>
    </table>

    <br>

    <table border="1" style="border-collapse: collapse; min-width: 25%;">
        <tr>
            <td style="padding: 5px; background-color: #EBD4D7"><b>Rp {{number_format($transaksi->cash_bayar)}}</b></td>
        </tr>
    </table>

    <br>

    <table style="font-size: 0.6em">
        <tr>
            <td>{{date('d/m/Y h:i:s')}}</td>
        </tr>
        <tr>
            <td>RAYSCAR</td>
        </tr>
    </table>

</body>

</html>
