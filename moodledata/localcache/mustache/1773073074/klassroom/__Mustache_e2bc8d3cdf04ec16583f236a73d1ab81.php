<?php

class __Mustache_e2bc8d3cdf04ec16583f236a73d1ab81 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Block Section -->
';
        $buffer .= $indent . '<div class="block-section float-left">
';
        $buffer .= $indent . '   <input type="checkbox" id="navigation1" />
';
        $buffer .= $indent . '   <label for="navigation1" class="slideblocklabel"><i class="fa fa-cogs"></i></label>
';
        $buffer .= $indent . '   <nav class="slideblock">
';
        $buffer .= $indent . '      <section class="slideblock-con">
';
        $value = $context->find('blockcustombutton');
        $buffer .= $this->section8ea16d3c780729503e05e6d028bf38e2($context, $indent, $value);
        $buffer .= $indent . '         <h4 class="links">';
        $value = $this->resolveValue($context->find('blockheading'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '         <p class="links-con">';
        $value = $this->resolveValue($context->find('blocktagline'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '         <hr/>
';
        $buffer .= $indent . '      </section>
';
        $buffer .= $indent . '      <div class="columnleft blockcolumn ';
        $value = $context->find('haspreblocks');
        $buffer .= $this->section9dbb0ca02ae072baa8426d7e0018967a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '         <section data-region="blocks-column" class="hidden-print" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '         </section>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="columnright blockcolumn ';
        $value = $context->find('haspostblocks');
        $buffer .= $this->section9dbb0ca02ae072baa8426d7e0018967a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '         <section data-region="blocks-column" class="hidden-print" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('sidepostblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '         </section>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '   </nav>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- End Block Section -->
';

        return $buffer;
    }

    private function section8ea16d3c780729503e05e6d028bf38e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <a class="link-buy" href="{{{blockcustombuttonurl}}}" title="{{{blockcustombutton}}}"><i class="fa fa-shopping-cart"></i>{{{blockcustombutton}}}</a>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <a class="link-buy" href="';
                $value = $this->resolveValue($context->find('blockcustombuttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('blockcustombutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-shopping-cart"></i>';
                $value = $this->resolveValue($context->find('blockcustombutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dbb0ca02ae072baa8426d7e0018967a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' has-blocks ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' has-blocks ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
