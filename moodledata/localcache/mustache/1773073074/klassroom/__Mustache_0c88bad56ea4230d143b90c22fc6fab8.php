<?php

class __Mustache_0c88bad56ea4230d143b90c22fc6fab8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Announcement Section -->
';
        $value = $context->find('displayannouncementsection');
        $buffer .= $this->sectionF3dfbf5e5c900a9ad90cf62b87aaacbd($context, $indent, $value);
        $buffer .= $indent . '<!-- End Announcement Section -->
';

        return $buffer;
    }

    private function section23be99db559cc97cd06cc510fd86e031(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <h2>{{{announcementheading}}}</h2>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <h2>';
                $value = $this->resolveValue($context->find('announcementheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8d2559240c5849d759d8c69e55ae634(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{announcementtagline}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('announcementtagline'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section746d5b2291fb33d5bfccec21388f2432(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <a href="{{{buttonreadmoreurl}}}" title="Read more" target="_blank" class="btn btn-lg">{{{buttonreadmore}}}</a>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <a href="';
                $value = $this->resolveValue($context->find('buttonreadmoreurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="Read more" target="_blank" class="btn btn-lg">';
                $value = $this->resolveValue($context->find('buttonreadmore'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2210b85c648d68d8174310e77a06923(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <a href="{{{buttonbuynowurl}}}" title="Buy now" target="_blank" class="btn primary btn-lg">{{{buttonbuynow}}}</a>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <a href="';
                $value = $this->resolveValue($context->find('buttonbuynowurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="Buy now" target="_blank" class="btn primary btn-lg">';
                $value = $this->resolveValue($context->find('buttonbuynow'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3dfbf5e5c900a9ad90cf62b87aaacbd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="announcement">
   <div class="container">
      <div class="content">
         {{#announcementheading}}
         <h2>{{{announcementheading}}}</h2>
         {{/announcementheading}}
         {{#announcementtagline}}
         <p>{{{announcementtagline}}}</p>
         {{/announcementtagline}}
      </div>
      <div class="con-buttons">
         {{#buttonreadmore}}
         <a href="{{{buttonreadmoreurl}}}" title="Read more" target="_blank" class="btn btn-lg">{{{buttonreadmore}}}</a>
         {{/buttonreadmore}}
         {{#buttonbuynow}}
         <a href="{{{buttonbuynowurl}}}" title="Buy now" target="_blank" class="btn primary btn-lg">{{{buttonbuynow}}}</a>
         {{/buttonbuynow}}
      </div>
   </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="announcement">
';
                $buffer .= $indent . '   <div class="container">
';
                $buffer .= $indent . '      <div class="content">
';
                $value = $context->find('announcementheading');
                $buffer .= $this->section23be99db559cc97cd06cc510fd86e031($context, $indent, $value);
                $value = $context->find('announcementtagline');
                $buffer .= $this->sectionC8d2559240c5849d759d8c69e55ae634($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="con-buttons">
';
                $value = $context->find('buttonreadmore');
                $buffer .= $this->section746d5b2291fb33d5bfccec21388f2432($context, $indent, $value);
                $value = $context->find('buttonbuynow');
                $buffer .= $this->sectionB2210b85c648d68d8174310e77a06923($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
