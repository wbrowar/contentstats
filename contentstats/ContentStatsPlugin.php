<?php
namespace Craft;

class ContentStatsPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Content Stats');
	}
	public function getVersion()
	{
		return '0.1.0';
	}
	public function getDeveloper()
	{
		return 'Will Browar';
	}
	public function getDeveloperUrl()
	{
		return 'http://wbrowar.com';
	}
	public function hasCpSection()
	{
		return false;
	}
	
	/*
	protected function defineSettings()
	{
		return array(
			'settings' => array(AttributeType::Mixed, 'label' => 'Settings', 'default' => array()),
		);
	}
	public function getSettingsHtml()
	{	
		// output settings template
		return craft()->templates->render('contentstats/settings', array(
			'settings' => $this->getSettings(),
		));
	}
	*/
}