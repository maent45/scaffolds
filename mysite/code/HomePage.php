<?php

class HomePage extends Page {

    private static $db = array (
        'welcome_text' => 'HTMLText',
        'btn_text' => 'Varchar',
        'about_page_link' => 'Varchar',
        'latest_projects_header' => 'Varchar',
        'services_content' => 'HTMLText',
        'testimonial_content' => 'HTMLText'
    );

    private static $has_many = array (
        'carousel_images' => 'CarouselObject',
        'latest_projects' => 'LatestProject'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('welcome_text', 'Welcome Text')->setRows(5), 'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('btn_text', 'Link Button Text'));
        $fields->addFieldToTab('Root.Main', TextField::create('about_page_link', 'Link to About page'));
        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('services_content', 'Services')->setRows(5));
        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('testimonial_content', 'Testimonials/Partners'));

        // carousel
        $fields->addFieldToTab('Root.Carousel', GridField::create(
            'carousel_images',
            'Carousel Images',
            $this->carousel_images(),
            GridFieldConfig_RecordEditor::create()
        ));

        $fields->addFieldToTab('Root.LatestProjects', TextField::create('latest_projects_header', 'Latest Projects Heading'));
        // latest projects
        $fields->addFieldToTab('Root.LatestProjects', GridField::create(
            'latest_projects',
            'Latest Projects',
            $this->latest_projects(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {

}