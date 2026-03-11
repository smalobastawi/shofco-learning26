<?php

class __Mustache_bfbb59bf4215cc0cc6f39a35472a98ba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('enablecategoryimage');
        $buffer .= $this->section8b5336a41e039aaeff23fda8b8d1bbaf($context, $indent, $value);
        $value = $context->find('enablecategoryimage');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="defaultcategories">
';
            $buffer .= $indent . '   <div class="container">
';
            $buffer .= $indent . '   </div>
';
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section8b5336a41e039aaeff23fda8b8d1bbaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="customcategories"></div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="customcategories"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
