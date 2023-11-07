<?php

function reversePyramid(int $rows): void
{
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $i; $j++) {
            print " ";
        }

        for ($k = 0; $k < $rows - $i; $k++) {
            print "* ";
        }
        print PHP_EOL;
    }
}

reversePyramid(10);
