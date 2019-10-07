<?php
$a="false";
$b="true";
$logic11=($a and $a);
$logic12=($a or $a);
$logic21=($a AND $b);
$logic22=($a OR $b);
$logic31=($b AND $a);
$logic32=($b OR $a);
$logic41=($b AND $a);
$logic42=($b OR $b);

echo "<p>Tabel Logika 1111</p>";
echo "<table border=1>
  <tr>
    <th>Input 1</th>
    <th>Input 2</th>
    <th>AND</th>
    <th>OR</th>
  </tr>
  <tr>
    <td>$a</td>
    <td>$a</td>
    <td>$logic11</td>
    <td>$logic12</td>
  </tr>
  <tr>
    <td>$a</td>
    <td>$b</td>
    <td>$logic21</td>
    <td>$logic22</td>
  </tr>
  <tr>
    <td>$b</td>
    <td>$a</td>
    <td>$logic31</td>
    <td>$logic32</td>
  </tr>
  <tr>
    <td>$b</td>
    <td>$b</td>
    <td>$logic41</td>
    <td>$logic42</td>
  </tr>
</table>";
 ?>
