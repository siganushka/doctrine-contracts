# Doctrine Contracts

A set of abstractions for doctrine.

### Installation

```bash
$ composer require siganushka/doctrine-contracts
```

### Interfaces & Traits

```php
Siganushka\Contracts\Doctrine\ResourceInterface
Siganushka\Contracts\Doctrine\ResourceTrait

Siganushka\Contracts\Doctrine\EnableInterface
Siganushka\Contracts\Doctrine\EnableTrait

Siganushka\Contracts\Doctrine\SortableInterface
Siganushka\Contracts\Doctrine\SortableTrait

Siganushka\Contracts\Doctrine\TimestampableInterface
Siganushka\Contracts\Doctrine\TimestampableTrait

Siganushka\Contracts\Doctrine\VersionableInterface
Siganushka\Contracts\Doctrine\VersionableTrait
```

### Embeddable

```php
Siganushka\Contracts\Doctrine\Embeddable\DateTimeRange
Siganushka\Contracts\Doctrine\Embeddable\PublicFile
```

### Tests

```bash
$ php vendor/bin/simple-phpunit --debug
```
