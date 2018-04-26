<?php
declare(strict_types=1);

namespace Example\Module\APIModule\Controller;

/**
 * Class APIController
 * @package Example\Module\APIModule\Controller
 */
abstract class APIController
{
    /**
     * @param \Exception $exception
     */
    public function replyException(\Exception $exception)
    {

    }

    /**
     * @param $entity
     */
    public function replySuccess($entity)
    {

    }
}