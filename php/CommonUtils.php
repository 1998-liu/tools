<?php
/**
 * 公共工具类
 */

class CommonUtils
{
    /**
     * @desc 随机字符串生成
     * @param int $len 生成的字符串长度
     * @return string
     */
    public static function randomString($len = 6)
    {
        $chars = array(
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
            "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",
            "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",
            "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R",
            "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2",
            "3", "4", "5", "6", "7", "8", "9",
        );
        $charsLen = count($chars) - 1;
        // 将数组打乱
        shuffle($chars);
        $output = "";
        for ($i = 0; $i < $len; $i++) {
            $output .= $chars[mt_rand(0, $charsLen)];
        }
        return $output;
    }

    /**
     * @desc 手机号隐藏中间
     * @param $mobile
     * @return mixed
     */
    public static function mobileHide($mobile)
    {
        return substr_replace($mobile, '****', 3, 4);
    }

    /**
     * @desc： 二维数组去掉重复值
     * @param array $array2D
     * @return multitype:
     */
    public static function arrayUniqueFb($array2D)
    {

        $data = array();
        if (!empty($array2D)) {
            foreach ($array2D as $v) {
                //降维,也可以用implode,将一维数组转换为用逗号连接的字符串
                $v = join(',', $v);
                $data[] = $v;
            }
            //去掉重复的字符串,也就是重复的一维数组
            $data = array_unique($data);
            foreach ($data as $k => $v) {
                //再将拆开的数组重新组装
                $data[$k] = explode(',', $v);
            }
        }
        return $data;
    }
}
