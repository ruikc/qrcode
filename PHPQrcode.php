<?php
/*!
 * yii2 extension - qrcode
 * xiewulong <xiewulong@vip.qq.com>
 * https://github.com/xiewulong/yii2-qrcode
 * https://raw.githubusercontent.com/xiewulong/yii2-qrcode/master/LICENSE
 * create: 2015/1/8
 * update: 2015/1/8
 * version: 0.0.1
 */

namespace yii\qrcode;

use Yii;
use PHPQRCode\QRcode;

class PHPQrcode {

    /**
     * 创建二维码操作
     * @name: create
     * @author: rickeryu <lhyfe1987@163.com>
     * @time: 16/7/22 下午9:25
     */
    public function create($data, $level = 2, $size = 10, $margin = 4) {
        return QRcode::png($data, false, $level, $size, $margin);
    }

}
