<?php
    defined('TYPO3') or die('Access denied.');

call_user_func(function() {
    $extensionKey = 'genf';

    // Registrierung der einzelnen Dateien zur manuellen Auswahl
    $configs = [
        'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts/default.tsconfig' => 'Backend Layout: Default',
        'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts/kasten.tsconfig' => 'Backend Layout: Kasten',
        'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts/FooterBackendLayout.tsconfig' => 'Backend Layout: Footer',
        'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts/landingpage.tsconfig' => 'Backend Layout: Landingpage',
        'Configuration/TsConfig/Page/old_page.tsconfig' => 'Genf: Element-Anpassungen (TCEFORM)'
];

    foreach ($configs as $path => $title) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            $extensionKey,
            $path,
            $title
        );
    }
});