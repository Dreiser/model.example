<?php
declare(strict_types=1);

namespace Example\Component\RegisterForm;

/**
 * Class RegisterForm
 * @package Example\Component\RegisterForm
 */
final class RegisterForm implements RegisterFormInterface
{
    /**
     * @param callable $callback
     *
     * @return RegisterFormInterface
     */
    public function onSuccess(callable $callback): RegisterFormInterface
    {
        return $this;
    }
}