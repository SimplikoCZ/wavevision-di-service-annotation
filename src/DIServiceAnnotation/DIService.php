<?php declare (strict_types = 1);

namespace Wavevision\DIServiceAnnotation;

/**
 * @Annotation
 * @Target("CLASS")
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class DIService
{

	public function __construct(
		public ?string $name = null,
		public bool $enableInject = true,
		public bool $generateComponent = false,
		public bool $generateFactory = false,
		public bool $generateInject = false,
		public array $params = [],
		public array $tags = [],
	) {
	}

}
