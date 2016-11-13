<?php namespace wechat;

use hdphp\kernel\ServiceProvider;

class WeChatProvider extends ServiceProvider {
	//延迟加载
	public $defer = true;

	public function boot() {
	}

	public function register() {
		$this->app->single( 'WeChat', function () {
			return new WeChat();
		} );
	}
}