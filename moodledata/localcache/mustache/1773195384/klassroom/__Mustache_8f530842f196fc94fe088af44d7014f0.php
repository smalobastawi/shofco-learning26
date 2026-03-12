<?php

class __Mustache_8f530842f196fc94fe088af44d7014f0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Start Photo Gallery Section -->
';
        $value = $context->find('displayphotogallerysection');
        $buffer .= $this->sectionD6d2e34d6e7d37c78e139b58932e90bc($context, $indent, $value);
        $buffer .= $indent . '<!-- End Photo Gallery Section -->
';

        return $buffer;
    }

    private function section9f3d4abf9bb2b80a1c581ba15c53802b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <h6>{{{photogallerytagline}}}</h6>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <h6>';
                $value = $this->resolveValue($context->find('photogallerytagline'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85002a5dadcfbcfb4e4007cb911cd393(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <h2>{{{photogalleryheading}}}</h2>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <h2>';
                $value = $this->resolveValue($context->find('photogalleryheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0088ff7550b10c7384ba03be95a4f039(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage1caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage1caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86bf47f5d73edf40b38cc823f496a0c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage1buttonurl}}}">{{{classroomimage1buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage1buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage1buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf33e24349f82674ccd9427ee41da734(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{seminarimage1caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('seminarimage1caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0097e4b0ccce8f995b8da375d135baa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{seminarimage1buttonurl}}}">{{{seminarimage1buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('seminarimage1buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('seminarimage1buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03223674c24a2c41f4069072b527b128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage2caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage2caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42364add4c13b4f78c98c8014de3caf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage2buttonurl}}}">{{{classroomimage2buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage2buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage2buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06c7457b2c2bd5f68a75a07387bed7da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage3caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage3caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3175ec7472b453d74df083d2a3300fe8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage3buttonurl}}}">{{{classroomimage3buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage3buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage3buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe25b7464e26a134bb38e6778b48f9bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{eventimage1caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('eventimage1caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b0b8dca037edd65a5eac31ca50bf967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{eventimage1buttonurl}}}">{{{eventimage1buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('eventimage1buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('eventimage1buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7717a2b2522a2ab025b32041e122e26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{seminarimage2caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('seminarimage2caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d48c8267b56f07628fe8776ecb66092(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{seminarimage2buttonurl}}}">{{{seminarimage2buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('seminarimage2buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('seminarimage2buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14844e7b2d42268982745ab8884b94ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{eventimage2caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('eventimage2caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf2e223e97676c3f52d9b7402d298ee4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{eventimage2buttonurl}}}">{{{eventimage2buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('eventimage2buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('eventimage2buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38cfa759c9af41c52a44db25b781fdf5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{eventimage3caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('eventimage3caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE08b7e65e4032215df04fd86ff78ef5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{eventimage3buttonurl}}}">{{{eventimage3buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('eventimage3buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('eventimage3buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b3104deeeb6ed56a3266cf938c66215(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage4caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage4caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07208c05bb710c5da1622614f1cc2c69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage4buttonurl}}}">{{{classroomimage4buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage4buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage4buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9996b67bb49e660b64f1eb827feb0d8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{eventimage4caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('eventimage4caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38489ef020b938245f479ca0eccc37ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{eventimage4buttonurl}}}">{{{eventimage4buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('eventimage4buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('eventimage4buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4cee1e6673a375c214614323674a6d90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage5caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage5caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB03c96eb4ed232c2f7c78ad783b70d99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage5buttonurl}}}">{{{classroomimage5buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage5buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage5buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9347628379257c59245b737ca17233a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{seminarimage3caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('seminarimage3caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bf10c30231fa08463fac6451b5d6865(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{seminarimage3buttonurl}}}">{{{seminarimage3buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('seminarimage3buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('seminarimage3buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d9a92a4dad1ca2fa7fa66dffb2315b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage6caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage6caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42fb809e4804790aee4810a9c5e8b507(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage6buttonurl}}}">{{{classroomimage6buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage6buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage6buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02e64634c44028a9f5e5792bb34e6aa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{seminarimage4caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('seminarimage4caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa1d309c93fb8022faa1ec5c163f82b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{seminarimage4buttonurl}}}">{{{seminarimage4buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('seminarimage4buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('seminarimage4buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7cb29094814e6f0f16fafcc268714c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage7caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage7caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28083c1e2bf518cf5554b24d9f8a6aa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage7buttonurl}}}">{{{classroomimage7buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage7buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage7buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34a0098fda66bdbf4b3c606eb5891642(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage8caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage8caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d6090841c35583036442a9f15ec064f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage8buttonurl}}}">{{{classroomimage8buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage8buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage8buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section341fc5b2b8cdeea28604f7f6819461b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{eventimage5caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('eventimage5caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE527241bae3d83421d268ad7db930711(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{eventimage5buttonurl}}}">{{{eventimage5buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('eventimage5buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('eventimage5buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB33f771bf59d54524ec9e5880e207cd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{seminarimage5caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('seminarimage5caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18f73f888ebe95df08637e6abcbed294(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{seminarimage5buttonurl}}}">{{{seminarimage5buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('seminarimage5buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('seminarimage5buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f72460aff1e4c9d7399f60e9f4d64e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{classroomimage9caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('classroomimage9caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08d9c624735e4006937bca95d66aee9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{classroomimage9buttonurl}}}">{{{classroomimage9buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('classroomimage9buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('classroomimage9buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section137e016955e228b5728bf1b08beb092b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{seminarimage6caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('seminarimage6caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75f25d0ba4d73248023bc46002b5d9d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{seminarimage6buttonurl}}}">{{{seminarimage6buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('seminarimage6buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('seminarimage6buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3218439ea06c8be23d219fa1d8b02635(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{eventimage6caption}}}</h2>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('eventimage6caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBed3178cc27afed77d20ba99f3319f4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <a class="info" href="{{{eventimage6buttonurl}}}">{{{eventimage6buttontext}}}</a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <a class="info" href="';
                $value = $this->resolveValue($context->find('eventimage6buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('eventimage6buttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6d2e34d6e7d37c78e139b58932e90bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="gallery">
   <div class="container" style="margin-bottom:30px;">
      <div class="toolbar mb2 mt2">
         <button class="btn fil-cat" data-rel="all">All</button>
         <button class="btn fil-cat" data-rel="classroom">Classroom</button>
         <button class="btn fil-cat" data-rel="seminars">Seminars</button>
         <button class="btn fil-cat" data-rel="event">Events</button>
      </div>
   </div>
   <div class="container">
      {{#photogallerytagline}}
      <h6>{{{photogallerytagline}}}</h6>
      {{/photogallerytagline}}
      {{#photogalleryheading}}
      <h2>{{{photogalleryheading}}}</h2>
      {{/photogalleryheading}}
      <div class="row" id="portfolio">
         <div class="col-lg-4 col-md-4 col-sm-12 box tile scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage1}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage1caption}}
                  <h2>{{{classroomimage1caption}}}</h2>
                  {{/classroomimage1caption}}
                  {{#classroomimage1buttontext}}
                  <a class="info" href="{{{classroomimage1buttonurl}}}">{{{classroomimage1buttontext}}}</a>
                  {{/classroomimage1buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
            <div class="hovereffect seminars all">
               <img class="img-responsive" src="{{{seminarimage1}}}" alt="">
               <div class="overlay seminars all">
                  {{#seminarimage1caption}}
                  <h2>{{{seminarimage1caption}}}</h2>
                  {{/seminarimage1caption}}
                  {{#seminarimage1buttontext}}
                  <a class="info" href="{{{seminarimage1buttonurl}}}">{{{seminarimage1buttontext}}}</a>
                  {{/seminarimage1buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage2}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage2caption}}
                  <h2>{{{classroomimage2caption}}}</h2>
                  {{/classroomimage2caption}}
                  {{#classroomimage2buttontext}}
                  <a class="info" href="{{{classroomimage2buttonurl}}}">{{{classroomimage2buttontext}}}</a>
                  {{/classroomimage2buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage3}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage3caption}}
                  <h2>{{{classroomimage3caption}}}</h2>
                  {{/classroomimage3caption}}
                  {{#classroomimage3buttontext}}
                  <a class="info" href="{{{classroomimage3buttonurl}}}">{{{classroomimage3buttontext}}}</a>
                  {{/classroomimage3buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
            <div class="hovereffect event all">
               <img class="img-responsive" src="{{{eventimage1}}}" alt="">
               <div class="overlay event all">
                  {{#eventimage1caption}}
                  <h2>{{{eventimage1caption}}}</h2>
                  {{/eventimage1caption}}
                  {{#eventimage1buttontext}}
                  <a class="info" href="{{{eventimage1buttonurl}}}">{{{eventimage1buttontext}}}</a>
                  {{/eventimage1buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
            <div class="hovereffect seminars all">
               <img class="img-responsive" src="{{{seminarimage2}}}" alt="">
               <div class="overlay seminars all">
                  {{#seminarimage2caption}}
                  <h2>{{{seminarimage2caption}}}</h2>
                  {{/seminarimage2caption}}
                  {{#seminarimage2buttontext}}
                  <a class="info" href="{{{seminarimage2buttonurl}}}">{{{seminarimage2buttontext}}}</a>
                  {{/seminarimage2buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
            <div class="hovereffect event all">
               <img class="img-responsive" src="{{{eventimage2}}}" alt="">
               <div class="overlay event all">
                  {{#eventimage2caption}}
                  <h2>{{{eventimage2caption}}}</h2>
                  {{/eventimage2caption}}
                  {{#eventimage2buttontext}}
                  <a class="info" href="{{{eventimage2buttonurl}}}">{{{eventimage2buttontext}}}</a>
                  {{/eventimage2buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
            <div class="hovereffect event all">
               <img class="img-responsive" src="{{{eventimage3}}}" alt="">
               <div class="overlay event all">
                  {{#eventimage3caption}}
                  <h2>{{{eventimage3caption}}}</h2>
                  {{/eventimage3caption}}
                  {{#eventimage3buttontext}}
                  <a class="info" href="{{{eventimage3buttonurl}}}">{{{eventimage3buttontext}}}</a>
                  {{/eventimage3buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage4}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage4caption}}
                  <h2>{{{classroomimage4caption}}}</h2>
                  {{/classroomimage4caption}}
                  {{#classroomimage4buttontext}}
                  <a class="info" href="{{{classroomimage4buttonurl}}}">{{{classroomimage4buttontext}}}</a>
                  {{/classroomimage4buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
            <div class="hovereffect event all">
               <img class="img-responsive" src="{{{eventimage4}}}" alt="">
               <div class="overlay event all">
                  {{#eventimage4caption}}
                  <h2>{{{eventimage4caption}}}</h2>
                  {{/eventimage4caption}}
                  {{#eventimage4buttontext}}
                  <a class="info" href="{{{eventimage4buttonurl}}}">{{{eventimage4buttontext}}}</a>
                  {{/eventimage4buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage5}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage5caption}}
                  <h2>{{{classroomimage5caption}}}</h2>
                  {{/classroomimage5caption}}
                  {{#classroomimage5buttontext}}
                  <a class="info" href="{{{classroomimage5buttonurl}}}">{{{classroomimage5buttontext}}}</a>
                  {{/classroomimage5buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
            <div class="hovereffect seminars all">
               <img class="img-responsive" src="{{{seminarimage3}}}" alt="">
               <div class="overlay seminars all">
                  {{#seminarimage3caption}}
                  <h2>{{{seminarimage3caption}}}</h2>
                  {{/seminarimage3caption}}
                  {{#seminarimage3buttontext}}
                  <a class="info" href="{{{seminarimage3buttonurl}}}">{{{seminarimage3buttontext}}}</a>
                  {{/seminarimage3buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage6}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage6caption}}
                  <h2>{{{classroomimage6caption}}}</h2>
                  {{/classroomimage6caption}}
                  {{#classroomimage6buttontext}}
                  <a class="info" href="{{{classroomimage6buttonurl}}}">{{{classroomimage6buttontext}}}</a>
                  {{/classroomimage6buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
            <div class="hovereffect seminars all">
               <img class="img-responsive" src="{{{seminarimage4}}}" alt="">
               <div class="overlay seminars all">
                  {{#seminarimage4caption}}
                  <h2>{{{seminarimage4caption}}}</h2>
                  {{/seminarimage4caption}}
                  {{#seminarimage4buttontext}}
                  <a class="info" href="{{{seminarimage4buttonurl}}}">{{{seminarimage4buttontext}}}</a>
                  {{/seminarimage4buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage7}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage7caption}}
                  <h2>{{{classroomimage7caption}}}</h2>
                  {{/classroomimage7caption}}
                  {{#classroomimage7buttontext}}
                  <a class="info" href="{{{classroomimage7buttonurl}}}">{{{classroomimage7buttontext}}}</a>
                  {{/classroomimage7buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage8}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage8caption}}
                  <h2>{{{classroomimage8caption}}}</h2>
                  {{/classroomimage8caption}}
                  {{#classroomimage8buttontext}}
                  <a class="info" href="{{{classroomimage8buttonurl}}}">{{{classroomimage8buttontext}}}</a>
                  {{/classroomimage8buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
            <div class="hovereffect event all">
               <img class="img-responsive" src="{{{eventimage5}}}" alt="">
               <div class="overlay event all">
                  {{#eventimage5caption}}
                  <h2>{{{eventimage5caption}}}</h2>
                  {{/eventimage5caption}}
                  {{#eventimage5buttontext}}
                  <a class="info" href="{{{eventimage5buttonurl}}}">{{{eventimage5buttontext}}}</a>
                  {{/eventimage5buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
            <div class="hovereffect seminars all">
               <img class="img-responsive" src="{{{seminarimage5}}}" alt="">
               <div class="overlay seminars all">
                  {{#seminarimage5caption}}
                  <h2>{{{seminarimage5caption}}}</h2>
                  {{/seminarimage5caption}}
                  {{#seminarimage5buttontext}}
                  <a class="info" href="{{{seminarimage5buttonurl}}}">{{{seminarimage5buttontext}}}</a>
                  {{/seminarimage5buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
            <div class="hovereffect classroom all">
               <img class="img-responsive" src="{{{classroomimage9}}}" alt="">
               <div class="overlay classroom all">
                  {{#classroomimage9caption}}
                  <h2>{{{classroomimage9caption}}}</h2>
                  {{/classroomimage9caption}}
                  {{#classroomimage9buttontext}}
                  <a class="info" href="{{{classroomimage9buttonurl}}}">{{{classroomimage9buttontext}}}</a>
                  {{/classroomimage9buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
            <div class="hovereffect seminars all">
               <img class="img-responsive" src="{{{seminarimage6}}}" alt="">
               <div class="overlay seminars all">
                  {{#seminarimage6caption}}
                  <h2>{{{seminarimage6caption}}}</h2>
                  {{/seminarimage6caption}}
                  {{#seminarimage6buttontext}}
                  <a class="info" href="{{{seminarimage6buttonurl}}}">{{{seminarimage6buttontext}}}</a>
                  {{/seminarimage6buttontext}}
               </div>
            </div>
         </div>
         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
            <div class="hovereffect event all">
               <img class="img-responsive" src="{{{eventimage6}}}" alt="">
               <div class="overlay event all">
                  {{#eventimage6caption}}
                  <h2>{{{eventimage6caption}}}</h2>
                  {{/eventimage6caption}}
                  {{#eventimage6buttontext}}
                  <a class="info" href="{{{eventimage6buttonurl}}}">{{{eventimage6buttontext}}}</a>
                  {{/eventimage6buttontext}}
               </div>
            </div>
         </div>
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
                
                $buffer .= $indent . '<div id="gallery">
';
                $buffer .= $indent . '   <div class="container" style="margin-bottom:30px;">
';
                $buffer .= $indent . '      <div class="toolbar mb2 mt2">
';
                $buffer .= $indent . '         <button class="btn fil-cat" data-rel="all">All</button>
';
                $buffer .= $indent . '         <button class="btn fil-cat" data-rel="classroom">Classroom</button>
';
                $buffer .= $indent . '         <button class="btn fil-cat" data-rel="seminars">Seminars</button>
';
                $buffer .= $indent . '         <button class="btn fil-cat" data-rel="event">Events</button>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '   </div>
';
                $buffer .= $indent . '   <div class="container">
';
                $value = $context->find('photogallerytagline');
                $buffer .= $this->section9f3d4abf9bb2b80a1c581ba15c53802b($context, $indent, $value);
                $value = $context->find('photogalleryheading');
                $buffer .= $this->section85002a5dadcfbcfb4e4007cb911cd393($context, $indent, $value);
                $buffer .= $indent . '      <div class="row" id="portfolio">
';
                $buffer .= $indent . '         <div class="col-lg-4 col-md-4 col-sm-12 box tile scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage1caption');
                $buffer .= $this->section0088ff7550b10c7384ba03be95a4f039($context, $indent, $value);
                $value = $context->find('classroomimage1buttontext');
                $buffer .= $this->section86bf47f5d73edf40b38cc823f496a0c4($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
';
                $buffer .= $indent . '            <div class="hovereffect seminars all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('seminarimage1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay seminars all">
';
                $value = $context->find('seminarimage1caption');
                $buffer .= $this->sectionCf33e24349f82674ccd9427ee41da734($context, $indent, $value);
                $value = $context->find('seminarimage1buttontext');
                $buffer .= $this->section0097e4b0ccce8f995b8da375d135baa9($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage2caption');
                $buffer .= $this->section03223674c24a2c41f4069072b527b128($context, $indent, $value);
                $value = $context->find('classroomimage2buttontext');
                $buffer .= $this->section42364add4c13b4f78c98c8014de3caf1($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage3'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage3caption');
                $buffer .= $this->section06c7457b2c2bd5f68a75a07387bed7da($context, $indent, $value);
                $value = $context->find('classroomimage3buttontext');
                $buffer .= $this->section3175ec7472b453d74df083d2a3300fe8($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
';
                $buffer .= $indent . '            <div class="hovereffect event all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('eventimage1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay event all">
';
                $value = $context->find('eventimage1caption');
                $buffer .= $this->sectionEe25b7464e26a134bb38e6778b48f9bd($context, $indent, $value);
                $value = $context->find('eventimage1buttontext');
                $buffer .= $this->section8b0b8dca037edd65a5eac31ca50bf967($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
';
                $buffer .= $indent . '            <div class="hovereffect seminars all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('seminarimage2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay seminars all">
';
                $value = $context->find('seminarimage2caption');
                $buffer .= $this->sectionC7717a2b2522a2ab025b32041e122e26($context, $indent, $value);
                $value = $context->find('seminarimage2buttontext');
                $buffer .= $this->section2d48c8267b56f07628fe8776ecb66092($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
';
                $buffer .= $indent . '            <div class="hovereffect event all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('eventimage2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay event all">
';
                $value = $context->find('eventimage2caption');
                $buffer .= $this->section14844e7b2d42268982745ab8884b94ba($context, $indent, $value);
                $value = $context->find('eventimage2buttontext');
                $buffer .= $this->sectionDf2e223e97676c3f52d9b7402d298ee4($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
';
                $buffer .= $indent . '            <div class="hovereffect event all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('eventimage3'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay event all">
';
                $value = $context->find('eventimage3caption');
                $buffer .= $this->section38cfa759c9af41c52a44db25b781fdf5($context, $indent, $value);
                $value = $context->find('eventimage3buttontext');
                $buffer .= $this->sectionE08b7e65e4032215df04fd86ff78ef5a($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage4'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage4caption');
                $buffer .= $this->section8b3104deeeb6ed56a3266cf938c66215($context, $indent, $value);
                $value = $context->find('classroomimage4buttontext');
                $buffer .= $this->section07208c05bb710c5da1622614f1cc2c69($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
';
                $buffer .= $indent . '            <div class="hovereffect event all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('eventimage4'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay event all">
';
                $value = $context->find('eventimage4caption');
                $buffer .= $this->section9996b67bb49e660b64f1eb827feb0d8f($context, $indent, $value);
                $value = $context->find('eventimage4buttontext');
                $buffer .= $this->section38489ef020b938245f479ca0eccc37ce($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage5'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage5caption');
                $buffer .= $this->section4cee1e6673a375c214614323674a6d90($context, $indent, $value);
                $value = $context->find('classroomimage5buttontext');
                $buffer .= $this->sectionB03c96eb4ed232c2f7c78ad783b70d99($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
';
                $buffer .= $indent . '            <div class="hovereffect seminars all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('seminarimage3'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay seminars all">
';
                $value = $context->find('seminarimage3caption');
                $buffer .= $this->sectionB9347628379257c59245b737ca17233a($context, $indent, $value);
                $value = $context->find('seminarimage3buttontext');
                $buffer .= $this->section4bf10c30231fa08463fac6451b5d6865($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage6'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage6caption');
                $buffer .= $this->section8d9a92a4dad1ca2fa7fa66dffb2315b7($context, $indent, $value);
                $value = $context->find('classroomimage6buttontext');
                $buffer .= $this->section42fb809e4804790aee4810a9c5e8b507($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
';
                $buffer .= $indent . '            <div class="hovereffect seminars all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('seminarimage4'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay seminars all">
';
                $value = $context->find('seminarimage4caption');
                $buffer .= $this->section02e64634c44028a9f5e5792bb34e6aa6($context, $indent, $value);
                $value = $context->find('seminarimage4buttontext');
                $buffer .= $this->sectionDa1d309c93fb8022faa1ec5c163f82b2($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage7'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage7caption');
                $buffer .= $this->sectionD7cb29094814e6f0f16fafcc268714c4($context, $indent, $value);
                $value = $context->find('classroomimage7buttontext');
                $buffer .= $this->section28083c1e2bf518cf5554b24d9f8a6aa9($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage8'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage8caption');
                $buffer .= $this->section34a0098fda66bdbf4b3c606eb5891642($context, $indent, $value);
                $value = $context->find('classroomimage8buttontext');
                $buffer .= $this->section1d6090841c35583036442a9f15ec064f($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
';
                $buffer .= $indent . '            <div class="hovereffect event all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('eventimage5'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay event all">
';
                $value = $context->find('eventimage5caption');
                $buffer .= $this->section341fc5b2b8cdeea28604f7f6819461b6($context, $indent, $value);
                $value = $context->find('eventimage5buttontext');
                $buffer .= $this->sectionE527241bae3d83421d268ad7db930711($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
';
                $buffer .= $indent . '            <div class="hovereffect seminars all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('seminarimage5'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay seminars all">
';
                $value = $context->find('seminarimage5caption');
                $buffer .= $this->sectionB33f771bf59d54524ec9e5880e207cd0($context, $indent, $value);
                $value = $context->find('seminarimage5buttontext');
                $buffer .= $this->section18f73f888ebe95df08637e6abcbed294($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm classroom all">
';
                $buffer .= $indent . '            <div class="hovereffect classroom all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('classroomimage9'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay classroom all">
';
                $value = $context->find('classroomimage9caption');
                $buffer .= $this->section9f72460aff1e4c9d7399f60e9f4d64e8($context, $indent, $value);
                $value = $context->find('classroomimage9buttontext');
                $buffer .= $this->section08d9c624735e4006937bca95d66aee9d($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm seminars all">
';
                $buffer .= $indent . '            <div class="hovereffect seminars all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('seminarimage6'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay seminars all">
';
                $value = $context->find('seminarimage6caption');
                $buffer .= $this->section137e016955e228b5728bf1b08beb092b($context, $indent, $value);
                $value = $context->find('seminarimage6buttontext');
                $buffer .= $this->section75f25d0ba4d73248023bc46002b5d9d8($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
';
                $buffer .= $indent . '         <div class="tile col-lg-4 col-md-4 col-sm-12 box scale-anm event all">
';
                $buffer .= $indent . '            <div class="hovereffect event all">
';
                $buffer .= $indent . '               <img class="img-responsive" src="';
                $value = $this->resolveValue($context->find('eventimage6'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '               <div class="overlay event all">
';
                $value = $context->find('eventimage6caption');
                $buffer .= $this->section3218439ea06c8be23d219fa1d8b02635($context, $indent, $value);
                $value = $context->find('eventimage6buttontext');
                $buffer .= $this->sectionBed3178cc27afed77d20ba99f3319f4b($context, $indent, $value);
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '         </div>
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
