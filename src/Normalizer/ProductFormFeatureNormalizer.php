<?php

namespace Ribal\Onix\Normalizer;

use Ribal\Onix\Product\ProductFormFeature;
use Ribal\Onix\CodeList\CodeList79;
use Ribal\Onix\CodeList\CodeList98;
use Ribal\Onix\CodeList\CodeList196;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;

class ProductFormFeatureNormalizer implements NormalizerInterface, DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    private $language;

    public function __construct(string $language = 'en')
    {
        $this->language = $language;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof ProductFormFeature;
    }

    public function normalize($data, $format = null, array $context = []): array|bool|string|int|float|null|\ArrayObject
    {
        return $this->denormalizer->normalize($data, $format, $context);
    }

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ProductFormFeature::class;
    }

    public function denormalize($data, $type, $format = null, array $context = []): mixed
    {
        $feature = new ProductFormFeature();

        if (isset($data['ProductFormFeatureType'])) {
            $typeCode = is_array($data['ProductFormFeatureType']) ? ($data['ProductFormFeatureType']['#'] ?? null) : $data['ProductFormFeatureType'];
            if ($typeCode) {
                $featureType = CodeList79::resolve($typeCode, $this->language);
                $feature->setProductFormFeatureType($featureType);
            }
        }

        if (isset($data['ProductFormFeatureDescription'])) {
            $feature->setProductFormFeatureDescription($data['ProductFormFeatureDescription']);
        }

        if (isset($data['ProductFormFeatureValue'])) {
            $valueCode = is_array($data['ProductFormFeatureValue']) ? ($data['ProductFormFeatureValue']['#'] ?? null) : $data['ProductFormFeatureValue'];
            
            if ($valueCode) {
                $typeCode = $feature->getProductFormFeatureType() ? $feature->getProductFormFeatureType()->getCode() : null;
                
                // If Type is 09 (E-publication accessibility detail), use CodeList 196
                if ($typeCode === '09') {
                    $feature->setProductFormFeatureValue(CodeList196::resolve($valueCode, $this->language));
                } else {
                    $feature->setProductFormFeatureValue(CodeList98::resolve($valueCode, $this->language));
                }
            }
        }

        return $feature;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [ProductFormFeature::class => true];
    }
}
