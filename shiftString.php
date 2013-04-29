#!/usr/bin/env php

<?php

function shiftString($string, $shift)
{
	if($shift === 0)
	{
		return $string;
	}
	else if($shift > 0)
	{
		for($i = 0; $i < $shift; $i++)
		{
			$string = substr($string, 1, strlen($string) - 1).$string[0];
		}
	}
	else
	{
		for($i = 0; $i < -1*$shift; $i++)
		{
			$string = $string[strlen($string) - 1].substr($string, 0, strlen($string) - 1);
		}
	}

	return $string;
}

for($i = -10; $i < 10; $i++)
{
	echo "\n".shiftString('abcdefghij', $i);
}
