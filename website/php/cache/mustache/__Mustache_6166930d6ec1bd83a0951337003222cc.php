<?php

class __Mustache_6166930d6ec1bd83a0951337003222cc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="logo"> </div>
';
        $buffer .= $indent . '<h1>Super Handshake</h1>
';
        $buffer .= $indent . '<input id="email" class="full_width" type="text" default="email@domain.com"/>
';
        $buffer .= $indent . '<input id="password" class="full_width" type="text" default="*****"/>
';
        $buffer .= $indent . '<button id="submit" class="full_width" class="pointerCursor">Submit</button>
';
        $buffer .= $indent . '<p class="tinytext">Click <a href="/create.php">here</a> if you do not already have an account!</p>
';

        return $buffer;
    }
}
