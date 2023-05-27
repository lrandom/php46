<?php

class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return "Không thể chia cho 0";
    }
}

class DivideByNegativeException extends Exception
{
    public function __toString()
    {
        return "Không thể chia cho số âm";
    }
}

function chia($soBiChia, $soChia)
{
    if ($soChia == 0) {
        throw new DivideByZeroException("Không thể chia cho 0");
    }
    if ($soChia < 0) {
        throw new DivideByNegativeException("Không thể chia cho số âm");
    }
    return $soBiChia / $soChia;
}

try {
    try {
        chia(5, 0);
    } catch (DivideByZeroException $exception) {
        throw $exception;
    } catch (DivideByNegativeException $exception) {
        throw $exception;
    } catch (Exception $exception) {
        throw $exception;
    }
}catch (DivideByZeroException $exception) {
    echo $exception;
} catch (DivideByNegativeException $exception) {
    echo $exception;
} catch (Exception $exception) {
    echo $exception;
}

?>