<?php

class __Mustache_ad69840b416fddff7ed9251bf4a69233 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start News section -->
';
        $buffer .= $indent . '<div id="news">
';
        $buffer .= $indent . '   <div class="container">
';
        $buffer .= $indent . '      <div class="row">
';
        $buffer .= $indent . '         <div class="news-col8 col-lg-8 col-md-12 col-sm-12">
';
        $buffer .= $indent . '         </div>
';
        $value = $context->find('displayfeaturedpostssection');
        $buffer .= $this->section1468ee76fc9ee408c90d2b1ac4c7c55f($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- End News section -->
';

        return $buffer;
    }

    private function section993ee26f10d13fdfd47b0696d0ceb17b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h6>{{{featuredposttagline}}}</h6>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h6>';
                $value = $this->resolveValue($context->find('featuredposttagline'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd7665cf3aea62097a3e708d94ed39cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h2>{{{featuredpostheading}}}</h2>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h2>';
                $value = $this->resolveValue($context->find('featuredpostheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ced90d55878a2d7976a428b88fa02fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h5><a href="{{{featuredposturl}}}">{{{featuredposttitle}}}</a></h5>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h5><a href="';
                $value = $this->resolveValue($context->find('featuredposturl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('featuredposttitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b94720e5f950a72b319044910e77c9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="tags">
            {{{featuredposttags}}}
            </span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="tags">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('featuredposttags'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40d8cdc64a9490531aac1c14763f7061(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="post_date"><i class="fa fa-clock-o"></i> {{{featuredpostdate}}}</span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="post_date"><i class="fa fa-clock-o"></i> ';
                $value = $this->resolveValue($context->find('featuredpostdate'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55b8cf371fc432d02b97b102aef4457b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p>{{{featuredpostdescription}}}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('featuredpostdescription'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a9a949961450aaa6f1feeb98757154b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{featuredpostbuttonurl}}}" class="btn btn-lg">{{{featuredpostbuttontext}}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('featuredpostbuttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-lg">';
                $value = $this->resolveValue($context->find('featuredpostbuttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1468ee76fc9ee408c90d2b1ac4c7c55f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="featuredpost-col4 col-lg-4 col-md-12 col-sm-12">
            {{#featuredposttagline}}
            <h6>{{{featuredposttagline}}}</h6>
            {{/featuredposttagline}}
            {{#featuredpostheading}}
            <h2>{{{featuredpostheading}}}</h2>
            {{/featuredpostheading}}
            <a href="{{{featuredposturl}}}"><img class="picture" src="{{{featuredpostimage}}}" alt="blog-image" /></a>
            {{#featuredposttitle}}
            <h5><a href="{{{featuredposturl}}}">{{{featuredposttitle}}}</a></h5>
            {{/featuredposttitle}}
            {{#featuredposttags}}
            <span class="tags">
            {{{featuredposttags}}}
            </span>
            {{/featuredposttags}}
            {{#featuredpostdate}}
            <span class="post_date"><i class="fa fa-clock-o"></i> {{{featuredpostdate}}}</span>
            {{/featuredpostdate}}
            {{#featuredpostdescription}}
            <p>{{{featuredpostdescription}}}</p>
            {{/featuredpostdescription}}
            {{#featuredpostbuttontext}}
            <a href="{{{featuredpostbuttonurl}}}" class="btn btn-lg">{{{featuredpostbuttontext}}}</a>
            {{/featuredpostbuttontext}}
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="featuredpost-col4 col-lg-4 col-md-12 col-sm-12">
';
                $value = $context->find('featuredposttagline');
                $buffer .= $this->section993ee26f10d13fdfd47b0696d0ceb17b($context, $indent, $value);
                $value = $context->find('featuredpostheading');
                $buffer .= $this->sectionBd7665cf3aea62097a3e708d94ed39cf($context, $indent, $value);
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('featuredposturl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><img class="picture" src="';
                $value = $this->resolveValue($context->find('featuredpostimage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="blog-image" /></a>
';
                $value = $context->find('featuredposttitle');
                $buffer .= $this->section7ced90d55878a2d7976a428b88fa02fe($context, $indent, $value);
                $value = $context->find('featuredposttags');
                $buffer .= $this->section9b94720e5f950a72b319044910e77c9a($context, $indent, $value);
                $value = $context->find('featuredpostdate');
                $buffer .= $this->section40d8cdc64a9490531aac1c14763f7061($context, $indent, $value);
                $value = $context->find('featuredpostdescription');
                $buffer .= $this->section55b8cf371fc432d02b97b102aef4457b($context, $indent, $value);
                $value = $context->find('featuredpostbuttontext');
                $buffer .= $this->section1a9a949961450aaa6f1feeb98757154b($context, $indent, $value);
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
