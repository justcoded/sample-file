<?php

declare(strict_types=1);

namespace JustCoded\SampleFile;

class Sheet extends SampleFile
{
    protected string $samplesDir = 'documents';
    protected string $filenamePrefix = 'sheet';
    protected bool $supportSizes = false;

    public function csv(): static
    {
        return $this->extension('csv');
    }

    public function ods(): static
    {
        return $this->extension('ods');
    }

    public function xls(): static
    {
        return $this->extension('xls');
    }

    public function xlsx(): static
    {
        return $this->extension('xlsx');
    }
}
