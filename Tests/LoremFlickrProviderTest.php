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

        $this->assertSame("https://loremflickr.com/".$expected, $url);
    }

    public function imageUrlDataProvider()
    {
        return [
            [
                '640/480?random=1',

            ],
            [
                '100/480?random=1',
                100,
            ],
            [
                '100/100?random=1',
                100, 100,
            ],
            [
                'g/100/100?lock=1',
                100, 100, false, false, true,
            ],
            [
                '100/100/cats?random=1',
                100, 100, array('cats')
            ],
            [
                '100/100/cats,dogs?random=1',
                100, 100, array('cats', 'dogs')
            ],
            [
                '100/100?random=1',
                100, 100, false, true,
            ],
            [
                'g/100/100?random=1',
                100, 100, false, true, true,
            ],
            [
                '100/100?lock=1',
                100, 100, false, false, false,
            ],
            [
                'g/100/100?lock=1',
                100, 100, false, false, true,
            ],
            [
                '100/100?lock=1',
                100, 100, false, false, false,
            ],
        ];
    }


}