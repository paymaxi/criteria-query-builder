<?php

declare(strict_types=1);

namespace Paymaxi\Component\Query\Validator;

/**
 * Class DummyValidator.
 */
final class DummyValidator implements ValidatorInterface
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function validate($value): bool
    {
        return true;
    }
}
