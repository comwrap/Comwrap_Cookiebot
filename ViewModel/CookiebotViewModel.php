<?php
declare(strict_types=1);

namespace Comwrap\Cookiebot\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

class CookiebotViewModel implements ArgumentInterface
{
    /**
     * Config for cookiebot status
     */
    private const COOKIEBOT_ENABLED_CONFIG_XML_PATH = 'cookiebot/settings/enabled';
    /**
     * Config for Cookiebot URL
     */
    private const COOKIEBOT_URL_CONFIG_XML_PATH = 'cookiebot/settings/cburl';
    /**
     * Config for Cookiebot ID
     */
    private const COOKIEBOT_ID_CONFIG_XML_PATH = 'cookiebot/settings/cbid';
    /**
     * Config for Cookiebot script adding mode
     */
    private const COOKIEBOT_ASYNC_CONFIG_XML_PATH = 'cookiebot/settings/async';
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * Cookiebot view model construct
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
    }

    /**
     * Check if Cookiebot enabled
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return (boolean) $this->scopeConfig->getValue(
            self::COOKIEBOT_ENABLED_CONFIG_XML_PATH,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Cookiebot ID
     *
     * @return string
     */
    public function getCookiebotId(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::COOKIEBOT_ID_CONFIG_XML_PATH,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Cookiebot URL
     *
     * @return string
     */
    public function getCookiebotUrl(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::COOKIEBOT_URL_CONFIG_XML_PATH,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Cookiebot URL
     *
     * @return bool
     */
    public function getAsyncMode(): bool
    {
        return (bool) $this->scopeConfig->getValue(
            self::COOKIEBOT_ASYNC_CONFIG_XML_PATH,
            ScopeInterface::SCOPE_STORE
        );
    }
}
