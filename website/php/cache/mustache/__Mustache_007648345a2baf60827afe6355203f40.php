<?php

class __Mustache_007648345a2baf60827afe6355203f40 extends Mustache_Template
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
        $buffer .= $this->section8794e873a35ab2bfc3c24ac46ae77f88($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8794e873a35ab2bfc3c24ac46ae77f88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="{{id}}" location="{{location}}">
      <div id="first_name">
        {{first_name}}
      </div>
      <div id="last_name">
        {{last_name}}
      </div>
      <div id="email">
        {{email}}
      </div>
      <div id="timestamp">
        {{timestamp}}
      </div>
    </div> 
  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '    <div id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '" location="';
                $value = $this->resolveValue($context->find('location'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">
';
                $buffer .= $indent . '      <div id="first_name">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('first_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div id="last_name">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('last_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div id="email">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div id="timestamp">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('timestamp'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
