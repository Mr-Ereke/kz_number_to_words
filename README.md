# PHP Number to words in kazakh language converter

[![Codecov kz_number_to_words](https://github.com/Mr-Ereke/kz_number_to_words/actions/workflows/ci.yml/badge.svg)](https://github.com/Mr-Ereke/kz_number_to_words/actions/workflows/ci.yml)
[![buddy pipeline](https://app.buddy.works/erdik96/kz-number-to-words/pipelines/pipeline/541636/badge.svg?token=254070929601413c774134c2188aabd78277fb545e544c8ee8599d9460691693 "buddy pipeline")](https://app.buddy.works/erdik96/kz-number-to-words/pipelines/pipeline/541636)
[![codecov](https://codecov.io/github/Mr-Ereke/kz_number_to_words/graph/badge.svg?token=2P5NHL94J5)](https://codecov.io/github/Mr-Ereke/kz_number_to_words)
[![Maintainability](https://api.codeclimate.com/v1/badges/06893bf91038524b45d0/maintainability)](https://codeclimate.com/github/Mr-Ereke/kz_number_to_words/maintainability)
[![Latest Stable Version](https://poser.pugx.org/mr-ereke/kz_number_to_words/v)](//packagist.org/packages/mr-ereke/kz_number_to_words)
[![License](https://poser.pugx.org/mr-ereke/kz_number_to_words/license)](//packagist.org/packages/mr-ereke/kz_number_to_words)
[![Total Downloads](https://poser.pugx.org/mr-ereke/kz_number_to_words/downloads)](//packagist.org/packages/mr-ereke/kz_number_to_words)


This library allows you to convert a number to words.

## Installation

Add package to your composer.json by running:

```
$ composer require mr-ereke/kz_number_to_words "^1.2"
```

## Usage

Need to create an instance of `KzNumberToWords` class and then call a method to get words;

### Example 1
```php
use KzNumberToWords\KzNumberToWords;

// Создаем инстанс класса 
$kzNumberToWords = new KzNumberToWords();

// (Optional) Можно засетить число передав обязательный параметр целочисленного типа (можно отрицательный) 
$kzNumberToWords->setNumber(745123);
//Для конвертации вызываем метод "getWord", который возвращем строку
$kzNumberToWords->getWord(); // выведет "жеті жүз қырық бес мың бір жүз жиырма үш"
```

### Example 2
```php
use KzNumberToWords\KzNumberToWords;
// Создаем инстанс класса
$kzNumberToWords = new KzNumberToWords();

//Можно сразу вызвать метод "getWord" передав число для конвертации
$kzNumberToWords->getWord(987123456); // выведет "тоғыз жүз сексен жеті миллион бір жүз жиырма үш мың төрт жүз елу алты"
```
