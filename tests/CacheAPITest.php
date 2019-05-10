<?php
declare(strict_types=1);
namespace PoP\SymfonyCache;

use PoP\Cache\Facades\CacheAPI;

class CacheAPITestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that applyFilter returns $value
     */
    public function testCache(): void
    {
        $cacheapi = CacheAPI::getInstance();
        $cacheitem = $cacheapi->getItem('foo');
        $cacheitem->set('bar');
        $this->assertEquals(
            'bar',
            $cacheitem->get()
        );
    }
}
