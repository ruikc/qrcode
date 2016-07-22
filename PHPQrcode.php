<?php
/*!
 * yii2 extension - qrcode
 * rickeryu <lhyfe1987@163.com>
 * https://github.com/y284663247/qrcode
 * create: 16/7/22 下午9:43
 * update: 16/7/22 下午9:43
 * version: 0.0.1
 */

namespace y284663247\qrcode;

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
