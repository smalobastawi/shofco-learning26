<?php

class __Mustache_d03f16d287c721b31440303c35f071e0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="container mb-3">
';
        $buffer .= $indent . '    <div class="potentialidps-header row">
';
        $buffer .= $indent . '        <h3>';
        $value = $context->find('str');
        $buffer .= $this->sectionC28678cbe2186ebe5c5b4b3b37290c0b($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="potentialidps row">
';
        $buffer .= $indent . '        <div class="potentialidplist">
';
        $value = $context->find('idps');
        $buffer .= $this->section40fe921335895b0f7506a48bec19b3a9($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC28678cbe2186ebe5c5b4b3b37290c0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'testidplogin, auth_oauth2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'testidplogin, auth_oauth2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1b5c6d8f52898e14cff6f40643f163b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{{iconurl}}}" alt="{{name}}" width="24" height="24" class="me-1"/>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="24" height="24" class="me-1"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40fe921335895b0f7506a48bec19b3a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="potentialidp mb-2 d-grid">
                <a class="btn btn-secondary" href="{{{url}}}" title="{{name}}">
                    {{#iconurl}}<img src="{{{iconurl}}}" alt="{{name}}" width="24" height="24" class="me-1"/>{{/iconurl}}
                    {{name}}
                </a>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="potentialidp mb-2 d-grid">
';
                $buffer .= $indent . '                <a class="btn btn-secondary" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('iconurl');
                $buffer .= $this->sectionB1b5c6d8f52898e14cff6f40643f163b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
