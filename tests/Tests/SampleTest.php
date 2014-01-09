<?php
namespace Tests;

use ngyuki\Example\Psr4\Sample;

/**
 * @author ngyuki
 */
class SampleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function test()
    {
        $sample = new Sample();
        assertTrue($sample->func());
    }
}
