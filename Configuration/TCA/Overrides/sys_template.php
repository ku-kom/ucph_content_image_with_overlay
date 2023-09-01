<?php
/*
 * This file is part of the package ucph_content_image_with_overlay.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * June 2023 Nanna Ellegaard, University of Copenhagen.
 */

defined('TYPO3') or die('Access denied.');

call_user_func(function ($extKey='ucph_content_image_with_overlay') {
    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extKey,
        'Configuration/TypoScript',
        'UCPH TYPO3 content element "Image with text overlay"'
    );
});
