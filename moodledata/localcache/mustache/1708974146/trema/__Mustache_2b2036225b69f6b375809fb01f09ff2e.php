<?php

class __Mustache_2b2036225b69f6b375809fb01f09ff2e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('children');
        $buffer .= $this->section5278b6770df08f060e92427d76334205($context, $indent, $value);

        return $buffer;
    }

    private function sectionDc159bce537d2ac3a05478bc10b9d3f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li><a href="{{{url}}}" title="{{{title}}}">{{{text}}}</a></li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0099f5bd6b0b430dd15daa98f0f3bbfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                <ul class="list-unstyled ml-3">
                    {{> theme_boost/custom_menu_footer }}
                </ul>
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li>
';
                $buffer .= $indent . '                <ul class="list-unstyled ml-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5278b6770df08f060e92427d76334205(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^divider}}
            {{#url}}
                <li><a href="{{{url}}}" title="{{{title}}}">{{{text}}}</a></li>
            {{/url}}
            {{^url}}
                <li>{{{text}}}</li>
            {{/url}}
        {{/divider}}
        {{#haschildren}}
            <li>
                <ul class="list-unstyled ml-3">
                    {{> theme_boost/custom_menu_footer }}
                </ul>
            </li>
        {{/haschildren}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $value = $context->find('url');
                    $buffer .= $this->sectionDc159bce537d2ac3a05478bc10b9d3f9($context, $indent, $value);
                    $value = $context->find('url');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                <li>';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '</li>
';
                    }
                }
                $value = $context->find('haschildren');
                $buffer .= $this->section0099f5bd6b0b430dd15daa98f0f3bbfd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
