<?php

class __Mustache_86c533a2e0894eaaba0801d545b9cb57 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>Join Super Handshake!</h1>
';
        $buffer .= $indent . 'Required:
';
        $buffer .= $indent . '<hr/>
';
        $buffer .= $indent . '<input id="first_name" type="text" default="First Name"/>
';
        $buffer .= $indent . '<input id="last_name" type="text" default="Last Name"/>
';
        $buffer .= $indent . '<input id="password" type="text" default="*****"/>
';
        $buffer .= $indent . '<input id="email" type="text" default="email@domain.com"/>
';
        $buffer .= $indent . 'Optional:
';
        $buffer .= $indent . '<hr/>
';
        $buffer .= $indent . '<input id="company" type="text" default="Company Name"/>
';
        $buffer .= $indent . '<input id="position" type="text" default="Position"/>
';
        $buffer .= $indent . '<input id="address" type="text" default="Address"/>
';
        $buffer .= $indent . '<input id="url" type="text" default="Url"/>
';
        $buffer .= $indent . '<input id="phone" type="text" default="Phone Number"/>
';
        $buffer .= $indent . '<input id="fax" type="text" default="Fax"/>
';
        $buffer .= $indent . '<textarea id="description" type="text" default="A Little Description..."> </textarea>
';
        $buffer .= $indent . '<button id="submit" class="pointerCursor">Submit</button>
';

        return $buffer;
    }
}
