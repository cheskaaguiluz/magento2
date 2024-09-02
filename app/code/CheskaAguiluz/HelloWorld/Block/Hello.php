<?php
/**
 *
 * @package     magento2
 * @author      Cheska Aguiluz
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 */

namespace CheskaAguiluz\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getText() {
        return 'Hello World!';
    }
}
?>