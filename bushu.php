<?php
	date_default_timezone_set('Asia/Shanghai');
	$uid = '';//乐动力的用户id
	$steps = '';//想刷的步数
	$url = 'http://pl.api.ledongli.cn/xq/io.ashx?&action=profile&cmd=updatedaily&uid='.$uid.'&v=5.5%20ios&vc=551%20ios';
	$post = 'list=%5B%7B%22pm2d5%22%3A0%2C%22report%22%3A%22%5B%7B%5C%22activity%5C%22%3A%5C%22walking%5C%22%2C%5C%22calories%5C%22%3A437.14414200191618%2C%5C%22steps%5C%22%3A11111%2C%5C%22distance%5C%22%3A7519.0167199999987%2C%5C%22duration%5C%22%3A7140%7D%5D%22%2C%22distance%22%3A7519.0167199999987%2C%22steps%22%3A'.$steps.'%2C%22location%22%3A%22%E6%9D%AD%E5%B7%9E%E5%B8%82%22%2C%22date%22%3A'.mktime(0, 0, 0, date('n'), date('j'), date('Y')).'%2C%22calories%22%3A503.07246579211363%2C%22duration%22%3A6060%2C%22lon%22%3A120.2145220549457%2C%22activeValue%22%3A138208%2C%22lat%22%3A30.209404890080783%7D%5D&pc=fef5836f1127975bc9d19f8a24bb2cb3e46b6530';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_exec($ch);
	curl_close($ch);
