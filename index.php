<?php
for(;;) {
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $aChecked = filter_var($a, FILTER_VALIDATE_INT);
    $bChecked = filter_var($b, FILTER_VALIDATE_INT);
    if ($aChecked === false || $bChecked === false) {
        fwrite(STDERR, 'Введите, пожалуйста, число' . PHP_EOL);
    } elseif ($b == 0) {
        fwrite(STDERR, 'Делить на 0 нельзя' . PHP_EOL);
    } else {
        $result = $a / $b;
        fwrite(STDOUT, "$result \n");
    }
}