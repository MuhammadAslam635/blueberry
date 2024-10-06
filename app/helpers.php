<?php

function countRating($productId)

{

    $ratingCount = new \App\Helper\RatingCount();

    return $ratingCount->countRating($productId);

}
