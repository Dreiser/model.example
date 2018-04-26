<?php
declare(strict_types=1);

namespace Example\Module\UIModule\Controller;

/**
 * Class UIController
 * @package Example\Module\UIModule\Controller
 */
abstract class UIController
{
    /**
     * @param string $target
     * @param array  $params
     */
    public function redirect(string $target, array $params = [])
    {

    }

    /**
     * @param \Exception $exception
     */
    public function renderError(\Exception $exception)
    {

    }
}