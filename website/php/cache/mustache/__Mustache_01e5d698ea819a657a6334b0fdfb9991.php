<?php

class __Mustache_01e5d698ea819a657a6334b0fdfb9991 extends Mustache_Template
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
        $buffer .= $indent . '<input id="password" class="full_width" type="password" default="*****"/>
';
        $buffer .= $indent . '<button id="submit" class="full_width" class="pointerCursor">Submit</button>
';
        $buffer .= $indent . '<p class="tinytext">Click <a href="/create.php">here</a> if you do not already have an account!</p>
';

        return $buffer;
    }
}
