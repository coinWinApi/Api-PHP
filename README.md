#  .... API请求库
## 用法参考demo.php
## pay.php已经定义了一些基本方法, 如果要添加新方法,按照xx文档加入就行 xxx文档地址


`// 添加新方法需要定义的参数
<?php
// 接口地址
$this->api_method = "/api/..."; // REST请求方法 一般为GET或POST
$this->req_method = 'GET'; // 请求参数 根据文档要求定义
$param = [
	'parama' => '123'
];
$url = $this->create_sign_url($param); // 参数配置完毕后调用create_sign_url方法生成验签URL 然后curl方法发起请求并获取返回值
$return = $this->curl($url);
return json_decode($return,true);`
?>
