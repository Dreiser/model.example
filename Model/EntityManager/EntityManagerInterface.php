<?php
declare(strict_types=1);

namespace Example\Model\EntityManager;

/**
 * Interface EntityManagerInterface
 * @package Example\Model\EntityManager
 */
interface EntityManagerInterface
{
    /**
     * @param $entity
     *
     * @return self
     */
    public function persist($entity);

    /**
     * @return self
     */
    public function flush();
}