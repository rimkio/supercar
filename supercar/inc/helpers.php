<?php

if (!function_exists('mix')) {
    function mix($path)
    {
        $pathWithOutSlash = ltrim($path, '/');
        $pathWithSlash    = '/' . ltrim($path, '/');
        $manifestFile     = THEME_DIR . '/dist/mix-manifest.json';
        $manifestArray = json_decode(file_get_contents($manifestFile), true);
        if (array_key_exists($pathWithSlash, $manifestArray)) {
            return THEME_DIR_URI . '/dist/' . ltrim($manifestArray[$pathWithSlash], '/');
        }
        //        No file was found in the manifest, return whatever was passed to mix().
        return  $pathWithOutSlash;
    }
}

if (!function_exists('reviews_rating_star')) {
    function reviews_rating_star($point)
    {
        $star = THEME_DIR_URI . '/assets/images/star.svg';
        ob_start();
?>
        <ul class="spc-reviews-star">
            <?php for ($i = 1; $i <= $point; $i++) {
                echo '<li><img src="' . $star . '" alt="star"/></li>';
            }
            ?>
        </ul>
<?php
        echo ob_get_clean();
    }
}
