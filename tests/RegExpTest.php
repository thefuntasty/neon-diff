<?php

use NeonDiff\NeonDiff;
use PHPUnit\Framework\TestCase;

class RegExpTest extends TestCase
{
  private $neonDiff;

  /**
   * @throws \NeonDiff\NeonDiffException
   */
  public function setUp(): void
  {
    $this->neonDiff = new NeonDiff;
    $this->neonDiff->setTemplateFile(__DIR__ . '/fixtures/regexp/template.neon');
    $this->neonDiff->setNeonFile(__DIR__ . '/fixtures/regexp/file.neon');
  }

  public function test(): void
  {
    $this->assertNull($this->neonDiff->diff());
  }
}
