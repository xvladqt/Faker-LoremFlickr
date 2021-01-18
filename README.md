Faker-LoremFlickr Provider for Faker
===============================

[![Build Status](https://travis-ci.org/xvladxtremal/Faker-LoremFlickr.svg?branch=master)](https://travis-ci.org/xvladxtremal/Faker-LoremFlickr)

[loremflickr.com](http://loremflickr.com/) provider for [Faker](https://github.com/fzaninotto/Faker).

## Install

Install the LoremFlickr Provider by adding `xvladqt/faker-lorem-flickr` to your composer.json or from CLI:

```
$ composer require xvladqt/faker-lorem-flickr
```

## Usage

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));

$faker->imageUrl($width = 640, $height = 480); // 'http://loremflickr.com/640/480/'
$faker->imageUrl($width, $height, ['cats']);     // 'http://loremflickr.com/640/480/cats/'
$faker->imageUrl($width, $height, ['cats', 'dogs']);     // 'http://loremflickr.com/640/480/cats/'
$faker->imageUrl($width, $height, ['cats'], true); // 'http://loremflickr.com/640/480/cats/?random=1'
$faker->imageUrl($width, $height, ['cats'], true, true); // 'http://loremflickr.com/g/640/480/cats/?random=1' Monochrome image
$faker->image($dir = '/tmp', $width = 640, $height = 480); // '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg'
$faker->image($dir, $width, $height, ['cats']);  // 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg' it's a cat!
$faker->image($dir, $width, $height, ['cats'], false); // '13b73edae8443990be1aa8f1a483bc27.jpg' it's a filename without path
$faker->image($dir, $width, $height, ['cats'], true, false); // it's a no randomize images (default: `true`)
$faker->image($dir, $width, $height, ['cats'], true, true, true); // 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg' it's a monochrome image cat. Default, `null`.

```
