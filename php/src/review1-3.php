<?php

function isValidParentheses(string $sentence): bool
{
    if (empty($sentence)) return true;
    if (strlen($sentence) % 2 != 0) return false;

    for ($i = 0; $i < intval(strlen($sentence) / 2); $i++) {
        $a = $sentence[$i];
        $b = $sentence[strlen($sentence) - $i - 1];
        if ($a == "(" && $b != ")") return false;
        if ($a == "{" && $b != "}") return false;
        if ($a == "[" && $b != "]") return false;
    }
    return true;
}

assert(isValidParentheses("") == true);
assert(isValidParentheses("()") == true);
assert(isValidParentheses("({})") == true);
assert(isValidParentheses("([)") == false);
assert(isValidParentheses("({)}") == false);
assert(isValidParentheses("(({([])}))") == true);