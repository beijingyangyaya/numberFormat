<?php
/**
 * @author <yangya02@58.com>
 * @since  2021-04-28
 */
/**
 * 数字格式化测试类
 * @author XinLiang
 */

require '/Users/yangyangya/project/numberFormat/vendor/autoload.php';

$number = '102400010';
echo numberFormat\NumberFormat::byte_format($number);