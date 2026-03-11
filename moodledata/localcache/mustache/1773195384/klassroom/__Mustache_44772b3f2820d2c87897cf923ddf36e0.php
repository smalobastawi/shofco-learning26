<?php

class __Mustache_44772b3f2820d2c87897cf923ddf36e0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Custom Section -->
';
        $value = $context->find('displaycustomsection');
        $buffer .= $this->sectionB0718fe0de42275b1a7c1ae0a5004632($context, $indent, $value);
        $buffer .= $indent . '<!-- End Custom Section -->
';

        return $buffer;
    }

    private function section1a0e349c7d81e3fb6c79a6f12150b4c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <h5>{{{custombox1heading}}}</h5>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <h5>';
                $value = $this->resolveValue($context->find('custombox1heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section538374f4c4c8715425457a66c597fee8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{custombox1description}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('custombox1description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF007c6f7dd3d6c1ffa43148ac4e9c572(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <h5>{{{custombox2heading}}}</h5>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <h5>';
                $value = $this->resolveValue($context->find('custombox2heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section701a6164a1bd95466e1e087245391f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{custombox2description}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('custombox2description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF64931828a16f56451ca15370c625f70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <h5>{{{custombox3heading}}}</h5>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <h5>';
                $value = $this->resolveValue($context->find('custombox3heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2655c6b8954496f66f07eacc7c21ffe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{custombox3description}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('custombox3description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3764571172bd7feb0d3479fc5d109119(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <h5>{{{custombox4heading}}}</h5>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <h5>';
                $value = $this->resolveValue($context->find('custombox4heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE422f22ff08a95d91868f2f260fc9fe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <p>{{{custombox4description}}}</p>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <p>';
                $value = $this->resolveValue($context->find('custombox4description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0718fe0de42275b1a7c1ae0a5004632(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section class="customsection container-fluid">
   <div class="row">
      <article class="col-lg-3 col-md-6 col-sm-12 box">
         <i class="fa fa-pencil-square-o"></i>
         {{#custombox1heading}}
         <h5>{{{custombox1heading}}}</h5>
         {{/custombox1heading}}
         {{#custombox1description}}
         <p>{{{custombox1description}}}</p>
         {{/custombox1description}}
      </article>
      <article class="col-lg-3 col-md-6 col-sm-12 box">
         <i class="fa fa-clock-o"></i>
         {{#custombox2heading}}
         <h5>{{{custombox2heading}}}</h5>
         {{/custombox2heading}}
         {{#custombox2description}}
         <p>{{{custombox2description}}}</p>
         {{/custombox2description}}
      </article>
      <article class="col-lg-3 col-md-6 col-sm-12 box">
         <i class="fa fa-check-square-o"></i>
         {{#custombox3heading}}
         <h5>{{{custombox3heading}}}</h5>
         {{/custombox3heading}}
         {{#custombox3description}}
         <p>{{{custombox3description}}}</p>
         {{/custombox3description}}
      </article>
      <article class="col-lg-3 col-md-6 col-sm-12 box">
         <i class="fa fa-file-text-o"></i>
         {{#custombox4heading}}
         <h5>{{{custombox4heading}}}</h5>
         {{/custombox4heading}}
         {{#custombox4description}}
         <p>{{{custombox4description}}}</p>
         {{/custombox4description}}
      </article>
   </div>
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section class="customsection container-fluid">
';
                $buffer .= $indent . '   <div class="row">
';
                $buffer .= $indent . '      <article class="col-lg-3 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '         <i class="fa fa-pencil-square-o"></i>
';
                $value = $context->find('custombox1heading');
                $buffer .= $this->section1a0e349c7d81e3fb6c79a6f12150b4c2($context, $indent, $value);
                $value = $context->find('custombox1description');
                $buffer .= $this->section538374f4c4c8715425457a66c597fee8($context, $indent, $value);
                $buffer .= $indent . '      </article>
';
                $buffer .= $indent . '      <article class="col-lg-3 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '         <i class="fa fa-clock-o"></i>
';
                $value = $context->find('custombox2heading');
                $buffer .= $this->sectionF007c6f7dd3d6c1ffa43148ac4e9c572($context, $indent, $value);
                $value = $context->find('custombox2description');
                $buffer .= $this->section701a6164a1bd95466e1e087245391f98($context, $indent, $value);
                $buffer .= $indent . '      </article>
';
                $buffer .= $indent . '      <article class="col-lg-3 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '         <i class="fa fa-check-square-o"></i>
';
                $value = $context->find('custombox3heading');
                $buffer .= $this->sectionF64931828a16f56451ca15370c625f70($context, $indent, $value);
                $value = $context->find('custombox3description');
                $buffer .= $this->sectionA2655c6b8954496f66f07eacc7c21ffe($context, $indent, $value);
                $buffer .= $indent . '      </article>
';
                $buffer .= $indent . '      <article class="col-lg-3 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '         <i class="fa fa-file-text-o"></i>
';
                $value = $context->find('custombox4heading');
                $buffer .= $this->section3764571172bd7feb0d3479fc5d109119($context, $indent, $value);
                $value = $context->find('custombox4description');
                $buffer .= $this->sectionE422f22ff08a95d91868f2f260fc9fe4($context, $indent, $value);
                $buffer .= $indent . '      </article>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
