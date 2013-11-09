<?php

class __Mustache_cbeb1ed804ca6e207c524961804dcb80 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'map' section
        $buffer .= $this->sectionBef55830f7421c72f7d6881817369ac8($context, $indent, $context->find('map'));

        return $buffer;
    }

    private function sectionBef55830f7421c72f7d6881817369ac8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{>container/map.html}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('container/map.html')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
