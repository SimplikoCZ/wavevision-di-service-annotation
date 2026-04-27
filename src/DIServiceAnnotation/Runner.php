<?php declare (strict_types = 1);

namespace Wavevision\DIServiceAnnotation;

use Nette\StaticClass;

final class Runner
{

	use StaticClass;

	public static function run(Configuration ...$configurations): void
	{
		foreach ($configurations as $configuration) {
			(new ExtractServices($configuration))->run();
		}
	}

}
