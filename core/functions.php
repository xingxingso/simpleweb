<?php  

/**
 * 打印函数
 * @author Chenzx
 * @created 2017-03-21
 * @param   [type]     $con [description]
 * @return  [type]          [description]
 */
function p($con)
{
	echo '<pre>'.print_r($con,true).'<pre>';
}
