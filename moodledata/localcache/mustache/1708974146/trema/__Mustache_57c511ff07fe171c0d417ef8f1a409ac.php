<?php

class __Mustache_57c511ff07fe171c0d417ef8f1a409ac extends Mustache_Template
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
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_trema/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $value = $context->find('courseindex');
        $buffer .= $this->section60de0c6012303d33efde4298ecb2de81($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->section0a6642d6a74bfa0e5f5fb271c21007ab($context, $indent, $value);
        $buffer .= '    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section6b40e2748488de16028fd4032111cc9b($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="drawer-toggles d-flex">
';
        $value = $context->find('courseindex');
        $buffer .= $this->section5449a5a0593c9f66c04a032e6be4d5d7($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionE9e7b968315925df8e2c5599d9a54825($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <h1 class="sr-only container pb-0 mb-0 mt-5">';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h1>
';
        $value = $context->find('showbanner');
        $buffer .= $this->section6f9f391302dea9f4f327b11227424bef($context, $indent, $value);
        $value = $context->find('showbanner');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('output.frontpage_settings_menu'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->sectionDdde20e50c2d47040627f038f9d6a62a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hascards');
        $buffer .= $this->section5948536290b7d1589a3d84756a2bcd7c($context, $indent, $value);
        $buffer .= $indent . '            <div id="page-content" class="pb-3 container d-print-block">
';
        $buffer .= $indent . '                <div id="region-main-box">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section4833668e3ab64a52de8319d62eeb9a0d($context, $indent, $value);
        $buffer .= $indent . '                    <section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionBfb58dd1d13a295db43bf0266e3aa6ee($context, $indent, $value);
        $value = $context->find('defaultfrontpagebody');
        $buffer .= $this->sectionB3340801c04198e7771e9cdbb4ac4276($context, $indent, $value);
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->section72a93137fa43b727f40759a358d07ffb($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->sectionF3f40c79a313808a205c3cdaa8a00f38($context, $indent, $value);
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $value = $context->find('hasadminblocks');
        $buffer .= $this->sectionAf3a0a4b30ea9bd13f4529670e5bdb85($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('enabletremafooter');
        $buffer .= $this->sectionAac42c0cf1564cc83d9f5a9013bf5cd0($context, $indent, $value);
        $value = $context->find('enabletremafooter');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('theme_boost/footer')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div id="goto-top-link">
';
        $buffer .= $indent . '        <a class="btn btn-light m-0" role="button" href="#"
';
        $buffer .= $indent . '            onclick="const p = document.getElementById(\'page\'); p.scrollTo({
';
        $buffer .= $indent . '                top: 0,
';
        $buffer .= $indent . '                left: 0,
';
        $buffer .= $indent . '                behavior: \'smooth\'
';
        $buffer .= $indent . '            });"
';
        $buffer .= $indent . '            aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section3b73b3c8a59c30afc10398e19942cfcc($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section9c4af6d25a64836b76fa846a931e9355($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->sectionA344ada5d9e680e9912a29f281ad5a05($context, $indent, $value);

        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c059d8e564034fcd5a4fcfed7ed8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closecourseindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closecourseindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60de0c6012303d33efde4298ecb2de81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_boost/drawer }}
            {{$id}}theme_boost-drawers-courseindex{{/id}}
            {{$drawerclasses}}drawer drawer-left {{#courseindexopen}}show{{/courseindexopen}}{{/drawerclasses}}
            {{$drawercontent}}
                {{{courseindex}}}
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-index{{/drawerpreferencename}}
            {{$drawerstate}}show-drawer-left{{/drawerstate}}
            {{$tooltipplacement}}right{{/tooltipplacement}}
            {{$closebuttontext}}{{#str}}closecourseindex, core{{/str}}{{/closebuttontext}}
        {{/ theme_boost/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'blockEfc32b531594d5d62ec9c68e35a53dc3'),
                        'drawerclasses' => array($this, 'block0dcbcdb48783bd0043cc25a3ecb99947'),
                        'drawercontent' => array($this, 'blockD56da21f9a4b20987f95cec76380b378'),
                        'drawerpreferencename' => array($this, 'block24fc4cc7410bc884a3b9fba5f26dc7b9'),
                        'drawerstate' => array($this, 'blockBd5099c9b82bf8a4037bbd56bb374a89'),
                        'tooltipplacement' => array($this, 'block2a81b037a416792e91b78e41049f49f9'),
                        'closebuttontext' => array($this, 'block9ac4e5859f44816b862545bc2c6e6a46'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cb47d3ed9b97c6d6d496d2358bec253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bd0cc4642e36d67e46c9dd550f1fa06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31618380a8d2d407a8b2acf35dd449a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closeblockdrawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closeblockdrawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a6642d6a74bfa0e5f5fb271c21007ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_boost/drawer }}
            {{$id}}theme_boost-drawers-blocks{{/id}}
            {{$drawerclasses}}drawer drawer-right{{#blockdraweropen}} show{{/blockdraweropen}}{{/drawerclasses}}
            {{$drawercontent}}
                <section class="d-print-none" aria-label="{{#str}}blocks{{/str}}">
                    {{{ addblockbutton }}}
                    {{{ sidepreblocks }}}
                </section>
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-block{{/drawerpreferencename}}
            {{$forceopen}}{{#forceblockdraweropen}}1{{/forceblockdraweropen}}{{/forceopen}}
            {{$drawerstate}}show-drawer-right{{/drawerstate}}
            {{$tooltipplacement}}left{{/tooltipplacement}}
            {{$drawercloseonresize}}1{{/drawercloseonresize}}
            {{$closebuttontext}}{{#str}}closeblockdrawer, core{{/str}}{{/closebuttontext}}
        {{/ theme_boost/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '        ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'block4ca482bf2f4c0292197ede951a52b02e'),
                        'drawerclasses' => array($this, 'block874d06fc7c30c807dc0ee7226cad4ec8'),
                        'drawercontent' => array($this, 'block382614dcdfc76c05d35bb2edf672a1b2'),
                        'drawerpreferencename' => array($this, 'block59146569a56c3d2642fa2e8224817be0'),
                        'forceopen' => array($this, 'block13847ba3219919ecdb2378620735177c'),
                        'drawerstate' => array($this, 'block0ea572ae0e89f9c5cc1dc5d7238a50d5'),
                        'tooltipplacement' => array($this, 'blockC945de95615645c65d6b2f192042e6ea'),
                        'drawercloseonresize' => array($this, 'blockE052079a625ca42b568ba24af19cc7eb'),
                        'closebuttontext' => array($this, 'blockC879444321d250421c3438099ae68173'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b40e2748488de16028fd4032111cc9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfaaa3dab86fd46a075d917e3ce891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3feaf801d4aa0a811fe41c3427e53335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/index_drawer, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/index_drawer, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5449a5a0593c9f66c04a032e6be4d5d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="drawer-toggler drawer-left-toggle open-nav">
                        <button
                            class="btn icon-no-margin"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_boost-drawers-courseindex"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="{{#str}}opendrawerindex, core{{/str}}"
                        >
                            <span class="sr-only">{{#str}}opendrawerindex, core{{/str}}</span>
                            {{#pix}} t/index_drawer, moodle {{/pix}}
                        </button>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="drawer-toggler drawer-left-toggle open-nav">
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                            class="btn icon-no-margin"
';
                $buffer .= $indent . '                            data-toggler="drawers"
';
                $buffer .= $indent . '                            data-action="toggle"
';
                $buffer .= $indent . '                            data-target="theme_boost-drawers-courseindex"
';
                $buffer .= $indent . '                            data-toggle="tooltip"
';
                $buffer .= $indent . '                            data-placement="right"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section3feaf801d4aa0a811fe41c3427e53335($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245ba37b5a58f162a63e0d10700eb739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerblocks, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerblocks, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section661bd5143b802e8296cb6821b01c4482(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer, core, {{#str}}opendrawerblocks, core{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer, core, ';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9e7b968315925df8e2c5599d9a54825(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="drawer-toggler drawer-right-toggle ml-auto">
                        <button
                            class="btn icon-no-margin"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_boost-drawers-blocks"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="{{#str}}opendrawerblocks, core{{/str}}"
                        >
                            <span class="sr-only">{{#str}}opendrawerblocks, core{{/str}}</span>
                            {{#pix}}t/blocks_drawer, core, {{#str}}opendrawerblocks, core{{/str}}{{/pix}}
                        </button>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="drawer-toggler drawer-right-toggle ml-auto">
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                            class="btn icon-no-margin"
';
                $buffer .= $indent . '                            data-toggler="drawers"
';
                $buffer .= $indent . '                            data-action="toggle"
';
                $buffer .= $indent . '                            data-target="theme_boost-drawers-blocks"
';
                $buffer .= $indent . '                            data-toggle="tooltip"
';
                $buffer .= $indent . '                            data-placement="right"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section661bd5143b802e8296cb6821b01c4482($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0661ddbd1a767b454f32beb05c2cb3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li data-target="#carouselTrema" data-slide-to="{{index}}" class="{{active}}"></li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li data-target="#carouselTrema" data-slide-to="';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a7f2fbf3a13e9b20818712ef224e30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2 class="pb-4 pl-3 mb-3">{{title}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2 class="pb-4 pl-3 mb-3">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6eb72318901542988da4bd75a2354d49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="mb-3 d-none d-md-block">{{{subtitle}}}</h3>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h3 class="mb-3 d-none d-md-block">';
                $value = $this->resolveValue($context->find('subtitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb9a4c0124ee62a37d7697c43cf5a05c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{btnhref}}" class="m-3 btn d-none d-md-inline-block {{btnclass}}" role="button">{{{btntext}}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('btnhref'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="m-3 btn d-none d-md-inline-block ';
                $value = $this->resolveValue($context->find('btnclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="button">';
                $value = $this->resolveValue($context->find('btntext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2060ef2df9c78eb0e57c369d8bd7cbcf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#btnhref}}<a href="{{btnhref}}" class="m-3 btn d-none d-md-inline-block {{btnclass}}" role="button">{{{btntext}}}</a>{{/btnhref}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('btnhref');
                $buffer .= $this->sectionFb9a4c0124ee62a37d7697c43cf5a05c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section164d74cf96ea1d0aa9ed47224a76e147(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' previous, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' previous, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC977dbdccee72023047f65a859b3fc21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' next, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdc555d684f371652da693f9797a81a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="carousel-item {{active}}">
                        <img src="{{image}}" class="d-block w-100" alt="{{title}}">
                        <div class="frontpage-banner-content">
                            {{#title}}<h2 class="pb-4 pl-3 mb-3">{{title}}</h2>{{/title}}
                            {{#subtitle}}<h3 class="mb-3 d-none d-md-block">{{{subtitle}}}</h3>{{/subtitle}}
                            {{#btntext}}{{#btnhref}}<a href="{{btnhref}}" class="m-3 btn d-none d-md-inline-block {{btnclass}}" role="button">{{{btntext}}}</a>{{/btnhref}}{{/btntext}}
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselTrema" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}} previous, core {{/str}}</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTrema" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}} next, core {{/str}}</span>
                    </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="carousel-item ';
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="d-block w-100" alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="frontpage-banner-content">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('title');
                $buffer .= $this->section03a7f2fbf3a13e9b20818712ef224e30($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('subtitle');
                $buffer .= $this->section6eb72318901542988da4bd75a2354d49($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('btntext');
                $buffer .= $this->section2060ef2df9c78eb0e57c369d8bd7cbcf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <a class="carousel-control-prev" href="#carouselTrema" role="button" data-slide="prev">
';
                $buffer .= $indent . '                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section164d74cf96ea1d0aa9ed47224a76e147($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    <a class="carousel-control-next" href="#carouselTrema" role="button" data-slide="next">
';
                $buffer .= $indent . '                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionC977dbdccee72023047f65a859b3fc21($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section452936571ccc1815f1b1230d4e44db2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="carouselTrema" class="carousel slide carousel-fade {{^frontpagecarrousel}}d-none{{/frontpagecarrousel}}" data-ride="carousel">
                <div class="carousel-inner" data-interval="false">
                    <ol class="carousel-indicators">
                        {{#frontpagecarrousel}}
                            <li data-target="#carouselTrema" data-slide-to="{{index}}" class="{{active}}"></li>
                        {{/frontpagecarrousel}}
                    </ol>
                    {{#frontpagecarrousel}}
                    <div class="carousel-item {{active}}">
                        <img src="{{image}}" class="d-block w-100" alt="{{title}}">
                        <div class="frontpage-banner-content">
                            {{#title}}<h2 class="pb-4 pl-3 mb-3">{{title}}</h2>{{/title}}
                            {{#subtitle}}<h3 class="mb-3 d-none d-md-block">{{{subtitle}}}</h3>{{/subtitle}}
                            {{#btntext}}{{#btnhref}}<a href="{{btnhref}}" class="m-3 btn d-none d-md-inline-block {{btnclass}}" role="button">{{{btntext}}}</a>{{/btnhref}}{{/btntext}}
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselTrema" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}} previous, core {{/str}}</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTrema" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}} next, core {{/str}}</span>
                    </a>
                    {{/frontpagecarrousel}}
                </div>
                {{{ output.frontpage_settings_menu }}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="carouselTrema" class="carousel slide carousel-fade ';
                $value = $context->find('frontpagecarrousel');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '" data-ride="carousel">
';
                $buffer .= $indent . '                <div class="carousel-inner" data-interval="false">
';
                $buffer .= $indent . '                    <ol class="carousel-indicators">
';
                $value = $context->find('frontpagecarrousel');
                $buffer .= $this->sectionF0661ddbd1a767b454f32beb05c2cb3e($context, $indent, $value);
                $buffer .= $indent . '                    </ol>
';
                $value = $context->find('frontpagecarrousel');
                $buffer .= $this->sectionFdc555d684f371652da693f9797a81a4($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.frontpage_settings_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBacabc428099f2a3fa2b1de3e538a743(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2 class="pb-4 pl-3 mb-3">{{{frontpagetitle}}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2 class="pb-4 pl-3 mb-3">';
                $value = $this->resolveValue($context->find('frontpagetitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17eb9f0fc2dc19c38f09eb95424ec8ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="mb-3">{{{frontpagesubtitle}}}</h3>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h3 class="mb-3">';
                $value = $this->resolveValue($context->find('frontpagesubtitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11788774a29fd6fcbf272948052c1970(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{frontpagebuttonhref}}" class="m-3 btn {{frontpagebuttonclass}}" role="button">{{{frontpagebuttontext}}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('frontpagebuttonhref'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="m-3 btn ';
                $value = $this->resolveValue($context->find('frontpagebuttonclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="button">';
                $value = $this->resolveValue($context->find('frontpagebuttontext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section434fdd96dd1ff4ae18c04574409eaf44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#frontpagebuttonhref}}<a href="{{frontpagebuttonhref}}" class="m-3 btn {{frontpagebuttonclass}}" role="button">{{{frontpagebuttontext}}}</a>{{/frontpagebuttonhref}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('frontpagebuttonhref');
                $buffer .= $this->section11788774a29fd6fcbf272948052c1970($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f9f391302dea9f4f327b11227424bef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#ifcarrousel}}
            <div id="carouselTrema" class="carousel slide carousel-fade {{^frontpagecarrousel}}d-none{{/frontpagecarrousel}}" data-ride="carousel">
                <div class="carousel-inner" data-interval="false">
                    <ol class="carousel-indicators">
                        {{#frontpagecarrousel}}
                            <li data-target="#carouselTrema" data-slide-to="{{index}}" class="{{active}}"></li>
                        {{/frontpagecarrousel}}
                    </ol>
                    {{#frontpagecarrousel}}
                    <div class="carousel-item {{active}}">
                        <img src="{{image}}" class="d-block w-100" alt="{{title}}">
                        <div class="frontpage-banner-content">
                            {{#title}}<h2 class="pb-4 pl-3 mb-3">{{title}}</h2>{{/title}}
                            {{#subtitle}}<h3 class="mb-3 d-none d-md-block">{{{subtitle}}}</h3>{{/subtitle}}
                            {{#btntext}}{{#btnhref}}<a href="{{btnhref}}" class="m-3 btn d-none d-md-inline-block {{btnclass}}" role="button">{{{btntext}}}</a>{{/btnhref}}{{/btntext}}
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselTrema" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}} previous, core {{/str}}</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTrema" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}} next, core {{/str}}</span>
                    </a>
                    {{/frontpagecarrousel}}
                </div>
                {{{ output.frontpage_settings_menu }}}
            </div>
        {{/ifcarrousel}}
        {{^ifcarrousel}}
        <div id="frontpage-banner">
            <div id="frontpage-banner-content">
	            {{#frontpagetitle}}<h2 class="pb-4 pl-3 mb-3">{{{frontpagetitle}}}</h2>{{/frontpagetitle}}
	            {{#frontpagesubtitle}}<h3 class="mb-3">{{{frontpagesubtitle}}}</h3>{{/frontpagesubtitle}}
	            {{#frontpagebuttontext}}{{#frontpagebuttonhref}}<a href="{{frontpagebuttonhref}}" class="m-3 btn {{frontpagebuttonclass}}" role="button">{{{frontpagebuttontext}}}</a>{{/frontpagebuttonhref}}{{/frontpagebuttontext}}
            </div>
            {{{ output.frontpage_settings_menu }}}
        </div>
        {{/ifcarrousel}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('ifcarrousel');
                $buffer .= $this->section452936571ccc1815f1b1230d4e44db2b($context, $indent, $value);
                $value = $context->find('ifcarrousel');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div id="frontpage-banner">
';
                    $buffer .= $indent . '            <div id="frontpage-banner-content">
';
                    $buffer .= $indent . '	            ';
                    $value = $context->find('frontpagetitle');
                    $buffer .= $this->sectionBacabc428099f2a3fa2b1de3e538a743($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '	            ';
                    $value = $context->find('frontpagesubtitle');
                    $buffer .= $this->section17eb9f0fc2dc19c38f09eb95424ec8ca($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '	            ';
                    $value = $context->find('frontpagebuttontext');
                    $buffer .= $this->section434fdd96dd1ff4ae18c04574409eaf44($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '            </div>
';
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->findDot('output.frontpage_settings_menu'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDdde20e50c2d47040627f038f9d6a62a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="secondary-navigation">
                {{> core/moremenu}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="secondary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5948536290b7d1589a3d84756a2bcd7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> theme_trema/frontpage_cards }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_trema/frontpage_cards')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4833668e3ab64a52de8319d62eeb9a0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="region-main-settings-menu" class="d-print-none">
                        <div> {{{ regionmainsettingsmenu }}} </div>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '                        <div> ';
                $value = $this->resolveValue($context->find('regionmainsettingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfb58dd1d13a295db43bf0266e3aa6ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="region_main_settings_menu_proxy"></div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3340801c04198e7771e9cdbb4ac4276(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div id="defaultfrontpagebody" class="mb-4">
                            {{{defaultfrontpagebody}}}
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div id="defaultfrontpagebody" class="mb-4">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('defaultfrontpagebody'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72a93137fa43b727f40759a358d07ffb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> core/activity_header }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3f40c79a313808a205c3cdaa8a00f38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> core/url_select}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4d86a34e4c20935294a2d3beeea1066(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'adminarea, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'adminarea, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf3a0a4b30ea9bd13f4529670e5bdb85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="side-admin-blocks" class="mt-4">
            <div class="container py-3">
                <h3 class="text-center my-2">{{#str}}adminarea, theme_trema{{/str}}</h3>
                {{{ sideadminblocks }}}
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div id="side-admin-blocks" class="mt-4">
';
                $buffer .= $indent . '            <div class="container py-3">
';
                $buffer .= $indent . '                <h3 class="text-center my-2">';
                $value = $context->find('str');
                $buffer .= $this->sectionB4d86a34e4c20935294a2d3beeea1066($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('sideadminblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAac42c0cf1564cc83d9f5a9013bf5cd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> theme_trema/footer }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_trema/footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b73b3c8a59c30afc10398e19942cfcc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totop, theme_trema ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' totop, theme_trema ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c4af6d25a64836b76fa846a931e9355(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/up, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/up, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA344ada5d9e680e9912a29f281ad5a05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending(\'theme_boost/loader\');
    require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
        Drawer.init();
        M.util.js_complete(\'theme_boost/loader\');
    });
    require([\'theme_trema/main\'], (module) => module.init());
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '    require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '        Drawer.init();
';
                $buffer .= $indent . '        M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    require([\'theme_trema/main\'], (module) => module.init());
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockEfc32b531594d5d62ec9c68e35a53dc3($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-courseindex';
    
        return $buffer;
    }

    public function block0dcbcdb48783bd0043cc25a3ecb99947($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function blockD56da21f9a4b20987f95cec76380b378($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $this->resolveValue($context->find('courseindex'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block24fc4cc7410bc884a3b9fba5f26dc7b9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-index';
    
        return $buffer;
    }

    public function blockBd5099c9b82bf8a4037bbd56bb374a89($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-left';
    
        return $buffer;
    }

    public function block2a81b037a416792e91b78e41049f49f9($context)
    {
        $indent = $buffer = '';
        $buffer .= 'right';
    
        return $buffer;
    }

    public function block9ac4e5859f44816b862545bc2c6e6a46($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionD8c059d8e564034fcd5a4fcfed7ed8eb($context, $indent, $value);
    
        return $buffer;
    }

    public function block4ca482bf2f4c0292197ede951a52b02e($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-blocks';
    
        return $buffer;
    }

    public function block874d06fc7c30c807dc0ee7226cad4ec8($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-right';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section1cb47d3ed9b97c6d6d496d2358bec253($context, $indent, $value);
    
        return $buffer;
    }

    public function block382614dcdfc76c05d35bb2edf672a1b2($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <section class="d-print-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('addblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </section>
';
    
        return $buffer;
    }

    public function block59146569a56c3d2642fa2e8224817be0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-block';
    
        return $buffer;
    }

    public function block13847ba3219919ecdb2378620735177c($context)
    {
        $indent = $buffer = '';
        $value = $context->find('forceblockdraweropen');
        $buffer .= $this->section1bd0cc4642e36d67e46c9dd550f1fa06($context, $indent, $value);
    
        return $buffer;
    }

    public function block0ea572ae0e89f9c5cc1dc5d7238a50d5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-right';
    
        return $buffer;
    }

    public function blockC945de95615645c65d6b2f192042e6ea($context)
    {
        $indent = $buffer = '';
        $buffer .= 'left';
    
        return $buffer;
    }

    public function blockE052079a625ca42b568ba24af19cc7eb($context)
    {
        $indent = $buffer = '';
        $buffer .= '1';
    
        return $buffer;
    }

    public function blockC879444321d250421c3438099ae68173($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section31618380a8d2d407a8b2acf35dd449a4($context, $indent, $value);
    
        return $buffer;
    }
}
