<?php
$randomNumbers = array();
$randNumber;
$i;
$j;
$different=0;

for($i=0; $i<25; $i++){
    $randNumber = rand(1, 99);
    
    for($j=0; $j<count($randomNumbers); $j++){
        if($randNumber!=$randomNumbers[$j]){
            $different++;
        }else{
            $i--;
            $j=count($randomNumbers);
        }
    }
    if($different==count($randomNumbers) || $i==0){
        $randomNumbers[$i]=$randNumber;
    }
    $different=0;
}

echo json_encode($randomNumbers);

?>