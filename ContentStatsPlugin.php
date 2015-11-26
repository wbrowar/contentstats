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
		return '1.0.2';
	}
	public function getDescription()
	{
		return 'See how many entries have been created for channels and structures in your Craft CMS website.';
	}
	public function getDeveloper()
	{
		return 'Will Browar';
	}
	public function getDeveloperUrl()
	{
		return 'http://wbrowar.com';
	}
	public function getDocumentationUrl()
	{
		return 'https://github.com/wbrowar/craft-content-stats';
	}
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/wbrowar/craft-content-stats/master/releases.json';
	}
	public function hasCpSection()
	{
		return false;
	}
}