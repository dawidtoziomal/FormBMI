<?php
$wzrost = $_POST ['wzrost'];
$waga = $_POST ['waga'];
$bmi = $waga/($wzrost/100*$wzrost/100);
echo  "Twoje BMI wynosi $bmi.<br>";
if ($bmi < "16"){
    echo "Jesteś wygłodzony.";
}
else if ($bmi > "16" && $bmi < "17")
{
    echo "Jesteś wychudzony.";
}else if ( $bmi > "17.01"  && $bmi < "18.5"){
    echo "Masz niedowagę.";
}else if ($bmi >"18.51"  && $bmi < "25"){
    echo "Twoja waga jest prawidłowa.";
}else if ($bmi >"25.01" && $bmi < "30"){
    echo "Masz nadwagę.";
}else if($bmi > "30.01" && $bmi < "35"){
    echo "Masz otyłość I stopnia.";
}else if($bmi > "35.01" && $bmi < "40"){
    echo "Masz otyłość II stopnia.";
}else{
    echo "Masz otyłość III stopnia";
}
?>
 