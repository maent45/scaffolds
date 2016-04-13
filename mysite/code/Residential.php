<?php

class Residential extends Page {

    private static $has_many = array (
        'Residential_content_blocks' => 'ResidentialContentBlock'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main', 'Content');
        $fields->addFieldToTab('Root.Main', HeaderField::create('Content Blocks'));

        // content blocks
        $fields->addFieldToTab('Root.Main', GridField::create(
            'Residential_content_blocks',
            'Latest Projects',
            $this->Residential_content_blocks(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

}

class Residential_Controller extends Page_Controller {

}