<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZZZ\Validator;

class EmailAddress 
{
	public $ff='';
    public function __construct(){
		//echo 'конструктор  EmailAddress '.__NAMESPACE__;
		//echo 'dd'.get_class($this).'dd';
		print_r(__CLASS__);
		print_r( get_class_methods($this));
	}
	

}
