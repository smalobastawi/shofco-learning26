<?php

class __Mustache_01d81ce026a6ea19ed350a2ca2a4d675 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Academic Section -->
';
        $value = $context->find('displaywelcomesection');
        $buffer .= $this->section9fd759532aa2ff2b24701319449d627f($context, $indent, $value);
        $buffer .= $indent . '<!-- End Academic Section -->
';

        return $buffer;
    }

    private function sectionEd772cd04eb872d7a8cdba083e824229(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h6>{{{welcometagline}}}</h6>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h6>';
                $value = $this->resolveValue($context->find('welcometagline'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c670924d287cc1b90442c11a5b58936(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h1>{{{welcomeheading}}}</h1>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h1>';
                $value = $this->resolveValue($context->find('welcomeheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf26203890401fbda3de283f0c230c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p>{{{welcomedescription}}}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('welcomedescription'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf1ba18433bbf9cd84acf4c13f322bf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item_featured">
               <span class="item_number">1</span>  
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="{{{welcomelistoneurl}}}">{{{welcomelistone}}}</a></h4>
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
                
                $buffer .= $indent . '            <div class="item_featured">
';
                $buffer .= $indent . '               <span class="item_number">1</span>  
';
                $buffer .= $indent . '               <div class="item_info">
';
                $buffer .= $indent . '                  <div class="item_header">
';
                $buffer .= $indent . '                     <h4 class="item_title"><a href="';
                $value = $this->resolveValue($context->find('welcomelistoneurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('welcomelistone'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h4>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18e3608d9fb1e9923e0b29895a3757d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item_featured">
               <span class="item_number">2</span>  
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="{{{welcomelisttwourl}}}">{{{welcomelisttwo}}}</a></h4>
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
                
                $buffer .= $indent . '            <div class="item_featured">
';
                $buffer .= $indent . '               <span class="item_number">2</span>  
';
                $buffer .= $indent . '               <div class="item_info">
';
                $buffer .= $indent . '                  <div class="item_header">
';
                $buffer .= $indent . '                     <h4 class="item_title"><a href="';
                $value = $this->resolveValue($context->find('welcomelisttwourl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('welcomelisttwo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h4>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section354a5b58b460ddc6ebf61936fb15c022(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item_featured">
               <span class="item_number">3</span>  
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="{{{welcomelistthreeurl}}}">{{{welcomelistthree}}}</a></h4>
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
                
                $buffer .= $indent . '            <div class="item_featured">
';
                $buffer .= $indent . '               <span class="item_number">3</span>  
';
                $buffer .= $indent . '               <div class="item_info">
';
                $buffer .= $indent . '                  <div class="item_header">
';
                $buffer .= $indent . '                     <h4 class="item_title"><a href="';
                $value = $this->resolveValue($context->find('welcomelistthreeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('welcomelistthree'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h4>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fd759532aa2ff2b24701319449d627f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="welcome">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 col-md-7 col-sm-12 welcome-content">
            {{#welcometagline}}
            <h6>{{{welcometagline}}}</h6>
            {{/welcometagline}}
            {{#welcomeheading}}
            <h1>{{{welcomeheading}}}</h1>
            {{/welcomeheading}}
            {{#welcomedescription}}
            <p>{{{welcomedescription}}}</p>
            {{/welcomedescription}}
            {{#welcomelistone}}
            <div class="item_featured">
               <span class="item_number">1</span>  
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="{{{welcomelistoneurl}}}">{{{welcomelistone}}}</a></h4>
                  </div>
               </div>
            </div>
            {{/welcomelistone}}
            {{#welcomelisttwo}}
            <div class="item_featured">
               <span class="item_number">2</span>  
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="{{{welcomelisttwourl}}}">{{{welcomelisttwo}}}</a></h4>
                  </div>
               </div>
            </div>
            {{/welcomelisttwo}}
            {{#welcomelistthree}}
            <div class="item_featured">
               <span class="item_number">3</span>  
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="{{{welcomelistthreeurl}}}">{{{welcomelistthree}}}</a></h4>
                  </div>
               </div>
            </div>
            {{/welcomelistthree}}
         </div>
         <div class="col-lg-5 col-md-5 col-sm-12 welcome-image"><img class="img-responsive" src="{{wwwroot}}./theme/klassroom/pix/welcomebg.png" alt="" /></div>
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
                
                $buffer .= $indent . '<div class="welcome">
';
                $buffer .= $indent . '   <div class="container">
';
                $buffer .= $indent . '      <div class="row">
';
                $buffer .= $indent . '         <div class="col-lg-7 col-md-7 col-sm-12 welcome-content">
';
                $value = $context->find('welcometagline');
                $buffer .= $this->sectionEd772cd04eb872d7a8cdba083e824229($context, $indent, $value);
                $value = $context->find('welcomeheading');
                $buffer .= $this->section2c670924d287cc1b90442c11a5b58936($context, $indent, $value);
                $value = $context->find('welcomedescription');
                $buffer .= $this->sectionBf26203890401fbda3de283f0c230c3a($context, $indent, $value);
                $value = $context->find('welcomelistone');
                $buffer .= $this->sectionFf1ba18433bbf9cd84acf4c13f322bf1($context, $indent, $value);
                $value = $context->find('welcomelisttwo');
                $buffer .= $this->section18e3608d9fb1e9923e0b29895a3757d0($context, $indent, $value);
                $value = $context->find('welcomelistthree');
                $buffer .= $this->section354a5b58b460ddc6ebf61936fb15c022($context, $indent, $value);
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="col-lg-5 col-md-5 col-sm-12 welcome-image"><img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= './theme/klassroom/pix/welcomebg.png" alt="" /></div>
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
