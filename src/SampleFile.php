<?php

declare(strict_types=1);

namespace JustCoded\SampleFile;

use BadMethodCallException;

abstract class SampleFile
{
    protected string $samplesRootDir;
    protected string $samplesDir;
    protected string $filenamePrefix;

    protected ?string $extension = null;

    protected ?string $size = null;

    protected bool $supportSizes = false;

    public static function make(): static
    {
        return new static();
    }

    public function __construct()
    {
        $this->samplesRootDir = realpath(__DIR__ . '/../samples');
    }

    public function path(): string
    {
        return realpath("{$this->samplesRootDir}/{$this->samplesDir}/" . $this->buildFilename());
    }

    protected function extension(string $extension): static
    {
        $this->extension = $extension;

        return $this;
    }

    protected function size(string $size): static
    {
        $this->size = $size;

        return $this;
    }

    protected function buildFilename(): string
    {
        if (empty($this->extension)) {
            throw(new BadMethodCallException('File type is not set, call method of the desired type first.'));
        }


        if ($this->supportSizes && empty($this->size)) {
            throw(new BadMethodCallException('Size is not set, call method of the desired size first.'));
        }

        $filename = implode('-', array_filter([
            $this->filenamePrefix,
            'sample',
            (string) $this->size,
        ]));

        return "{$filename}.{$this->extension}";
    }
}
