<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
echo "<h1><center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center></h1><br>";
echo '<body style="background-color:mediumaquamarine">';
echo "<center><table border='1'>";
echo "<tr><td style= 'background-color:#E0FFFF'>ลำดับ</td>
      <td style= 'background-color:#E0FFFF'>จังหวัด</td>
      <td style= 'background-color:#E0FFFF'>จำนวนผู้ป่วยใหม่</td>
      <td style= 'background-color:#E0FFFF'>จำนวนผู้ป่วยสะสม</td>
      <td style= 'background-color:#E0FFFF'>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</td>
      <td style= 'background-color:#E0FFFF'>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</td>
      <td style= 'background-color:#E0FFFF'>จำนวนผู้เสียชีวิต</td>
      <td style= 'background-color:#E0FFFF'>จำนวนผู้เสียชีวิตสะสม</td>
      </tr>";

foreach($data as $key=>$val){
  echo "<tr>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo ($key+1);
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->province;
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->new_case;
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->total_case;
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->new_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->total_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->new_death;
  echo "</td>";
  echo "<td style= 'background-color:#F5F5DC'>";
  echo $val->total_death;
  echo "</td>";
  echo "</tr>";
}
echo "</table></center><br>";

echo "<h3><b><center>วันที่อัปเดต</center></b></h3>";
echo "<h3><b><center>$val->txn_date</center><b></h3>";

?>

