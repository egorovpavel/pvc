<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pavel_000
 * Date: 10/28/13
 * Time: 11:43 PM
 * To change this template use File | Settings | File Templates.
 */

namespace PVC\tests\fixtures;

use Symfony\Component\HttpFoundation\Request;

class ResolvableDependencyClass
{
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}