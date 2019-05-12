<?php
declare(strict_types=1);
namespace PoP\SymfonyCache;

use PoP\Cache\Facades\CachePool;

class CachePoolTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that applyFilter returns $value
     */
    public function testCache(): void
    {
        $cachepool = CachePool::getInstance();
        $cacheitem = $cachepool->getItem('foo');
        $cacheitem->set('bar');
        $this->assertEquals(
            'bar',
            $cacheitem->get()
        );
    }
}
