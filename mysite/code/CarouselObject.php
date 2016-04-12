<?php

class CarouselObject extends DataObject {

    private static $has_one = array (
        'HomePage' => 'HomePage',
        'carousel_img' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', $carousel_img = UploadField::create('carousel_img', 'Carousel Image'));

        $carousel_img->setFolderName('carousel-images');

        $carousel_img->getValidator()->setAllowedExtensions(array('png','gif','jpeg','jpg','svg'));

        return $fields;
    }

}