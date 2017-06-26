<?php
class ContractTest extends PHPUnit_Framework_TestCase {
	public function testSelect() {
		$demo = new pmcai( );
		$m = $demo->match('/a/b/c');
		$m = $m && $demo->dispatch();
		$m = $demo->invoke();
	}
}

class pmcai implements \Tian\Contacts\IModule {
	/**
	 * 检测URL是否匹配，匹配后使用相应的URLPATH
	 *
	 * @return bool
	 */
	public function match($urlpath) {
		return true;
	}
	/**
	 * 检查是否可抵达,并准备就绪
	 *
	 * @return bool
	 */
	public function dispatch() {
		return true;
	}
	
	/**
	 * 执行任务
	 *
	 * @return void
	 */
	public function invoke() {
		echo 'invoked';
	}
}
