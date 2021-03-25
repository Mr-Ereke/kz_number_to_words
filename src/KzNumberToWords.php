<?php

namespace KzNumberToWords;

/**
 * Class KzNumberToWords
 *
 * @package KzNumberToWords
 */
class KzNumberToWords
{
    const NUMBER_ONES_LIST = [
        '1' => 'бір',
        '2' => 'екі',
        '3' => 'үш',
        '4' => 'төрт',
        '5' => 'бес',
        '6' => 'алты',
        '7' => 'жеті',
        '8' => 'сегіз',
        '9' => 'тоғыз',
    ];

    const NUMBER_TENS_LIST = [
        '1' => 'он',
        '2' => 'жиырма',
        '3' => 'отыз',
        '4' => 'қырық',
        '5' => 'елу',
        '6' => 'алпыс',
        '7' => 'жетпіс',
        '8' => 'сексен',
        '9' => 'тоқсан',
    ];

    const NUMBER_HUNDREDS_LIST = [
        'жүз',
        'мың',
        'миллион',
        'миллиард',
    ];

    /**
     * @var int
     */
    private int $number;

    /**
     * @var string
     */
    private string $word = '';

    /**
     * @var bool
     */
    private bool $isNegative = false;

    /**
     * NumberWordConverterKz constructor.
     *
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getWord(): string
    {
        if ($this->number === 0) {
            return 'нөл';
        }

        $this->absoluteNumber();
        $this->handle();
        $this->format();

        return $this->word;
    }

    private function format(): void
    {
        $this->word = trim($this->word);

        if ($this->isNegative) {
            $this->word = 'минус ' . $this->word;
        }
    }

    private function handle(): void
    {
        $numberDividedArray = array_reverse(explode(',', number_format($this->number)));
        krsort($numberDividedArray, SORT_NUMERIC);

        foreach ($numberDividedArray as $index => $numberPart) {
            while (substr($numberPart, 0, 1) == '0') {
                $numberPart = substr($numberPart, 1, 4);
            }

            if ($numberPart < 10) {
                $this->onesPart($numberPart);
            } elseif ($numberPart < 100) {
                $this->tensPart($numberPart);
            } else {
                $this->hundredsPart($numberPart);
            }

            if ($this->canHundredsContinue($index, $numberPart)) {
                $this->word .= ' ' . Arr::get(self::NUMBER_HUNDREDS_LIST, $index) . ' ';
            }
        }
    }

    /**
     * @param $numberPart
     */
    private function onesPart($numberPart): void
    {
        $this->word .= Arr::get(self::NUMBER_ONES_LIST, strval($numberPart));
    }

    /**
     * @param string $numberPart
     */
    private function tensPart(string $numberPart): void
    {
        $this->word .= Arr::get(self::NUMBER_TENS_LIST, substr($numberPart, 0, 1));

        if (substr($numberPart, 1, 1) != '0') {
            $this->word .= ' ' . Arr::get(self::NUMBER_ONES_LIST, substr($numberPart, 1, 1));
        }
    }

    /**
     * @param string $numberPart
     */
    private function hundredsPart(string $numberPart): void
    {
        if (substr($numberPart, 0, 1) != '0') {
            $this->word .= Arr::get(self::NUMBER_ONES_LIST, substr($numberPart, 0, 1))
                . ' '
                . self::NUMBER_HUNDREDS_LIST[ 0 ];
        }

        if (substr($numberPart, 1, 1) != '0') {
            $this->word .= ' ' . Arr::get(self::NUMBER_TENS_LIST, substr($numberPart, 1, 1));
        }

        if (substr($numberPart, 2, 1) != '0') {
            $this->word .= ' ' . Arr::get(self::NUMBER_ONES_LIST, substr($numberPart, 2, 1));
        }
    }

    /**
     * @param int $index
     * @param string $numberPart
     *
     * @return bool
     */
    private function canHundredsContinue(int $index, string $numberPart): bool
    {
        if ($index < 1) {
            return false;
        }

        if (!array_key_exists($index, self::NUMBER_HUNDREDS_LIST)) {
            return false;
        }

        if (empty($numberPart)) {
            return false;
        }

        return true;
    }

    private function absoluteNumber(): void
    {
        if ($this->number < 0) {
            $this->number = abs($this->number);
            $this->isNegative = true;
        }
    }
}
