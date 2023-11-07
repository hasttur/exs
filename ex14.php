<?php

function hollowDiamond(int $number): void
{
    for ($i = 1; $i <= $number; $i++) {
        for ($j = $i; $j <= $number; $j++) {
            print "*";
        }
        for ($j = 1; $j <= 2 * $i - 2; $j++) {
            print " ";
        }
        for ($k = $i; $k <= $number; $k++) {
            print "*";
        }
        print "\n";
    }

    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            print "*";
        }
        for ($k = 2 * $i - 2; $k < 2 * $number - 2; $k++) {
            print " ";
        }
        for ($k = 1; $k <= $i; $k++) {
            print "*";
        }
        print "\n";
    }
}


hollowDiamond(6);
