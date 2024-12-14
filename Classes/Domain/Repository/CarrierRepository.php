<?php

declare(strict_types=1);

namespace T3md\Measure\Domain\Repository;

use T3md\Measure\Domain\Model\Carrier;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Carrier>
 */
class CarrierRepository extends Repository
{
    
    protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];
    
}
