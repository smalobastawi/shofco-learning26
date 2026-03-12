<?php

class __Mustache_bff736152a70c1fc1a218ac0a66119b6 extends Mustache_Template
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
        $buffer .= $indent . '   <div id="page">
';
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '      <!-- Start navigation -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End navigation -->
';
        $buffer .= $indent . '      <!-- Start Slider Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/slider')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Slider Section -->
';
        $buffer .= $indent . '      <!-- Start announcement Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/announcement')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End announcement Section -->
';
        $buffer .= $indent . '      <!-- Start Welcome Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/welcome')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Welcome Section -->
';
        $buffer .= $indent . '      <!-- Start Category Section-->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/categories')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Category Section-->
';
        $buffer .= $indent . '      <!-- Start Custom Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/customsection')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Custom Section -->
';
        $buffer .= $indent . '      <!-- Start Search Courses Section -->
';
        $buffer .= $indent . '      <div class="searchcourses">
';
        $buffer .= $indent . '         <div class="container">
';
        $buffer .= $indent . '             <div class="form-wrapper">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <!-- End Search Courses Section -->  
';
        $buffer .= $indent . '      <!-- Start All Courses Section -->
';
        $buffer .= $indent . '      <div id="allcourses">
';
        $buffer .= $indent . '         <div class="container">
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <!-- End All Courses Section -->
';
        $buffer .= $indent . '      <!-- Start Site Announcements Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/sitenews')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Site Announcements Section -->
';
        $buffer .= $indent . '      <!-- Start Marketing section -->
';
        $value = $context->find('displaymarketingsection');
        $buffer .= $this->section76aed1b55f5994a4d7866f73b6b53adf($context, $indent, $value);
        $buffer .= $indent . '      <!-- End Marketing section -->
';
        $buffer .= $indent . '      <!-- Start Enrolled Courses section -->    
';
        $buffer .= $indent . '      <div id="enrolledcourses">
';
        $buffer .= $indent . '         <div class="container">
';
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <!-- End Enrolled Courses section -->
';
        $buffer .= $indent . '      <!-- Start Events Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/events')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Events Section -->
';
        $buffer .= $indent . '      <!-- Start Project Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/projects')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Project Section -->
';
        $buffer .= $indent . '      <!-- Start Photo Gallery Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/photogallery')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Photo Gallery Section -->
';
        $buffer .= $indent . '      <!-- Start Tutors Section -->
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/tutors')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <!-- End Tutors Section -->
';
        $buffer .= $indent . '      <div id="page-content">
';
        $buffer .= $indent . '         <div class="container">
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
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_klassroom/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '   </div>
';
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

    private function section7c4e91c82289c10b210478f7d5e2784a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h3>{{{marketingheading}}}</h3>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h3>';
                $value = $this->resolveValue($context->find('marketingheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76aed1b55f5994a4d7866f73b6b53adf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="marketingsection">
         <div class="container">
            {{#marketingheading}}
            <h3>{{{marketingheading}}}</h3>
            {{/marketingheading}}
         </div>
      </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <div class="marketingsection">
';
                $buffer .= $indent . '         <div class="container">
';
                $value = $context->find('marketingheading');
                $buffer .= $this->section7c4e91c82289c10b210478f7d5e2784a($context, $indent, $value);
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '      </div>
';
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
