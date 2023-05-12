<?php

require_once 'model/User.php';
require_once 'model/UserList.php';
require_once 'view/UserView.php';
class UserController
{
    private UserList $userList;
    private UserView $userView;

    public function __construct(UserList $userList, UserView $userView)
    {
        $this->userList = $userList;
        $this->userView = $userView;
    }

    public function addUser(User $user): void
    {
        $this->userList->addUser($user);
    }

    public function removeUser(User $user): void
    {
        $this->userList->removeUser($user);
    }

    public function renderUserList(): void
    {
        $this->userView->render();
    }
}