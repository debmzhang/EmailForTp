<?php

/**
 * PHPMail 扩展配置文件
 *
 * @author debmzhang <debmzhang@gmail.com>
 * @create 2014-11-27 17:45
 * @version $Id$
 */

return array(
    // 基础配置
    // 这里需要配置SMTP服务器, 使用发件邮箱的SMTP服务器地址, 如163为 smtp.163.com
    'HOST' => 'smtp.exmail.qq.com',
    'PORT' => 25,
    'CHAR_SET' => 'utf-8',
    'SMTP_DEBUG' => 0,
    'SMTP_AUTH' => TRUE,
    // 发件邮箱地址
    'SEND_ADDRESS' => 'xxx@xxx.com',
    // 发件邮箱密码
    'SEND_PASSWORD' => 'dddddd',
    // 设置发送人名称
    'SET_FROM' => 'debmzhang',
    // 是否有抄送
    'OPEN_CC' => FALSE,
    // 抄送地址
    'CC_ADDRESS' => array(
        '790820730@qq.com',
    ),
);
