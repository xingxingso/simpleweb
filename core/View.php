<?php  
namespace core;

/**
* view
*/
class View
{
	/**
	 * 模板文件
	 * @var [type]
	 */
	protected $file;

	/**
	 * 模板变量
	 * @var array
	 */
	protected $vars = [];

	public function make($file)
	{ 
		$this->file = 'view/' . $file . '.html'; 
		return $this;
	}

	function with($name, $value)
	{
		$this->vars[$name] = $value;
		return $this;
	}

	public function __toString()
	{
		//分配变量到内存，因为在相同作用域所以模板中可以访问
		extract($this->vars);
		include $this->file;

		return '';
	}
}
