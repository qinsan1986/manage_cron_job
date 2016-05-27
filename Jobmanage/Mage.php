<?php
namespace Jobmanage;
use \Exception;

final class Mage
{
    const VERSION    = '0.0.0.1';

    /**
     * 版本信息
     * @return string
     */
    public static function getVersion()
    {
        return self::VERSION;
    }

    /**
     * 入口
     */
    public static function run()
    {
        try {
            echo self::getVersion();
            throw new Exception("Value must be 1 or below");
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
}