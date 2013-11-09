<?php

class __Mustache_179ea7a8da2d2e031878b27b62afc5fa extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<link rel="stylesheet" type="text/css" href="';
        $value = $this->resolveValue($context->last(), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '">
';

        return $buffer;
    }
}
