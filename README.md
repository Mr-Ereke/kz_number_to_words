# PHP Number to words on kazakh lang converter

[![Travis](https://travis-ci.org/kwn/number-to-words.svg?branch=master)](https://travis-ci.org/kwn/number-to-words)

This library allows you to convert a number to words.

## Installation

Add package to your composer.json by running:

```
$ composer require Mr-Ereke/kz_number_to_words
```


## Usage

Need to create an instance of `KzNumberToWords` class and then call a method to get words;

### Example

```php
use KzNumberToWords\KzNumberToWords;

// Создаем сущность класса передавая обязательный параметр целочисленного типа (можно отрицательный) 
$kzNumberToWords = new KzNumberToWords(745123);

//Для конвертации вызываем метод "getWord", который возвращем строку
$kzNumberToWords->getWord(); // выведет "жеті жүз қырық бес мың бір жүз жиырма үш"
```
