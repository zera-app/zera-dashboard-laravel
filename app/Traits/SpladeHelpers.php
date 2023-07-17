<?php

namespace App\Traits;

use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Str;

trait SpladeHelpers
{
    public function spladeTitle(string $title)
    {
        $appMain = Str::title(config('app.name'));

        SEO::title("$title | $appMain");
    }

    public function spladeDescription(string $description)
    {
        SEO::spladeDescription($description);
    }

    public function spladeKeywords(array $arr)
    {
        SEO::keywords($arr);
    }

    public function spladeMeta(array $arr)
    {
        SEO::meta($arr);
    }

    public function spladeMetaName(string $name, string $attribute)
    {
        SEO::metaByName($name, $attribute);
    }

    public function spladeMetaProperty(string $property, string $attribute)
    {
        SEO::metaByProperty($property, $attribute);
    }

    public function spladeToast(array $arr)
    {
        $success = isset($arr['success']) ? $arr['success'] : throw new \InvalidArgumentException("Invalid property for splade toast. Expected [] with key success and message.");
        $message = isset($arr['message']) ? $arr['message'] : throw new \InvalidArgumentException("Invalid property for splade toast. Expected [] with key message and message.");

        if ($success) {
            Toast::title('Yeay !!!')
                ->success()
                ->rightTop()
                ->message($message)
                ->autoDismiss(10);
        }

        Toast::title('Opps !!!')
            ->danger()
            ->rightTop()
            ->message($message)
            ->autoDismiss(10);
    }
}
