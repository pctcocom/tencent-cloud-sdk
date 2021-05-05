<?php
namespace Pctco\TencentCloudSdk;
include 'cos-sdk-v5.phar';
class Test{
   public function abc(){
      //新建BosClient
      $bucket = "app-develop-test-1258944909";
      $cosClient = new \Qcloud\Cos\Client([
         'region' => "ap-shanghai",
         'schema' => 'https', //协议头部，默认为http
         'credentials'=> [
            'secretId'  => "" ,
            'secretKey' => ""
         ]
      ]);

      return $cosClient;
   }
}
