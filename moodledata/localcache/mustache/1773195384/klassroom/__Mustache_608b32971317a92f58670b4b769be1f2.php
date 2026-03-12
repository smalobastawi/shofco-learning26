<?php

class __Mustache_608b32971317a92f58670b4b769be1f2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_klassroom/blocks')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $context->find('displayslidersection');
        $buffer .= $this->section081a5ab360d87dcf4919bedc9e9fd4ed($context, $indent, $value);

        return $buffer;
    }

    private function sectionE1c2cf7a31f42b11c939450e3113688a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{slider1caption}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('slider1caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5878902534cb7c444ef694bcbfc974c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         {{{slider1heading}}}
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('slider1heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2707be43121cad7465ffc02c37b6d918(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{slider2caption}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('slider2caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bc701227d234fb631a17ae33f28db36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         {{{slider2heading}}}
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('slider2heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36a853bdd64ce1735931dfd673cdac6a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{slider3caption}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('slider3caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ff12bd983b92ad6469e9f72efe0b837(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         {{{slider3heading}}}
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('slider3heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb4c70a4792c7fac22aa468039707740(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{slider4caption}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('slider4caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3fb619706e70abbee1b721a05e113bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         {{{slider4heading}}}
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('slider4heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section081a5ab360d87dcf4919bedc9e9fd4ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!-- Start Slider Section -->
<div class="stage" dir="ltr">
   <div id="SLDR-ONE" class="sldr">
      <ul class="wrp animate">
         <li class="elmnt-one">
            <div class="skew">
               <div class="wrap"><img src="{{{slider1image}}}" width="1000" height="563"/></div>
            </div>
         </li>
         <li class="elmnt-two">
            <div class="skew">
               <div class="wrap"><img src="{{{slider2image}}}" width="1000" height="563"/></div>
            </div>
         </li>
         <li class="elmnt-three">
            <div class="skew">
               <div class="wrap"><img src="{{{slider3image}}}" width="1000" height="563"/></div>
            </div>
         </li>
         <li class="elmnt-four">
            <div class="skew">
               <div class="wrap"><img src="{{{slider4image}}}" width="1000" height="563"/></div>
            </div>
         </li>
      </ul>
   </div>
   <div class="clearfix"></div>
   <div class="captions">
      <div class="focalPoint">
         {{#slider1caption}}
         <p>{{{slider1caption}}}</p>
         {{/slider1caption}}
         {{#slider1heading}}
         {{{slider1heading}}}
         {{/slider1heading}}
      </div>
      <div>
         {{#slider2caption}}
         <p>{{{slider2caption}}}</p>
         {{/slider2caption}}
         {{#slider2heading}}
         {{{slider2heading}}}
         {{/slider2heading}}
      </div>
      <div>
         {{#slider3caption}}
         <p>{{{slider3caption}}}</p>
         {{/slider3caption}}
         {{#slider3heading}}
         {{{slider3heading}}}
         {{/slider3heading}}
      </div>
      <div>
         {{#slider4caption}}
         <p>{{{slider4caption}}}</p>
         {{/slider4caption}}
         {{#slider4heading}}
         {{{slider4heading}}}
         {{/slider4heading}}
      </div>
   </div>
   <button class="sldr-prv sldr-nav prev"></button>
   <button class="sldr-nxt sldr-nav next"></button>
</div>
<!-- End Slider Section -->
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<!-- Start Slider Section -->
';
                $buffer .= $indent . '<div class="stage" dir="ltr">
';
                $buffer .= $indent . '   <div id="SLDR-ONE" class="sldr">
';
                $buffer .= $indent . '      <ul class="wrp animate">
';
                $buffer .= $indent . '         <li class="elmnt-one">
';
                $buffer .= $indent . '            <div class="skew">
';
                $buffer .= $indent . '               <div class="wrap"><img src="';
                $value = $this->resolveValue($context->find('slider1image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" width="1000" height="563"/></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </li>
';
                $buffer .= $indent . '         <li class="elmnt-two">
';
                $buffer .= $indent . '            <div class="skew">
';
                $buffer .= $indent . '               <div class="wrap"><img src="';
                $value = $this->resolveValue($context->find('slider2image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" width="1000" height="563"/></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </li>
';
                $buffer .= $indent . '         <li class="elmnt-three">
';
                $buffer .= $indent . '            <div class="skew">
';
                $buffer .= $indent . '               <div class="wrap"><img src="';
                $value = $this->resolveValue($context->find('slider3image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" width="1000" height="563"/></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </li>
';
                $buffer .= $indent . '         <li class="elmnt-four">
';
                $buffer .= $indent . '            <div class="skew">
';
                $buffer .= $indent . '               <div class="wrap"><img src="';
                $value = $this->resolveValue($context->find('slider4image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" width="1000" height="563"/></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </li>
';
                $buffer .= $indent . '      </ul>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '   <div class="clearfix"></div>
';
                $buffer .= $indent . '   <div class="captions">
';
                $buffer .= $indent . '      <div class="focalPoint">
';
                $value = $context->find('slider1caption');
                $buffer .= $this->sectionE1c2cf7a31f42b11c939450e3113688a($context, $indent, $value);
                $value = $context->find('slider1heading');
                $buffer .= $this->section5878902534cb7c444ef694bcbfc974c9($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div>
';
                $value = $context->find('slider2caption');
                $buffer .= $this->section2707be43121cad7465ffc02c37b6d918($context, $indent, $value);
                $value = $context->find('slider2heading');
                $buffer .= $this->section8bc701227d234fb631a17ae33f28db36($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div>
';
                $value = $context->find('slider3caption');
                $buffer .= $this->section36a853bdd64ce1735931dfd673cdac6a($context, $indent, $value);
                $value = $context->find('slider3heading');
                $buffer .= $this->section8ff12bd983b92ad6469e9f72efe0b837($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div>
';
                $value = $context->find('slider4caption');
                $buffer .= $this->sectionDb4c70a4792c7fac22aa468039707740($context, $indent, $value);
                $value = $context->find('slider4heading');
                $buffer .= $this->sectionE3fb619706e70abbee1b721a05e113bc($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '   <button class="sldr-prv sldr-nav prev"></button>
';
                $buffer .= $indent . '   <button class="sldr-nxt sldr-nav next"></button>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '<!-- End Slider Section -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
