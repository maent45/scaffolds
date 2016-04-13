<?php

class Residential extends Page {

    private static $db = array (
        'reviews' => 'HTMLText'
    );

    private static $has_many = array (
        'Residential_content_blocks' => 'ResidentialContentBlock',
        'Projects' => 'ResidentialProject'
    );

    private static $has_one = array (
        'link_cover_img' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main', 'Content');

        // content blocks
        $fields->addFieldToTab('Root.Main', HeaderField::create('Content Blocks'));
        $fields->addFieldToTab('Root.Main', GridField::create(
            'Residential_content_blocks',
            'Latest Projects',
            $this->Residential_content_blocks(),
            GridFieldConfig_RecordEditor::create()
        ));

        // projects
        $fields->addFieldToTab('Root.Main', HeaderField::create('Projects'));
        $fields->addFieldToTab('Root.Main', GridField::create(
            'Projects',
            'Latest Projects',
            $this->Projects(),
            GridFieldConfig_RecordEditor::create()
        ));

        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('reviews', 'Testimonials')->setRows(5));

        $fields->addFieldToTab('Root.Main', UploadField::create('link_cover_img', 'Page Cover Image (Shows at bottom of each page)'));

        return $fields;
    }

}

class Residential_Controller extends Page_Controller {

}