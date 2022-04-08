<?php
class MetresSquaredController extends BaseController
{
    public $width = 0;
    public $length = 0;
    public $depth = 0;
    public $product_price = 0;
    public $area = 0;

    public function __construct($width, $length, $depth, $area = 0, $product_price = 0)
    {
        $this->width = $width;
        $this->length = $length;
        $this->depth = $depth;
        $this->product_price = $product_price;
        $this->area = $this->MetresSquaredVal($this->width, $this->length, $this->depth, $this->product_price);
    }

    protected function MetresSquaredVal($width, $length, $depth,$product_price)
    {
        $part1 = $width * $length;
        $part2 = ((float)$depth / 100);
        $part3 = $part1 * $part2;

        return ceil($part3 * 1.4) * $product_price;
    }
}