<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList154;
use Ribal\Onix\CodeList\CodeList158;
use Ribal\Onix\CodeList\CodeList159;

class SupportingResource
{

    private const TYPE_FRONTCOVER = '01';
    private const TYPE_BACKCOVER = '02';
    private const TYPE_INSTRUCTIONAL = '39';
    private const TYPE_TRAILER = '26';

    private const MODE_IMAGE = '03';

    private const TYPE_FEATURE_LINKTEXT = '02';
    private const TYPE_COPYRIGHT_NOTE = '03';

    /**
     * ResourceContentType
     *
     * @var CodeList
     */
    protected $ResourceContentType;

    /**
     * ContentAudience
     *
     * @var CodeList
     */
    protected $ContentAudience;

    /**
     * ResourceMode
     *
     * @var CodeList
     */
    protected $ResourceMode;

    /**
     * ResourceVersion
     *
     * @var ResourceVersion
     */
    protected $ResourceVersion;


    /**
     * ResourceFeature
     *
     * @var ResourceFeature[]
     */
    protected array $ResourceFeature = [];

    /**
     * Add a new ResourceFeature
     *
     * @param ResourceFeature $ResourceFeature
     * @return void
     */
    public function addResourceFeature(ResourceFeature $ResourceFeature)
    {
        $this->ResourceFeature[] = $ResourceFeature;
    }

    /**
     * Remove ResourceFeature
     *
     * @param ResourceFeature $ResourceFeature
     * @return void
     */
    public function removeResourceFeature(ResourceFeature $ResourceFeature)
    {
    }

    /**
     * Get ResourceFeatures
     *
     * @return array
     */
    public function getResourceFeature()
    {
        return $this->ResourceFeature;
    }

    /**
     * Get ResourceFeatures
     *
     * @return array
     */
    public function getResourceFeatures()
    {
        return $this->ResourceFeature;
    }

    /**
     * Set ResourceContentType
     *
     * @param CodeList158 $ResourceContentType
     * @return void
     */
    public function setResourceContentType(CodeList158 $ResourceContentType)
    {
        $this->ResourceContentType = $ResourceContentType;
    }

    /**
     * Set ContentAudience
     *
     * @param CodeList154 $ContentAudience
     * @return void
     */
    public function setContentAudience(CodeList154 $ContentAudience)
    {
        $this->ContentAudience = $ContentAudience;
    }

    /**
     * Set ResourceMode
     *
     * @param CodeList159 $ResourceMode
     * @return void
     */
    public function setResourceMode(CodeList159 $ResourceMode)
    {
        $this->ResourceMode = $ResourceMode;
    }

    /**
     * Set ResourceVersion
     *
     * @param ResourceVersion $ResourceVersion
     * @return void
     */
    public function setResourceVersion(ResourceVersion $ResourceVersion)
    {
        $this->ResourceVersion = $ResourceVersion;
    }

    /**
     * Get ResourceContentType
     *
     * @return CodeList
     */
    public function getResourceContentType()
    {
        return $this->ResourceContentType;
    }

    /**
     * Get ContentAudience
     *
     * @return CodeList
     */
    public function getContentAudience()
    {
        return $this->ContentAudience;
    }

    /**
     * Get ResourceMode
     *
     * @return CodeList
     */
    public function getResourceMode()
    {
        return $this->ResourceMode;
    }

    /**
     * Get ResourceVersion
     *
     * @return ResourceVersion
     */
    public function getResourceVersion()
    {
        return $this->ResourceVersion;
    }
    
    /**
     * Check, if the Resource is a book front cover
     *
     * @return boolean
     */
    public function isFrontCover()
    {
   		return $this->ResourceContentType->getCode() == self::TYPE_FRONTCOVER;
    }
    
    /**
     * Check, if the Resource is a book front cover
     *
     * @return boolean
     */
    public function isBackCover()
    {
   		return $this->ResourceContentType->getCode() == self::TYPE_BACKCOVER;
    }
    
    /**
     * Check, if the Resource is an image
     *
     * @return boolean
     */
    public function isImage()
    {
    	return $this->ResourceMode->getCode() === self::MODE_IMAGE;
    }

    /**
     * Check, if the Resource is a link to additional material
     *
     * @return boolean
     */
    public function isInstructional()
    {
        return $this->ResourceContentType->getCode() === self::TYPE_INSTRUCTIONAL;
    }

    /**
     * Check, if the Resource is a trailer link
     *
     * @return boolean
     */    public function isTrailer()
    {
        return $this->ResourceContentType->getCode() === self::TYPE_TRAILER;
    }

    /**
     * Get the link to a file or resource
     *
     * @return string
     */
    public function getLink()
    {
        if ($this->ResourceVersion && $this->ResourceVersion->hasLink()) {
            return $this->ResourceVersion->getResourceLink();
        }
    }

    /**
     * Get the link description
     *
     * @return string
     */
    public function getLinkDescription()
    {
        $links = array_values(array_filter($this->ResourceFeature, function ($resourceFeature) {
            return $resourceFeature->getResourceFeatureType()->getCode() === self::TYPE_FEATURE_LINKTEXT;
        }));
        if(!isset($links[0])) {
            return '';
        }
        return $links[0]?->getFeatureNote();
    }

    /**
     * Get the link copyright note
     *
     * @return string
     */
    public function getCopyrightNote()
    {
        $links = array_values(array_filter($this->ResourceFeature, function ($resourceFeature) {
            return $resourceFeature->getResourceFeatureType()->getCode() === self::TYPE_COPYRIGHT_NOTE;
        }));
        if(!isset($links[0])) {
            return '';
        }
        return $links[0]?->getFeatureNote();
    }

}
