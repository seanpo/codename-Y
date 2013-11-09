<?php

class __Mustache_a1d3059aae9c538d1c767a5869e4d71d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<link rel="stylesheet" type="text/css" href="/static/css/social.css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="fb-root"></div>
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '  window.fbAsyncInit = function() {
';
        $buffer .= $indent . '    // init the FB JS SDK
';
        $buffer .= $indent . '    FB.init({
';
        $buffer .= $indent . '      appId      : \'223975174437995\',                        // App ID from the app dashboard
';
        $buffer .= $indent . '      channelUrl : \'//WWW.YOUR_DOMAIN.COM/channel.html\', // Channel file for x-domain comms
';
        $buffer .= $indent . '      status     : true,                                 // Check Facebook Login status
';
        $buffer .= $indent . '      xfbml      : true                                  // Look for social plugins on the page
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '  };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  // Load the SDK asynchronously
';
        $buffer .= $indent . '  (function(d, s, id){
';
        $buffer .= $indent . '     var js, fjs = d.getElementsByTagName(s)[0];
';
        $buffer .= $indent . '     if (d.getElementById(id)) {return;}
';
        $buffer .= $indent . '     js = d.createElement(s); js.id = id;
';
        $buffer .= $indent . '     js.src = "//connect.facebook.net/en_US/all.js";
';
        $buffer .= $indent . '     fjs.parentNode.insertBefore(js, fjs);
';
        $buffer .= $indent . '   }(document, \'script\', \'facebook-jssdk\'));
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }
}
