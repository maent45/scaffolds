<?php

class About extends Page {

    private static $db = array (
        'contact_btn_txt' => 'Varchar',
        'contact_link' => 'Varchar'
    );

    private static $has_many = array (
        'About_content_blocks' => 'AboutContentBlock'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main', 'Content');

        // content blocks
        $fields->addFieldToTab('Root.Main', HeaderField::create('Content Blocks'));
        $fields->addFieldToTab('Root.Main', GridField::create(
            'About_content_blocks',
            'Latest Projects',
            $this->About_content_blocks(),
            GridFieldConfig_RecordEditor::create()
        ));

        // contact btn
        $fields->addFieldToTab('Root.Main', TextField::create('contact_btn_txt', 'Contact Button Text'));
        $fields->addFieldToTab('Root.Main', TextField::create('contact_link', 'Contact Page Link'));

        return $fields;
    }

}

class About_Controller extends Page_Controller {

}