<?php

class HomePage extends Page {

    private static $db = array (
        'welcome_text' => 'HTMLText',
        'btn_text' => 'Varchar',
        'about_page_link' => 'Varchar',
        'latest_projects_header' => 'Varchar',
        'services_content' => 'HTMLText',
        'testimonial_content' => 'HTMLText',
        // sub nav
        'site_slogan' => 'HTMLText',
        'nav_contact_info' => 'HTMLText',
        'contact_map_address' => 'Varchar',
        // TEMP SOLUTION
        // footer contact info
        'contact_info' => 'HTMLText',
        'postal_address' => 'HTMLText',
        'location' => 'HTMLText'
    );

    private static $has_many = array (
        'carousel_images' => 'CarouselObject',
        'latest_projects' => 'LatestProject'
    );

    private static $has_one = array (
        'logo' => 'Image'
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

        // sub nav
        $fields->addFieldToTab('Root.SubNavigationItems', $logo_img = UploadField::create('logo', 'Site logo'));
        $fields->addFieldToTab('Root.SubNavigationItems', HtmlEditorField::create('site_slogan', 'Site slogan')->setRows(5));
        $fields->addFieldToTab('Root.SubNavigationItems', HtmlEditorField::create('nav_contact_info', 'Navigation Contact')->setRows(5));

        $logo_img->setFolderName('navigation-images');
        $logo_img->getValidator()->setAllowedExtensions(array('png','gif','jpeg','jpg','svg'));

        // contact info
        $fields->addFieldToTab('Root.Business Address', TextField::create('contact_map_address', 'Business Address'));

        // TEMP SOLUTION
        /*'contact_info' => 'HTMLText',
        'postal_address' => 'HTMLText',
        'location' => 'HTMLText'*/
        $fields->addFieldToTab('Root.FooterContactInfo', HtmlEditorField::create('contact_info', 'Contact Info')->setRows(5));
        $fields->addFieldToTab('Root.FooterContactInfo', HtmlEditorField::create('postal_address', 'Postal Address')->setRows(5));
        $fields->addFieldToTab('Root.FooterContactInfo', HtmlEditorField::create('location', 'Location')->setRows(5));

        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {

}