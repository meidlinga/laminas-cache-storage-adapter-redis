<?php

declare(strict_types=1);

namespace LaminasTest\Cache\Psr\SimpleCache;

use Laminas\Cache\Storage\StorageInterface;
use LaminasTest\Cache\Storage\Adapter\AbstractSimpleCacheIntegrationTest;
use LaminasTest\Cache\Storage\Adapter\Laminas\RedisClusterStorageCreationTrait;
use RedisCluster;

final class RedisClusterWithoutSerializerTest extends AbstractSimpleCacheIntegrationTest
{
    use RedisClusterStorageCreationTrait;

    protected function createStorage(): StorageInterface
    {
        return $this->createRedisClusterStorage(RedisCluster::SERIALIZER_NONE, true);
    }
}
