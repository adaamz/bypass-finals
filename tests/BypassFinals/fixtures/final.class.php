<?php

final class FinalClass
{
	const FINAL = 123;

	final function finalMethod()
	{
	}

	function final ()
	{
		return 456;
	}
	
	static function withTypehints(string $abc): bool
	{
		return false;
	}
}
