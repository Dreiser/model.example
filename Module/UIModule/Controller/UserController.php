<?php
declare(strict_types=1);

namespace Example\Module\UIModule\Controller;

use Example\Component\RegisterForm\RegisterFormFactoryInterface;
use Example\Component\RegisterForm\RegisterFormInterface;
use Example\Model\DTO\UserDTO;
use Example\Model\Exception\Service\UserDTOService\UserDTOValidationException;
use Example\Model\Facade\UserFacade\UserFacadeInterface;

/**
 * Class UserController
 * @package Example\Controller
 */
final class UserController extends UIController
{
    /** @var RegisterFormFactoryInterface */
    private $registerFormFactory;

    /** @var UserFacadeInterface */
    private $userFacade;

    /**
     * UserController constructor.
     *
     * @param RegisterFormFactoryInterface $registerFormFactory
     * @param UserFacadeInterface          $userFacade
     */
    public function __construct(
        RegisterFormFactoryInterface $registerFormFactory,
        UserFacadeInterface $userFacade
    )
    {
        $this->registerFormFactory = $registerFormFactory;
        $this->userFacade = $userFacade;
    }

    /**
     * /user/register
     */
    public function actionRegister()
    {

    }

    /**
     * @param int $userId
     */
    public function actionRegisterSuccess(int $userId)
    {

    }

    /**
     * @return RegisterFormInterface
     */
    protected function createComponentRegisterForm(): RegisterFormInterface
    {
        $registerForm = $this->registerFormFactory->create();
        $registerForm->onSuccess(function(UserDTO $userDTO) {
            try {
                $user = $this->userFacade->register($userDTO);
            } catch(UserDTOValidationException $userDTOValidationException) {
                $this->renderError($userDTOValidationException);
                return $this;
            }
            $this->redirect('register-success', [$user->getId()]);
        });
        return $registerForm;
    }
}