<?php

namespace Myth\Auth\Authentication\Passwords;

use CodeIgniter\Entity\Entity;

interface ValidatorInterface
{
    /**
     * Checks the password against the validator's rules.
     *
     * @param string $password
     * @param Entity|null $user
     *
     * @return bool
     */
    public function check(string $password, ?Entity $user = null): bool;

    /**
     * Returns the error message when validation fails.
     *
     * @return string
     */
    public function error(): string;

    /**
     * Returns a suggestion to help the user create a better password.
     *
     * @return string
     */
    public function suggestion(): string;
}
