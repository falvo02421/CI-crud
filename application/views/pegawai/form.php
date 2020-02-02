<form method="POST"
      action="<?php echo base_url().'pegawai/add'?>">
<table>
   <tr>
      <td>ID</td><td>:</td>
      <td><input type="text" name="id" value="" size="10"/></td>
    </tr>
   <tr>
     	<td>NIP</td><td>:</td>
     	<td><input type="text" name="nip" value="" size="40"/></td>
    </tr>
    <tr>
     	<td>Nama</td><td>:</td>
     	<td><input type="text" name="nama" value="" size="10"/></td>
    </tr>
    <tr>
      <td>Gender</td><td>:</td>
      <td>
        <input type="checkbox" name="gender" value="L" size="10"/>L
        <input type="checkbox" name="gender" value="P" size="10"/>P
      </td>
    </tr>
    <tr>
       <td>Tempat Lahir</td><td>:</td>
       <td><input type="text" name="tmp_lahir" value="" size="20"/></td>
    </tr>
    <tr>
       <td>Tanggal Lahir</td><td>:</td>
       <td><input type="date" name="tgl_lahir" value="" size="20"/></td>
    </tr>
    <tr>
       <td>Alamat</td><td>:</td>
       <td><textarea cols="40" rows="4" name="alamat"></textarea></td>
    </tr>   
    <tr>
       <td>Departemen ID</td><td>:</td>
       <td><input type="text" name="dep_id" value="" size="20"/></td>
    </tr>
    <tr>
       <td colspan="3">
  	     <input type="submit" value="Simpan">
       </td>
    </tr>
</table>
</form>


