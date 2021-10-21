<?php

/**
 * This code is written in PHP 7.4 using strict types.
 * If you run this code in lower version of PHP, the code will throw an error.
 *
 * For lower versions, I can refactor if you want.
 *
 * @param array $array
 * @return array
 */
function get_min_max_odds(array $array): array
{
    $odds = 0;
    $min = null;
    $max = null;
    foreach ($array as $item) {
        if (!is_integer($item)) continue;
        if ($item % 2 === 1) ++$odds;
        if ($min === null || $min > $item) $min = $item;
        if ($max === null || $max < $item) $max = $item;
    }

    return compact('min', 'max', 'odds');
}

$data = get_min_max_odds([5, 1, 3, 5, 6, 1, 2, 3, 5]);

echo 'Odds count: ' . $data['odds'] . ', Min: ' . ($data['min'] ?? 'N/A') . ', Max: ' . ($data['max'] ?? 'N/A');
