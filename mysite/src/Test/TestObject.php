<?php

namespace HashLink\Test;

use SilverStripe\View\SSViewer;
use SilverStripe\View\ViewableData;

class TestObject extends ViewableData
{
    public function getLink()
    {
        return '#hashlink';
    }
    
    public function getTemplate()
    {
        return SSViewer::create([static::class])->dontRewriteHashlinks();
    }
    
    public function forTemplate()
    {
        return $this->renderWith($this->getTemplate());
    }
}
