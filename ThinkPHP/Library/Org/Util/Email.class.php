<?php
/**
 * 基于 PHPMailer 的邮件扩展
 *
 * @author debmzhang <debmzhang@gmail.com>
 * @create 2014-11-27 12:12
 * @update 2015-12-30 10:51
 * @version $Id$
 */
namespace Org\Util;

vendor('PHPMailer.PHPMailerAutoload');

class Email
{
    /**
     * 发送邮件
     * 
     * @param string $to 发送给谁
     * @param string $subject 发送的标题
     * @param string $body 发送的内容
     * @param array $cc 抄送地址
     */
    public function send($to = '790820730@qq.com', $subject = '这是测试标题', $body = '这是测试内容', $cc = array())
    {
        // 获取配置信息
        $host = C('HOST');
        $port = C('PORT');
        $charSet = C('CHAR_SET');
        $smtpDebug = C('SMTP_DEBUG');
        $smtpAuth = C('SMTP_AUTH');
        $username = C('SEND_ADDRESS');
        $password = C('SEND_PASSWORD');
        $setFrom = C('SET_FROM');
        // 是否打开抄送
        $openCc = C('OPEN_CC');

        if ($openCc) {
            if (!$cc) {
                // 如果打开抄送, 并且没有传递抄送地址
                // 则默认为配置信息中的抄送地址
                $cc = C('CC_ADDRESS');
            }
        }

        $mail = new \PHPMailer;

        $mail->isSMTP();
        $mail->SMTPDebug = $smtpDebug;
        $mail->CharSet = $charSet;
        $mail->Host = $host;
        $mail->Port = $port;
        $mail->SMTPAuth = $smtpAuth;
        $mail->Username = $username;
        $mail->Password = $password;
        $mail->setFrom($username, $setFrom);
        $mail->addReplyTo($to, $to);
        $mail->addAddress($to, $to);

        if (is_array($cc) && $openCc) {
            foreach ($cc as $val) {
                $mail->AddCC($val);
            }
        }

        $mail->Subject = $subject;
        $mail->msgHTML($body);

        return $mail->send();
    }

}
