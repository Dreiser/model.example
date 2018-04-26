<?php
declare(strict_types=1);

namespace Example\Model\Entity\User;

use Example\Model\DTO\UserDTO\UserDTO;

/**
 * Interface UserFactoryInterface
 * @package Example\Model\Entity\User
 */
interface UserFactoryInterface
{
    /**
     * @param UserDTO $userDTO
     *
     * @return User
     */
    public function createFromDTO(UserDTO $userDTO): User;
}