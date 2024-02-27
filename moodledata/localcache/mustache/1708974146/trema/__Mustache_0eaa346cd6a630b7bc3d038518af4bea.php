<?php

class __Mustache_0eaa346cd6a630b7bc3d038518af4bea extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="mydashboard-admin" class="container-fluid">
';
        $buffer .= $indent . '    <div class="row text-center">
';
        $buffer .= $indent . '        <div class="col-sm-3">
';
        $buffer .= $indent . '            <div class="card-body">
';
        $buffer .= $indent . '                <i class="fa fa-4x fa-database float-right p-1"></i>
';
        $buffer .= $indent . '                <h4>';
        $value = $this->resolveValue($context->find('disk'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '                <h6>';
        $value = $context->find('str');
        $buffer .= $this->sectionF09acea97a878dd2c842d94c4b54f8fb($context, $indent, $value);
        $buffer .= '</h6>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-sm-3">
';
        $buffer .= $indent . '            <div class="card-body">
';
        $buffer .= $indent . '                <i class="fa fa-4x fa-graduation-cap float-right p-1"></i>
';
        $buffer .= $indent . '                <h4>';
        $value = $this->resolveValue($context->find('activecourses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' - ';
        $value = $this->resolveValue($context->find('totalcourses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '                <h6>';
        $value = $context->find('str');
        $buffer .= $this->section4d8ff77e72942d7890ee8681e09ae32e($context, $indent, $value);
        $buffer .= ' - ';
        $value = $context->find('str');
        $buffer .= $this->section48f510e7fd7fe1d3abdc17a177a89a90($context, $indent, $value);
        $buffer .= '</h6>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-sm-3">
';
        $buffer .= $indent . '            <div class="card-body">
';
        $buffer .= $indent . '                <i class="fa fa-4x fa-users float-right p-1"></i>
';
        $buffer .= $indent . '                <h4>';
        $value = $this->resolveValue($context->find('activeenrolments'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' - ';
        $value = $this->resolveValue($context->find('enrolments'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '                <h6>';
        $value = $context->find('str');
        $buffer .= $this->section65d32e3667ae55a6cfa9cc9d89c3f610($context, $indent, $value);
        $buffer .= ' - ';
        $value = $context->find('str');
        $buffer .= $this->section48f510e7fd7fe1d3abdc17a177a89a90($context, $indent, $value);
        $buffer .= '</h6>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->findDot('issuestatus.warning');
        $buffer .= $this->section87dbe4a4cabd1b812723d331ee052f18($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF09acea97a878dd2c842d94c4b54f8fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'diskusage, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'diskusage, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d8ff77e72942d7890ee8681e09ae32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activecourses, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activecourses, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48f510e7fd7fe1d3abdc17a177a89a90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'total, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'total, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65d32e3667ae55a6cfa9cc9d89c3f610(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activeenrollments, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activeenrollments, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00c9fe1481e9ea80b5ab60d7f495bd02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'alert, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'alert, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94c1815a549ee922affa79b76c201c25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'systemsecurity, theme_trema';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'systemsecurity, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87dbe4a4cabd1b812723d331ee052f18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-sm-3">
            <div class="card-body">
                <i class="fa fa-4x fa-ambulance float-right p-1"></i>
                <a href="{{config.wwwroot}}/report/security/index.php">
                    <div class="m-2 position-relative">
                        <b class="text-uppercase">{{#str}}alert, theme_trema{{/str}}</b>
                            <span class="count-container badge-danger" data-region="count-container"
                            style="top: -.5rem; right: auto;" title="{{#str}}alert, theme_trema{{/str}}">{{issuestatus.warning}}</span>
                    </div>
                    <h6>{{#str}}systemsecurity, theme_trema{{/str}}</h6>
                </a>
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-sm-3">
';
                $buffer .= $indent . '            <div class="card-body">
';
                $buffer .= $indent . '                <i class="fa fa-4x fa-ambulance float-right p-1"></i>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/report/security/index.php">
';
                $buffer .= $indent . '                    <div class="m-2 position-relative">
';
                $buffer .= $indent . '                        <b class="text-uppercase">';
                $value = $context->find('str');
                $buffer .= $this->section00c9fe1481e9ea80b5ab60d7f495bd02($context, $indent, $value);
                $buffer .= '</b>
';
                $buffer .= $indent . '                            <span class="count-container badge-danger" data-region="count-container"
';
                $buffer .= $indent . '                            style="top: -.5rem; right: auto;" title="';
                $value = $context->find('str');
                $buffer .= $this->section00c9fe1481e9ea80b5ab60d7f495bd02($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('issuestatus.warning'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <h6>';
                $value = $context->find('str');
                $buffer .= $this->section94c1815a549ee922affa79b76c201c25($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                </a>
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

}
