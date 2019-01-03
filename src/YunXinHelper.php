<?php
/**
 * Created by PhpStorm.
 * User: sunpq
 * Date: 2019/1/2
 * Time: 下午2:16
 */

namespace Pinkong\YunXin;

use Illuminate\Support\Facades\Facade;

class YunXinHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'YunXinHelper';
    }
}
