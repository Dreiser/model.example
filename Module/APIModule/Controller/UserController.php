<?php
declare(strict_types=1);

namespace Example\Module\APIModule\Controller;

use Example\Model\DTO\UserDTO;
use Example\Model\Exception\Service\UserDTOService\UserDTOValidationException;
use Example\Model\Facade\UserFacade\UserFacadeInterface;

/**
 * Class UserController
 * @package Example\Module\APIModule\Controller
 */
final class UserController extends APIController
{
    /** @var UserFacadeInterface */
    private $userFacade;

    /**
     * UserController constructor.
     *
     * @param UserFacadeInterface $userFacade
     */
    public function __construct(
        UserFacadeInterface $userFacade
    )
    {
        $this->userFacade = $userFacade;
    }

    /**
     * @param UserDTO $userDTO
     */
    public function register(UserDTO $userDTO)
    {
        try {
            $user = $this->userFacade->register($userDTO);
        } catch(UserDTOValidationException $userDTOValidationException) {
            $this->replyException($userDTOValidationException);
            return;
        }
        $this->replySuccess($user);
    }
}