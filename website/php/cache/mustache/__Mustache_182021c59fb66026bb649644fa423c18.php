<?php

class __Mustache_182021c59fb66026bb649644fa423c18 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="logo"> </div>
';
        $buffer .= $indent . '<h1>Login to Codename Y</h1>
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
