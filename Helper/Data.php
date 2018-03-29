<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace NovaMinds\Customattribute\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * @api
 * @deprecated 100.2.0
 * @SuppressWarnings(PHPMD.LongVariable)
 * @since 100.0.2
 */
class Data extends AbstractHelper
{
   
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
    
    public function getTapLabel()
    {
        return __($this->scopeConfig->getValue(
            'customtap/custap/cutomTapLabel', 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        ));
    }
   
}
