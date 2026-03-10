<?php

class __Mustache_0c3c50f49e1ae73887d35f9df72dcec9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Event Section -->
';
        $value = $context->find('displayeventsection');
        $buffer .= $this->section6045be9793f54208339a66821ee4685c($context, $indent, $value);
        $buffer .= $indent . '<!-- End Event Section -->
';

        return $buffer;
    }

    private function section9f1ca936c7ec8ad58055dcdb2f18e530(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <h6>{{{eventtagline}}}</h6>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <h6>';
                $value = $this->resolveValue($context->find('eventtagline'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55d96e1c4aa4abf59eba902648ad7240(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <h2>{{{eventheading}}}</h2>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <h2>';
                $value = $this->resolveValue($context->find('eventheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12a6af1cf265098efab2fcb60f53c8c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <span class="day">{{{event1day}}}</span>
               {{{event1monthyear}}}
               </span>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <span class="day">';
                $value = $this->resolveValue($context->find('event1day'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('event1monthyear'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '               </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79dfaa0c4a0a21a2ffa37ee54718adef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <h3><a href="{{{event1titleurl}}}">{{{event1title}}}</a></h3>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <h3><a href="';
                $value = $this->resolveValue($context->find('event1titleurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('event1title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd85d6815e5957e964237a1f998c760d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event1location}}}</div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event1location'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32bfde2770ad38ac4292e3eedce37255(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-summary">
                  <p>{{{event1description}}}</p>
               </div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-summary">
';
                $buffer .= $indent . '                  <p>';
                $value = $this->resolveValue($context->find('event1description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '               </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61f66e94c0338a7d8b5b9a4ca0598bdf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="event-map" href="{{{event1viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event1viewmap}}}
                  </a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="event-map" href="';
                $value = $this->resolveValue($context->find('event1viewmapurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event1viewmap'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section639cd5f52481520f9efaacf27db5e064(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event1price}}}</span>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event1price'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF60866ebdb89edd6c13352e239792667(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event1image}}}" />
               <span class="event-date">
               {{#event1day}}
               <span class="day">{{{event1day}}}</span>
               {{{event1monthyear}}}
               </span>
               {{/event1day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event1title}}
               <h3><a href="{{{event1titleurl}}}">{{{event1title}}}</a></h3>
               {{/event1title}}
               {{#event1location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event1location}}}</div>
               {{/event1location}}
               {{#event1description}}
               <div class="event-summary">
                  <p>{{{event1description}}}</p>
               </div>
               {{/event1description}}
               <div class="event-metas">
                  {{#event1viewmap}}
                  <a class="event-map" href="{{{event1viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event1viewmap}}}
                  </a>
                  {{/event1viewmap}}
                  {{#event1price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event1price}}}</span>
                  {{/event1price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="col-lg-6 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '            <div class="pull-left customimage">
';
                $buffer .= $indent . '               <a href="#">
';
                $buffer .= $indent . '               <img src="';
                $value = $this->resolveValue($context->find('event1image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" />
';
                $buffer .= $indent . '               <span class="event-date">
';
                $value = $context->find('event1day');
                $buffer .= $this->section12a6af1cf265098efab2fcb60f53c8c6($context, $indent, $value);
                $buffer .= $indent . '               </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="pull-left content">
';
                $value = $context->find('event1title');
                $buffer .= $this->section79dfaa0c4a0a21a2ffa37ee54718adef($context, $indent, $value);
                $value = $context->find('event1location');
                $buffer .= $this->sectionAd85d6815e5957e964237a1f998c760d($context, $indent, $value);
                $value = $context->find('event1description');
                $buffer .= $this->section32bfde2770ad38ac4292e3eedce37255($context, $indent, $value);
                $buffer .= $indent . '               <div class="event-metas">
';
                $value = $context->find('event1viewmap');
                $buffer .= $this->section61f66e94c0338a7d8b5b9a4ca0598bdf($context, $indent, $value);
                $value = $context->find('event1price');
                $buffer .= $this->section639cd5f52481520f9efaacf27db5e064($context, $indent, $value);
                $buffer .= $indent . '                  <div class="clearfix"></div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="clearfix"></div>
';
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b9755d2d851e50ba205c1cff86e5c05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <span class="day">{{{event2day}}}</span>
               {{{event2monthyear}}}
               </span>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <span class="day">';
                $value = $this->resolveValue($context->find('event2day'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('event2monthyear'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '               </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD89f291bdcdfceaa9adb6cf5578dd89a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <h3><a href="{{{event2titleurl}}}">{{{event2title}}}</a></h3>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <h3><a href="';
                $value = $this->resolveValue($context->find('event2titleurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('event2title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF26de050723829c914b6281c5714be48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event2location}}}</div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event2location'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38dc183923c55ad798674e61a2d6542(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-summary">
                  <p>{{{event2description}}}</p>
               </div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-summary">
';
                $buffer .= $indent . '                  <p>';
                $value = $this->resolveValue($context->find('event2description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '               </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section747390c99711deb6a9bc8e307ae3bfea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="event-map" href="{{{event2viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event2viewmap}}}
                  </a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="event-map" href="';
                $value = $this->resolveValue($context->find('event2viewmapurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event2viewmap'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c1cd975878a69327b15700d031f9252(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event2price}}}</span>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event2price'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2990b6f844e135cc15041428043ffb9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event2image}}}" />
               <span class="event-date">
               {{#event2day}}
               <span class="day">{{{event2day}}}</span>
               {{{event2monthyear}}}
               </span>
               {{/event2day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event2title}}
               <h3><a href="{{{event2titleurl}}}">{{{event2title}}}</a></h3>
               {{/event2title}}
               {{#event2location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event2location}}}</div>
               {{/event2location}}
               {{#event2description}}
               <div class="event-summary">
                  <p>{{{event2description}}}</p>
               </div>
               {{/event2description}}
               <div class="event-metas">
                  {{#event2viewmap}}
                  <a class="event-map" href="{{{event2viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event2viewmap}}}
                  </a>
                  {{/event2viewmap}}
                  {{#event2price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event2price}}}</span>
                  {{/event2price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="col-lg-6 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '            <div class="pull-left customimage">
';
                $buffer .= $indent . '               <a href="#">
';
                $buffer .= $indent . '               <img src="';
                $value = $this->resolveValue($context->find('event2image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" />
';
                $buffer .= $indent . '               <span class="event-date">
';
                $value = $context->find('event2day');
                $buffer .= $this->section4b9755d2d851e50ba205c1cff86e5c05($context, $indent, $value);
                $buffer .= $indent . '               </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="pull-left content">
';
                $value = $context->find('event2title');
                $buffer .= $this->sectionD89f291bdcdfceaa9adb6cf5578dd89a($context, $indent, $value);
                $value = $context->find('event2location');
                $buffer .= $this->sectionF26de050723829c914b6281c5714be48($context, $indent, $value);
                $value = $context->find('event2description');
                $buffer .= $this->sectionF38dc183923c55ad798674e61a2d6542($context, $indent, $value);
                $buffer .= $indent . '               <div class="event-metas">
';
                $value = $context->find('event2viewmap');
                $buffer .= $this->section747390c99711deb6a9bc8e307ae3bfea($context, $indent, $value);
                $value = $context->find('event2price');
                $buffer .= $this->section1c1cd975878a69327b15700d031f9252($context, $indent, $value);
                $buffer .= $indent . '                  <div class="clearfix"></div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="clearfix"></div>
';
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf19bf09baeff7d1b77b66567eceb0ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <span class="day">{{{event3day}}}</span>
               {{{event3monthyear}}}
               </span>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <span class="day">';
                $value = $this->resolveValue($context->find('event3day'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('event3monthyear'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '               </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2864016e9f6743c6f35bf0b1eb1a76a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <h3><a href="{{{event3titleurl}}}">{{{event3title}}}</a></h3>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <h3><a href="';
                $value = $this->resolveValue($context->find('event3titleurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('event3title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a98417bf6ec045c844756b07b79dcb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event3location}}}</div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event3location'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37fe1386e99c6770fe747e2ed641f10b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-summary">
                  <p>{{{event3description}}}</p>
               </div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-summary">
';
                $buffer .= $indent . '                  <p>';
                $value = $this->resolveValue($context->find('event3description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '               </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE86c91338339dc778874b52b4ce22795(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="event-map" href="{{{event3viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event3viewmap}}}
                  </a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="event-map" href="';
                $value = $this->resolveValue($context->find('event3viewmapurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event3viewmap'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA004debbbd81afccc498a8c31cfcf30f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event3price}}}</span>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event3price'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a1f1f1bfcd65a83ebf508f1923be53e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event3image}}}" />
               <span class="event-date">
               {{#event3day}}
               <span class="day">{{{event3day}}}</span>
               {{{event3monthyear}}}
               </span>
               {{/event3day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event3title}}
               <h3><a href="{{{event3titleurl}}}">{{{event3title}}}</a></h3>
               {{/event3title}}
               {{#event3location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event3location}}}</div>
               {{/event3location}}
               {{#event3description}}
               <div class="event-summary">
                  <p>{{{event3description}}}</p>
               </div>
               {{/event3description}}
               <div class="event-metas">
                  {{#event3viewmap}}
                  <a class="event-map" href="{{{event3viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event3viewmap}}}
                  </a>
                  {{/event3viewmap}}
                  {{#event3price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event3price}}}</span>
                  {{/event3price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="col-lg-6 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '            <div class="pull-left customimage">
';
                $buffer .= $indent . '               <a href="#">
';
                $buffer .= $indent . '               <img src="';
                $value = $this->resolveValue($context->find('event3image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" />
';
                $buffer .= $indent . '               <span class="event-date">
';
                $value = $context->find('event3day');
                $buffer .= $this->sectionFf19bf09baeff7d1b77b66567eceb0ab($context, $indent, $value);
                $buffer .= $indent . '               </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="pull-left content">
';
                $value = $context->find('event3title');
                $buffer .= $this->sectionC2864016e9f6743c6f35bf0b1eb1a76a($context, $indent, $value);
                $value = $context->find('event3location');
                $buffer .= $this->section1a98417bf6ec045c844756b07b79dcb0($context, $indent, $value);
                $value = $context->find('event3description');
                $buffer .= $this->section37fe1386e99c6770fe747e2ed641f10b($context, $indent, $value);
                $buffer .= $indent . '               <div class="event-metas">
';
                $value = $context->find('event3viewmap');
                $buffer .= $this->sectionE86c91338339dc778874b52b4ce22795($context, $indent, $value);
                $value = $context->find('event3price');
                $buffer .= $this->sectionA004debbbd81afccc498a8c31cfcf30f($context, $indent, $value);
                $buffer .= $indent . '                  <div class="clearfix"></div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="clearfix"></div>
';
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53424e1e35a5526cfe381fe469d4d9a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <span class="day">{{{event4day}}}</span>
               {{{event4monthyear}}}
               </span>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <span class="day">';
                $value = $this->resolveValue($context->find('event4day'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('event4monthyear'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '               </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a745717d12eb178835de4285bc67676(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <h3><a href="{{{event4titleurl}}}">{{{event4title}}}</a></h3>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <h3><a href="';
                $value = $this->resolveValue($context->find('event4titleurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('event4title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB70c184c5d2b707003383d7642169de5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event4location}}}</div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event4location'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ff1344a4455e14de2e7316def3abd06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <div class="event-summary">
                  <p>{{{event4description}}}</p>
               </div>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <div class="event-summary">
';
                $buffer .= $indent . '                  <p>';
                $value = $this->resolveValue($context->find('event4description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '               </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8833137785aaa1f4911ec65d585af627(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="event-map" href="{{{event4viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event4viewmap}}}
                  </a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="event-map" href="';
                $value = $this->resolveValue($context->find('event4viewmapurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event4viewmap'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78f6751cda1a95ccde5ed807f77002fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event4price}}}</span>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> ';
                $value = $this->resolveValue($context->find('event4price'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF21552f862a9ce4506be2bf02a0965bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event4image}}}" />
               <span class="event-date">
               {{#event4day}}
               <span class="day">{{{event4day}}}</span>
               {{{event4monthyear}}}
               </span>
               {{/event4day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event4title}}
               <h3><a href="{{{event4titleurl}}}">{{{event4title}}}</a></h3>
               {{/event4title}}
               {{#event4location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event4location}}}</div>
               {{/event4location}}
               {{#event4description}}
               <div class="event-summary">
                  <p>{{{event4description}}}</p>
               </div>
               {{/event4description}}
               <div class="event-metas">
                  {{#event4viewmap}}
                  <a class="event-map" href="{{{event4viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event4viewmap}}}
                  </a>
                  {{/event4viewmap}}
                  {{#event4price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event4price}}}</span>
                  {{/event4price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="col-lg-6 col-md-6 col-sm-12 box">
';
                $buffer .= $indent . '            <div class="pull-left customimage">
';
                $buffer .= $indent . '               <a href="#">
';
                $buffer .= $indent . '               <img src="';
                $value = $this->resolveValue($context->find('event4image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" />
';
                $buffer .= $indent . '               <span class="event-date">
';
                $value = $context->find('event4day');
                $buffer .= $this->section53424e1e35a5526cfe381fe469d4d9a6($context, $indent, $value);
                $buffer .= $indent . '               </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="pull-left content">
';
                $value = $context->find('event4title');
                $buffer .= $this->section5a745717d12eb178835de4285bc67676($context, $indent, $value);
                $value = $context->find('event4location');
                $buffer .= $this->sectionB70c184c5d2b707003383d7642169de5($context, $indent, $value);
                $value = $context->find('event4description');
                $buffer .= $this->section1ff1344a4455e14de2e7316def3abd06($context, $indent, $value);
                $buffer .= $indent . '               <div class="event-metas">
';
                $value = $context->find('event4viewmap');
                $buffer .= $this->section8833137785aaa1f4911ec65d585af627($context, $indent, $value);
                $value = $context->find('event4price');
                $buffer .= $this->section78f6751cda1a95ccde5ed807f77002fe($context, $indent, $value);
                $buffer .= $indent . '                  <div class="clearfix"></div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="clearfix"></div>
';
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6045be9793f54208339a66821ee4685c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="events">
   <div class="container">
      {{#eventtagline}}
      <h6>{{{eventtagline}}}</h6>
      {{/eventtagline}}
      {{#eventheading}}
      <h2>{{{eventheading}}}</h2>
      {{/eventheading}}
      <div class="row">
         {{#displayevent1box}}
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event1image}}}" />
               <span class="event-date">
               {{#event1day}}
               <span class="day">{{{event1day}}}</span>
               {{{event1monthyear}}}
               </span>
               {{/event1day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event1title}}
               <h3><a href="{{{event1titleurl}}}">{{{event1title}}}</a></h3>
               {{/event1title}}
               {{#event1location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event1location}}}</div>
               {{/event1location}}
               {{#event1description}}
               <div class="event-summary">
                  <p>{{{event1description}}}</p>
               </div>
               {{/event1description}}
               <div class="event-metas">
                  {{#event1viewmap}}
                  <a class="event-map" href="{{{event1viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event1viewmap}}}
                  </a>
                  {{/event1viewmap}}
                  {{#event1price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event1price}}}</span>
                  {{/event1price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         {{/displayevent1box}}
         {{#displayevent2box}}
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event2image}}}" />
               <span class="event-date">
               {{#event2day}}
               <span class="day">{{{event2day}}}</span>
               {{{event2monthyear}}}
               </span>
               {{/event2day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event2title}}
               <h3><a href="{{{event2titleurl}}}">{{{event2title}}}</a></h3>
               {{/event2title}}
               {{#event2location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event2location}}}</div>
               {{/event2location}}
               {{#event2description}}
               <div class="event-summary">
                  <p>{{{event2description}}}</p>
               </div>
               {{/event2description}}
               <div class="event-metas">
                  {{#event2viewmap}}
                  <a class="event-map" href="{{{event2viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event2viewmap}}}
                  </a>
                  {{/event2viewmap}}
                  {{#event2price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event2price}}}</span>
                  {{/event2price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         {{/displayevent2box}}
         {{#displayevent3box}}
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event3image}}}" />
               <span class="event-date">
               {{#event3day}}
               <span class="day">{{{event3day}}}</span>
               {{{event3monthyear}}}
               </span>
               {{/event3day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event3title}}
               <h3><a href="{{{event3titleurl}}}">{{{event3title}}}</a></h3>
               {{/event3title}}
               {{#event3location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event3location}}}</div>
               {{/event3location}}
               {{#event3description}}
               <div class="event-summary">
                  <p>{{{event3description}}}</p>
               </div>
               {{/event3description}}
               <div class="event-metas">
                  {{#event3viewmap}}
                  <a class="event-map" href="{{{event3viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event3viewmap}}}
                  </a>
                  {{/event3viewmap}}
                  {{#event3price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event3price}}}</span>
                  {{/event3price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         {{/displayevent3box}}
         {{#displayevent4box}}
         <div class="col-lg-6 col-md-6 col-sm-12 box">
            <div class="pull-left customimage">
               <a href="#">
               <img src="{{{event4image}}}" />
               <span class="event-date">
               {{#event4day}}
               <span class="day">{{{event4day}}}</span>
               {{{event4monthyear}}}
               </span>
               {{/event4day}}
               </a>
            </div>
            <div class="pull-left content">
               {{#event4title}}
               <h3><a href="{{{event4titleurl}}}">{{{event4title}}}</a></h3>
               {{/event4title}}
               {{#event4location}}
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {{{event4location}}}</div>
               {{/event4location}}
               {{#event4description}}
               <div class="event-summary">
                  <p>{{{event4description}}}</p>
               </div>
               {{/event4description}}
               <div class="event-metas">
                  {{#event4viewmap}}
                  <a class="event-map" href="{{{event4viewmapurl}}}" target="_blank"><i class="fa fa-map" aria-hidden="true"></i> {{{event4viewmap}}}
                  </a>
                  {{/event4viewmap}}
                  {{#event4price}}
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> {{{event4price}}}</span>
                  {{/event4price}}
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         {{/displayevent4box}}
      </div>
      <a class="btn" href="{{wwwroot}}./calendar/view.php">View All Events <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      <div class="clearfix"></div>
   </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="events">
';
                $buffer .= $indent . '   <div class="container">
';
                $value = $context->find('eventtagline');
                $buffer .= $this->section9f1ca936c7ec8ad58055dcdb2f18e530($context, $indent, $value);
                $value = $context->find('eventheading');
                $buffer .= $this->section55d96e1c4aa4abf59eba902648ad7240($context, $indent, $value);
                $buffer .= $indent . '      <div class="row">
';
                $value = $context->find('displayevent1box');
                $buffer .= $this->sectionF60866ebdb89edd6c13352e239792667($context, $indent, $value);
                $value = $context->find('displayevent2box');
                $buffer .= $this->section2990b6f844e135cc15041428043ffb9c($context, $indent, $value);
                $value = $context->find('displayevent3box');
                $buffer .= $this->section1a1f1f1bfcd65a83ebf508f1923be53e($context, $indent, $value);
                $value = $context->find('displayevent4box');
                $buffer .= $this->sectionF21552f862a9ce4506be2bf02a0965bc($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <a class="btn" href="';
                $value = $this->resolveValue($context->find('wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= './calendar/view.php">View All Events <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '      <div class="clearfix"></div>
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
