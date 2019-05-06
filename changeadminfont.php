<?php
/**
 * @package    plg_system_changeadminfont
 *
 * @author     Majid Ahmadi <[npvasta@gmail.com]>
 * @copyright  alright reserved
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://majidahmadi.ir
 */

defined('_JEXEC') or die;

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;


class plgSystemChangeadminfont extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    CMSApplication
	 * @since  1.0
	 */
	protected $app;

	/**
	 * Database object
	 *
	 * @var    JDatabaseDriver
	 * @since  1.0
	 */
	protected $db;

	/**
	 * Affects constructor behavior. If true, language files will be loaded automatically.
	 *
	 * @var    boolean
	 * @since  1.0
	 */
	protected $autoloadLanguage = true;


	/**
	 * onAfterDispatch.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	public function onAfterDispatch()
	{
	    if(!$this->app->isClient('administrator'))
        {
            return true;
        }
	    if(!$this->isTemplate())
        {
            return true ;
        }

	    $font = $this->params->get('font' , '');
	    if(JFolder::exists(JPATH_PLUGINS.'/system/changeadminfont/assets/fonts/'.$font)
            && JFile::exists(JPATH_PLUGINS.'/system/changeadminfont/assets/fonts/'.$font.'/'.$font.'.css') )
        {
            $doc = JFactory::getDocument();
            $doc->addStyleSheet(JUri::root().'/plugins/system/changeadminfont/assets/fonts/'.$font.'/'.$font.'.css');
        }

	}

    protected function isTemplate()
    {
        // Check if we have a Isis template
        if ($this->app->getTemplate(true)->template == 'isis')
        {
            return true;
        }

        $path        = JPATH_ADMINISTRATOR . '/templates/' . $this->app->getTemplate() . '/' . 'templateDetails.xml';
        $xml         = simplexml_load_file($path);
        $description = $xml->description;

        // Even not having a Isis template we could have a Isis based template
        if (stripos($description, 'isis') !== false)
        {
            return true;
        }

        return false;
    }


}
