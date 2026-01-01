<?php
declare(strict_types=1);
namespace jp\mcbe\fuyutsuki\Texter\libs\_205c34473f6e3987\xxFLORII\bStats\charts\defaults\basic;
use jp\mcbe\fuyutsuki\Texter\libs\_205c34473f6e3987\xxFLORII\bStats\charts\CallbackChart;

/**
 ```php
$chart = new LineChart("example", function() {
    return [ 1, 2, 3, 5, 3, 2, 1 ];
 });
 ```
 */
class LineChart extends CallbackChart {
    public static function getType(): string{ return "line"; }
    protected function getValue(): mixed{
        $value = $this->call();
        if (empty($value)) return null;
        return $value;
    }
}