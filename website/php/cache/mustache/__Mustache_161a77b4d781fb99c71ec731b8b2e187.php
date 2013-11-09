<?php

class __Mustache_161a77b4d781fb99c71ec731b8b2e187 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="logo"> </div>
';
        $buffer .= $indent . '<h3> How would you design your Palette? </h3>
';
        $buffer .= $indent . '<div id="facebook_connect" class="pointerCursor"> </div>
';
        $buffer .= $indent . '<h3> Photoshop </h3>
';
        $buffer .= $indent . '<h4> Show us your Lightroom controller! </h3>
';
        $buffer .= $indent . '<h3> Traktor</h3>
';
        $buffer .= $indent . '<h3> Premiere </h3>
';
        if ($partial = $this->mustache->loadPartial('/shared/social.html')) {
            $buffer .= $partial->renderInternal($context, '');
        }

        return $buffer;
    }
}
