<?php

namespace rfreebern;

define('GOOGLE_IMAGE_SEARCH_URL', 'http://ajax.googleapis.com/ajax/services/search/images?v=1.0&rsz=8&q=');

class GoogleImageSearch {

    public static function search ($term) {
        $json = file_get_contents(GOOGLE_IMAGE_SEARCH_URL . urlencode($term));
        $response = json_decode($json);
        $results = $response->responseData->results;

        $images = array();
        foreach ($results as $result) {
            $images[] = array(
                'url' => $result->url,
                'source' => $result->originalContextUrl,
                'width' => $result->width,
                'height' => $result->height
            );
        }

        return $images;
    }

}
