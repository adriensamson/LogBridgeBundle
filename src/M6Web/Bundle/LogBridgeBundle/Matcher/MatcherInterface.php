<?php

namespace M6Web\Bundle\LogBridgeBundle\Matcher;

/**
 * MatcherInterface
 */
interface MatcherInterface
{
    /**
     * match
     *
     * @param string  $environment Environment name
     * @param string  $route       Route name
     * @param string  $method      Method name
     * @param integer $status      Http code status
     *
     * @return boolean
     */   
    static public function match($environment, $route, $method, $status);

}
