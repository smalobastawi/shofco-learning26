<?php

class __Mustache_e041306d845b1237c11d8574a6271e7f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span>';
        $value = $this->resolveValue($context->find('reg'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>';

        return $buffer;
    }
}
