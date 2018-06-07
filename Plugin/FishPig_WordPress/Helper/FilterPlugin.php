<?php
/**
 *
**/
namespace FishPig\WordPress_DisableWpautop\Plugin\FishPig_WordPress\Helper;
use      \FishPig\WordPress\Helper\Filter;

class FilterPlugin
{
	/*
	 * Stop wpautop from being called
	 *
	 * @param  Filter $filter
	 * @param \Closure $callback
	 * @param  string $string
	 * @return mixed
	 */
	public function aroundAddParagraphTagsToString(Filter $filter, \Closure $callback, $string)
	{
		return $string;
	}
}
