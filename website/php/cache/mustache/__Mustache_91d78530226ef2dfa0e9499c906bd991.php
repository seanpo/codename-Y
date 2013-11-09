<?php

class __Mustache_91d78530226ef2dfa0e9499c906bd991 extends Mustache_Template
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
        $buffer .= $this->section48df89abfa809442ecf0712a08a07995($context, $indent, $context->find('users'));
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

    private function section48df89abfa809442ecf0712a08a07995(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id=\'{{id}}_infobox\'> 
      <div class="infobox">
        <img class=\'avatar\' src="{{image}}"/>
        <div class=\'name\'><p>Name: {{first_name}} {{last_name}}</p></div>
        <div class=\'email\'><p>Email: {{email}}</p></div>
        <div class=\'company\'><p>At: {{company}} as {{position}}</p></div>
        <div class=\'address\'><p>Address: {{address}}</p></div>
        <div class=\'url\'><p>Website: {{url}}</p></div>
        <div class=\'fax\'><p>Fax: {{fax}}</p></div>
        <div class=\'phone\'><p>Phonenumber: {{phone}}</p></div>
        <div class=\'description\'><p>A little about the user: {{description}}</p></div>
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
                $buffer .= $indent . '    <div id=\'';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '_infobox\'> 
';
                $buffer .= $indent . '      <div class="infobox">
';
                $buffer .= $indent . '        <img class=\'avatar\' src="';
                $value = $this->resolveValue($context->find('image'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"/>
';
                $buffer .= $indent . '        <div class=\'name\'><p>Name: ';
                $value = $this->resolveValue($context->find('first_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('last_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $buffer .= $indent . '        <div class=\'email\'><p>Email: ';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $buffer .= $indent . '        <div class=\'company\'><p>At: ';
                $value = $this->resolveValue($context->find('company'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' as ';
                $value = $this->resolveValue($context->find('position'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $buffer .= $indent . '        <div class=\'address\'><p>Address: ';
                $value = $this->resolveValue($context->find('address'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $buffer .= $indent . '        <div class=\'url\'><p>Website: ';
                $value = $this->resolveValue($context->find('url'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $buffer .= $indent . '        <div class=\'fax\'><p>Fax: ';
                $value = $this->resolveValue($context->find('fax'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $buffer .= $indent . '        <div class=\'phone\'><p>Phonenumber: ';
                $value = $this->resolveValue($context->find('phone'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $buffer .= $indent . '        <div class=\'description\'><p>A little about the user: ';
                $value = $this->resolveValue($context->find('description'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
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
