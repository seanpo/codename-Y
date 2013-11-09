<?php

class __Mustache_3ac75e97ba8d724616e01c31f7e2bef1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="logo"> </div>
';
        $buffer .= $indent . '<h1>Super Handshake</h1>
';
        $buffer .= $indent . '<input id="email" type="text" default="email@domain.com"/>
';
        $buffer .= $indent . '<input id="password" type="text" default="*****"/>
';
        $buffer .= $indent . '<button id="submit" class="pointerCursor">Submit</button>
';
        $buffer .= $indent . '<p class="tinytext">Click <a href="/create.php">here</a> if you do not already have an account!</p>
';

        return $buffer;
    }
}
