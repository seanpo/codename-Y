<?php

class __Mustache_2ae95302cde5867ba3ff8abee66c1aac extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>Join Super Handshake!</h1>
';
        $buffer .= $indent . '<input id="first_name" class="hasDefault half_width" type="text" default="First Name *"/>
';
        $buffer .= $indent . '<input id="last_name" class="hasDefault half_width" type="text" default="Last Name *"/>
';
        $buffer .= $indent . '<input id="password" class="hasDefault full_width" type="text" default="*****"/>
';
        $buffer .= $indent . '<input id="email" class="hasDefault full_width" type="text" default="email@domain.com *"/>
';
        $buffer .= $indent . '<input id="company" class="hasDefault half_width" type="text" default="Company Name"/>
';
        $buffer .= $indent . '<input id="position" class="hasDefault half_width" type="text" default="Position"/>
';
        $buffer .= $indent . '<input id="address" class="hasDefault full_width" type="text" default="Address"/>
';
        $buffer .= $indent . '<input id="url" class="hasDefault full_width" type="text" default="Url"/>
';
        $buffer .= $indent . '<input id="phone" class="hasDefault half_width" type="text" default="Phone Number"/>
';
        $buffer .= $indent . '<input id="fax" class="hasDefault half_width" type="text" default="Fax"/>
';
        $buffer .= $indent . '<textarea id="description" class="hasDefault full_width" type="text" default="A Little Description..."> </textarea>
';
        $buffer .= $indent . '<button id="submit" class="full_width" class="hasDefault pointerCursor">Submit</button>
';
        $buffer .= $indent . '<p class="tinytext">Fields with (*) are required</p>
';

        return $buffer;
    }
}
