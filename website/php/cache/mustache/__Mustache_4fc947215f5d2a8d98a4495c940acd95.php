<?php

class __Mustache_4fc947215f5d2a8d98a4495c940acd95 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="logo"> </div>
';
        $buffer .= $indent . '<h1>Login to Codename Y</h1>
';
        $buffer .= $indent . '<input id="email" type="text" defaault="email@domain.com"/>
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
