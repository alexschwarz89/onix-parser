<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList160;

class ResourceFeature
{
    protected $FeatureNote;
    protected $ResourceFeatureType;

    /**
     * @return mixed
     */
    public function getFeatureNote()
    {
        return $this->FeatureNote;
    }

    /**
     * @param mixed $FeatureNote
     * @return ResourceFeature
     */
    public function setFeatureNote($FeatureNote)
    {
        $this->FeatureNote = $FeatureNote;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeatureValue()
    {
        return $this->FeatureValue;
    }

    /**
     * @param mixed $FeatureValue
     * @return ResourceFeature
     */
    public function setFeatureValue($FeatureValue)
    {
        $this->FeatureValue = $FeatureValue;
        return $this;
    }

    /**
     * @return CodeList160
     */
    public function getResourceFeatureType()
    {
        return $this->ResourceFeatureType;
    }

    /**
     * @param CodeList160 $ResourceFeatureType
     * @return ResourceFeature
     */
    public function setResourceFeatureType(CodeList160 $ResourceFeatureType)
    {
        $this->ResourceFeatureType = $ResourceFeatureType;
        return $this;
    }
}
