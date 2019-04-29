<?php

/**
 * @phpVersion 7
 */

use Tester\Assert;

require __DIR__ . '/../../vendor/autoload.php';

Tester\Environment::setup();


DG\BypassFinals::enable();

require __DIR__ . '/fixtures/final.class.php';

$rc = new ReflectionClass('FinalClass');
Assert::false($rc->isFinal());
Assert::false($rc->getMethod('finalMethod')->isFinal());
Assert::same(123, FinalClass::FINAL);
Assert::same(456, (new FinalClass)->final());
Assert::same('bool', $rc->getMethod('withTypehints')->getReturnType());
