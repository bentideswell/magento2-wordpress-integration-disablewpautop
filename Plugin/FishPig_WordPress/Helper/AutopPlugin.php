<?php
/*
 *
 *
 */
namespace FishPig\WordPress_DisableWpautop\Plugin\FishPig_WordPress\Helper;

/* Subject */
use FishPig\WordPress\Helper\Autop;

class AutopPlugin
{
	/*
	 * Stop wpautop from being called
	 *
	 * @param  Filter $filter
	 * @param \Closure $callback
	 * @param  string $string
	 * @return mixed
	 */
	public function aroundAddParagraphTagsToString(Autop $autop, \Closure $callback, $string)
	{
		return $string;
	}
}
