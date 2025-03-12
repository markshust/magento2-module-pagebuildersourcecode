<?php

declare(strict_types=1);

namespace MarkShust\PageBuilderSourceCode\Plugin;

use Magento\Framework\DataObject;
use Magento\PageBuilder\Model\Wysiwyg\DefaultConfigProvider;

class AddCodeButtonToToolbarConfigPlugin
{
    public function afterGetConfig(DefaultConfigProvider $defaultConfigProvider, DataObject $resultConfig): DataObject
    {
        $this->addCodeButtonToToolbarConfigWithKey($resultConfig, 'tinymce');
        $this->addCodeButtonToToolbarConfigWithKey($resultConfig, 'settings');

        return $resultConfig;
    }

    private function addCodeButtonToToolbarConfigWithKey(DataObject $config, string $key): void
    {
        $specificConfig = $config->getData($key) ?? [];
        if (isset($specificConfig['toolbar'])) {
            $specificConfig['toolbar'] .= ' | code';
            $config->setData($key, $specificConfig);
        }
    }
}
