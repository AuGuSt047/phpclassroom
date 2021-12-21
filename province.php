<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
echo "<h1><center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center></h1>.'<br>'";

echo "<center><table border='1'>";
echo "<tr><td style="background-color:mediumaquamarine">ลำดับ</td><td style="background-color:mediumaquamarine">จังหวัด</td><td style="background-color:mediumaquamarine">จำนวนผู้ป่วยใหม่</td><tdstyle="background-color:mediumaquamarine">จำนวนผู้ป่วยสะสม</td>
       <tdstyle="background-color:mediumaquamarine">จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</td><tdstyle="background-color:mediumaquamarine">จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</td>
       <tdstyle="background-color:mediumaquamarine">จำนวนผู้เสียชีวิต</td><tdstyle="background-color:mediumaquamarine">จำนวนผู้เสียชีวิตสะสม</td></tr>";
  
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
  echo $val->total_case;
  echo "</td>";
  echo "<td>";
  echo $val->new_case_excludeabroad;
  echo "</td>";
  echo "<td>";
  echo $val->total_case_excludeabroad;
  echo "</td>";
  echo "<td>";
  echo $val->new_death;
  echo "</td>";
  echo "<td>";
  echo $val->total_death;
  echo "</td>";
  echo "</tr>";
}
echo "</table></center>";

?>
