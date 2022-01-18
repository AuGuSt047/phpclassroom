<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
echo "<h1><center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center></h1><br>";
echo '<body style="background-color:mediumaquamarine">';
echo "<center><table border='1'>";
echo "<tr><td style= 'background-color:#E0FFFF'><b>ลำดับ</b></td>
      <td style= 'background-color:#E0FFFF'><b>จังหวัด</b></td>
      <td style= 'background-color:#E0FFFF'><b>จำนวนผู้ป่วยใหม่</b></td>
      <td style= 'background-color:#E0FFFF'><b>จำนวนผู้ป่วยสะสม</b></td>
      <td style= 'background-color:#E0FFFF'><b>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</b></td>
      <td style= 'background-color:#E0FFFF'><b>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</b></td>
      <td style= 'background-color:#E0FFFF'><b>จำนวนผู้เสียชีวิต</b></td>
      <td style= 'background-color:#E0FFFF'><b>จำนวนผู้เสียชีวิตสะสม</b></td>
      </tr>";

foreach($data as $key=>$val){
  echo "<tr>";
  echo "<td>";
  echo ($key+1);
  echo "</td>";
  echo "<td>";
  echo $val->province;
  echo "</td>";
  echo "<td>";
  echo $val->new_case;
  echo "</td>";
  echo "<td>";
  echo $val->new_recovered;
  echo "</td>";
  echo "<td>";
  echo $val->total_case;
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->new_death;
  echo "</td>";
 
  echo "</tr>";
}
echo "</table></center><br>";

echo "<h3><b><center>วันที่อัปเดต</center></b></h3>";
echo "<h3><b><center>$val->txn_date</center><b></h3>";

?>

