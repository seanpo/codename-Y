<?php

class __Mustache_e63af9d64b38f77a3523c9d4b51a8615 extends Mustache_Template
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
        $buffer .= $this->sectionB23410e70b2b514d958902c0358038be($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id=\'infobox\' hidden>
';
        // 'users' section
        $buffer .= $this->section78473578981d1519410e831d6b75e630($context, $indent, $context->find('users'));
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB23410e70b2b514d958902c0358038be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="{{id}}" class="user pointerCursor" location="{{location}}" image="{{image}}">
      <div class="name">
        <p>{{first_name}} {{last_name}}</p>
      </div>
      <div class="email">
        <p>Email: {{email}}</p>
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
                $buffer .= $indent . '      <div class="email">
';
                $buffer .= $indent . '        <p>Email: ';
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

    private function section28cc9ee952a36aab38034ae674e01b1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class=\'company\'><p>At: {{company}} as {{position}}</p></div>
          ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '            <div class=\'company\'><p>At: ';
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

    private function section6c346a7ef42cc38cd900fb673ccb797c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          {{#position}}
            <div class=\'company\'><p>At: {{company}} as {{position}}</p></div>
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
                $buffer .= $this->section28cc9ee952a36aab38034ae674e01b1d($context, $indent, $context->find('position'));
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

    private function section05e7b697f27d3cd86f31997ee60557b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class=\'description\'><p>A little about the user: {{description}}</p></div>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '          <div class=\'description\'><p>A little about the user: ';
                $value = $this->resolveValue($context->find('description'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78473578981d1519410e831d6b75e630(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id=\'{{id}}_infobox\'> 
      <div class="infobox">
        <img class=\'avatar\' src="{{image}}"/>
        <div class=\'name\'><p>Name: {{first_name}} {{last_name}}</p></div>
        <div class=\'email\'><p>Email: {{email}}</p></div>
        {{#company}}
          {{#position}}
            <div class=\'company\'><p>At: {{company}} as {{position}}</p></div>
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
          <div class=\'description\'><p>A little about the user: {{description}}</p></div>
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
                $buffer .= $indent . '        <div class=\'email\'><p>Email: ';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p></div>
';
                // 'company' section
                $buffer .= $this->section6c346a7ef42cc38cd900fb673ccb797c($context, $indent, $context->find('company'));
                // 'address' section
                $buffer .= $this->sectionC4ecea6d592b157d49560ecd6fcc8429($context, $indent, $context->find('address'));
                // 'url' section
                $buffer .= $this->section00a50a8ad69f576551e023b23c3af65b($context, $indent, $context->find('url'));
                // 'fax' section
                $buffer .= $this->sectionFb6f5690137c2c952ac16b4defd081f1($context, $indent, $context->find('fax'));
                // 'phone' section
                $buffer .= $this->section03e7c577ed2d5381f18b445f03f268a6($context, $indent, $context->find('phone'));
                // 'description' section
                $buffer .= $this->section05e7b697f27d3cd86f31997ee60557b3($context, $indent, $context->find('description'));
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
