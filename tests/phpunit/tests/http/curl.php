<?php

require_once dirname(__FILE__) . '/base.php';

/**
 * @group http
 * @group external-http
 */
class Tests_HTTP_curl extends WP_HTTP_UnitTestCase
{
    var $transport = 'curl';
}
