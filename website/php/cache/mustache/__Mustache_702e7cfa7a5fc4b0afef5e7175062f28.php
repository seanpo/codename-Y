<?php

class __Mustache_702e7cfa7a5fc4b0afef5e7175062f28 extends Mustache_Template
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
        $buffer .= $indent . '<input id="password" type="text" default="email@domain.com"/>
';
        $buffer .= $indent . '<button id="submit" class="pointerCursor" default="*****">Submit</button>
';
        $buffer .= $indent . '<p class="tinytext">Click <a href="/create.php">here</a> if you do not already have an account!</p>
';

        return $buffer;
    }
}
