<h1><?php echo $judul ?></h1>
<form method="POST"
      action="<?php echo base_url().'departemen/update/'.
      $dep->id?>">
<table>
   <tr>
   	<td>Nama Departemen</td><td>:</td>
   	<td><input type="text" name="nama" 
    value="<?=$dep->nama?>" size="40"/></td>
   </tr>
<tr>
   	<td>Kode</td><td>:</td>
   	<td><input type="text" name="abbr" 
    value="<?=$dep->abbr?>" size="10"/></td>
   </tr>
<tr>
 <td>Alamat</td><td>:</td>
 <td><textarea cols="40" rows="4" name="alamat">
   <?=$dep->alamat?>
 </textarea></td>
</tr>   
<tr>
   	<td>Telpon</td><td>:</td>
   	<td><input type="text" name="telpon" 
    value="<?=$dep->telpon?>" size="20"/></td>
</tr>
<tr>
  <td colspan="3">
  	<input type="submit" value="Simpan">
  </td>
</tr>
</table>
</form>