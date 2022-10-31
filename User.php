<?php

//  user class in php 8.1
class User
{

    public string $extension = '';
    public string $phoneDitis;
    public bool $email_valid;
    public string|null $first_name;
    public string|null $last_name;

    public function __construct(
        readonly string $name,
        public string $email,
        private string $phone,
        public string $city,
        public string $company
    ) {
        $this->validateEmail($email);
        $this->convertPhone($phone);
        $this->splitName($name);
    }

    public function splitName(): void
    {
        $name             = explode(' ', $this->name);
        $this->first_name = $name[array_key_first($name)];
        $this->last_name  = $name[array_key_last($name)];
    }


    //  convert all phone numbers to digits only, moving any extensions to a separate property
    private function convertPhone(string $phone): void
    {
        $phone = explode(' ', $phone);
        if (count($phone) > 1) {
            $this->extension = $phone[1];
        }
        $this->phoneDitis = $phone[0];
    }


    public function validateEmail(string $email): bool
    {
        return $this->email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
