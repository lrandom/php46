<?php
function printError()
{
    echo "Lỗi rồi";
}

set_error_handler("printError");

function chia($soBiChia, $soChia)
{
    if ($soChia == 0) {
        throw new Exception("Không thể chia cho 0");
    }
    return $soBiChia / $soChia;
}

chia(10, 0);
?>