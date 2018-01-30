<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d1c4897c1b7bc041b8772ecde1f50fc
{
    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
    );

    public static $classMap = array (
        'IWPML_PB_Strategy' => __DIR__ . '/../..' . '/classes/page-builders/strategy/interface-iwpml-pb-strategy.php',
        'IWPML_Page_Builders_Data_Settings' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/interface-iwpml-page-builders-data-settings.php',
        'IWPML_Page_Builders_Module' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/interface-iwpml-page-builders-module.php',
        'IWPML_Page_Builders_Translatable_Nodes' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/interface-iwpml-page-builders-translatable-nodes.php',
        'IWPML_ST_Page_Translations_Persist' => __DIR__ . '/../..' . '/classes/filters/db-cache/persist/interface-iwpml-st-page-translations-persist.php',
        'IWPML_ST_String_Scanner' => __DIR__ . '/../..' . '/classes/strings-scanning/iwpml-st-string-scanner.php',
        'IWPML_St_Upgrade_Command' => __DIR__ . '/../..' . '/classes/upgrade/interface-iwpml_st_upgrade_command.php',
        'WPML_Admin_Notifier' => __DIR__ . '/../..' . '/classes/class-wpml-admin-notifier.php',
        'WPML_Admin_Text_Configuration' => __DIR__ . '/../..' . '/inc/admin-texts/wpml-admin-text-configuration.php',
        'WPML_Admin_Text_Functionality' => __DIR__ . '/../..' . '/inc/admin-texts/wpml-admin-text-functionality.class.php',
        'WPML_Admin_Text_Import' => __DIR__ . '/../..' . '/inc/admin-texts/wpml-admin-text-import.class.php',
        'WPML_Admin_Texts' => __DIR__ . '/../..' . '/inc/admin-texts/wpml-admin-texts.class.php',
        'WPML_Autoregister_Context_Exclude' => __DIR__ . '/../..' . '/classes/filters/autoregister/class-wpml-autoregister-context-exclude.php',
        'WPML_Autoregister_Save_Strings' => __DIR__ . '/../..' . '/classes/filters/autoregister/class-wpml-autoregister-save-strings.php',
        'WPML_Beaver_Builder_Accordion' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/modules/class-wpml-beaver-builder-accordion.php',
        'WPML_Beaver_Builder_Content_Slider' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/modules/class-wpml-beaver-builder-content-slider.php',
        'WPML_Beaver_Builder_Data_Settings' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/class-wpml-beaver-builder-data-settings.php',
        'WPML_Beaver_Builder_Icon_Group' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/modules/class-wpml-beaver-builder-icon-group.php',
        'WPML_Beaver_Builder_Integration_Factory' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/class-wpml-beaver-builder-integration-factory.php',
        'WPML_Beaver_Builder_Module_With_Items' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/modules/class-wpml-beaver-builder-module-with-items.php',
        'WPML_Beaver_Builder_Pricing_Table' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/modules/class-wpml-beaver-builder-pricing-table.php',
        'WPML_Beaver_Builder_Register_Strings' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/class-wpml-beaver-builder-register-strings.php',
        'WPML_Beaver_Builder_Tab' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/modules/class-wpml-beaver-builder-tab.php',
        'WPML_Beaver_Builder_Testimonials' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/modules/class-wpml-beaver-builder-testimonials.php',
        'WPML_Beaver_Builder_Translatable_Nodes' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/class-wpml-beaver-builder-translatable-nodes.php',
        'WPML_Beaver_Builder_Update_Translation' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/beaver-builder/class-wpml-beaver-builder-update-translation.php',
        'WPML_Cache_Directory' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-cache/src/cache/class-wpml-cache-directory.php',
        'WPML_Change_String_Domain_Language_Dialog' => __DIR__ . '/../..' . '/classes/string-translation-ui/class-wpml-change-string-domain-language-dialog.php',
        'WPML_Change_String_Language_Dialog' => __DIR__ . '/../..' . '/classes/string-translation-ui/class-wpml-change-string-language-dialog.php',
        'WPML_Custom_Post_Slug_UI' => __DIR__ . '/../..' . '/classes/slug-translation/class-wpml-custom-post-slug-ui.php',
        'WPML_Dependencies' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-dependencies/src/dependencies/class-wpml-dependencies.php',
        'WPML_Displayed_String_Filter' => __DIR__ . '/../..' . '/classes/filters/class-wpml-displayed-string-filter.php',
        'WPML_Elementor_Accordion' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-accordion.php',
        'WPML_Elementor_DB' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/class-wpml-elementor-db.php',
        'WPML_Elementor_DB_Factory' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/class-wpml-elementor-db-factory.php',
        'WPML_Elementor_Data_Settings' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/class-wpml-elementor-data-settings.php',
        'WPML_Elementor_Form' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-form.php',
        'WPML_Elementor_Icon_List' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-icon-list.php',
        'WPML_Elementor_Integration_Factory' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/class-wpml-elementor-integration-factory.php',
        'WPML_Elementor_Module_With_Items' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-module-with-items.php',
        'WPML_Elementor_Price_List' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-price-list.php',
        'WPML_Elementor_Price_Table' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-price-table.php',
        'WPML_Elementor_Register_Strings' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/class-wpml-elementor-register-strings.php',
        'WPML_Elementor_Slides' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-slides.php',
        'WPML_Elementor_Tabs' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-tabs.php',
        'WPML_Elementor_Toggle' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/modules/class-wpml-elementor-toggle.php',
        'WPML_Elementor_Translatable_Nodes' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/class-wpml-elementor-translatable-nodes.php',
        'WPML_Elementor_Update_Translation' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/elementor/class-wpml-elementor-update-translation.php',
        'WPML_File_Name_Converter' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-file-name-converter.php',
        'WPML_Language_Of_Domain' => __DIR__ . '/../..' . '/classes/class-wpml-language-of-domain.php',
        'WPML_Localization' => __DIR__ . '/../..' . '/inc/wpml-localization.class.php',
        'WPML_PB_API_Hooks_Strategy' => __DIR__ . '/../..' . '/classes/page-builders/strategy/api-hooks/class-wpml-pb-api-hooks-strategy.php',
        'WPML_PB_Config_Import_Shortcode' => __DIR__ . '/../..' . '/classes/page-builders/strategy/shortcode/class-wpml-pb-config-import-shortcode.php',
        'WPML_PB_Factory' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-factory.php',
        'WPML_PB_Integration' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-integration.php',
        'WPML_PB_Integration_Rescan' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-rescan.php',
        'WPML_PB_Loader' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-loader.php',
        'WPML_PB_Register_Shortcodes' => __DIR__ . '/../..' . '/classes/page-builders/strategy/shortcode/class-wpml-pb-register-shortcodes.php',
        'WPML_PB_Reuse_Translations' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-reuse-translations.php',
        'WPML_PB_Shortcode_Encoding' => __DIR__ . '/../..' . '/classes/page-builders/strategy/shortcode/class-wpml-pb-shortcode-encoding.php',
        'WPML_PB_Shortcode_Strategy' => __DIR__ . '/../..' . '/classes/page-builders/strategy/shortcode/class-wpml-pb-shortcode-strategy.php',
        'WPML_PB_Shortcodes' => __DIR__ . '/../..' . '/classes/page-builders/strategy/shortcode/class-wpml-pb-shortcodes.php',
        'WPML_PB_String' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-string.php',
        'WPML_PB_String_Registration' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-string-registration.php',
        'WPML_PB_String_Translation' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-string-translation.php',
        'WPML_PB_Update_API_Hooks_In_Content' => __DIR__ . '/../..' . '/classes/page-builders/strategy/api-hooks/class-wpml-pb-update-api-hooks-in-content.php',
        'WPML_PB_Update_Post' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-pb-update-post.php',
        'WPML_PB_Update_Shortcodes_In_Content' => __DIR__ . '/../..' . '/classes/page-builders/strategy/shortcode/class-wpml-pb-update-shortcodes-in-content.php',
        'WPML_PO_Import' => __DIR__ . '/../..' . '/inc/gettext/wpml-po-import.class.php',
        'WPML_PO_Import_Strings' => __DIR__ . '/../..' . '/classes/po-import/class-wpml-po-import-strings.php',
        'WPML_PO_Import_Strings_Scripts' => __DIR__ . '/../..' . '/classes/po-import/class-wpml-po-import-strings-scripts.php',
        'WPML_PO_Parser' => __DIR__ . '/../..' . '/inc/gettext/wpml-po-parser.class.php',
        'WPML_Package' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package.class.php',
        'WPML_Package_Admin_Lang_Switcher' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-admin-lang-switcher.class.php',
        'WPML_Package_Exception' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-exception.class.php',
        'WPML_Package_Helper' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-helper.class.php',
        'WPML_Package_ST' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-st.class.php',
        'WPML_Package_TM' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-tm.class.php',
        'WPML_Package_TM_Jobs' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-tm-jobs.class.php',
        'WPML_Package_Translation' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation.class.php',
        'WPML_Package_Translation_HTML_Packages' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-html-packages.class.php',
        'WPML_Package_Translation_Metabox' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-metabox.class.php',
        'WPML_Package_Translation_Schema' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-schema.class.php',
        'WPML_Package_Translation_UI' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-translation-ui.class.php',
        'WPML_Page_Builders_App' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-page-builders-app.php',
        'WPML_Page_Builders_Defined' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/class-wpml-page-builders-defined.php',
        'WPML_Page_Builders_Integration' => __DIR__ . '/../..' . '/classes/page-builders/class-page-builder-integration.php',
        'WPML_Page_Builders_Register_Strings' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/class-wpml-page-builders-register-strings.php',
        'WPML_Page_Builders_Update_Translation' => __DIR__ . '/../..' . '/classes/page-builders/compatibility/class-wpml-page-builders-update-translation.php',
        'WPML_Plugin_String_Scanner' => __DIR__ . '/../..' . '/inc/gettext/wpml-plugin-string-scanner.class.php',
        'WPML_Register_String_Filter' => __DIR__ . '/../..' . '/classes/filters/class-wpml-register-string-filter.php',
        'WPML_Rewrite_Rule_Filter' => __DIR__ . '/../..' . '/classes/slug-translation/class-wpml-rewrite-rule-filter.php',
        'WPML_ST_Admin_Blog_Option' => __DIR__ . '/../..' . '/classes/admin-texts/class-wpml-st-admin-blog-option.php',
        'WPML_ST_Admin_Option_Translation' => __DIR__ . '/../..' . '/classes/admin-texts/class-wpml-st-admin-option-translation.php',
        'WPML_ST_Admin_String' => __DIR__ . '/../..' . '/classes/class-wpml-st-admin-string.php',
        'WPML_ST_Blog_Name_And_Description_Hooks' => __DIR__ . '/../..' . '/classes/filters/class-wpml-st-blog-name-and-description-hooks.php',
        'WPML_ST_Bulk_Strings_Insert' => __DIR__ . '/../..' . '/classes/db-mappers/class-wpml-st-bulk-strings-insert.php',
        'WPML_ST_Bulk_Strings_Insert_Exception' => __DIR__ . '/../..' . '/classes/db-mappers/class-wpml-st-bulk-strings-insert.php',
        'WPML_ST_DB_Cache' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-db-cache.php',
        'WPML_ST_DB_Cache_Factory' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-db-cache-factory.php',
        'WPML_ST_DB_Chunk_Retrieve' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-db-chunk-retrieve.php',
        'WPML_ST_DB_Mappers_String_Positions' => __DIR__ . '/../..' . '/classes/db-mappers/class-wpml-st-db-mappers-string-positions.php',
        'WPML_ST_DB_Mappers_Strings' => __DIR__ . '/../..' . '/classes/db-mappers/class-wpml-st-db-mappers-strings.php',
        'WPML_ST_DB_Shutdown_Url_Validator' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-db-shutdown-url-validator.php',
        'WPML_ST_DB_Translation_Retrieve' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-db-translation-retrieve.php',
        'WPML_ST_DB_Troubleshooting' => __DIR__ . '/../..' . '/classes/menus/class-wpml-st-db-troubleshooting.php',
        'WPML_ST_Diff' => __DIR__ . '/../..' . '/classes/utilities/class-wpml-st-diff.php',
        'WPML_ST_Domain_Fallback' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-domain-fallback.php',
        'WPML_ST_Fastest_Settings_Notice' => __DIR__ . '/../..' . '/classes/performance/class-wpml-st-fastest-settings-notice.php',
        'WPML_ST_File_Hashing' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-st-file-hashing.php',
        'WPML_ST_Gettext_Hooks' => __DIR__ . '/../..' . '/classes/performance/class-wpml-st-gettext-hooks.php',
        'WPML_ST_Gettext_Hooks_Factory' => __DIR__ . '/../..' . '/classes/performance/class-wpml-st-gettext-hooks-factory.php',
        'WPML_ST_ICL_String_Translations' => __DIR__ . '/../..' . '/classes/records/class-wpml-st-icl-string-translations.php',
        'WPML_ST_ICL_Strings' => __DIR__ . '/../..' . '/classes/records/class-wpml-st-icl-strings.php',
        'WPML_ST_MO_Component_Details' => __DIR__ . '/../..' . '/classes/mo-scan/components/wpml-st-mo-component-details.php',
        'WPML_ST_MO_Component_Stats_Update_Hooks' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-component-stats-update-hooks.php',
        'WPML_ST_MO_Components_Find' => __DIR__ . '/../..' . '/classes/mo-scan/components/wpml-st-mo-components-find.php',
        'WPML_ST_MO_Components_Find_Plugin' => __DIR__ . '/../..' . '/classes/mo-scan/components/wpml-st-mo-components-find-plugin.php',
        'WPML_ST_MO_Components_Find_Theme' => __DIR__ . '/../..' . '/classes/mo-scan/components/wpml-st-mo-components-find-theme.php',
        'WPML_ST_MO_Dictionary' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-dictionary.php',
        'WPML_ST_MO_Dictionary_Storage' => __DIR__ . '/../..' . '/classes/mo-scan/dictionary/class-st-mo-dictionary-storage.php',
        'WPML_ST_MO_Dictionary_Storage_Table' => __DIR__ . '/../..' . '/classes/mo-scan/dictionary/class-st-mo-dicionary-storage-table.php',
        'WPML_ST_MO_Downloader' => __DIR__ . '/../..' . '/inc/auto-download-locales.php',
        'WPML_ST_MO_File' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-file.php',
        'WPML_ST_MO_File_Registration' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-file-registration.php',
        'WPML_ST_MO_Queue' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-queue.php',
        'WPML_ST_MO_Scan' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-scan.php',
        'WPML_ST_MO_Scan_Cached_Charset_Validation' => __DIR__ . '/../..' . '/classes/mo-scan/charset-validation/wpml-st-mo-scan-cached-charset-validation.php',
        'WPML_ST_MO_Scan_Charset_Validation' => __DIR__ . '/../..' . '/classes/mo-scan/charset-validation/wpml-st-mo-scan-charset-validation.php',
        'WPML_ST_MO_Scan_Db_Charset_Validation' => __DIR__ . '/../..' . '/classes/mo-scan/charset-validation/wpml-st-mo-scan-db-charset-validation.php',
        'WPML_ST_MO_Scan_Db_Table_List' => __DIR__ . '/../..' . '/classes/mo-scan/charset-validation/wpml-st-mo-scan-db-table-list.php',
        'WPML_ST_MO_Scan_Factory' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-scan-factory.php',
        'WPML_ST_MO_Scan_Hooks' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-scan-hooks.php',
        'WPML_ST_MO_Scan_Notices' => __DIR__ . '/../..' . '/classes/mo-scan/feedback/wpml-st-mo-scan-notices.php',
        'WPML_ST_MO_Scan_Storage' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-scan-storage.php',
        'WPML_ST_MO_Scan_UI_Block' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-scan-ui-block.php',
        'WPML_ST_MO_Translation' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-translation.php',
        'WPML_ST_MO_Unicode_Characters_Filter' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-unicode-characters-filter.php',
        'WPML_ST_Models_String' => __DIR__ . '/../..' . '/classes/db-mappers/class-wpml-st-models-string.php',
        'WPML_ST_Models_String_Translation' => __DIR__ . '/../..' . '/classes/db-mappers/class-wpml-st-models-string-translation.php',
        'WPML_ST_Options_All_Strings_English' => __DIR__ . '/../..' . '/classes/performance/class-wpml-st-option-all-strings-english.php',
        'WPML_ST_Options_All_Strings_English_Factory' => __DIR__ . '/../..' . '/classes/performance/class-wpml-st-option-all-strings-english-factory.php',
        'WPML_ST_PB_Plugin' => __DIR__ . '/../..' . '/classes/page-builders/class-wpml-st-pb-plugin.php',
        'WPML_ST_Package_Cleanup' => __DIR__ . '/../..' . '/classes/package-translation/class-wpml-st-package-cleanup.php',
        'WPML_ST_Package_Factory' => __DIR__ . '/../..' . '/inc/package-translation/inc/wpml-package-factory.class.php',
        'WPML_ST_Package_Storage' => __DIR__ . '/../..' . '/classes/package-translation/class-wpml-st-package-storage.php',
        'WPML_ST_Page_Translation' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-page-translation.php',
        'WPML_ST_Page_Translations' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-page-translations.php',
        'WPML_ST_Page_Translations_Cached_Persist' => __DIR__ . '/../..' . '/classes/filters/db-cache/persist/class-wpml-st-page-translations-cached-persist.php',
        'WPML_ST_Page_Translations_Persist' => __DIR__ . '/../..' . '/classes/filters/db-cache/persist/class-wpml-st-page-translations-persist.php',
        'WPML_ST_Page_URL_Preprocessor' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-page-url-preprocessor.php',
        'WPML_ST_Plugin_Localization_UI' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/strategy/class-wpml-st-plugin-localization-ui.php',
        'WPML_ST_Plugin_Localization_UI_Factory' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/factory/class-wpml-st-plugin-localization-ui-factory.php',
        'WPML_ST_Plugin_Localization_Utils' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/class-st-plugin-localization-ui-utils.php',
        'WPML_ST_Plugin_String_Scanner_Factory' => __DIR__ . '/../..' . '/classes/strings-scanning/factory/class-wpml-st-plugin-string-scanner-factory.php',
        'WPML_ST_Records' => __DIR__ . '/../..' . '/classes/records/class-wpml-st-records.php',
        'WPML_ST_Relative_Translation_Status' => __DIR__ . '/../..' . '/classes/string-translation-status/class-wpml-st-relative-translation-status.php',
        'WPML_ST_Reset' => __DIR__ . '/../..' . '/classes/class-wpml-st-reset.php',
        'WPML_ST_Scan_Dir' => __DIR__ . '/../..' . '/classes/utilities/wpml-st-scan-dir.php',
        'WPML_ST_Settings' => __DIR__ . '/../..' . '/classes/class-wpml-st-settings.php',
        'WPML_ST_String' => __DIR__ . '/../..' . '/classes/class-wpml-st-string.php',
        'WPML_ST_String_Factory' => __DIR__ . '/../..' . '/classes/class-wpml-st-string-factory.php',
        'WPML_ST_String_Positions' => __DIR__ . '/../..' . '/classes/string-tracking/class-wpml-st-string-positions.php',
        'WPML_ST_String_Positions_In_Source' => __DIR__ . '/../..' . '/classes/string-tracking/class-wpml-st-string-positions-in-source.php',
        'WPML_ST_String_Status_Update' => __DIR__ . '/../..' . '/classes/mo-scan/wpml-st-mo-string-status-update.php',
        'WPML_ST_String_Statuses' => __DIR__ . '/../..' . '/classes/class-wpml-st-string-statuses.php',
        'WPML_ST_String_Update' => __DIR__ . '/../..' . '/inc/wpml-st-string-update.class.php',
        'WPML_ST_Strings' => __DIR__ . '/../..' . '/classes/class-wpml-st-strings.php',
        'WPML_ST_Strings_Stats' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-st-strings-stats.php',
        'WPML_ST_Support_Info' => __DIR__ . '/../..' . '/classes/support/class-wpml-st-support-info.php',
        'WPML_ST_Support_Info_Filter' => __DIR__ . '/../..' . '/classes/support/class-wpml-st-support-info-filter.php',
        'WPML_ST_TM_Jobs' => __DIR__ . '/../..' . '/classes/wpml-tm/class-wpml-st-tm-jobs.php',
        'WPML_ST_Taxonomy_Labels_Translation' => __DIR__ . '/../..' . '/classes/filters/class-wpml-st-taxonomy-labels-translation.php',
        'WPML_ST_Taxonomy_Labels_Translation_Factory' => __DIR__ . '/../..' . '/classes/filters/class-wpml-st-taxonomy-labels-translation-factory.php',
        'WPML_ST_Theme_Localization_Type' => __DIR__ . '/../..' . '/classes/class-wpml-st-theme-localization-type.php',
        'WPML_ST_Theme_Localization_UI' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/strategy/class-wpml-st-theme-localization-ui.php',
        'WPML_ST_Theme_Localization_UI_Factory' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/factory/class-wpml-st-theme-localization-ui-factory.php',
        'WPML_ST_Theme_Localization_Utils' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/class-st-theme-localization-ui-utils.php',
        'WPML_ST_Theme_Plugin_Hooks' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-st-theme-plugin-hooks.php',
        'WPML_ST_Theme_Plugin_Hooks_Factory' => __DIR__ . '/../..' . '/classes/strings-scanning/factory/class-st-theme-plugin-hooks-factory.php',
        'WPML_ST_Theme_Plugin_Localization_Options_Settings' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/class-wpml-st-theme-plugin-localization-options-settings.php',
        'WPML_ST_Theme_Plugin_Localization_Options_Settings_Factory' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/factory/class-wpml-st-theme-plugin-localization-options-settings-factory.php',
        'WPML_ST_Theme_Plugin_Localization_Options_UI' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/class-st-theme-plugin-localization-options-ui.php',
        'WPML_ST_Theme_Plugin_Localization_Options_UI_Factory' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/factory/class-wpml-st-theme-plugin-localization-options-ui-factory.php',
        'WPML_ST_Theme_Plugin_Localization_Resources' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/class-wpml-st-theme-plugin-localization-resources.php',
        'WPML_ST_Theme_Plugin_Localization_Resources_Factory' => __DIR__ . '/../..' . '/classes/menus/theme-plugin-localization-ui/factory/class-wpml-st-theme-plugin-localization-resources-factory.php',
        'WPML_ST_Theme_Plugin_Scan_Dir_Ajax' => __DIR__ . '/../..' . '/classes/strings-scanning/wpml-st-theme-plugin-scan-dir-ajax.php',
        'WPML_ST_Theme_Plugin_Scan_Dir_Ajax_Factory' => __DIR__ . '/../..' . '/classes/strings-scanning/factory/class-wpml-st-theme-plugin-scan-dir-ajax-factory.php',
        'WPML_ST_Theme_Plugin_Scan_Files_Ajax' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-st-theme-plugin-scan-files-ajax.php',
        'WPML_ST_Theme_Plugin_Scan_Files_Ajax_Factory' => __DIR__ . '/../..' . '/classes/strings-scanning/factory/class-wpml-st-theme-plugin-scan-files-ajax-factory.php',
        'WPML_ST_Theme_String_Scanner_Factory' => __DIR__ . '/../..' . '/classes/strings-scanning/factory/class-wpml-st-theme-string-scanner-factory.php',
        'WPML_ST_Themes_And_Plugins_Settings' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-themes-and-plugins-settings.php',
        'WPML_ST_Themes_And_Plugins_Updates' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-themes-and-plugins-updates.php',
        'WPML_ST_Track_Strings_Notice' => __DIR__ . '/../..' . '/classes/notices/track-strings/wpml-st-track-strings-notice.php',
        'WPML_ST_Track_Strings_Notice_Hooks' => __DIR__ . '/../..' . '/classes/notices/track-strings/wpml-st-track-strings-notice-hooks.php',
        'WPML_ST_Track_Strings_Notice_Hooks_Factory' => __DIR__ . '/../..' . '/classes/notices/track-strings/wpml-st-track-strings-notice-hooks-factory.php',
        'WPML_ST_Update_File_Hash_Ajax' => __DIR__ . '/../..' . '/classes/strings-scanning/class-wpml-st-update-file-hash-ajax.php',
        'WPML_ST_Update_File_Hash_Ajax_Factory' => __DIR__ . '/../..' . '/classes/strings-scanning/factory/class-st-update-file-hash-ajax-factory.php',
        'WPML_ST_Upgrade' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade.php',
        'WPML_ST_Upgrade_Command_Factory' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-command-factory.php',
        'WPML_ST_Upgrade_Command_Not_Found_Exception' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-command-not-found-exception.php',
        'WPML_ST_Upgrade_DB_Longtext_String_Value' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-db-longtext-string-value.php',
        'WPML_ST_Upgrade_DB_String_Location' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-db-string-location.php',
        'WPML_ST_Upgrade_DB_String_Name_Index' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-db-string-name-index.php',
        'WPML_ST_Upgrade_DB_String_Packages' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-db-string-packages.php',
        'WPML_ST_Upgrade_Db_Cache_Command' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-db-cache-command.php',
        'WPML_ST_Upgrade_Display_Strings_Scan_Notices' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-display-strings-scan-notices.php',
        'WPML_ST_Upgrade_MO_Scanning' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-mo-scanning.php',
        'WPML_ST_Upgrade_Migrate_Originals' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-migrate-originals.php',
        'WPML_ST_Upgrade_String_Index' => __DIR__ . '/../..' . '/classes/upgrade/class-wpml-st-upgrade-string-index.php',
        'WPML_ST_User_Fields' => __DIR__ . '/../..' . '/classes/class-wpml-st-user-fields.php',
        'WPML_ST_Verify_Dependencies' => __DIR__ . '/../..' . '/classes/class-wpml-st-verify-dependencies.php',
        'WPML_ST_WP_Loaded_Action' => __DIR__ . '/../..' . '/classes/actions/class-wpml-st-wp-loaded-action.php',
        'WPML_ST_WP_Wrapper' => __DIR__ . '/../..' . '/classes/filters/db-cache/class-wpml-st-wp-wrapper.php',
        'WPML_Slug_Translation' => __DIR__ . '/../..' . '/classes/slug-translation/class-wpml-slug-translation.php',
        'WPML_Slug_Translation_Records' => __DIR__ . '/../..' . '/classes/slug-translation/class-wpml-slug-translation-records.php',
        'WPML_String_Registration_Factory' => __DIR__ . '/../..' . '/classes/class-wpml-string-registration-factory.php',
        'WPML_String_Scanner' => __DIR__ . '/../..' . '/inc/gettext/wpml-string-scanner.class.php',
        'WPML_String_Shortcode' => __DIR__ . '/../..' . '/classes/wpml-string-shortcode.php',
        'WPML_String_Translation' => __DIR__ . '/../..' . '/inc/wpml-string-translation.class.php',
        'WPML_String_Translation_MO_Import' => __DIR__ . '/../..' . '/inc/gettext/wpml-string-translation-mo-import.class.php',
        'WPML_String_Translation_Table' => __DIR__ . '/../..' . '/classes/string-translation-ui/class-wpml-string-translation-table.php',
        'WPML_TM_Filters' => __DIR__ . '/../..' . '/classes/filters/class-wpml-tm-filters.php',
        'WPML_TM_Widget_Filter' => __DIR__ . '/../..' . '/classes/filters/class-wpml-tm-widget-filter.php',
        'WPML_Theme_String_Scanner' => __DIR__ . '/../..' . '/inc/gettext/wpml-theme-string-scanner.class.php',
        'WPML_post_slug_translation_settings' => __DIR__ . '/../..' . '/classes/slug-translation/class-wpml-post-slug-translation-settings.php',
        'WP_Widget_Text_Icl' => __DIR__ . '/../..' . '/classes/widgets/wp-widget-text-icl.php',
        'xrstf\\Composer52\\AutoloadGenerator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/AutoloadGenerator.php',
        'xrstf\\Composer52\\Generator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/Generator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit2d1c4897c1b7bc041b8772ecde1f50fc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2d1c4897c1b7bc041b8772ecde1f50fc::$classMap;

        }, null, ClassLoader::class);
    }
}
