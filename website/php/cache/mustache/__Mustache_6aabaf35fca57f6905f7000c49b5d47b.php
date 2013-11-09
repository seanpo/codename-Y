<?php

class __Mustache_6aabaf35fca57f6905f7000c49b5d47b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>Join Super Handshake!</h1>
';
        $buffer .= $indent . '<input id="first_name" class="half_width" type="text" default="First Name"/>
';
        $buffer .= $indent . '<input id="last_name" class="half_width" type="text" default="Last Name"/>
';
        $buffer .= $indent . '<input id="password" class="full_width" type="text" default="*****"/>
';
        $buffer .= $indent . '<input id="email" class="full_width" type="text" default="email@domain.com"/>
';
        $buffer .= $indent . '<input id="company" class="half_width" type="text" default="Company Name"/>
';
        $buffer .= $indent . '<input id="position" class="half_width" type="text" default="Position"/>
';
        $buffer .= $indent . '<input id="address" class="full_width" type="text" default="Address"/>
';
        $buffer .= $indent . '<input id="url" class="full_width" type="text" default="Url"/>
';
        $buffer .= $indent . '<input id="phone" class="half_width" type="text" default="Phone Number"/>
';
        $buffer .= $indent . '<input id="fax" class="half_width" type="text" default="Fax"/>
';
        $buffer .= $indent . '<textarea id="description" class="full_width" type="text" default="A Little Description..."> </textarea>
';
        $buffer .= $indent . '<button id="submit" class="full_width" class="pointerCursor">Submit</button>
';

        return $buffer;
    }
}
