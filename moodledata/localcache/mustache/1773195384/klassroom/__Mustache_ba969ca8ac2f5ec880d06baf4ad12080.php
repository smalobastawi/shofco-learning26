<?php

class __Mustache_ba969ca8ac2f5ec880d06baf4ad12080 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Tutors Section -->
';
        $value = $context->find('displaytutorsection');
        $buffer .= $this->section54dbf66a92372004d4c3563d8ee2f6fd($context, $indent, $value);
        $buffer .= $indent . '<!-- End Tutors Section -->
';

        return $buffer;
    }

    private function section48e76284d8fda4db1820e1388f3f3965(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <h1>{{{tutorssectionheading}}}</h1>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <h1>';
                $value = $this->resolveValue($context->find('tutorssectionheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d89a4e24c391d6817d2c6ed159f6dfc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <p class="tagline">{{{tutorssectiontagline}}}</p>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <p class="tagline">';
                $value = $this->resolveValue($context->find('tutorssectiontagline'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb67a57ba3f4fb1ed65b829be596056a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor1name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor1name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB77682a35e8fdc8318e3c8e93c109d14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor1designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor1designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5caa99e971110320085c9bd5e81cc77b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor1rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor1rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section714b5edca0e0f979e7c61b2bf6f2d1f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-0" data-comment="{{{tutor1comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor1url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor1image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor1name}}
                           <p class="teacher-name">{{{tutor1name}}}</p>
                           {{/tutor1name}}
                           {{#tutor1designation}}
                           <p class="teacher-qualification">{{{tutor1designation}}}</p>
                           {{/tutor1designation}}
                           {{#tutor1rating}}
                           <p class="teacher-rating">{{{tutor1rating}}}</p>
                           {{/tutor1rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-0" data-comment="';
                $value = $this->resolveValue($context->find('tutor1comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor1url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor1image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor1name');
                $buffer .= $this->sectionFb67a57ba3f4fb1ed65b829be596056a($context, $indent, $value);
                $value = $context->find('tutor1designation');
                $buffer .= $this->sectionB77682a35e8fdc8318e3c8e93c109d14($context, $indent, $value);
                $value = $context->find('tutor1rating');
                $buffer .= $this->section5caa99e971110320085c9bd5e81cc77b($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f50508ac1b2600be4588485ad269744(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor2name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor2name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d87983c394308a2c883ad890d7f8a81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor2designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor2designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc987fa55c07de48e4a4431911cd2cd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor2rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor2rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a8197dc9046484a0306bedab90cf247(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-1" data-comment="{{{tutor2comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor2url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor2image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor2name}}
                           <p class="teacher-name">{{{tutor2name}}}</p>
                           {{/tutor2name}}
                           {{#tutor2designation}}
                           <p class="teacher-qualification">{{{tutor2designation}}}</p>
                           {{/tutor2designation}}
                           {{#tutor2rating}}
                           <p class="teacher-rating">{{{tutor2rating}}}</p>
                           {{/tutor2rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-1" data-comment="';
                $value = $this->resolveValue($context->find('tutor2comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor2url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor2image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor2name');
                $buffer .= $this->section8f50508ac1b2600be4588485ad269744($context, $indent, $value);
                $value = $context->find('tutor2designation');
                $buffer .= $this->section5d87983c394308a2c883ad890d7f8a81($context, $indent, $value);
                $value = $context->find('tutor2rating');
                $buffer .= $this->sectionDc987fa55c07de48e4a4431911cd2cd0($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cd32c922a04cbd62a9a404025d662c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor3name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor3name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE828d343d7414dd945e567a44aafc0b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor3designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor3designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c188b043cb2be20f6a7b5908bc7536f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor3rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor3rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC392c5300c2d583a80efc14027d28a2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-2" data-comment="{{{tutor3comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor3url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor3image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor3name}}
                           <p class="teacher-name">{{{tutor3name}}}</p>
                           {{/tutor3name}}
                           {{#tutor3designation}}
                           <p class="teacher-qualification">{{{tutor3designation}}}</p>
                           {{/tutor3designation}}
                           {{#tutor3rating}}
                           <p class="teacher-rating">{{{tutor3rating}}}</p>
                           {{/tutor3rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-2" data-comment="';
                $value = $this->resolveValue($context->find('tutor3comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor3url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor3image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor3name');
                $buffer .= $this->section8cd32c922a04cbd62a9a404025d662c4($context, $indent, $value);
                $value = $context->find('tutor3designation');
                $buffer .= $this->sectionE828d343d7414dd945e567a44aafc0b5($context, $indent, $value);
                $value = $context->find('tutor3rating');
                $buffer .= $this->section2c188b043cb2be20f6a7b5908bc7536f($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFec1f11d823cfb0b089cc17d732f2da1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor4name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor4name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e7ca81e81b48ef2d748e60ad509be87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor4designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor4designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section027574e8d174c809a5b5fbdfca250539(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor4rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor4rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b00966cebfa159f427605a02d23d32f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-3" data-comment="{{{tutor4comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor4url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor4image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor4name}}
                           <p class="teacher-name">{{{tutor4name}}}</p>
                           {{/tutor4name}}
                           {{#tutor4designation}}
                           <p class="teacher-qualification">{{{tutor4designation}}}</p>
                           {{/tutor4designation}}
                           {{#tutor4rating}}
                           <p class="teacher-rating">{{{tutor4rating}}}</p>
                           {{/tutor4rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-3" data-comment="';
                $value = $this->resolveValue($context->find('tutor4comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor4url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor4image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor4name');
                $buffer .= $this->sectionFec1f11d823cfb0b089cc17d732f2da1($context, $indent, $value);
                $value = $context->find('tutor4designation');
                $buffer .= $this->section5e7ca81e81b48ef2d748e60ad509be87($context, $indent, $value);
                $value = $context->find('tutor4rating');
                $buffer .= $this->section027574e8d174c809a5b5fbdfca250539($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9eb69cd02e51ea0fb2b05baa1ca8350(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor5name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor5name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDca2ebb29649bd56628191f65276a47d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor5designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor5designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bff095b11bfae48d676c92e0925c024(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor5rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor5rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB02b11d877d7b5a32a4cd5f5a80165e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-4" data-comment="{{{tutor5comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor5url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor5image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor5name}}
                           <p class="teacher-name">{{{tutor5name}}}</p>
                           {{/tutor5name}}
                           {{#tutor5designation}}
                           <p class="teacher-qualification">{{{tutor5designation}}}</p>
                           {{/tutor5designation}}
                           {{#tutor5rating}}
                           <p class="teacher-rating">{{{tutor5rating}}}</p>
                           {{/tutor5rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-4" data-comment="';
                $value = $this->resolveValue($context->find('tutor5comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor5url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor5image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor5name');
                $buffer .= $this->sectionD9eb69cd02e51ea0fb2b05baa1ca8350($context, $indent, $value);
                $value = $context->find('tutor5designation');
                $buffer .= $this->sectionDca2ebb29649bd56628191f65276a47d($context, $indent, $value);
                $value = $context->find('tutor5rating');
                $buffer .= $this->section1bff095b11bfae48d676c92e0925c024($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dfc14068bde335b336bf3b06f7a0b00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor6name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor6name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcdea8b41329df73f8225a769332a820(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor6designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor6designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52231faa545ff02df21134cd77c093ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor6rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor6rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e74086d00948e45f914335a8ed7d9c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-5" data-comment="{{{tutor6comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor6url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor6image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor6name}}
                           <p class="teacher-name">{{{tutor6name}}}</p>
                           {{/tutor6name}}
                           {{#tutor6designation}}
                           <p class="teacher-qualification">{{{tutor6designation}}}</p>
                           {{/tutor6designation}}
                           {{#tutor6rating}}
                           <p class="teacher-rating">{{{tutor6rating}}}</p>
                           {{/tutor6rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-5" data-comment="';
                $value = $this->resolveValue($context->find('tutor6comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor6url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor6image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor6name');
                $buffer .= $this->section9dfc14068bde335b336bf3b06f7a0b00($context, $indent, $value);
                $value = $context->find('tutor6designation');
                $buffer .= $this->sectionDcdea8b41329df73f8225a769332a820($context, $indent, $value);
                $value = $context->find('tutor6rating');
                $buffer .= $this->section52231faa545ff02df21134cd77c093ff($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32d8baf2a6f824a5428521341434fcc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor7name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor7name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB10af560f0d3fdf1314300321956323d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor7designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor7designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section810ad7b6df2474ec34ed5f8b2b04aba2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor7rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor7rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa3d9f6697cce250250f4ed5bea170d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-6" data-comment="{{{tutor7comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor7url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor7image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor7name}}
                           <p class="teacher-name">{{{tutor7name}}}</p>
                           {{/tutor7name}}
                           {{#tutor7designation}}
                           <p class="teacher-qualification">{{{tutor7designation}}}</p>
                           {{/tutor7designation}}
                           {{#tutor7rating}}
                           <p class="teacher-rating">{{{tutor7rating}}}</p>
                           {{/tutor7rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-6" data-comment="';
                $value = $this->resolveValue($context->find('tutor7comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor7url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor7image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor7name');
                $buffer .= $this->section32d8baf2a6f824a5428521341434fcc7($context, $indent, $value);
                $value = $context->find('tutor7designation');
                $buffer .= $this->sectionB10af560f0d3fdf1314300321956323d($context, $indent, $value);
                $value = $context->find('tutor7rating');
                $buffer .= $this->section810ad7b6df2474ec34ed5f8b2b04aba2($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ea6f6af51f2c0a95fd7793557b91912(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor8name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor8name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE150a014444354c8d8948ff51c1f70bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor8designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor8designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16929ac13490e28c157b664d19800d98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor8rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor8rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e11c6b1e058d637f5e0324053f9706c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-7" data-comment="{{{tutor8comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor8url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor8image}}}" alt="Teacher Pic">
                        </a>  
                        <div class="teacher-info">
                           {{#tutor8name}}
                           <p class="teacher-name">{{{tutor8name}}}</p>
                           {{/tutor8name}}
                           {{#tutor8designation}}
                           <p class="teacher-qualification">{{{tutor8designation}}}</p>
                           {{/tutor8designation}}
                           {{#tutor8rating}}
                           <p class="teacher-rating">{{{tutor8rating}}}</p>
                           {{/tutor8rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-7" data-comment="';
                $value = $this->resolveValue($context->find('tutor8comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor8url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor8image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>  
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor8name');
                $buffer .= $this->section4ea6f6af51f2c0a95fd7793557b91912($context, $indent, $value);
                $value = $context->find('tutor8designation');
                $buffer .= $this->sectionE150a014444354c8d8948ff51c1f70bc($context, $indent, $value);
                $value = $context->find('tutor8rating');
                $buffer .= $this->section16929ac13490e28c157b664d19800d98($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8949f3cecbc8192e24aead3ec2534dd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-name">{{{tutor9name}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-name">';
                $value = $this->resolveValue($context->find('tutor9name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e42f09e4d7441db9496a54f8179f6d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-qualification">{{{tutor9designation}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-qualification">';
                $value = $this->resolveValue($context->find('tutor9designation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc908ba30bd52e7ccb837166ffb99323(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           <p class="teacher-rating">{{{tutor9rating}}}</p>
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                           <p class="teacher-rating">';
                $value = $this->resolveValue($context->find('tutor9rating'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64c72acc5d4289ea91c5f4f0c64d3ab5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li id="teacher-7" data-comment="{{{tutor9comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor9url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor9image}}}" alt="Teacher Pic">
                        </a>  
                        <div class="teacher-info">
                           {{#tutor9name}}
                           <p class="teacher-name">{{{tutor9name}}}</p>
                           {{/tutor9name}}
                           {{#tutor9designation}}
                           <p class="teacher-qualification">{{{tutor9designation}}}</p>
                           {{/tutor9designation}}
                           {{#tutor9rating}}
                           <p class="teacher-rating">{{{tutor9rating}}}</p>
                           {{/tutor9rating}}
                        </div>
                     </div>
                  </li>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li id="teacher-7" data-comment="';
                $value = $this->resolveValue($context->find('tutor9comment'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="block-transition">
';
                $buffer .= $indent . '                     <div class="teacher-block">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('tutor9url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        <img class="teacher-pic" src="';
                $value = $this->resolveValue($context->find('tutor9image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Teacher Pic">
';
                $buffer .= $indent . '                        </a>  
';
                $buffer .= $indent . '                        <div class="teacher-info">
';
                $value = $context->find('tutor9name');
                $buffer .= $this->section8949f3cecbc8192e24aead3ec2534dd9($context, $indent, $value);
                $value = $context->find('tutor9designation');
                $buffer .= $this->section5e42f09e4d7441db9496a54f8179f6d6($context, $indent, $value);
                $value = $context->find('tutor9rating');
                $buffer .= $this->sectionEc908ba30bd52e7ccb837166ffb99323($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54dbf66a92372004d4c3563d8ee2f6fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="tutors">
   <div class="container">
      {{#tutorssectionheading}}
      <h1>{{{tutorssectionheading}}}</h1>
      {{/tutorssectionheading}}
      {{#tutorssectiontagline}}
      <p class="tagline">{{{tutorssectiontagline}}}</p>
      {{/tutorssectiontagline}}
      <div class="expert-teachers container" id="first-section">
         <div class="scroll-block-container slider" id="teachers-slider">
            <a class="control_next" id="next-teacher"></a>
            <a class="control_prev" id="prev-teacher"></a>
            <div class="slider-wrapper" id="teacher-slider-wrapper">
               <ul class="teacher-slider" style="width: 1317.5px; margin-left: -155px;">
                  {{#displaytutor1}}
                  <li id="teacher-0" data-comment="{{{tutor1comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor1url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor1image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor1name}}
                           <p class="teacher-name">{{{tutor1name}}}</p>
                           {{/tutor1name}}
                           {{#tutor1designation}}
                           <p class="teacher-qualification">{{{tutor1designation}}}</p>
                           {{/tutor1designation}}
                           {{#tutor1rating}}
                           <p class="teacher-rating">{{{tutor1rating}}}</p>
                           {{/tutor1rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor1}}
                  {{#displaytutor2}}
                  <li id="teacher-1" data-comment="{{{tutor2comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor2url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor2image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor2name}}
                           <p class="teacher-name">{{{tutor2name}}}</p>
                           {{/tutor2name}}
                           {{#tutor2designation}}
                           <p class="teacher-qualification">{{{tutor2designation}}}</p>
                           {{/tutor2designation}}
                           {{#tutor2rating}}
                           <p class="teacher-rating">{{{tutor2rating}}}</p>
                           {{/tutor2rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor2}}
                  {{#displaytutor3}}
                  <li id="teacher-2" data-comment="{{{tutor3comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor3url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor3image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor3name}}
                           <p class="teacher-name">{{{tutor3name}}}</p>
                           {{/tutor3name}}
                           {{#tutor3designation}}
                           <p class="teacher-qualification">{{{tutor3designation}}}</p>
                           {{/tutor3designation}}
                           {{#tutor3rating}}
                           <p class="teacher-rating">{{{tutor3rating}}}</p>
                           {{/tutor3rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor3}}
                  {{#displaytutor4}}
                  <li id="teacher-3" data-comment="{{{tutor4comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor4url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor4image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor4name}}
                           <p class="teacher-name">{{{tutor4name}}}</p>
                           {{/tutor4name}}
                           {{#tutor4designation}}
                           <p class="teacher-qualification">{{{tutor4designation}}}</p>
                           {{/tutor4designation}}
                           {{#tutor4rating}}
                           <p class="teacher-rating">{{{tutor4rating}}}</p>
                           {{/tutor4rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor4}}
                  {{#displaytutor5}}
                  <li id="teacher-4" data-comment="{{{tutor5comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor5url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor5image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor5name}}
                           <p class="teacher-name">{{{tutor5name}}}</p>
                           {{/tutor5name}}
                           {{#tutor5designation}}
                           <p class="teacher-qualification">{{{tutor5designation}}}</p>
                           {{/tutor5designation}}
                           {{#tutor5rating}}
                           <p class="teacher-rating">{{{tutor5rating}}}</p>
                           {{/tutor5rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor5}}
                  {{#displaytutor6}}
                  <li id="teacher-5" data-comment="{{{tutor6comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor6url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor6image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor6name}}
                           <p class="teacher-name">{{{tutor6name}}}</p>
                           {{/tutor6name}}
                           {{#tutor6designation}}
                           <p class="teacher-qualification">{{{tutor6designation}}}</p>
                           {{/tutor6designation}}
                           {{#tutor6rating}}
                           <p class="teacher-rating">{{{tutor6rating}}}</p>
                           {{/tutor6rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor6}}
                  {{#displaytutor7}}
                  <li id="teacher-6" data-comment="{{{tutor7comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor7url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor7image}}}" alt="Teacher Pic">
                        </a>
                        <div class="teacher-info">
                           {{#tutor7name}}
                           <p class="teacher-name">{{{tutor7name}}}</p>
                           {{/tutor7name}}
                           {{#tutor7designation}}
                           <p class="teacher-qualification">{{{tutor7designation}}}</p>
                           {{/tutor7designation}}
                           {{#tutor7rating}}
                           <p class="teacher-rating">{{{tutor7rating}}}</p>
                           {{/tutor7rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor7}}
                  {{#displaytutor8}}
                  <li id="teacher-7" data-comment="{{{tutor8comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor8url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor8image}}}" alt="Teacher Pic">
                        </a>  
                        <div class="teacher-info">
                           {{#tutor8name}}
                           <p class="teacher-name">{{{tutor8name}}}</p>
                           {{/tutor8name}}
                           {{#tutor8designation}}
                           <p class="teacher-qualification">{{{tutor8designation}}}</p>
                           {{/tutor8designation}}
                           {{#tutor8rating}}
                           <p class="teacher-rating">{{{tutor8rating}}}</p>
                           {{/tutor8rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor8}}
                  {{#displaytutor9}}
                  <li id="teacher-7" data-comment="{{{tutor9comment}}}" class="block-transition">
                     <div class="teacher-block">
                        <a href="{{{tutor9url}}}" alt="Teacher Pic">
                        <img class="teacher-pic" src="{{{tutor9image}}}" alt="Teacher Pic">
                        </a>  
                        <div class="teacher-info">
                           {{#tutor9name}}
                           <p class="teacher-name">{{{tutor9name}}}</p>
                           {{/tutor9name}}
                           {{#tutor9designation}}
                           <p class="teacher-qualification">{{{tutor9designation}}}</p>
                           {{/tutor9designation}}
                           {{#tutor9rating}}
                           <p class="teacher-rating">{{{tutor9rating}}}</p>
                           {{/tutor9rating}}
                        </div>
                     </div>
                  </li>
                  {{/displaytutor9}}
               </ul>
            </div>
         </div>
         <div class="teacher-testimonial" id="teacher-comment"></div>
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
                
                $buffer .= $indent . '<div class="tutors">
';
                $buffer .= $indent . '   <div class="container">
';
                $value = $context->find('tutorssectionheading');
                $buffer .= $this->section48e76284d8fda4db1820e1388f3f3965($context, $indent, $value);
                $value = $context->find('tutorssectiontagline');
                $buffer .= $this->section5d89a4e24c391d6817d2c6ed159f6dfc($context, $indent, $value);
                $buffer .= $indent . '      <div class="expert-teachers container" id="first-section">
';
                $buffer .= $indent . '         <div class="scroll-block-container slider" id="teachers-slider">
';
                $buffer .= $indent . '            <a class="control_next" id="next-teacher"></a>
';
                $buffer .= $indent . '            <a class="control_prev" id="prev-teacher"></a>
';
                $buffer .= $indent . '            <div class="slider-wrapper" id="teacher-slider-wrapper">
';
                $buffer .= $indent . '               <ul class="teacher-slider" style="width: 1317.5px; margin-left: -155px;">
';
                $value = $context->find('displaytutor1');
                $buffer .= $this->section714b5edca0e0f979e7c61b2bf6f2d1f1($context, $indent, $value);
                $value = $context->find('displaytutor2');
                $buffer .= $this->section2a8197dc9046484a0306bedab90cf247($context, $indent, $value);
                $value = $context->find('displaytutor3');
                $buffer .= $this->sectionC392c5300c2d583a80efc14027d28a2f($context, $indent, $value);
                $value = $context->find('displaytutor4');
                $buffer .= $this->section5b00966cebfa159f427605a02d23d32f($context, $indent, $value);
                $value = $context->find('displaytutor5');
                $buffer .= $this->sectionB02b11d877d7b5a32a4cd5f5a80165e8($context, $indent, $value);
                $value = $context->find('displaytutor6');
                $buffer .= $this->section5e74086d00948e45f914335a8ed7d9c4($context, $indent, $value);
                $value = $context->find('displaytutor7');
                $buffer .= $this->sectionCa3d9f6697cce250250f4ed5bea170d8($context, $indent, $value);
                $value = $context->find('displaytutor8');
                $buffer .= $this->section7e11c6b1e058d637f5e0324053f9706c($context, $indent, $value);
                $value = $context->find('displaytutor9');
                $buffer .= $this->section64c72acc5d4289ea91c5f4f0c64d3ab5($context, $indent, $value);
                $buffer .= $indent . '               </ul>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="teacher-testimonial" id="teacher-comment"></div>
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
