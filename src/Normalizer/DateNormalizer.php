<?php

namespace Ribal\Onix\Normalizer;

use Ribal\Onix\CodeList\CodeList55;
use Ribal\Onix\Date;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DateNormalizer implements NormalizerInterface, DenormalizerInterface
{

    public function normalize($object, $format = null, array $context = []): array|bool|string|int|float|null|\ArrayObject
    {
        return $object->formatOnix();
    }

    public function denormalize($data, $type, $format = null, array $context = []): mixed
    {
        $date = Date::parse(
            is_array($data) ? $data['#'] : $data,
            is_array($data) ? $data['@dateformat'] : '00'
        );

        return $date;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof Date;
    }

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type == Date::class;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            Date::class => true,
        ];
    }
}