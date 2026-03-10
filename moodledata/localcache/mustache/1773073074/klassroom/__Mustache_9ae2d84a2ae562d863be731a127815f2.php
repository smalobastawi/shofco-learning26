<?php

class __Mustache_9ae2d84a2ae562d863be731a127815f2 extends Mustache_Template
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
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->sectionBdd0dac6025cb051d3868210927e937f($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    <table class="table">
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->sectionC20be49098ffc5fd0ed8a5f3a6dcb09e($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section68992a10d20e4364ee27c4fe50a8fd19($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody>
';
        $value = $context->find('pairs');
        $buffer .= $this->section357d15a14026c4138db3b34e6b15d6d2($context, $indent, $value);
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBdd0dac6025cb051d3868210927e937f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userinfo, auth_oauth2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userinfo, auth_oauth2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC20be49098ffc5fd0ed8a5f3a6dcb09e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'key, auth_oauth2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'key, auth_oauth2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68992a10d20e4364ee27c4fe50a8fd19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'value, auth_oauth2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'value, auth_oauth2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section357d15a14026c4138db3b34e6b15d6d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr>
                <td>{{name}}</td>
                <td>{{{value}}}</td>
            </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <td>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td>';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
