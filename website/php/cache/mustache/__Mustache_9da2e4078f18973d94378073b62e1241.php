<?php

class __Mustache_9da2e4078f18973d94378073b62e1241 extends Mustache_Template
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
        $buffer .= $indent . '<button id="submit" value="Submit"></button>
';
        $buffer .= $indent . '<p class="tinytext">Click <a href="/create.php">here</a> if you do not already have an account!</p>
';

        return $buffer;
    }
}
