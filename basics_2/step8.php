<?php
    function isPowerOfTwo( $value ) {
        if( ($value > 0) & ( $value %2 ) ){
            echo $value.' is a power of two';
        }
        else echo 'is not';
    }

echo isPowerOfTwo(2);
 ?>