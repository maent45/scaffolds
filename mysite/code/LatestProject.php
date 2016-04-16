<?php

class LatestProject extends DataObject {

    private static $has_one = array (
        'HomePage' => 'HomePage',
        'image' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', $latest_project_img = UploadField::create('image', 'Latest Project'));

        $latest_project_img->setFolderName('latest-projects');
        $latest_project_img->getValidator()->setAllowedExtensions(array('png','gif','jpeg','jpg','svg'));

        return $fields;
    }

    public function getGridThumbnail() {
        if($this->image()->exists()) {
            return $this->image()->SetWidth(100);
        }

        return "(no image)";
    }

    private static $summary_fields = array (
        'GridThumbnail' => 'Image'
    );

}