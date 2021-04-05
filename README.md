# PHP Number to words in kazakh language converter

[![Build Status](https://travis-ci.com/Mr-Ereke/kz_number_to_words.svg?branch=main)](https://travis-ci.com/Mr-Ereke/kz_number_to_words)
[![Maintainability](https://api.codeclimate.com/v1/badges/a99a88d28ad37a79dbf6/maintainability)](https://codeclimate.com/github/codeclimate/codeclimate/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/a99a88d28ad37a79dbf6/test_coverage)](https://codeclimate.com/github/codeclimate/codeclimate/test_coverage)
[![Latest Stable Version](https://poser.pugx.org/mr-ereke/kz_number_to_words/v)](//packagist.org/packages/mr-ereke/kz_number_to_words)
[![License](https://poser.pugx.org/mr-ereke/kz_number_to_words/license)](//packagist.org/packages/mr-ereke/kz_number_to_words)
[![Total Downloads](https://poser.pugx.org/mr-ereke/kz_number_to_words/downloads)](//packagist.org/packages/mr-ereke/kz_number_to_words)


This library allows you to convert a number to words.

## Installation

Add package to your composer.json by running:

```
$ composer require mr-ereke/kz_number_to_words "^1.1"
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
