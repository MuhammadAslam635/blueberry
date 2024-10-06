<?php

namespace App\helper;

use App\Models\Review;

class RatingCount
{
    public function countRating($productId)
    {
        $reviews = Review::where('product_id', $productId)->get();
        $totalReviews = $reviews->count();
        $totalRating = $reviews->sum('rating');

        if ($totalReviews == 0) {
            $averageRating = 0;
        } else {
            $averageRating = $totalRating / $totalReviews;
        }

        return $averageRating;
    }

    public function countTotalReviews($productId)
    {
        $reviews = Review::where('product_id', $productId)->get();

        return $reviews->count();
    }
}
