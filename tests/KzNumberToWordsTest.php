<?php

namespace KzNumberToWords;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;

#[CoversClass(KzNumberToWords::class)]
#[UsesClass(Arr::class)]
final class KzNumberToWordsTest extends TestCase
{
    public function testValidGetWordsFromOverBillionNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->setNumber(4)->getWord();
        $this->assertEquals('төрт', $word);
    }

    public function testValidGetWordsFromBillionNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->setNumber(9000000000)->getWord();
        $this->assertEquals('тоғыз миллиард', $word);
    }

    public function testValidGetWordsFromThousandNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->getWord(702041);
        $this->assertEquals('жеті жүз екі мың қырық бір', $word);
    }

    public function testValidGetWordsFromTenNumber(): void
    {
        $kzNumberToWords = new KzNumberToWords();
        $word = $kzNumberToWords->getWord(8);
        $this->assertEquals('сегіз', $word);
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
