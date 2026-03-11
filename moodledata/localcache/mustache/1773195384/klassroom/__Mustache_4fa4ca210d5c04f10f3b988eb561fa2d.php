<?php

class __Mustache_4fa4ca210d5c04f10f3b988eb561fa2d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Project Section -->
';
        $value = $context->find('displayprojectsection');
        $buffer .= $this->section7cc0bf467042a8eee946c2a081b10390($context, $indent, $value);
        $buffer .= $indent . '<!-- End Project Section -->
';

        return $buffer;
    }

    private function sectionF9d8c46ed4c33e2749432555050865d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <h6>{{{projecttagline}}}</h6>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <h6>';
                $value = $this->resolveValue($context->find('projecttagline'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd8cf790568d36a727e3723c82299a7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <h2>{{{projectheading}}}</h2>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <h2>';
                $value = $this->resolveValue($context->find('projectheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD34a33a3210966717c12a5a9f074fd76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h3>{{{project1title}}}</h3>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h3>';
                $value = $this->resolveValue($context->find('project1title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section964cc7b0887c2bbebe667944ceeea081(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p>{{{project1description}}}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('project1description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e435e1865f298705bc80318f58b8307(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{project1readmoreurl}}}">{{{project1readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('project1readmoreurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('project1readmore'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section470b88f179ee38ec7ff553ae9063a26f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
            {{#project1title}}
            <h3>{{{project1title}}}</h3>
            {{/project1title}}
            {{#project1description}}
            <p>{{{project1description}}}</p>
            {{/project1description}}
            {{#project1readmore}}
            <a href="{{{project1readmoreurl}}}">{{{project1readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            {{/project1readmore}}
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
';
                $value = $context->find('project1title');
                $buffer .= $this->sectionD34a33a3210966717c12a5a9f074fd76($context, $indent, $value);
                $value = $context->find('project1description');
                $buffer .= $this->section964cc7b0887c2bbebe667944ceeea081($context, $indent, $value);
                $value = $context->find('project1readmore');
                $buffer .= $this->section8e435e1865f298705bc80318f58b8307($context, $indent, $value);
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63e8275998c6b47f4644351d254c0a18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h3>{{{project2title}}}</h3>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h3>';
                $value = $this->resolveValue($context->find('project2title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC651f149e98f8c165b7c96703cf83c81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p>{{{project2description}}}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('project2description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d549333dfb340ce34d8ff4b63fd68f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{project2readmoreurl}}}">{{{project2readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('project2readmoreurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('project2readmore'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37172689cdd136a470d930987c82f1c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
            {{#project2title}}
            <h3>{{{project2title}}}</h3>
            {{/project2title}}
            {{#project2description}}
            <p>{{{project2description}}}</p>
            {{/project2description}}
            {{#project2readmore}}
            <a href="{{{project2readmoreurl}}}">{{{project2readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            {{/project2readmore}}
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
';
                $value = $context->find('project2title');
                $buffer .= $this->section63e8275998c6b47f4644351d254c0a18($context, $indent, $value);
                $value = $context->find('project2description');
                $buffer .= $this->sectionC651f149e98f8c165b7c96703cf83c81($context, $indent, $value);
                $value = $context->find('project2readmore');
                $buffer .= $this->section2d549333dfb340ce34d8ff4b63fd68f6($context, $indent, $value);
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52c0f8d3c1e3288193bf9bd8cb0cc4f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h3>{{{project3title}}}</h3>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h3>';
                $value = $this->resolveValue($context->find('project3title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe2b347c3eab9adcac1a168d2bf8c986(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p>{{{project3description}}}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('project3description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03545f35f168c638a694f73df1cbed67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{project3readmoreurl}}}">{{{project3readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('project3readmoreurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('project3readmore'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA367af6217fb0bd8cb46ee85a8d041a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
            {{#project3title}}
            <h3>{{{project3title}}}</h3>
            {{/project3title}}
            {{#project3description}}
            <p>{{{project3description}}}</p>
            {{/project3description}}
            {{#project3readmore}}
            <a href="{{{project3readmoreurl}}}">{{{project3readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            {{/project3readmore}}
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
';
                $value = $context->find('project3title');
                $buffer .= $this->section52c0f8d3c1e3288193bf9bd8cb0cc4f1($context, $indent, $value);
                $value = $context->find('project3description');
                $buffer .= $this->sectionBe2b347c3eab9adcac1a168d2bf8c986($context, $indent, $value);
                $value = $context->find('project3readmore');
                $buffer .= $this->section03545f35f168c638a694f73df1cbed67($context, $indent, $value);
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7cc0bf467042a8eee946c2a081b10390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="projects">
   <div class="container">
      {{#projecttagline}}
      <h6>{{{projecttagline}}}</h6>
      {{/projecttagline}}
      {{#projectheading}}
      <h2>{{{projectheading}}}</h2>
      {{/projectheading}}
      <div class="row">
         {{#displayproject1box}}
         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
            {{#project1title}}
            <h3>{{{project1title}}}</h3>
            {{/project1title}}
            {{#project1description}}
            <p>{{{project1description}}}</p>
            {{/project1description}}
            {{#project1readmore}}
            <a href="{{{project1readmoreurl}}}">{{{project1readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            {{/project1readmore}}
         </div>
         {{/displayproject1box}}
         {{#displayproject2box}}
         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
            {{#project2title}}
            <h3>{{{project2title}}}</h3>
            {{/project2title}}
            {{#project2description}}
            <p>{{{project2description}}}</p>
            {{/project2description}}
            {{#project2readmore}}
            <a href="{{{project2readmoreurl}}}">{{{project2readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            {{/project2readmore}}
         </div>
         {{/displayproject2box}}
         {{#displayproject3box}}
         <div class="col-lg-4 col-md-4 col-sm-12 cus hvr-float-shadow">
            {{#project3title}}
            <h3>{{{project3title}}}</h3>
            {{/project3title}}
            {{#project3description}}
            <p>{{{project3description}}}</p>
            {{/project3description}}
            {{#project3readmore}}
            <a href="{{{project3readmoreurl}}}">{{{project3readmore}}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            {{/project3readmore}}
         </div>
         {{/displayproject3box}}
         <div class="col-lg-12 col-md-12 col-sm-12 full">
            <a href="#"><img src="{{{projectaddbanner}}}" /></a>
         </div>
         <div class="clearfix"></div>
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
                
                $buffer .= $indent . '<div class="projects">
';
                $buffer .= $indent . '   <div class="container">
';
                $value = $context->find('projecttagline');
                $buffer .= $this->sectionF9d8c46ed4c33e2749432555050865d5($context, $indent, $value);
                $value = $context->find('projectheading');
                $buffer .= $this->sectionEd8cf790568d36a727e3723c82299a7b($context, $indent, $value);
                $buffer .= $indent . '      <div class="row">
';
                $value = $context->find('displayproject1box');
                $buffer .= $this->section470b88f179ee38ec7ff553ae9063a26f($context, $indent, $value);
                $value = $context->find('displayproject2box');
                $buffer .= $this->section37172689cdd136a470d930987c82f1c2($context, $indent, $value);
                $value = $context->find('displayproject3box');
                $buffer .= $this->sectionA367af6217fb0bd8cb46ee85a8d041a9($context, $indent, $value);
                $buffer .= $indent . '         <div class="col-lg-12 col-md-12 col-sm-12 full">
';
                $buffer .= $indent . '            <a href="#"><img src="';
                $value = $this->resolveValue($context->find('projectaddbanner'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" /></a>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="clearfix"></div>
';
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
