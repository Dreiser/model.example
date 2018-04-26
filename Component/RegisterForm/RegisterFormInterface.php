<?php
declare(strict_types=1);

namespace Example\Component\RegisterForm;

/**
 * Interface RegisterFormInterface
 * @package Example\Component\RegisterForm
 */
interface RegisterFormInterface
{
    /**
     * @param callable $callback
     *
     * @return RegisterFormInterface
     */
    public function onSuccess(callable $callback): RegisterFormInterface;
}