<?php

namespace KzNumberToWords;

use PHPUnit\Framework\TestCase;

final class KzNumberToWordsTest extends TestCase
{
    public function testValidGetWordsFromNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->getWord(852741);
        $this->assertEquals('сегіз жүз елу екі мың жеті жүз қырық бір', $word);
    }

    public function testValidGetZero(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->getWord(0);
        $this->assertEquals('нөл', $word);
    }

    public function testValidGetWordsFromNegativeNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->setNumber(-963456)->getWord();
        $this->assertEquals('минус тоғыз жүз алпыс үш мың төрт жүз елу алты', $word);
    }

    public function testValidGetEmptyValue(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->getWord();
        $this->assertEquals('', $word);
    }
}
