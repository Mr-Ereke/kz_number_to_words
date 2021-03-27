<?php

namespace KzNumberToWords;

use PHPUnit\Framework\TestCase;

final class KzNumberToWordsTest extends TestCase
{
    public function testValidGetWordsFromNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords(852741);
        $this->assertEquals('сегіз жүз елу екі мың жеті жүз қырық бір', $kzNumberToWords->getWord());
    }

    public function testValidGetZero(): void
    {
        $kzNumberToWords = new KzNumberToWords(0);
        $this->assertEquals('нөл', $kzNumberToWords->getWord());
    }

    public function testValidGetWordsFromNegativeNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords(-963456);
        $this->assertEquals('минус тоғыз жүз алпыс үш мың төрт жүз елу алты', $kzNumberToWords->getWord());
    }
}