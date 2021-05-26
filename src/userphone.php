<?php declare(strict_types=1);
final class User
{
    private $userphone;

    private function __construct(int $userphone)
    {
        $this->ensureIsValidEmailUserPhone($userphone);

        $this->userphone = $userphone;
    }

    public static function fromString(int $userphone): self
    {
        return new self($userphone);
    }

    public function __toInt(): int
    {
        return $this->userphone;
    }

    private function ensureIsValidUserPhone(int $userphone): void
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

