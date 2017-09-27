<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('behaviour').'"><i class="fa fa-list fa-fw"></i> Behaviour</a>
	</li><li>
		<a href="'.site_url('evolutions').'"><i class="fa fa-list fa-fw"></i> Evolutions</a>
	</li><li>
		<a href="'.site_url('fun_fact').'"><i class="fa fa-list fa-fw"></i> Fun fact</a>
	</li><li>
		<a href="'.site_url('gallery').'"><i class="fa fa-list fa-fw"></i> Gallery</a>
	</li><li>
		<a href="'.site_url('news_events').'"><i class="fa fa-list fa-fw"></i> News events</a>
	</li><li>
		<a href="'.site_url('statistic').'"><i class="fa fa-list fa-fw"></i> Statistic</a>
	</li>';
	}
