<?php

function limiter(int $n): int
{
	if ($n == 6)
		return 3;
	else
		return 3 * limiter($n + 1);
}

echo limiter(3);