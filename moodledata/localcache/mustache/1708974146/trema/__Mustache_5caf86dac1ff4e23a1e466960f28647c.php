<?php

class __Mustache_5caf86dac1ff4e23a1e466960f28647c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="initialbar ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '    <span class="initialbarlabel mr-2">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <nav class="initialbargroups d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '        <ul class="pagination pagination-sm">
';
        $buffer .= $indent . '            <li id="';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_page-item_';
        $value = $this->resolveValue($context->find('all'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="initialbarall page-item ';
        $value = $context->find('current');
        if (empty($value)) {
            
            $buffer .= 'active';
        }
        $buffer .= '">
';
        $value = $context->find('url');
        $buffer .= $this->sectionD75e03381126645c95b2ebc5f2aecddf($context, $indent, $value);
        $value = $context->find('input');
        $buffer .= $this->section24ad9b252eec8d03ab4bfde9c7f27bb3($context, $indent, $value);
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '        </ul>
';
        $value = $context->find('group');
        $buffer .= $this->sectionBdf31b42b547d8bee16900a8fc696723($context, $indent, $value);
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD75e03381126645c95b2ebc5f2aecddf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a data-initial="" class="page-link" href="{{url}}"{{^current}} aria-current="true"{{/current}}>{{all}}</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a data-initial="" class="page-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('current');
                if (empty($value)) {
                    
                    $buffer .= ' aria-current="true"';
                }
                $buffer .= '>';
                $value = $this->resolveValue($context->find('all'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24ad9b252eec8d03ab4bfde9c7f27bb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <input class="page-link mr-1 rounded" {{^current}} aria-current="true"{{/current}} value="{{all}}" type="button">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <input class="page-link mr-1 rounded" ';
                $value = $context->find('current');
                if (empty($value)) {
                    
                    $buffer .= ' aria-current="true"';
                }
                $buffer .= ' value="';
                $value = $this->resolveValue($context->find('all'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" type="button">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d2531a9bf9666cc7364f9dd9122736e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section513aec790de0df11cf829e7abda65698(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a class="page-link" href="{{url}}"{{#selected}} aria-current="true"{{/selected}}>{{name}}</a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a class="page-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('selected');
                $buffer .= $this->section6d2531a9bf9666cc7364f9dd9122736e($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC492b59786b4639234851aa622d38ec2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <input class="page-link mr-1 rounded" {{#selected}} aria-current="true"{{/selected}} value="{{name}}" type="button">
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <input class="page-link mr-1 rounded" ';
                $value = $context->find('selected');
                $buffer .= $this->section6d2531a9bf9666cc7364f9dd9122736e($context, $indent, $value);
                $buffer .= ' value="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" type="button">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC90974d94df4226f330a281a08d06944(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li id="{{class}}_page-item_{{name}}" data-initial="{{name}}" class="page-item {{name}} {{#selected}}active{{/selected}}">
                        {{#url}}
                            <a class="page-link" href="{{url}}"{{#selected}} aria-current="true"{{/selected}}>{{name}}</a>
                        {{/url}}
                        {{#input}}
                            <input class="page-link mr-1 rounded" {{#selected}} aria-current="true"{{/selected}} value="{{name}}" type="button">
                        {{/input}}
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li id="';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '_page-item_';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-initial="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-item ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $context->find('selected');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('url');
                $buffer .= $this->section513aec790de0df11cf829e7abda65698($context, $indent, $value);
                $value = $context->find('input');
                $buffer .= $this->sectionC492b59786b4639234851aa622d38ec2($context, $indent, $value);
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdf31b42b547d8bee16900a8fc696723(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="pagination pagination-sm">
                {{#letter}}
                    <li id="{{class}}_page-item_{{name}}" data-initial="{{name}}" class="page-item {{name}} {{#selected}}active{{/selected}}">
                        {{#url}}
                            <a class="page-link" href="{{url}}"{{#selected}} aria-current="true"{{/selected}}>{{name}}</a>
                        {{/url}}
                        {{#input}}
                            <input class="page-link mr-1 rounded" {{#selected}} aria-current="true"{{/selected}} value="{{name}}" type="button">
                        {{/input}}
                    </li>
                {{/letter}}
            </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <ul class="pagination pagination-sm">
';
                $value = $context->find('letter');
                $buffer .= $this->sectionC90974d94df4226f330a281a08d06944($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
