<?php
declare(strict_types=1);

namespace Example\Component\RegisterForm;

/**
 * Interface RegisterFormFactoryInterface
 * @package Example\Component\RegisterForm
 */
interface RegisterFormFactoryInterface
{
    /**
     * @return RegisterFormInterface
     */
    public function create(): RegisterFormInterface;
}