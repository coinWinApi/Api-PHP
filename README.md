#  币赢钱包 API请求库
## 用法参考demo.php
## pay.php已经定义了一些基本方法, 如果要添加新方法,按照币赢钱包Api文档加入就行 [https://github.com/coinWinApi/API_Docs#Pay](https://github.com/coinWinApi/API_Docs#Pay "文档")文档地址
	// 添加新方法需要定义的参数
    <?php
    function xx(){
		$this->api_method = "/api/...";  // 接口地址
		$this->req_method = 'GET';// 请求方法 一般为GET或POST 
		$param = [
		'parama' => '123' // 请求参数 根据文档要求定义
		];
		$url = $this->create_sign_url($param); // 参数配置完毕后调用create_sign_url方法生成验签URL 
		$return = $this->curl($url);			//curl方法发起请求并获取返回值
		return json_decode($return,true);		//将返回值序列化成json格式
	}	
    ?>
[PHP-Demo](https://github.com/coinWinApi/Api-PHP-Demo "Demo")
