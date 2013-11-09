<?php

class __Mustache_396f1c5ec02dfba23125f9e29c3660bc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'map' section
        $buffer .= $this->sectionBef55830f7421c72f7d6881817369ac8($context, $indent, $context->find('map'));
        // 'login' section
        $buffer .= $this->sectionF603a431282dbf4e14aeb38e1dc46d2a($context, $indent, $context->find('login'));

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

    private function sectionF603a431282dbf4e14aeb38e1dc46d2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{>container/login.html}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('container/login.html')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
