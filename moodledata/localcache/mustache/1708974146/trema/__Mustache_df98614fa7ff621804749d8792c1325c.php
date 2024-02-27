<?php

class __Mustache_df98614fa7ff621804749d8792c1325c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span class="badge badge-info">';
        $value = $this->resolveValue($context->find('status'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';

        return $buffer;
    }
}
