<?php declare (strict_types = 1);

namespace Wavevision\DIServiceAnnotationTests\Attributes;

use PHPUnit\Framework\TestCase;
use Wavevision\DIServiceAnnotation\Configuration;
use Wavevision\DIServiceAnnotation\ExtractServices;

class AttributeTest extends TestCase
{

	public function testAttributeIsExtracted(): void
	{
		$outputFile = __DIR__ . '/../../temp/attributes.neon';
		$configuration = new Configuration(__DIR__ . '/Attributes', $outputFile);
		$extractServices = new ExtractServices($configuration);
		$extractServices->run();
		$this->assertFileExists($outputFile);
		$content = file_get_contents($outputFile);
		$this->assertStringContainsString('attributeService:', $content);
		$this->assertStringContainsString('Wavevision\DIServiceAnnotationTests\Attributes\AttributeService', $content);
		$this->assertStringContainsString("arguments: [%a%]", $content);
		$this->assertStringContainsString("tags: [t1]", $content);
	}

}
