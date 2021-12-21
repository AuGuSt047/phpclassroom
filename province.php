<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

echo "<table border='1'>";
echo "<tr><td>ลำดับ</td><td>จังหวัด</td><td>จำนวนผู้ป่วยใหม่</td><td>จำนวนผู้ป่วยสะสม</td>
       <td>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</td><td>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</td>
       <td>จำนวนผู้เสียชีวิต</td><td>จำนวนผู้เสียชีวิตสะสม</td></tr>";
  
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
echo "</table>";

?>
