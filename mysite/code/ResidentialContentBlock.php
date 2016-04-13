<?php

class ResidentialContentBlock extends DataObject {

    private static $has_one = array (
        'Residential' => 'Residential',
        'content_image' => 'Image'
    );

    private static $db = array (
        'content_block' => 'HTMLText'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('content_block', 'Content'));
        $fields->addFieldToTab('Root.Main', $content_img = UploadField::create('content_image', 'Image'));

        $content_img->setFolderName('residential-content-images');
        $content_img->getValidator()->setAllowedExtensions(array('png','gif','jpeg','jpg','svg'));

        return $fields;
    }

}