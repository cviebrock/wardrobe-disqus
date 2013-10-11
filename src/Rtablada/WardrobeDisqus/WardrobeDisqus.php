<?php namespace Rtablada\WardrobeDisqus;

use Illuminate\Config\Repository as Config;
use Wardrobe\Core\Models\Post as Post;

class WardrobeDisqus
{
	protected $config;

	public function __construct(Config $config)
	{
		$this->config = $config;
	}

	public function comments(Post $post)
	{
		$disqus_shortname = $this->config->get('wardrobe-disqus::disqus_shortname');

		$disqus_identifier = $this->config->get('wardrobe-disqus::disqus_use_identifier') ? $post->getKey() : false;

		return View::make('wardrobe-disqus::comments', compact($disqus_shortname, $disqus_identifier) );
	}

	public function counts(Post $post)
	{
		$disqus_shortname = $this->config->get('wardrobe-disqus::disqus_shortname');

		$disqus_identifier = $this->config->get('wardrobe-disqus::disqus_use_identifier') ? $post->getKey() : false;

		return View::make('wardrobe-disqus::counts', compact($disqus_shortname, $disqus_identifier) );
	}
}
