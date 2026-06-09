<?php
$nama		            = "Nuriatun Syalma";
$tempat_tanggal_lahir       = "Rangga Ilung, 02 November 2006";
$alamat			    = "Pemurus Dalam ";
$hobi		            = "Memasak";
$kelas	  	            = "REG 4C BJM";

echo "<h2 style='text-align: center;'>Biodata Diri</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='width: 50%; margin: auto; border-collapse: collapse;'>";
    echo "<tr>
            <th style='background-color: #f2f2f2;'>Kategori</th>
            <th style='background-color: #f2f2f2;'>Keterangan</th>
          </tr>";
    
    echo "<tr>
            <td><strong>Nama Lengkap</strong></td>
            <td>$nama</td>
          </tr>";
          
    echo "<tr>
            <td><strong>Tempat Tanggal Lahir</strong></td>
            <td>$tempat_tanggal_lahir</td>
          </tr>";
          
    echo "<tr>
            <td><strong>Alamat</strong></td>
            <td>$alamat</td>
          </tr>";
          
    echo "<tr>
            <td><strong>Hobi</strong></td>
            <td>$hobi</td>
          </tr>";
          
    echo "<tr>
            <td><strong>Kelas</strong></td>
            <td>$kelas</td>
          </tr>";
echo "</table>";
?>