<?php
/**
 * PHPMail 扩展配置文件
 *
 * @author debmzhang <debmzhang@gmail.com>
 * @create 2014-11-27 17:45
 * @update 2015-12-30 10:59
 * @version $Id$
 */
return array(
    // 基础配置
    // 这里需要配置SMTP服务器, 使用发件邮箱的SMTP服务器地址, 如163为 smtp.163.com
    'HOST' => 'smtp.qq.com',
    'PORT' => 25,
    'CHAR_SET' => 'utf-8',
    // 调试 PHPMailer
    'SMTP_DEBUG' => 0,
    'SMTP_AUTH' => true,
    // 发件邮箱地址
    'SEND_ADDRESS' => 'your-email@address',
    // 发件邮箱密码
    'SEND_PASSWORD' => 'your-email-password',
    // 设置发送人名称
    'SET_FROM' => 'your name',
    // 是否有抄送
    'OPEN_CC' => false,
    // 默认抄送地址(如果抄送, 请修改下面的地址, 或自行传递抄送地址)
    'CC_ADDRESS' => array(
        '790820730@qq.com',
    ),
);
