define([
    "jquery",
    "jquery/ui"
], function ($) {
    "use strict";

    $.widget('mage.foggylineHello', {
        options: {},
        _create: function () {
            console.log(this.options);
            alert(this.options.myVar1);
            alert(this.options.myVar2);
            //my code here
        }
    });

    return $.mage.foggylineHello;
});