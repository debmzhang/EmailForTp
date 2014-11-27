ThinkPHP 整合 PHPMailer, 使发邮件更方便

步骤: 
    1. 先下载PHPMailer https://github.com/PHPMailer/PHPMailer
    2. 把下载到的整个文件夹复制到项目的 wwwroot/ThinkPHP/Library/Vendor 目录下
    3. 注意 wwwroot/ThinkPHP/Library/Vendor/PHPMailer 这个文件夹下应该是所有的文件, 而不是 PHPMailer 文件夹
    4. 在 wwwroot/ThinkPHP/Library/ 目录下创建 Custom 目录, 代表自定义的类库
    5. 在 wwwroot/ThinkPHP/Library/Custom/ 此目录下 创建 Email 目录, 把 Email.class.php 文件, 复制至此目录下
    6. 在 wwwroot/Application/Common/Conf/config.php 文件里, 添加一行, 'LOAD_EXT_CONFIG' => 'email', 具体实现, 可参见官方说明 http://doc.thinkphp.cn/manual/extend_config.html
    7. 把 email.php 文件复制至 wwwroot/Application/Common/Conf 此目录下, 是为 email 的配置文件, 相关配置都可在这里进行修改
    8. 使用方法 $mail = new \Custom\Email\Email;
                $mail->send();
    9. 注意, 执行过第7步后, 需把 wwwroot/Runtime 下的 common~runtime.php 文件删除, 然后再刷新, 否则的话, 由于缓存原因, 载入扩展会失败

作者联系方式
    QQ: 790820730
    Email: debmzhang@gmail.com

使用中若有需要, 可直接发邮件或QQ联系.
