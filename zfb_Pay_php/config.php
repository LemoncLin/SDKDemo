<?php
$config = array (	
		//应用ID,您的APPID。  
        'app_id' => "2016091400510534",
  
        //商户私钥  
        'merchant_private_key' => "MIIEogIBAAKCAQEAwWS+j9Uuw5NntpwRqUl5sYc1t9KDLCvgIBzkiosrhg52M1nZ9FqibjdGm+FuY4Qi3BkHGI/qIzJQkbrbn93/6hwTij07HvVglJ2hSnBCTiUmkZ7euBhuv4JbWDUbxXczDM9X1ikNafgHGemJKZJ+nwo19+HgYqj8KiS44VgDgz3/rlZx42d8CmFYPsOxyYSO/BCste0qgBokG5EvQuCWt7ZTgq2XCtn9RsTDtY+84qrj2OJ42pzwMghC2PQ7r1J8bj8R1RJGCCGbhVp6fBkVNIUrqDwTwxgh01JSPxasqncs+DpDh6KtKZ+y2ctgIKalJxz64W9FIBzGjMNtTwwC2QIDAQABAoIBAE+cCx3mYeO8cDspr9OCHYhI4oITNFAgl5hgjGvDslzy4xFscV43WRoJwxU0DV8F69uyqcsgov9uHOCAjRwYJNrYR+rmHco2tFU5NkYQRBsrC99yCLi7xgsrvDJpWk9FLEyfpcbRC2aN5U5zZjUoytrpNyIdZ2L1sSggCcMpmfiR+8tU+vSD/YYD3O8J/Mz+tU5q4evJbylzoPQ1brdeLs+zCU4os94OfUTeAgkH+rtEQjtgEklR81IcAWMp7lV2nlZgEdWyMrebRxFS114SGLvhiD1hojCsGbFAdCqid7zJGUp18RhP6BA+OZOVpfbnoFzeWi6IM5z8VW0LGJnF5skCgYEA47XCMwonpRxuWJ6AjE8WZqCBZZ2lqrmoVrZRdFbkuS0OzzhWCA7XrN2DhUQQQQ6Y53j3sDzstjL9yG0cyUCS9o44yLuQRHaXoijDtZKzIl3ru86DDLrGnw3Q79D7D+eCx92VnoLiaH4uuJciXmbC9CdZ8r1P2OO5AJGDZhmyB1sCgYEA2WuP4LORdyUzhCTRX0vS7iPgC/OjWIAaXWfE+Asx4FUi+xpdTwn0baTfejwJHhUGJecnjkg1EcfIOrMX05ufghuhxhgCG0lAC/RvqsUPRDfN6T8uwTU80iU7MFXxOuC+LD+3HWV0ormw/leyFSx8K8joS6OUBl4O10ux2FyEqNsCgYAUMaZLSHdDmUXf7g6QYuMlrs5K6LQsc9KN/hUzMBGQqoJJtkFK7aYK2oozY1ndqyG8RWoR4xVLAzKmd6a54lQmMW6vvpKIv8uqwdq5W40vWwzw1tugYWAD8wG4gtwBCRL8DpaaPBlAExCpph2SKaLYbDT55fgSz/80IbN5doXnSQKBgGRQqpvEflN4yKIp0qijdXkG+HLLQQyuXnvGSy0fDS4yWed9rJuxPiPwtGPTm2lTzfhjBO8zBblkclATHeU2oowHb8bUgPRSAckCSRuDvJ1/GfSKgGoIxD05jGuq25iM5XHJHBXmH8CM6MsRb0sxsUEKe5Oar8uYTkSr2iy300WNAoGAFkrdYD4EcabJsOmnVgkpcJRmoqnTFMtMvPj2YpkFkIEGp8lfbgdGuNOXbrugPddycelNz+5Lx4WqSelicMHsRVq/yk/tu5Z+tGw0zMi+p0HfEivSsX40oZw2kXUyrfSA4OfKpqVd7N59Yq0OHea8nlDg1flGFs7Fj6ZZke5TEgg=",
          
        //异步通知地址  
        'notify_url' => "http://127.0.0.1:801/zfbtest/notify_url.php",    //"http://www.8880666.com",//alipay/notify_url.php",
          
        //同步跳转  
        'return_url' => "http://127.0.0.1:801/zfbtest/return_url.php",    //"http://www.8880666.com",   //  alipay/return_url.php",
  
        //编码格式  
        'charset' => "UTF-8",  
  
        //签名方式  
        'sign_type'=>"RSA2",  
  
        //支付宝网关  
        'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
  
        //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。  
        'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmVSEnGtFUM9RjO8btsx/LwcOLgLiC2UyaTxEIMbWsLM9oeMaChLwQZb7m7Lv3u/Yjd5zP8fj+fLX5KD++Zh8gopEJMJ6/jlqQo1c7nN3I8YtI9WlO6XEezjg9X2nTEvOuhZ7QD7uRWIZHLnQTiPCHlCachT9yHUvRWUPUeJvDs4izswHxmpNryAKWiLIsmqWsx63qUB3xt5mUqxlASOL85s4P0svlIJmmerOrq5pNKAVu5infd9r5FQhzv+V/iSiLSyKSoUfKavhrne7oUwoJOTGzyXoA477Q907dywhATVYkbN57nxgh91y5m0csBdkTVTMABlemg8nAa1IwY7vSwIDAQAB",
);