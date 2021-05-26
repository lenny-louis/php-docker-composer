<?php declare(strict_types=1);
final class User
{
    private $userphone;

    private function __construct(string $userphone)
    {
        $this->ensureIsValidEmailUserPhone($userphone);

        $this->userphone = $userphone;
    }

    public static function fromString(string $userphone): self
    {
        return new self($userphone);
    }

    public function __toString(): string
    {
        return $this->userphone;
    }

    private function ensureIsValidUserPhone(string $userphone): void
    {
        if (!filter_var($user, FILTER_VALIDATE_INT)) {
            throw new InvalidArgumentException(
                sprintf(
                   "error, userphone is not an INT"
                    $userphone
                )
            );
        }
    }
}

