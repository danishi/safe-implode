<?php
namespace Danishi;

class SafeImplode {
    /**
     * Safely implode an array or return the original value if it's not an array.
     *
     * @param string $separator The separator string to use.
     * @param mixed $value The value to be imploded if it is an array.
     * @return string The imploded string or the original value if not an array.
     */
    public static function safeImplode($separator, $value) {
        // If the value is an array, implode it with the separator
        if (is_array($value)) {
            return implode($separator, $value);
        }
        // If the value is not an array, return it as is
        return $value;
    }
}
