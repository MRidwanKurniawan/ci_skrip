<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Penilaian Generik Rekan Kerja / Anggota Yang Dinilai
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penilaian Generik Rekan Kerja / Anggota Yang Dinilai</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box-header with-border">
		<h3 class="box-title">Penilaian Generik Rekan Kerja / Anggota Yang Dinilai </h3>
	</div>

	<div class="box-body">
		<table border="1" cellspacing="0" cellpadding="3" style="border: 0px">
		<tr><th>No.</th><th>Faktor Kinerja</th><th>Pencapaian Kinerja</th><th>TOTAL</th></tr>
		<tr><td>1.</td><td>Kepemimpinan</td><td>
		<input type="radio" name="P1" id="P11" onClick="calcSMK(document.catt.c_PPkepemimpinan,'c_PPkepemimpinan','1');"> 1
		<input type="radio" name="P1" id="P13" onClick="calcSMK(document.catt.c_PPkepemimpinan,'c_PPkepemimpinan','3');"> 3
		<input type="radio" name="P1" id="P15" onClick="calcSMK(document.catt.c_PPkepemimpinan,'c_PPkepemimpinan','5');" checked> 5
		<input type="radio" name="P1" id="P18" onClick="calcSMK(document.catt.c_PPkepemimpinan,'c_PPkepemimpinan','8');"> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPkepemimpinan" id="c_PPkepemimpinan" value="5" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPkepemimpinan,'c_PPkepemimpinan',this.value); chRadio('P1',this.value);" onFocus="document.getElementById('c_PPkepemimpinan').select();" onClick="document.getElementById('c_PPkepemimpinan').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPsosial'), event);"></td></tr>
		<tr><td>2.</td><td>Jaringan Sosial</td><td>
		<input type="radio" name="P2" id="P21" onClick="calcSMK(document.catt.c_PPsosial,'c_PPsosial','1');"> 1
		<input type="radio" name="P2" id="P23" onClick="calcSMK(document.catt.c_PPsosial,'c_PPsosial','3');"> 3
		<input type="radio" name="P2" id="P25" onClick="calcSMK(document.catt.c_PPsosial,'c_PPsosial','5');" checked> 5
		<input type="radio" name="P2" id="P28" onClick="calcSMK(document.catt.c_PPsosial,'c_PPsosial','8');"> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPsosial" id="c_PPsosial" value="5" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPsosial,'c_PPsosial',this.value); chRadio('P2',this.value);" onFocus="document.getElementById('c_PPsosial').select();" onClick="document.getElementById('c_PPsosial').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPkomunikasi'), event);"></td></tr>
		<tr><td>3.</td><td>Komunikasi</td><td>
		<input type="radio" name="P3" id="P31" onClick="calcSMK(document.catt.c_PPkomunikasi,'c_PPkomunikasi','1');"> 1
		<input type="radio" name="P3" id="P33" onClick="calcSMK(document.catt.c_PPkomunikasi,'c_PPkomunikasi','3');"> 3
		<input type="radio" name="P3" id="P35" onClick="calcSMK(document.catt.c_PPkomunikasi,'c_PPkomunikasi','5');"> 5
		<input type="radio" name="P3" id="P38" onClick="calcSMK(document.catt.c_PPkomunikasi,'c_PPkomunikasi','8');" checked> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPkomunikasi" id="c_PPkomunikasi" value="8" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPkomunikasi,'c_PPkomunikasi',this.value); chRadio('P3',this.value);" onFocus="document.getElementById('c_PPkomunikasi').select();" onClick="document.getElementById('c_PPkomunikasi').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPemosi'), event);"></td></tr>
		<tr><td>4.</td><td>Pengendalian Emosi</td><td>
		<input type="radio" name="P4" id="P41" onClick="calcSMK(document.catt.c_PPemosi,'c_PPemosi','1');"> 1
		<input type="radio" name="P4" id="P43" onClick="calcSMK(document.catt.c_PPemosi,'c_PPemosi','3');"> 3
		<input type="radio" name="P4" id="P45" onClick="calcSMK(document.catt.c_PPemosi,'c_PPemosi','5');"> 5
		<input type="radio" name="P4" id="P48" onClick="calcSMK(document.catt.c_PPemosi,'c_PPemosi','8');" checked> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPemosi" id="c_PPemosi" size="1" value="8" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPemosi,'c_PPemosi',this.value); chRadio('P4',this.value);" onFocus="document.getElementById('c_PPemosi').select();" onClick="document.getElementById('c_PPemosi').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPperubahan'), event);"></td></tr>
		<tr><td>5.</td><td>Agen Perubahan</td><td>
		<input type="radio" name="P5" id="P51" onClick="calcSMK(document.catt.c_PPperubahan,'c_PPperubahan','1');"> 1
		<input type="radio" name="P5" id="P53" onClick="calcSMK(document.catt.c_PPperubahan,'c_PPperubahan','3');"> 3
		<input type="radio" name="P5" id="P55" onClick="calcSMK(document.catt.c_PPperubahan,'c_PPperubahan','5');"> 5
		<input type="radio" name="P5" id="P58" onClick="calcSMK(document.catt.c_PPperubahan,'c_PPperubahan','8');" checked> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPperubahan" id="c_PPperubahan" value="8" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPperubahan,'c_PPperubahan',this.value); chRadio('P5',this.value);" onFocus="document.getElementById('c_PPperubahan').select();" onClick="document.getElementById('c_PPperubahan').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPintegritas'), event);"></td></tr>
		<tr><td>6.</td><td>Integritas</td><td>
		<input type="radio" name="P6" id="P61" onClick="calcSMK(document.catt.c_PPintegritas,'c_PPintegritas','1');"> 1
		<input type="radio" name="P6" id="P63" onClick="calcSMK(document.catt.c_PPintegritas,'c_PPintegritas','3');"> 3
		<input type="radio" name="P6" id="P65" onClick="calcSMK(document.catt.c_PPintegritas,'c_PPintegritas','5');"> 5
		<input type="radio" name="P6" id="P68" onClick="calcSMK(document.catt.c_PPintegritas,'c_PPintegritas','8');" checked> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPintegritas" id="c_PPintegritas" value="8" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPintegritas,'c_PPintegritas',this.value); chRadio('P6',this.value);" onFocus="document.getElementById('c_PPintegritas').select();" onClick="document.getElementById('c_PPintegritas').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPempati'), event);"></td></tr>
		<tr><td>7.</td><td>Empati</td><td>
		<input type="radio" name="P7" id="P71" onClick="calcSMK(document.catt.c_PPempati,'c_PPempati','1');"> 1
		<input type="radio" name="P7" id="P73" onClick="calcSMK(document.catt.c_PPempati,'c_PPempati','3');"> 3
		<input type="radio" name="P7" id="P75" onClick="calcSMK(document.catt.c_PPempati,'c_PPempati','5');"> 5
		<input type="radio" name="P7" id="P78" onClick="calcSMK(document.catt.c_PPempati,'c_PPempati','8');" checked> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPempati" id="c_PPempati" value="8" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPempati,'c_PPempati',this.value); chRadio('P7',this.value);" onFocus="document.getElementById('c_PPempati').select();" onClick="document.getElementById('c_PPempati').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPadministrasi'), event);"></td></tr>
		<tr><td>8.</td><td>Pengelolaan Administrasi</td><td>
		<input type="radio" name="P8" id="P81" onClick="calcSMK(document.catt.c_PPadministrasi,'c_PPadministrasi','1');"> 1
		<input type="radio" name="P8" id="P83" onClick="calcSMK(document.catt.c_PPadministrasi,'c_PPadministrasi','3');"> 3
		<input type="radio" name="P8" id="P85" onClick="calcSMK(document.catt.c_PPadministrasi,'c_PPadministrasi','5');" checked> 5
		<input type="radio" name="P8" id="P88" onClick="calcSMK(document.catt.c_PPadministrasi,'c_PPadministrasi','8');"> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPadministrasi" id="c_PPadministrasi" value="5" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPadministrasi,'c_PPadministrasi',this.value); chRadio('P8',this.value);" onFocus="document.getElementById('c_PPadministrasi').select();" onClick="document.getElementById('c_PPadministrasi').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPkreativitas'), event);"></td></tr>
		<tr><td>9.</td><td>Kreativitas</td><td>
		<input type="radio" name="P9" id="P91" onClick="calcSMK(document.catt.c_PPkreativitas,'c_PPkreativitas','1');"> 1
		<input type="radio" name="P9" id="P93" onClick="calcSMK(document.catt.c_PPkreativitas,'c_PPkreativitas','3');"> 3
		<input type="radio" name="P9" id="P95" onClick="calcSMK(document.catt.c_PPkreativitas,'c_PPkreativitas','5');" checked> 5
		<input type="radio" name="P9" id="P98" onClick="calcSMK(document.catt.c_PPkreativitas,'c_PPkreativitas','8');"> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPkreativitas" id="c_PPkreativitas" value="5" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPkreativitas,'c_PPkreativitas',this.value); chRadio('P9',this.value);" onFocus="document.getElementById('c_PPkreativitas').select();" onClick="document.getElementById('c_PPkreativitas').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPkemandirian'), event);"></td></tr>
		<tr><td>10.</td><td>Kemandirian</td><td>
		<input type="radio" name="P10" id="P101" onClick="calcSMK(document.catt.c_PPkemandirian,'c_PPkemandirian','1');"> 1
		<input type="radio" name="P10" id="P103" onClick="calcSMK(document.catt.c_PPkemandirian,'c_PPkemandirian','3');"> 3
		<input type="radio" name="P10" id="P105" onClick="calcSMK(document.catt.c_PPkemandirian,'c_PPkemandirian','5');" checked> 5
		<input type="radio" name="P10" id="P108" onClick="calcSMK(document.catt.c_PPkemandirian,'c_PPkemandirian','8');"> 8
		</td><td align="center"><input type="text" class="roundedC" name="c_PPkemandirian" id="c_PPkemandirian" value="5" size="1" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_PPkemandirian,'c_PPkemandirian',this.value); chRadio('P10',this.value);" onFocus="document.getElementById('c_PPkemandirian').select();" onClick="document.getElementById('c_PPkemandirian').select();" onKeyDown="return tabOnEnter(document.getElementById('c_PPkepemimpinan'), event);"></td></tr>
		<tr><td colspan="3">Total Nilai Generik</td><th><font size="+2"><div id="rTotalGenerikPP"></div></th></tr>
		<tr><td colspan="3">Total Nilai Akhir Generik x <input type="text" name="c_PPbobot" id="c_PPbobot" size="1" value="35" onChange="updateDB('c_PPbobot',this.value);" onFocus="document.getElementById('c_PPbobot').select();" onClick="document.getElementById('c_PPbobot').select();"> %</td><th><font size="+2"><div id="rTotalGenerikPPA"></div></th></tr>
		<tr><td colspan="4"><textarea name="c_PPcatatan" rows="3" cols="40" onChange="updateDB('c_PPcatatan',this.value);" placeholder="Catatan"></textarea></td></tr>
		</table>
	</div>
</section><!-- /.content -->
