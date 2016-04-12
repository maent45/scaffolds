<?php

class HomePage extends Page {

    private static $db = array (
        'welcome_text' => 'HTMLText',
        'btn_text' => 'Varchar'
    );

    private static $has_many = array (
        'carousel_images' => 'CarouselObject'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('welcome_text', 'Welcome Text'));
        $fields->addFieldToTab('Root.Main', TextField::create('btn_text', 'Link Button Text'));

        $fields->addFieldToTab('Root.Carousel', GridField::create(
            'carousel_images',
            'Carousel Images',
            $this->carousel_images(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {

}