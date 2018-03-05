<?php

use NeonDiff\NeonDiff;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
  private $neonDiff;

  /**
   * @throws \NeonDiff\NeonDiffException
   */
  public function setUp()
  {
    $this->neonDiff = new NeonDiff;
    $this->neonDiff->setTemplateFile(__DIR__ . '/fixtures/array/template.neon');
    $this->neonDiff->setNeonFile(__DIR__ . '/fixtures/array/file.neon');
  }

  public function test()
  {
    $this->assertNull($this->neonDiff->diff());
  }
}