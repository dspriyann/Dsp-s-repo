<?php
echo "changed by ilaiyaraja";
echo "changed by ilaiyaraja V";
$start = '8:00';
$time = strtotime($start);
for($i=0;$i<20;$i++){

$startTime = date("H:i", strtotime('-30 minutes', $time));
$endTime = date("H:i", strtotime('+30 minutes', $time));
echo "start-time: ".$startTime;
echo "end-time: ".$endTime;
echo "<br/>";
$newTime = $startTime;

if($startTime == $newTime){
echo "start time is equal";
}
else{
echo "end time perusu";
}

}

?>
