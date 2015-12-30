#### ThinkPHP 整合 PHPMailer, 使发邮件更方便

* 步骤:

    1. 使用下载的 ThinkPHP 文件夹覆盖你项目的 ThinkPHP 文件夹
    
    	> 注意: 文件夹下有两个文件
    	
    	> 文件一是[PHPMailer](https://github.com/PHPMailer/PHPMailer)源文件(方便使用, 直接集成进来了), 路径是 ThinkPHP/Library/Vendor/PHPMailer
    	
    	> 文件二是自定义的扩展文件, 文件路径是 ThinkPHP/Library/Org/Util/Email.class.php
    	
    	> 如果与你当前文件有冲突, 请谨慎操作
    
    2. 把 email.php 文件复制至 /your/path/YourAppName/Common/Conf 此目录下, 是 email 的配置文件, 相关配置都可在这个文件中进行修改
    	
    3. 在 /your/path/YourAppName/Common/Conf/config.php 文件里, 添加如下一行
    
    	```php
    	<?php
    	'LOAD_EXT_CONFIG' => 'email',
    	```
    	> 参见 [TP官方说明](http://doc.thinkphp.cn/manual/extend_config.html)
    	
    
    4. 使用方法
    
    	```php
    	<?php
		namespace Home\Controller;

		use Think\Controller;
		use Org\Util\Email;

		class IndexController extends Controller {
    		public function index(){
        		$mail = new Email;
        		// 设置抄送的邮箱集合
        		$cc = array(
            		'debmzhang@163.com',
        		);
        		$sendResult = $mail->send('790820730@qq.com', 'test title', 'test content', $cc);
        		// 结果为 true 则表示发送邮件成功
        		var_dump($sendResult);
    		}
		}
    	```

> 使用中有问题可联系QQ: 790820730