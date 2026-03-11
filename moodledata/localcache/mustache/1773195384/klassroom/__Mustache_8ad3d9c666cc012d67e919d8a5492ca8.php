<?php

class __Mustache_8ad3d9c666cc012d67e919d8a5492ca8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_klassroom/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '   ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '   <div id="page">
';
        $buffer .= $indent . '      <!-- Start navigation -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End navigation -->
';
        $buffer .= $indent . '      <!-- Start Full-header -->
';
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '      <!-- End Full-header -->
';
        $buffer .= $indent . '      <div class="container-fluid container-wrapper">
';
        $buffer .= $indent . '         <div id="page-content" class="row ';
        $value = $context->find('haspreblocks');
        $buffer .= $this->section1d781ad00d0e7486459d29993bbe7f90($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('haspostblocks');
        $buffer .= $this->sectionD126f03b1c1c0b007cff8f827505e60c($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <div id="region-main-box" class="region-main">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section07dd2939e493536e616b97ef78a4a982($context, $indent, $value);
        $buffer .= $indent . '               <section id="region-main" class="region-main-content" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section000db7fbd29e2c81bdf70605a162ed87($context, $indent, $value);
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->sectionCcc7d02cd495f7b7820d57cc5a74e891($context, $indent, $value);
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '               </section>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="columnleft blockcolumn ';
        $value = $context->find('haspreblocks');
        $buffer .= $this->section9dbb0ca02ae072baa8426d7e0018967a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '               <section data-region="blocks-column" class="hidden-print" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '               </section>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="columnright blockcolumn ';
        $value = $context->find('haspostblocks');
        $buffer .= $this->section9dbb0ca02ae072baa8426d7e0018967a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '               <section data-region="blocks-column" class="hidden-print" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->find('sidepostblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '               </section>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '   ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '   ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->sectionCbf1d2baccd2f79150ae007da2e24b31($context, $indent, $value);

        return $buffer;
    }

    private function section1d781ad00d0e7486459d29993bbe7f90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' blocks-pre ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' blocks-pre ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD126f03b1c1c0b007cff8f827505e60c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' blocks-post ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' blocks-post ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07dd2939e493536e616b97ef78a4a982(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div id="region-main-settings-menu" class="d-print-none {{#hasblocks}}has-blocks{{/hasblocks}}">
                  <div> {{{ output.region_main_settings_menu }}} </div>
               </div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div id="region-main-settings-menu" class="d-print-none ';
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                  <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '               </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section000db7fbd29e2c81bdf70605a162ed87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div class="region_main_settings_menu_proxy"></div>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcc7d02cd495f7b7820d57cc5a74e891(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/activity_header }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
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

    private function sectionCbf1d2baccd2f79150ae007da2e24b31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
