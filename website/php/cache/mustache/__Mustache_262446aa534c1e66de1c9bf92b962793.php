<?php

class __Mustache_262446aa534c1e66de1c9bf92b962793 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<script type="text/javascript" src="';
        $value = $this->resolveValue($context->last(), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '"></script>
';

        return $buffer;
    }
}
