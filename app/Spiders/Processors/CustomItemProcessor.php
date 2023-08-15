<?php

namespace App\Spiders\Processors;

use RoachPHP\ItemPipeline\ItemInterface;
use RoachPHP\ItemPipeline\Processors\ItemProcessorInterface;
use RoachPHP\Support\Configurable;

class CustomProcessor implements ItemProcessorInterface
{
    use Configurable;

    public function processItem(ItemInterface $item): ItemInterface
    {
        // print_r([
        //     "title" => $item->title,
        //     "subtitle" => $item->subtitle,
        // ]);

        return $item;
    }
}
