<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016091300504452",

		//商户私钥
		'merchant_private_key' => "MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQClzlYLjgiXLHtHa2ciQlkyNjDorpgN+cw8T5wYUP9vzW5sSECGxVNiyLB23C8DWOVeQd02HwjINaB+NPKJwqm8DvDz24hjtQb7QetG7cgTeUcmpgSqnPUTlwTIuJBToJ3hfEzZb5SsmlGgQFFdwgDq4KaXBHRjF9s8zOPH9HTOyq6I2yMOqqJSeByTJHyoplzrWyECeh0RTFKRP3GPth5TPXBOLhbSPU+4zE4muvqoCQqY2tIzglRWmLzgP3l33jjunhxvc9gIARkeG+hyBAGU/2H+I4xm7J8EJzR3D5xN7S2zdF5K93axKm9CCHmwpYl0wlPbWW4NGa0aRwTykTr1AgMBAAECggEAemy9784x3Z2EcRmGjy86OO72cffoYfldqfKGKRY1ZVHkBKPcsSYmCbxxP3IYbHpI8a3kLj//9gRSup1RsBJBzY+irgwcyrIxs3faxwZvQqG7vXe73lYCRzKs36AXQQhJSuLCw5G1zzQqrQ6QhY/nqYWyu7MYVMqaoGwQi+WeEck4JHAZDmXxjqXh+ZYZfzeikljGBi1LAkZR4cMbx97+LKCT0PDDqTgIkoYyyR1lddiVqb5dnUzc55fNdZa97KAqm7QDFYmzWsfkg9Bc4NGjCdiNrVO04fr37pY60l8zQKSwborKad3IuI0648yIUKmU7rqzPwq8pzxGd5Cj+s+lwQKBgQDi/+YCjDfIBtvRimFiaVOkzi0QpfIHWC0jhSUCJAA/8lgXzb5jsoZ5nhuENjVu6ShRpjXBjF/GaG5b0ioHN5CVtGg6yzwIS5Me//q1lHdwRBXLbloCJi/VVQJcFa3f+ryW7eqwvZsw7wGBAH+I1aHizDyuyjdV3pJrBjNgVJDzmQKBgQC6/RRVB48imcifeJQboF+2of4JQbv6FrDDRZfyJpJxujFocwnAYa+84H4fG3JUCtC0tAcu6loEcTxJY6NjkYqY2TFZROyRQSW0OSCB3YEJEjag89opRZhDgz5ml6ZqvO8BDFkTY0/LdFFk7HVlzukVw7oaoWP4tE5IWocaHmZbvQKBgGwBMaEYshm8Ga7TVo6Kar/JUWvQaR3ReHikCv2/v1atqfh5bhLliFIpRhJb8IR67zIaEQ2sCo3OdmO91T1l1KdGFSmUNVYFD1T6moD2yPVjj7MhKDZJkQzBy8OglQAyvrRZMwcwz7wym9aTNBsY+lN8tYq8sCNtKOE/LAazddxRAoGAW/XxVOwVyfeFwmADvx59VA2RKS5J63HTVwXX94Bez0251NuWtSWVzzc878GI1apIAEb1rW4V/U9PTeyRw3slhYxzh6qtCbbXey4JPbUZK8PoV/n1lgyjGLjoLH5ymtX2WTagbDeQW8gF67Oa/Qnoegq7cTNkPkE2qsDS5taCkqUCgYA8ZU88kIyfWeCQ9MokoyoVG9zbqD5iADx3h0SuasdUiRI9tc/8THlZLReJUOtprmBUHIHFBgdz0vbRS8xUXF6wVEKTCl6k+eOOb9PQHON8cs6b14r7P+Le7zRxg/hDLhEmx/P+pow9J7YSyk7K3S3+lHJvvmFGjezaBBWuGQaJHg==",
		
		//异步通知地址
		'notify_url' => "http://www.a67.com",
		
		//同步跳转
		'return_url' => "http://www.a67.com",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwdKvuSK5GxElTWAgyakkVthIcmGnVnUUrTXKqJnrENbrDU/vRfR0EhOtO9ls2K7stGx+T1IsC+/53Id7L2e0sUZjmvItFoRf+2hxurFKwByF/i0w12oe1wo/Puhl46wzsv7kAwx1zluTI8MbKC1VNye11dvqcUfiEwWj81Fo+TN5CGPECiWy2IsJKS9LbMz9Y0fhLlaWg94r8WZae9e9Z9C8KFfslWOM9zeCZKS9/Hrogx3TpqTwTBmO3PLD3jPwATPnaa09bLQGXaKYip4yZzEhcjO9jKEKV06hHSPCveELwQgIHjhT+tRDnAWXaAL/JV7N9QEm7eJx5y6G/osV6wIDAQAB",
);