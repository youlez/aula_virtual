<?php

class __Mustache_ff622c792865dca9b170c41f1fb05b45 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Button trigger modal -->
';
        $buffer .= $indent . '<div class="card-see-more text-center">
';
        $buffer .= $indent . '	<button type="button" class="btn btn-secondary m-2" data-toggle="modal" data-target="#modal-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '	       ';
        $value = $context->find('str');
        $buffer .= $this->section9a2c090f8332a574c0244eb1db3f2599($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '	</button>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Modal -->
';
        $buffer .= $indent . '<div class="modal course-summary-modal fade" id="modal-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" tabindex="-1" role="dialog" aria-labelledby="modal-title-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true">
';
        $buffer .= $indent . '  <div class="modal-dialog modal-lg" role="document">
';
        $buffer .= $indent . '    <div class="modal-content">
';
        $buffer .= $indent . '      <div class="modal-header">
';
        $buffer .= $indent . '        <h3 class="modal-title" id="modal-title-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('title');
        $buffer .= $this->section09f26f1d124c8a1831c0b18f8203f1ba($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '        <button type="button" class="close" data-dismiss="modal" aria-label=';
        $value = $context->find('quote');
        $buffer .= $this->section98d4acc423a748b276573f1ac794e8eb($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '          <span aria-hidden="true">&times;</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="modal-body">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('body'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="modal-footer">
';
        $buffer .= $indent . '        <button type="button" class="btn btn-secondary" data-dismiss="modal">';
        $value = $context->find('str');
        $buffer .= $this->section7a20f6a0c1e5f01649c33230170638b5($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->find('courselink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="btn btn-primary">';
        $value = $context->find('str');
        $buffer .= $this->sectionB3a7aa819d8dcb62c2d10f3ab67f70c1($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9a2c090f8332a574c0244eb1db3f2599(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'summarybutton_text, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'summarybutton_text, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09f26f1d124c8a1831c0b18f8203f1ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{title}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a20f6a0c1e5f01649c33230170638b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closebuttontitle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closebuttontitle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98d4acc423a748b276573f1ac794e8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}closebuttontitle{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section7a20f6a0c1e5f01649c33230170638b5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3a7aa819d8dcb62c2d10f3ab67f70c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'summarycourselink_text, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'summarycourselink_text, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
