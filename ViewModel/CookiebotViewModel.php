<?php
declare(strict_types=1);

namespace Comwrap\Cookiebot\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class CookiebotViewModel implements ArgumentInterface
{
    /**
     * Config for cookiebot status
     */
    private const COOKIEBOT_ENABLED_CONFIG_XML_PATH = 'cookiebot/settings/enabled';
    /**
     * Config for Cookiebot ID
     */
    private const COOKIEBOT_ID_CONFIG_XML_PATH = 'cookiebot/settings/cbid';
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Cookiebot view model construct
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Check if Cookiebot enabled
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return (boolean) $this->scopeConfig->getValue(self::COOKIEBOT_ENABLED_CONFIG_XML_PATH);
    }

    /**
     * Get Cookiebot ID
     *
     * @return string
     */
    public function getCookiebotId(): string
    {
        return (string) $this->scopeConfig->getValue(self::COOKIEBOT_ID_CONFIG_XML_PATH);
    }
}
