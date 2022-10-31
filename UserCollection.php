<?php

//  create a collection class to hold all the users in php 8.1
class UserCollection {

    private array $users = [];

    public function add(User $user): void
    {
        $this->users[] = $user;
    }

    public function getUsers(): array
    {
        return $this->users;
    }
}