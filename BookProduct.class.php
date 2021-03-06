<?php
/**
 * 基于商品类实现书籍类
 * User: Xuefeng Luo
 * Date: 2020/3/14
 * Time: 12:15 PM
 */

namespace Patteron;


class BookProduct extends ShopProduct
{
    // 书籍总页数
    private $numPage = 0;

    public function __construct($title, $firstName, $mainName, $price, $numPage)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPage = $numPage;
    }

    public function getNumPage()
    {
        return $this->numPage;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine(); // TODO: Change the autogenerated stub
        $base .= "pagecount：{$this->numPage}";
        return $base;
    }

}