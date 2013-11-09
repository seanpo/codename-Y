<?php

class __Mustache_c586696c03e040a63889262ae37063f2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id=\'map\' userId="';
        $value = $this->resolveValue($context->find('userId'), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '"> </div>
';
        $buffer .= $indent . '<div id=\'user_container\'>
';
        // 'users' section
        $buffer .= $this->section884d603e6319040aa048b7aa2853b5b3($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section884d603e6319040aa048b7aa2853b5b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div id="{{id}}">
    {{first_name}} {{last_name}}
  </div> 
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '  <div id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('first_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('last_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '  </div> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
