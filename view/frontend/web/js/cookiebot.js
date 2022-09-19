/* jscs:disable */
/* eslint-disable */
define([
    'jquery'
], function ($) {
    'use strict';

    /**
     * @param config
     */
    function init(config) {
        let url = config.cookieBotUrl,
            accId = config.accountId,
            async = config.asyn;
            console.log(config);
        (function (win, doc, url, accId, async) {
            let firstElement = doc.getElementsByTagName('script')[0];
            let element = doc.createElement('script');
            element.async = async;
            element.src = url;
            element.dataset.cbid = accId;
            if (firstElement) {
                firstElement.parentNode.insertBefore(element, firstElement);
            } else {
                doc.getElementsByTagName('head')[0].prepend(element);
            }
        })(window, document, url, accId, async);

    }

    /**
     * @param {Object} config
     */
    return function (config) {
        init(config);
        $(document).on('user:allowed:save:cookie', function () {
            init(config);
        });
    }
});
