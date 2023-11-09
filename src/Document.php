<?php

declare(strict_types=1);

namespace JustCoded\SampleFile;

class Document extends SampleFile
{
    protected string $samplesDir = 'documents';
    protected string $filenamePrefix = 'doc';
    protected bool $supportSizes = false;

    public function doc(): static
    {
        return $this->extension('doc');
    }

    public function docx(): static
    {
        return $this->extension('docx');
    }

    public function odt(): static
    {
        return $this->extension('odt');
    }

    public function pdf(): static
    {
        return $this->extension('pdf');
    }

    public function rtf(): static
    {
        return $this->extension('rtf');
    }

    public function txt(): static
    {
        return $this->extension('txt');
    }
}
