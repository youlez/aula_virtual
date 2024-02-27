<?php

class __Mustache_a3ede026522d74e3725fa2d8fd7c6449 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('settingsmenu');
        $buffer .= $this->sectionAe8042962f93ec056c94daf070da965f($context, $indent, $value);

        return $buffer;
    }

    private function sectionAe8042962f93ec056c94daf070da965f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="frontpage-settings-menu" class="p-1">
	<div class="context-header-settings-menu">
	    {{{settingsmenu}}}
	</div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="frontpage-settings-menu" class="p-1">
';
                $buffer .= $indent . '	<div class="context-header-settings-menu">
';
                $buffer .= $indent . '	    ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
