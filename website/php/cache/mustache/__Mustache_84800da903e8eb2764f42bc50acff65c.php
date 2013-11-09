<?php

class __Mustache_84800da903e8eb2764f42bc50acff65c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '  <head>
';
        // 'stylesheets' section
        $buffer .= $this->sectionC10133d6c79bd1140ef53c99ff09da56($context, $indent, $context->find('stylesheets'));
        $buffer .= $indent . '    <title>
';
        // 'title' section
        $buffer .= $this->section0c078f3f1906e5cc9c25c4e8e7f4f08c($context, $indent, $context->find('title'));
        $buffer .= $indent . '    </title>
';
        $buffer .= $indent . '  </head>
';
        $buffer .= $indent . '  <body>
';
        $buffer .= $indent . '		<div id="main_site">
';
        if ($partial = $this->mustache->loadPartial('arbiter.html')) {
            $buffer .= $partial->renderInternal($context, '      ');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
';
        // 'javascripts' section
        $buffer .= $this->section8c73f7dd33c131b9c1af8f83eae3cee2($context, $indent, $context->find('javascripts'));
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function sectionC10133d6c79bd1140ef53c99ff09da56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{>shared/stylesheet.html}}
    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('shared/stylesheet.html')) {
                    $buffer .= $partial->renderInternal($context, '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c078f3f1906e5cc9c25c4e8e7f4f08c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{.}}
      ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c73f7dd33c131b9c1af8f83eae3cee2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{>shared/javascript.html}}
    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('shared/javascript.html')) {
                    $buffer .= $partial->renderInternal($context, '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
