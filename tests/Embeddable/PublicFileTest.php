<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Embeddable;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\Embeddable\PublicFile;

class PublicFileTest extends TestCase
{
    public function testAll(): void
    {
        $now = new \DateTimeImmutable();

        $embeddable = new PublicFile();
        static::assertNull($embeddable->getUrl());
        static::assertEmpty((string) $embeddable->getUrl());

        $embeddable->setUrl('/foo.jpg');
        static::assertSame('/foo.jpg', $embeddable->getUrl());
        static::assertSame('/foo.jpg', (string) $embeddable->getUrl());
    }
}
