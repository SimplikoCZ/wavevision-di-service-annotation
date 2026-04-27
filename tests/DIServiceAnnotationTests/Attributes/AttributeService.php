<?php declare (strict_types = 1);

namespace Wavevision\DIServiceAnnotationTests\Attributes;

use Wavevision\DIServiceAnnotation\DIService;

#[DIService(name: 'attributeService', params: ['%a%'], tags: ['t1'])]
class AttributeService
{
}
