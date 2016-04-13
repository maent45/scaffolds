<?php

class Commercial extends Page {

    private static $has_many = array (
        'commercial_projects' => 'CommercialProject'
    );

    private static $db = array (
        'reviews' => 'HTMLText'
    );

    private static $has_one = array (
        'link_cover_img' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('reviews', 'Testimonials')->setRows(8));

        // commercial projects
        $fields->addFieldToTab('Root.Main', HeaderField::create('Projects'),'Content');
        $fields->addFieldToTab('Root.Main', GridField::create(
            'commercial_projects',
            'Latest Projects',
            $this->commercial_projects(),
            GridFieldConfig_RecordEditor::create()
        ), 'Content');

        $fields->addFieldToTab('Root.Main', UploadField::create('link_cover_img', 'Page Cover Image (Shows at bottom of each page)'));

        return $fields;
    }

}

class Commercial_Controller extends Page_Controller {

}