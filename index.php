<?php
	require_once "view/header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>

	<div id="imgindex">
		<div id="imglog">
			<p><br>Selamat Datang<br>
			<a href="daftar" id="tomboll">DAFTAR</a>
			<a href="login" id="tombol2">LOGIN</a><br>&nbsp;</p>
		</div>
	</div>

			<div id="reservasi">
				<li>Reservasi</li>
				<form method="post" action="user/pemesanan" name="opsi">
					<table>
						<tr>
							<td>Check-In</td>
							<td>Check-Out</td>
							<td>Type</td>
							<td>Harga/Malam</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="date" name="cekin">
							</td>
							<td>
								<input type="date" name="cekout">
							</td>
							<td>
								<select name="tipe" id="selek" required="required" onchange="pilih()" style="font-weight: bold;">
									<option selected="selected" disabled="disabled">-Pilih-</option>
									<option value="Rp 410.000">Superior</option>
									<option value="Rp 450.000">Deluxe</option>
									<option value="Rp 700.000">Junior Suite</option>
									<option value="Rp 1.200.000">Executive</option>
								</select>
							</td>
							<td>
								<input type="text" name="harga" style="width: 100px;" onchange="pilih()">
								<input type="hidden" name="tipex" style="width: 100px;" onchange="pilih()">
							</td>
							<td>
								<input type="submit" name="ok" value="Pesan" id="tombol">
							</td>
						</tr>
					</table>
				</form>
			</div>

			<div id="tentang">
				<h3>Tentang Kami</h3><br>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod deleniti quisquam doloribus quo tempora ipsam, laborum velit laudantium quam pariatur inventore saepe eligendi libero quidem, fuga, explicabo aliquid magnam adipisci?
				</p><br>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus minus libero quis? Suscipit, repudiandae! Ducimus, provident. Cumque, distinctio. Corporis at inventore aut commodi, nulla iste dolore maiores quasi sed nam.
				</p>
			</div>

			<div id="cekinout">
				<h3>Check-In &amp; Check-Out</h3><br>
				<h4>Check-In</h4>
				<p>Jam Check-In Standar : 12.00 WIB</p>
				<p>*Waktu Check-In dari plan mempunyai prioritas lebih besar</p><br>
				<h4>Check-Out</h4>
				<p>Jam Check-Out Standar : 12.00 WIB</p>
				<p>*Waktu Check-Out dari plan mempunyai prioritas lebih besar</p><br>
			</div>

			<div id="petalokasi">
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1841736295664!2d109.10539091449948!3d-6.868521669110722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9e2805c1c1b%3A0xe3e61e1ae59106ff!2sPoliteknik%20Harapan%20Bersama!5e0!3m2!1sid!2sid!4v1572992220040!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					
				</iframe>
			</div>
			</center>
	

<?php
	require_once "view/footer.php"
?>
