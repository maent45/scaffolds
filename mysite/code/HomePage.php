<?php

class HomePage extends Page {

    private static $db = array (
        'welcome_text' => 'HTMLText',
        'btn_text' => 'Varchar'
    );

    private static $has_one = array (
        'carousel_img' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('welcome_text', 'Welcome Text'));
        $fields->addFieldToTab('Root.Main', TextField::create('btn_text', 'Link Button Text'));
        $fields->addFieldToTab('Root.Carousel', $carousel_img = UploadField::create('carousel_img', 'Carousel Image'));

        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {

}