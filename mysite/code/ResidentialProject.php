<?php

class ResidentialProject extends DataObject {

    private static $has_one = array (
        'Residential' => 'Residential',
        'image' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', $img = UploadField::create('image', 'Image'));

        $img->setFolderName('residential-projects');
        $img->getValidator()->setAllowedExtensions(array('png','gif','jpeg','jpg','svg'));

        return $fields;
    }

}