<?php include("proses.php");?>
<html>
 <head>
 <title>Laundry</title>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <link rel="stylesheet" href="responsi.css">
 </head>

 <body>
    <div id="content">
		<div id="header"></div>
		<div id="menu">
			<ul>
				<li> <a href="responsi.html"> Home</a></li>
				<li> <a href="#">About</a></li>
                <li> <a href="#">Contact</a></li>
				<li> <a href="order.html">Order</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div id="news">
				<h3> LAUNDRY</h3>
				<div align="center"><strong>Masukan Order</strong></div>
        <form name="form1" method="post">
        <table width="50%" border="0" align="center">
        <tr>
        <td>Nama : </td>
        <td><input name="nama" type="text" id="nama" required></td>
        </tr>
        <tr>
        <td>Alamat : </td>
        <td><input name="alamat" type="text" id="alamat" required></td>
        </tr>
        <tr>
        <td>No. Hp : </td>
        <td><input type="text" name="hp" id="hp" required></td>
        </tr>
        <tr>
        <td>Paket Yang dipilih </td>
        <td><select name="paket" id="paket" required>
        <option>Premium</option>
        <option>Standard</option>
        </select></td>
        </tr>

        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal"> </td> 
        </tr>
        </table>
        </form>
			</div>
		</div>
		<div id="side-menu">
			<ul>
			<li><a href="#" onclick="document.getElementById('me').style.display='block'" >About us</a>
                <p id="me" style="display:none"><br> Laundry Pak eko </p></li>
			<li><a href="#" onclick="document.getElementById('sm').style.display='block'" >social media</a>
                <p id="sm" style="display:none"> <a href="#"> <img src="insta.webp" alt="" height="50px" width="50px"></a><a href="#"> <img src="fb.png" alt="" height="50px" width="50px"></a></p></li>
			<li><a href="#" onclick="document.getElementById('paket').style.display='block'">Daftar Harga Paket Laundry</a>
				<ul id="paket" style="display:none">
					<li>Premium Rp.40.000</li>
					<li>Standard Rp.10.000</li>
				</ul>
			</li>
		</ul></div>
		<div id="footer">Copyright <a href="#">Adityo</a>, All right reserved</div>
	<div>
</body>
</html>