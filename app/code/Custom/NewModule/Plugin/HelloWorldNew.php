<?php
/**
 *
 * @package     magento2
 * @author      Cheska Aguiluz
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 */

namespace Custom\NewModule\Plugin;

class HelloWorldNew
{
    protected $scopeConfig;

    /**
     * @param \CheskaAguiluz\HelloWorld\Block\Hello $subject

     * @param $result
     * @return mixed
     */

	public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
    	$this->scopeConfig = $scopeConfig;
    }

	public function afterGetText(\CheskaAguiluz\HelloWorld\Block\Hello $subject, $result) {
		$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/debugger.log');
		$logger = new \Zend_Log();
		$logger->addWriter($writer);
		$logger->info('test');

        return "Hello Universe!";
    }
}
?>
