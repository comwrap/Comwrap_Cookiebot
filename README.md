# Comwrap_Cookiebot

Module for integration [Cookiebot](https://www.cookiebot.com/en/) service.
This module injects script in header section according to cookiebot requirements

## Compatibility

|Magento|
|---|
| \> 2.2.0 |

## Configuration

Magento Configuration: Stores > Configuration > Comwrap > Cookiebot > Cookiebot Configuration

| Field                | Value      |Comment
|----------------------|------------|---|
| Enabled              | Yes/No     |Activate or deactivate Cookiebot
| Cookiebot URL Value  | URL        |URL, which will be used for script src
| Cookiebot ID Value   | CBID Value |Cookiebot ID value for integration (cbid param for script)
| Async Script Mode    | Yes/No     |Script will contain async attribute, if this option enabled

## Changelog

1.1.0:
 - update script insertion way with using JS to get it like first element in head section
 - added additional configuration values to manage script URL and async attribute
 - updated module sequence configuration to get script initiated after Google Tag Manager 

1.1.1:
 - minor code fixes
 - update CSP config