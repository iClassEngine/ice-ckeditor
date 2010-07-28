<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * iClassEngine
 *
 * THIS IS COPYRIGHTED SOFTWARE
 * PLEASE READ THE LICENSE AGREEMENT
 * http://iclassengine.com/user_guide/policies/license
 *
 * @package		iClassEngine
 * @author		ICE Dev Team
 * @copyright	Copyright (c) 2010, 68 Designs, LLC
 * @license		http://iclassengine.com/user_guide/policies/license
 * @link		http://iclassengine.com
 * @since		Version 1.0
 */

// ------------------------------------------------------------------------

/**
 * ckEditor Addon
 *
 *
 * @subpackage	Addons
 * @link		http://iclassengine.com/user_guide/addons/
 *
 */
class Ckeditor_extension
{
	
	private $_ci;
	
	/**
	 * Setup events
	 *
	 * @access	public
	 */
	public function __construct($modules)
	{
		$this->_ci = CI_Base::get_instance();
		
		$modules->register('content/form', $this, 'integrate');
		$modules->register('htmleditor', $this, 'integrate');
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * This is the where clause for search listings
	 */
	public function integrate()
	{
		$output = '
			<script type="text/javascript" src="includes/addons/ckeditor/ckeditor/ckeditor.js"></script>
			<script type="text/javascript" src="includes/addons/ckeditor/ckeditor/adapters/jquery.js"></script>
			<script type="text/javascript">
				//<![CDATA[
				$(function()
				{
					var config = {
						toolbar:
						[
							[\'Bold\', \'Italic\', \'-\', \'NumberedList\', \'BulletedList\', \'-\', \'Link\', \'Unlink\'],
							[\'UIColor\', \'Image\']
						]
					};

					// Initialize the editor.
					// Callback function can be passed and executed after full instance creation.
					$(\'#page_content\').ckeditor(config);
					$(\'#post_content\').ckeditor(config);
				});

				//]]>
			</script>
		';
		echo $output;
	}
}
/* End of file ckeditor_extension.php */
/* Location: ./upload/includes/addons/ckeditor/ckeditor_extension.php */ 