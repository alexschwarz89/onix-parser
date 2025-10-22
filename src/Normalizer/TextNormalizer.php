<?php

namespace Ribal\Onix\Normalizer;

use Ribal\Onix\Text;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TextNormalizer implements NormalizerInterface, DenormalizerInterface
{

    /**
     * {@inheritDoc}
     */
    public function normalize($object, $format = null, array $context = []): array|bool|string|int|float|null|\ArrayObject
    {

    }

    /**
     * {@inheritDoc}
     */
    public function denormalize($data, $type, $format = null, array $context = []): mixed
    {

        $textFormat = isset($data['@textformat']) ? $data['@textformat'] : Text::TYPE_DEFAULT;
        $language = isset($data['@language']) ? $data['@language'] : null;
        $content = is_array($data) ? $data['#'] : $data;

        if ($content == null) {
            dump($data);
        }

        return new Text($content, $textFormat, $language);

    }

    /**
     * {@inheritDoc}
     * @param mixed $data
     * @param null $format
     * @param array $context
     */
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {

    }

    /**
     * {@inheritDoc}
     * @param mixed $data
     * @param string $type
     * @param null $format
     * @param array $context
     */
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type == Text::class;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            Text::class => true,
        ];
    }
}
