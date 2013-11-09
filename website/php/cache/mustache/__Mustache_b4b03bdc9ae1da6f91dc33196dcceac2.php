<?php

class __Mustache_b4b03bdc9ae1da6f91dc33196dcceac2 extends Mustache_Template
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
        $buffer .= $this->section0cf86f2232aad3bbbc053be6fe3709d3($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id=\'infobox\' hidden>
';
        // 'users' section
        $buffer .= $this->section7feba1c3948de47ddedde7af799de907($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0cf86f2232aad3bbbc053be6fe3709d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="{{id}}" class="user" location="{{location}}" image="{{image}}">
      <div class="first_name">
        {{first_name}}
      </div>
      <div class="last_name">
        {{last_name}}
      </div>
      <div class="email">
        {{email}}
      </div>
      <div class="timestamp">
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
                $buffer .= '" class="user" location="';
                $value = $this->resolveValue($context->find('location'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '" image="';
                $value = $this->resolveValue($context->find('image'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">
';
                $buffer .= $indent . '      <div class="first_name">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('first_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="last_name">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('last_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="email">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="timestamp">
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

    private function section7feba1c3948de47ddedde7af799de907(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id=\'{{id}}_infobox\'> 
      <img class=\'avatar\' src="{{image}}"/>
      <div class=\'name\'>Name: {{first_name}} {{last_name}}</div>
      <div class=\'email\'>Email: {{email}}</div>
      <div class=\'company\'>At: {{company}} </div>
      <div class=\'position\'>as {{position}}</div>
      <div class=\'address\'>Address: {{address}}</div>
      <div class=\'url\'>Website: {{url}}</div>
      <div class=\'fax\'>Fax: {{fax}}</div>
      <div class=\'phone\'>Phonenumber: {{phone}}</div>
      <div class=\'description\'>A little about the user: {{description}}</div>
    </div>
  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '    <div id=\'';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '_infobox\'> 
';
                $buffer .= $indent . '      <img class=\'avatar\' src="';
                $value = $this->resolveValue($context->find('image'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"/>
';
                $buffer .= $indent . '      <div class=\'name\'>Name: ';
                $value = $this->resolveValue($context->find('first_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('last_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '      <div class=\'email\'>Email: ';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '      <div class=\'company\'>At: ';
                $value = $this->resolveValue($context->find('company'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' </div>
';
                $buffer .= $indent . '      <div class=\'position\'>as ';
                $value = $this->resolveValue($context->find('position'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '      <div class=\'address\'>Address: ';
                $value = $this->resolveValue($context->find('address'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '      <div class=\'url\'>Website: ';
                $value = $this->resolveValue($context->find('url'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '      <div class=\'fax\'>Fax: ';
                $value = $this->resolveValue($context->find('fax'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '      <div class=\'phone\'>Phonenumber: ';
                $value = $this->resolveValue($context->find('phone'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '      <div class=\'description\'>A little about the user: ';
                $value = $this->resolveValue($context->find('description'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
