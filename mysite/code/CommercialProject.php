<?php

class CommercialProject extends DataObject {

    private static $has_one = array (
        'Commercial' => 'Commercial',
        'image' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', $img = UploadField::create('image', 'Project Image'));

        $img->setFolderName('commercial-projects');
        $img->getValidator()->setAllowedExtensions(array('png','gif','jpeg','jpg','svg'));

        return $fields;
    }

}