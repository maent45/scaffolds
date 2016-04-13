<?php

class About extends Page {

    private static $db = array (
        'contact_btn_txt' => 'Varchar',
        'contact_link' => 'Varchar'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextField::create('contact_btn_txt', 'Contact Button Text'));
        $fields->addFieldToTab('Root.Main', TextField::create('contact_link', 'Contact Page Link'));

        return $fields;
    }

}

class About_Controller extends Page_Controller {

}