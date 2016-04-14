<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);

	// return homepage to get carousel items
	public function getCarousel() {
		return DataObject::get('HomePage');
	}

	// get userform
	public function showForm() {
		$record = DataObject::get_one("UserDefinedForm");
		$results = new UserDefinedForm_Controller($record);

		return $results;
	}

	// get home page
	public function getHomePage() {
		return DataObject::get_one('HomePage');
	}

	// get about page
	public function getAboutPage() {
		return DataObject::get_one('About');
	}

	// get residential page
	public function getResidential() {
		return DataObject::get_one('Residential');
	}

	// get commercial page
	public function getCommercialPage() {
		return DataObject::get_one('Commercial');
	}

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}

}
