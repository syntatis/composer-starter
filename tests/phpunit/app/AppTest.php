<?php

declare(strict_types=1);

namespace App\Tests;

use App\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
	public function testTrue(): void
	{
		self::assertEquals('Hello, World!', (string) (new App()));
	}
}
