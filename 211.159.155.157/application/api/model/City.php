<?php
namespace app\api\model;

use think\Model;
use think\Db;

class City extends Model
{
  public function getCity($cityname=1)
  {$res=Db::name('weather')->where('name',$cityname)->value('code');
   return $res;
  }
  public function getWeatherList()
    {
        $res = Db::name('weather')->select();
        return $res;
    }
}