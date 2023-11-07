<?php

$jawabanIsset = "<br>";
$jawabanEmpty = "<br>";

function soal ($style){ 
    $text="Pengertian dari isset dan empty <br>";
    if (isset($style)){
        $jawabanIsset=applyCSSStyle( "Isset adalah = ....<br>",$style ) ;
    }else{
        $jawabanIsset=applyCSSStyle( "Isset adalah = ....<br>",$style );
    }
    if (empty($style)){
        $jawabanEmpty=applyCSSStyle( "Empty adalah = ....<br>",$style ) ;
    }else{
        $jawabanEmpty=applyCSSStyle( "Empty adalah = ....<br>",$style );
    }
    echo $text.$jawabanIsset.$jawabanEmpty;

}
function applyCSSStyle($text, $cssClass){
    $styledText='<span class="'.$cssClass.'">'.$text.'</span>';
    return $styledText;
}
soal("my-costum-css-class");

?>