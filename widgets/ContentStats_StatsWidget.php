<?php
namespace Craft;

class ContentStats_StatsWidget extends BaseWidget
{
  public function getName()
  {
      return Craft::t('Content Stats');
  }

  public function getBodyHtml()
  {
    return craft()->templates->render('contentstats/stats', array(
			'settings' => $this->getSettings(),
		));
  }
	
	protected function defineSettings()
	{
		return array(
			'sectionHandle' => AttributeType::Mixed,
			'sectionLabel' => AttributeType::Mixed,
			'showGroup' => AttributeType::Mixed,
			'showSection' => AttributeType::Mixed,
			'showStatus' => AttributeType::Mixed,
		);
	}
	public function getSettingsHtml()
	{
		// clear setting cache
		craft()->templateCache->deleteCachesByKey('content_stats_widget');
		
		// output settings template
		return craft()->templates->render('contentstats/settings', array(
			'settings' => $this->getSettings(),
		));
	}
	public function getIconPath()
	{
		return CRAFT_PLUGINS_PATH . 'contentstats/resources/widget-stats.svg';
	}
}