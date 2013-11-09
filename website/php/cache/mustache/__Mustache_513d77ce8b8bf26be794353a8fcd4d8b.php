<?php

class __Mustache_513d77ce8b8bf26be794353a8fcd4d8b extends Mustache_Template
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
        $buffer .= $this->sectionA103629bca63605b5ee46d9094e321aa($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id=\'infobox\' hidden>
';
        // 'users' section
        $buffer .= $this->sectionFe7ddc6e5482b748d6a15e325d41119c($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA103629bca63605b5ee46d9094e321aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="{{id}}" class="user pointerCursor" location="{{location}}" image="{{image}}">
      <div class="name">
        <p>{{first_name}} {{last_name}}</p>
      </div>
      <div class="email pointerCursor">
        <p>{{email}}</p>
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
                $buffer .= '" class="user pointerCursor" location="';
                $value = $this->resolveValue($context->find('location'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '" image="';
                $value = $this->resolveValue($context->find('image'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">
';
                $buffer .= $indent . '      <div class="name">
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('first_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('last_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="email pointerCursor">
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p>
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

    private function section30241a884f3e890ffc058940321de462(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class=\'company\'><p>Working At: {{company}} as {{position}}</p></div>
          ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '            <div class=\'company\'><p>Working At: ';
                $value = $this->resolveValue($context->find('company'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' as ';
                $value = $this->resolveValue($context->find('position'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8037a72e4a74cefa5251d0d1b8cc4e51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          {{#position}}
            <div class=\'company\'><p>Working At: {{company}} as {{position}}</p></div>
          {{/position}}
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'position' section
                $buffer .= $this->section30241a884f3e890ffc058940321de462($context, $indent, $context->find('position'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4ecea6d592b157d49560ecd6fcc8429(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class=\'address\'><p>Address: {{address}}</p></div>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '          <div class=\'address\'><p>Address: ';
                $value = $this->resolveValue($context->find('address'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00a50a8ad69f576551e023b23c3af65b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class=\'url\'><p>Website: {{url}}</p></div>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '          <div class=\'url\'><p>Website: ';
                $value = $this->resolveValue($context->find('url'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb6f5690137c2c952ac16b4defd081f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class=\'fax\'><p>Fax: {{fax}}</p></div>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '          <div class=\'fax\'><p>Fax: ';
                $value = $this->resolveValue($context->find('fax'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03e7c577ed2d5381f18b445f03f268a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class=\'phone\'><p>Phonenumber: {{phone}}</p></div>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '          <div class=\'phone\'><p>Phonenumber: ';
                $value = $this->resolveValue($context->find('phone'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5381b4f30ab28ff2d688d78cbaea704b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class=\'description\'><p>A little about {{first_name}} {{last_name}}: {{description}}</p></div>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '          <div class=\'description\'><p>A little about ';
                $value = $this->resolveValue($context->find('first_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('last_name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('description'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe7ddc6e5482b748d6a15e325d41119c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id=\'{{id}}_infobox\'> 
      <div class="infobox">
        <img class=\'avatar\' src="{{image}}"/>
        <div class=\'name\'><p>Name: {{first_name}} {{last_name}}</p></div>
        <div class=\'email\'><p>Email: <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{email}}&tf=1">{{email}}</a></p></div>
        {{#company}}
          {{#position}}
            <div class=\'company\'><p>Working At: {{company}} as {{position}}</p></div>
          {{/position}}
        {{/company}}
        {{#address}}
          <div class=\'address\'><p>Address: {{address}}</p></div>
        {{/address}}
        {{#url}}
          <div class=\'url\'><p>Website: {{url}}</p></div>
        {{/url}}
        {{#fax}}
          <div class=\'fax\'><p>Fax: {{fax}}</p></div>
        {{/fax}}
        {{#phone}}
          <div class=\'phone\'><p>Phonenumber: {{phone}}</p></div>
        {{/phone}}
        {{#description}}
          <div class=\'description\'><p>A little about {{first_name}} {{last_name}}: {{description}}</p></div>
        {{/description}}
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
                $buffer .= $indent . '        <div class=\'email\'><p>Email: <a href="https://mail.google.com/mail/?view=cm&fs=1&to=';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '&tf=1">';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</a></p></div>
';
                // 'company' section
                $buffer .= $this->section8037a72e4a74cefa5251d0d1b8cc4e51($context, $indent, $context->find('company'));
                // 'address' section
                $buffer .= $this->sectionC4ecea6d592b157d49560ecd6fcc8429($context, $indent, $context->find('address'));
                // 'url' section
                $buffer .= $this->section00a50a8ad69f576551e023b23c3af65b($context, $indent, $context->find('url'));
                // 'fax' section
                $buffer .= $this->sectionFb6f5690137c2c952ac16b4defd081f1($context, $indent, $context->find('fax'));
                // 'phone' section
                $buffer .= $this->section03e7c577ed2d5381f18b445f03f268a6($context, $indent, $context->find('phone'));
                // 'description' section
                $buffer .= $this->section5381b4f30ab28ff2d688d78cbaea704b($context, $indent, $context->find('description'));
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
