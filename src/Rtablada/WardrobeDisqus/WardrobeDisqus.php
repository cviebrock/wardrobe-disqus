<?php namespace Rtablada\WardrobeDisqus;

use Illuminate\Config\Repository as Config;

class WardrobeDisqus
{
	protected $config;

	public function __construct(Config $config)
	{
		$this->config = $config;
	}

	public function comments($disqus_identifier=null)
	{
		$disqus_shortname = $this->config->get('wardrobe-disqus::disqus_shortname');

		return \View::make('wardrobe-disqus::comments', compact('disqus_shortname', 'disqus_identifier') );
	}

	public function counts()
	{
		$disqus_shortname = $this->config->get('wardrobe-disqus::disqus_shortname');

		return \View::make('wardrobe-disqus::counts', compact('disqus_shortname') );
	}
}
