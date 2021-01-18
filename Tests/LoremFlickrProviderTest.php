<?php

namespace Bluemmb\Faker\Tests;

use Xvladqt\Faker\LoremFlickrProvider;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Xvladqt\Faker\LoremFlickrProvider
 */
class LoremFlickrProviderTest extends TestCase
{
    /**
     * @covers ::imageUrl
     * @dataProvider imageUrlDataProvider
     */
    public function testImageUrl($expected, $width = 640, $height = 480, $keywords = null, $randomize = true, $gray = false)
    {
        $url = LoremFlickrProvider::imageUrl($width, $height, $keywords, $randomize, $gray);

        $this->assertStringStartsWith("https://loremflickr.com/".$expected, $url);
    }

    public function imageUrlDataProvider()
    {
        return [
            [
                '640/480/kitten?random=',
            ],
            [
                '100/480/kitten?random=',
                100,
            ],
            [
                '100/100/kitten?random=',
                100, 100,
            ],
            [
                'g/100/100/kitten?lock=',
                100, 100, false, false, true,
            ],
            [
                '100/100/cats?random=',
                100, 100, array('cats')
            ],
            [
                '100/100/cats,dogs?random=',
                100, 100, array('cats', 'dogs')
            ],
            [
                '100/100/kitten?random=',
                100, 100, false, true,
            ],
            [
                'g/100/100/kitten?random=',
                100, 100, false, true, true,
            ],
            [
                '100/100/kitten?lock=',
                100, 100, false, false, false,
            ],
            [
                'g/100/100/kitten?lock=',
                100, 100, false, false, true,
            ],
            [
                '100/100/kitten?lock=',
                100, 100, false, false, false,
            ],
        ];
    }


}