<?php

namespace Framework\Http\Request;

class UploadedFile implements UploadedFileInterface
{
    public function __construct(
        private string $name,
        private string $mimeType,
        private string $tmp,
        private int $error,
        private int $size
    )
    {
    }

    public function getClientFilename()
    {
        return pathinfo($this->name, PATHINFO_FILENAME);
    }

    public function getClientType(): string
    {
        return $this->mimeType;
    }

    public function moveTo(string $target): bool
    {
         return move_uploaded_file($this->tmp, $target);
    }
}