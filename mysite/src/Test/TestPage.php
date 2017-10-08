<?php

namespace HashLink\Test;

use Page;

class TestPage extends Page
{
    /**
     * Creates any required default records (if they do not already exist).
     *
     * @return void
     */
    public function requireDefaultRecords()
    {
        // Require Default Records (from parent):
        
        parent::requireDefaultRecords();
        
        // Require Default Records:
        
        if (!self::get()->exists()) {
            
            $page = self::create();
            
            $page->Title = 'Test Page';
            $page->URLSegment = 'test-page';
            
            $page->write();
            $page->publishSingle();
            
        }
    }
    
    /**
     * Answers the test object.
     *
     * @return TestObject
     */
    public function getTestObject()
    {
        return TestObject::create();
    }
}
