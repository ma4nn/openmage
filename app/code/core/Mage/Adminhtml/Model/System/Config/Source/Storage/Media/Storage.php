<?php

/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @copyright  Copyright (c) 2022-2024 The OpenMage Contributors (https://www.openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Generate options for media storage selection
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 */
class Mage_Adminhtml_Model_System_Config_Source_Storage_Media_Storage
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => Mage_Core_Model_File_Storage::STORAGE_MEDIA_FILE_SYSTEM,
                'label' => Mage::helper('adminhtml')->__('File System')
            ],
            [
                'value' => Mage_Core_Model_File_Storage::STORAGE_MEDIA_DATABASE,
                'label' => Mage::helper('adminhtml')->__('Database')
            ]
        ];
    }
}
