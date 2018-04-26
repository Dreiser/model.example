<?php
declare(strict_types=1);

namespace Example\Model\Facade\UserFacade;

use Example\Model\DTO\UserDTO\UserDTO;
use Example\Model\Exception\Service\UserDTOService\UserDTOValidationException;

/**
 * Interface UserFacadeInterface
 * @package Example\Model\Facade\UserFacade
 */
interface UserFacadeInterface
{
    /**
     * @param UserDTO $userDTO
     *
     * @return UserDTO
     *
     * @throws UserDTOValidationException
     */
    public function register(UserDTO $userDTO): UserDTO;
}