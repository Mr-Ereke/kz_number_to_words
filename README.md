# PHP Number to words in kazakh language converter

[![Latest Stable Version](https://poser.pugx.org/mr-ereke/kz_number_to_words/v)](//packagist.org/packages/mr-ereke/kz_number_to_words)
[![Total Downloads](https://poser.pugx.org/mr-ereke/kz_number_to_words/downloads)](//packagist.org/packages/mr-ereke/kz_number_to_words)
[![License](https://poser.pugx.org/mr-ereke/kz_number_to_words/license)](//packagist.org/packages/mr-ereke/kz_number_to_words)


This library allows you to convert a number to words.

## Installation

Add package to your composer.json by running:

```
$ composer require mr-ereke/kz_number_to_words
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
