<?php

class StatisticsAdmin extends LeftAndMain {
	/**
	 * Initialisation method called before accessing any functionality that BulkLoaderAdmin has to offer
	 */
	public function init() {
		//Requirements::javascript('cms/javascript/StatisticsAdmin_left.js');
		//Requirements::javascript('cms/javascript/StatisticsAdmin_right.js');
		parent::init();
	}
 
	public function Link($action=null) {
		return "admin/statistics/$action";
	}
 
	/**
	 * Form that will be shown when we open one of the items
	 */	 
	public function getEditForm($id = null) {
		return new Form($this, "EditForm",
			new FieldSet(
				new ReadonlyField('id #',$id)
			),
			new FieldSet(
				new FormAction('go')
			)
		);
	}
}

?>