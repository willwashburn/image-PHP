<?php namespace willwashburn;

use FastImage;

/**
 * Class FastImageSizer
 *
 * @package willwashburn
 */
class FastImageTransport implements Transport
{

    /**
     * @param $image_url
     *
     * @return array
     */
    public function getDimensions($image_url)
    {

        $image = new FastImage($image_url);

        list($width, $height) = $image->getSize();

        return array('width' => $width, 'height' => $height);
    }
}