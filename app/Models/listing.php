<?php
namespace App\Models;

class listing {
    public static function all() {
        return  [ 
                [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta neque diam. Nam sit amet cursus enim, non pulvinar dolor. Morbi id molestie mauris. Nulla lectus urna, bibendum eget sagittis id, tincidunt non ligula. Vivamus sodales augue ultrices nibh vehicula aliquam. Etiam consectetur nunc vitae sagittis bibendum. Vestibulum sit amet fringilla dolor, eu cursus tellus. Suspendisse rutrum faucibus ante, ac imperdiet est porttitor nec. Nulla eleifend porta ligula sit amet imperdiet.',
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta neque diam. Nam sit amet cursus enim, non pulvinar dolor. Morbi id molestie mauris. Nulla lectus urna, bibendum eget sagittis id, tincidunt non ligula. Vivamus sodales augue ultrices nibh vehicula aliquam. Etiam consectetur nunc vitae sagittis bibendum. Vestibulum sit amet fringilla dolor, eu cursus tellus. Suspendisse rutrum faucibus ante, ac imperdiet est porttitor nec. Nulla eleifend porta ligula sit amet imperdiet.',
            ],
            ]
        ;
    
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id']== $id) {
            return $listing;
        }
    }

    }
}

