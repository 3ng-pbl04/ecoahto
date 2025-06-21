<?php

if (!function_exists('render_stars')) {
    function render_stars($rating)
    {
        $stars = '';
        $fullStars = floor($rating);
        $halfStar = $rating - $fullStars >= 0.5;
        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

        for ($i = 0; $i < $fullStars; $i++) {
            $stars .= '★'; // Bintang penuh
        }

        if ($halfStar) {
            $stars .= '☆'; // Bintang setengah (bisa diganti icon)
        }

        for ($i = 0; $i < $emptyStars; $i++) {
            $stars .= '✩'; // Bintang kosong
        }

        return $stars;
    }
}
