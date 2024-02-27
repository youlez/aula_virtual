<?php

class __Mustache_c5dab76c788a472a0655a1407d81c07a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_trema/navbar_login')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div id="page" class="mt-0 pt-0 container-fluid ';
        $value = $context->findDot('output.login_lang_menu');
        $buffer .= $this->section13da1740a126924245469a4ce12a9171($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="page-content" class="row">
';
        $buffer .= $indent . '            <div id="region-main-box" class="col-12">
';
        $buffer .= $indent . '                <section id="region-main" class="col-12">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </section>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section1cf68cfe569233b438457c485af6386d($context, $indent, $value);

        return $buffer;
    }

    private function section13da1740a126924245469a4ce12a9171(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-navbar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-navbar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5b5bd00f2e9a76a5eb9e69a245305b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	require([\'theme_trema/particles\'], function() {
        console.log(window.particlesJS(\'page-wrapper\', {{{particlesconfig}}}));
	    window.particlesJS(\'page-wrapper\', {{{particlesconfig}}});
	});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '	require([\'theme_trema/particles\'], function() {
';
                $buffer .= $indent . '        console.log(window.particlesJS(\'page-wrapper\', ';
                $value = $this->resolveValue($context->find('particlesconfig'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '));
';
                $buffer .= $indent . '	    window.particlesJS(\'page-wrapper\', ';
                $value = $this->resolveValue($context->find('particlesconfig'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');
';
                $buffer .= $indent . '	});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cf68cfe569233b438457c485af6386d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);

{{#particlesconfig}}
	require([\'theme_trema/particles\'], function() {
        console.log(window.particlesJS(\'page-wrapper\', {{{particlesconfig}}}));
	    window.particlesJS(\'page-wrapper\', {{{particlesconfig}}});
	});
{{/particlesconfig}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . '
';
                $value = $context->find('particlesconfig');
                $buffer .= $this->sectionC5b5bd00f2e9a76a5eb9e69a245305b5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
