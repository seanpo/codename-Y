<?php

class __Mustache_e4097fa4fa37815fc5ea1406ca37f0e3 extends Mustache_Template
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
        $buffer .= $indent . '<button id="submit" value="Submit"/>
';
        $buffer .= $indent . '<p class="tinytext">Click <a href="/create.php">here</a> if you do not already have an account!</p>
';

        return $buffer;
    }
}
