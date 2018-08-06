<?php

require_once('../dbconnect.php');
$query = "SELECT * FROM records ORDER BY num ASC;";

$nums;
$i = 0;
if($res = mysqli_query($conn, $query)){
while ($rw = mysqli_fetch_assoc($res)) {
    $nums[$i] = $rw['num'];
    $i++;
}}


$query = "SELECT * FROM records ORDER BY num ASC;";
if($result = mysqli_query($conn, $query))
{
   $iter = 0;
   while($row = mysqli_fetch_assoc($result))
        {
          $inum = $row['num'];
          date_default_timezone_set('Asia/Kolkata');
          $idate = date('j F, Y',strtotime($row['date']));
          $bsone = $row['bs_value'];

         //  $restwo = $result;$rowtwo = mysqli_fetch_array($restwo);
         //  $resthree = $restwo;$rowthree = mysqli_fetch_array($resthree);
          //
         //  $inumtwo = $rowtwo['num'];
         //  $bstwo = $rowtwo['bs_value'];
          //
         //  $inumthree = $rowthree['num'];
         //  $bsthree = $rowthree['bs_value'];

       if($inum==$nums[$iter+1]){
          if($nums[$iter+1]==$nums[$iter+2]){
             $restwo = $result;$rowtwo = mysqli_fetch_assoc($restwo);
             $resthree = $restwo;$rowthree = mysqli_fetch_assoc($resthree);
             $iter+=2;

             $bstwo = $rowtwo['bs_value'];
             $bsthree = $rowthree['bs_value'];
            echo '<tr>
             <td style="text-align:center;" class="datarow">'.$inum.'</td>
             <td style="text-align:center;" class="datarow">'.$idate.'</td>
             <td style="text-align:center;" class="datarow">'.$bsone.'</td>
             <td style="text-align:center;" class="datarow">'.$bstwo.'</td>
             <td style="text-align:center;" class="datarow">'.$bsthree.'</td>
             </tr>';
         }else{
            $restwo = $result;$rowtwo = mysqli_fetch_assoc($restwo);
            $bstwo = $rowtwo['bs_value'];
            $iter++;

            echo '<tr>
             <td style="text-align:center;" class="datarow">'.$inum.'</td>
             <td style="text-align:center;" class="datarow">'.$idate.'</td>
             <td style="text-align:center;" class="datarow">'.$bsone.'</td>
             <td style="text-align:center;" class="datarow">'.$bstwo.'</td>
             <td style="text-align:center;" class="datarow"></td>
             </tr>';
         }
      }else{
         echo '<tr>
          <td style="text-align:center;" class="datarow">'.$inum.'</td>
          <td style="text-align:center;" class="datarow">'.$idate.'</td>
          <td style="text-align:center;" class="datarow">'.$bsone.'</td>
          <td style="text-align:center;" class="datarow"></td>
          <td style="text-align:center;" class="datarow"></td>
          </tr>';
         }
         $iter++;
       }
    }

 ?>
