<?php

class __Mustache_2822e35ac702d5fc4cafb0fca4d79193 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="logo"> </div>
';
        $buffer .= $indent . '<h1>Login to Codename Y</h1>
';
        $buffer .= $indent . '<input id="email" type="text"/>
';
        $buffer .= $indent . '<input id="password" type="text"/>
';
        $buffer .= $indent . '<p>Click <a href="/create.php">here</a> if you do not already have an account!</p>
';

        return $buffer;
    }
}
