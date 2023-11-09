<?php

declare(strict_types=1);

namespace JustCoded\SampleFile;

class Image extends SampleFile
{
    protected string $samplesDir = 'images';
    protected string $filenamePrefix = 'image';
    protected bool $supportSizes = true;
    protected ?string $size = '100kb';

    public function png(): static
    {
        return $this->extension('png');
    }

    public function jpg(): static
    {
        return $this->extension('jpg');
    }

    public function tiny(): static
    {
        return $this->size('100kb');
    }

    public function small(): static
    {
        return $this->size('500kb');
    }

    public function medium(): static
    {
        return $this->size('1mb');
    }

    public function large(): static
    {
        return $this->size('5mb');
    }

    public function xlarge(): static
    {
        return $this->size('10mb');
    }

    public function enormous(): static
    {
        return $this->size('20mb');
    }

}
