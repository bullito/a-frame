<?php

namespace af;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-27 at 23:04:46.
 */
class nodeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var node
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new node;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers af\node::__get
     * @todo   Implement test__get().
     */
    public function test__get()
    {
        // Remove the following lines when you implement this test.
        $this->assertEquals($this->object->_class(), $this->object->_class);
    }

    /**
     * @covers af\node::__call
     * @todo   Implement test__call().
     */
    public function test__call()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers af\node::app
     * @todo   Implement testApp().
     */
    public function testApp()
    {
        $app    =   new \af\app;
        $app->test  =   new \af\node($app);
        $this->assertEquals($app, $app->test->app());
    }

    /**
     * @covers af\node::view
     * @todo   Implement testView().
     */
    public function testView()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers af\node::_class
     * @todo   Implement test_class().
     */
    public function test_class()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers af\node::_path
     * @todo   Implement test_path().
     */
    public function test_path()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers af\node::_iscached
     * @todo   Implement test_iscached().
     */
    public function test_iscached()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers af\node::_cache
     * @todo   Implement test_cache().
     */
    public function test_cache()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

}
