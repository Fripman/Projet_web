<?php
function applyJsonMergePatch(array $document, array $patch): array
{
    return array_merge($document, $patch);
}