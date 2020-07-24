<?php

namespace JMSSerializerModule\View;

use Laminas\Form\View\Helper\AbstractHelper;
use JMS\Serializer\Serializer as BaseSerializer;
use JMS\Serializer\SerializationContext;

/**
 * @author Martin Parsiegla <martin.parsiegla@gmail.com>
 */
class Serializer extends AbstractHelper
{
    /**
     * @var \JMS\Serializer\Serializer
     */
    protected $serializer;

    /**
     * @param \JMS\Serializer\Serializer $serializer
     */
    public function __construct(BaseSerializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function __invoke($object, $type = "json", SerializationContext $context = null)
    {
        return $this->serializer->serialize($object, $type, $context);
    }
}
