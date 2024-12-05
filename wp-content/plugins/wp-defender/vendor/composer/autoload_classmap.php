<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Attribute' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
    'Calotes\\Base\\Component' => $baseDir . '/framework/base/class-component.php',
    'Calotes\\Base\\Controller' => $baseDir . '/framework/base/class-controller.php',
    'Calotes\\Base\\File' => $baseDir . '/framework/base/class-file.php',
    'Calotes\\Base\\Model' => $baseDir . '/framework/base/class-model.php',
    'Calotes\\Base\\View' => $baseDir . '/framework/base/class-view.php',
    'Calotes\\Component\\Behavior' => $baseDir . '/framework/component/class-behavior.php',
    'Calotes\\Component\\Request' => $baseDir . '/framework/component/class-request.php',
    'Calotes\\Component\\Response' => $baseDir . '/framework/component/class-response.php',
    'Calotes\\DB\\Mapper' => $baseDir . '/framework/db/class-mapper.php',
    'Calotes\\Helper\\Array_Cache' => $baseDir . '/framework/helper/class-array-cache.php',
    'Calotes\\Helper\\HTTP' => $baseDir . '/framework/helper/class-http.php',
    'Calotes\\Helper\\Route' => $baseDir . '/framework/helper/class-route.php',
    'Calotes\\Model\\Setting' => $baseDir . '/framework/model/class-setting.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'MaxMind\\Db\\Reader' => $baseDir . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader.php',
    'MaxMind\\Db\\Reader\\Decoder' => $baseDir . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/Decoder.php',
    'MaxMind\\Db\\Reader\\InvalidDatabaseException' => $baseDir . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/InvalidDatabaseException.php',
    'MaxMind\\Db\\Reader\\Metadata' => $baseDir . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/Metadata.php',
    'MaxMind\\Db\\Reader\\Util' => $baseDir . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/Util.php',
    'PHP_CodeSniffer\\Config' => $baseDir . '/src/extra/php-codesniffer-php-token/Config.php',
    'PHP_CodeSniffer\\Exceptions\\DeepExitException' => $baseDir . '/src/extra/php-codesniffer-php-token/Exceptions/DeepExitException.php',
    'PHP_CodeSniffer\\Exceptions\\RuntimeException' => $baseDir . '/src/extra/php-codesniffer-php-token/Exceptions/RuntimeException.php',
    'PHP_CodeSniffer\\Exceptions\\TokenizerException' => $baseDir . '/src/extra/php-codesniffer-php-token/Exceptions/TokenizerException.php',
    'PHP_CodeSniffer\\Tokenizers\\CSS' => $baseDir . '/src/extra/php-codesniffer-php-token/Tokenizers/CSS.php',
    'PHP_CodeSniffer\\Tokenizers\\Comment' => $baseDir . '/src/extra/php-codesniffer-php-token/Tokenizers/Comment.php',
    'PHP_CodeSniffer\\Tokenizers\\JS' => $baseDir . '/src/extra/php-codesniffer-php-token/Tokenizers/JS.php',
    'PHP_CodeSniffer\\Tokenizers\\PHP' => $baseDir . '/src/extra/php-codesniffer-php-token/Tokenizers/PHP.php',
    'PHP_CodeSniffer\\Tokenizers\\Tokenizer' => $baseDir . '/src/extra/php-codesniffer-php-token/Tokenizers/Tokenizer.php',
    'PHP_CodeSniffer\\Util\\Cache' => $baseDir . '/src/extra/php-codesniffer-php-token/Util/Cache.php',
    'PHP_CodeSniffer\\Util\\Common' => $baseDir . '/src/extra/php-codesniffer-php-token/Util/Common.php',
    'PHP_CodeSniffer\\Util\\Standards' => $baseDir . '/src/extra/php-codesniffer-php-token/Util/Standards.php',
    'PHP_CodeSniffer\\Util\\Timing' => $baseDir . '/src/extra/php-codesniffer-php-token/Util/Timing.php',
    'PHP_CodeSniffer\\Util\\Tokens' => $baseDir . '/src/extra/php-codesniffer-php-token/Util/Tokens.php',
    'PhpToken' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
    'ReturnTypeWillChange' => $vendorDir . '/symfony/polyfill-php81/Resources/stubs/ReturnTypeWillChange.php',
    'Stringable' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
    'UnhandledMatchError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
    'ValueError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    'WP_Defender\\Admin' => $baseDir . '/src/class-admin.php',
    'WP_Defender\\Behavior\\Scan\\Core_Integrity' => $baseDir . '/src/behavior/scan/class-core-integrity.php',
    'WP_Defender\\Behavior\\Scan\\Gather_Fact' => $baseDir . '/src/behavior/scan/class-gather-fact.php',
    'WP_Defender\\Behavior\\Scan\\Known_Vulnerability' => $baseDir . '/src/behavior/scan/class-known-vulnerability.php',
    'WP_Defender\\Behavior\\Scan\\Malware_Deep_Scan' => $baseDir . '/src/behavior/scan/class-malware-deep-scan.php',
    'WP_Defender\\Behavior\\Scan\\Malware_Quick_Scan' => $baseDir . '/src/behavior/scan/class-malware-quick-scan.php',
    'WP_Defender\\Behavior\\Scan\\Malware_Scan' => $baseDir . '/src/behavior/scan/class-malware-scan.php',
    'WP_Defender\\Behavior\\Scan\\Plugin_Integrity' => $baseDir . '/src/behavior/scan/class-plugin-integrity.php',
    'WP_Defender\\Behavior\\Scan_Item\\Core_Integrity' => $baseDir . '/src/behavior/scan-item/class-core-integrity.php',
    'WP_Defender\\Behavior\\Scan_Item\\Malware_Result' => $baseDir . '/src/behavior/scan-item/class-malware-result.php',
    'WP_Defender\\Behavior\\Scan_Item\\Plugin_Integrity' => $baseDir . '/src/behavior/scan-item/class-plugin-integrity.php',
    'WP_Defender\\Behavior\\Scan_Item\\Plugin_Skin' => $baseDir . '/src/behavior/scan-item/class-plugin-skin.php',
    'WP_Defender\\Behavior\\Scan_Item\\Silent_Skin' => $baseDir . '/src/behavior/scan-item/class-silent-skin.php',
    'WP_Defender\\Behavior\\Scan_Item\\Vuln_Result' => $baseDir . '/src/behavior/scan-item/class-vuln-result.php',
    'WP_Defender\\Behavior\\WPMUDEV' => $baseDir . '/src/behavior/class-wpmudev.php',
    'WP_Defender\\Behavior\\WPMUDEV_Const_Interface' => $baseDir . '/src/behavior/wpmudev-const-interface.php',
    'WP_Defender\\Bootstrap' => $baseDir . '/src/class-bootstrap.php',
    'WP_Defender\\Central' => $baseDir . '/src/class-central.php',
    'WP_Defender\\Component' => $baseDir . '/src/class-component.php',
    'WP_Defender\\Component\\Audit' => $baseDir . '/src/component/class-audit.php',
    'WP_Defender\\Component\\Audit\\Audit_Event' => $baseDir . '/src/component/audit/class-audit-event.php',
    'WP_Defender\\Component\\Audit\\Comment_Audit' => $baseDir . '/src/component/audit/class-comment-audit.php',
    'WP_Defender\\Component\\Audit\\Core_Audit' => $baseDir . '/src/component/audit/class-core-audit.php',
    'WP_Defender\\Component\\Audit\\Media_Audit' => $baseDir . '/src/component/audit/class-media-audit.php',
    'WP_Defender\\Component\\Audit\\Menu_Audit' => $baseDir . '/src/component/audit/class-menu-audit.php',
    'WP_Defender\\Component\\Audit\\Options_Audit' => $baseDir . '/src/component/audit/class-options-audit.php',
    'WP_Defender\\Component\\Audit\\Post_Audit' => $baseDir . '/src/component/audit/class-post-audit.php',
    'WP_Defender\\Component\\Audit\\Users_Audit' => $baseDir . '/src/component/audit/class-users-audit.php',
    'WP_Defender\\Component\\Backup_Settings' => $baseDir . '/src/component/class-backup-settings.php',
    'WP_Defender\\Component\\Blacklist_Lockout' => $baseDir . '/src/component/class-blacklist-lockout.php',
    'WP_Defender\\Component\\Cli' => $baseDir . '/src/component/class-cli.php',
    'WP_Defender\\Component\\Config\\Config_Adapter' => $baseDir . '/src/component/config/class-config-adapter.php',
    'WP_Defender\\Component\\Config\\Config_Hub_Helper' => $baseDir . '/src/component/config/class-config-hub-helper.php',
    'WP_Defender\\Component\\Crypt' => $baseDir . '/src/component/class-crypt.php',
    'WP_Defender\\Component\\Error_Code' => $baseDir . '/src/component/class-error-code.php',
    'WP_Defender\\Component\\Feature_Modal' => $baseDir . '/src/component/class-feature-modal.php',
    'WP_Defender\\Component\\Firewall' => $baseDir . '/src/component/class-firewall.php',
    'WP_Defender\\Component\\Firewall_Logs' => $baseDir . '/src/component/class-firewall-logs.php',
    'WP_Defender\\Component\\Http\\Remote_Address' => $baseDir . '/src/component/http/class-remote-address.php',
    'WP_Defender\\Component\\Http\\Remote_Address\\Classic_Remote_Address' => $baseDir . '/src/component/http/remote-address/class-classic-remote-address.php',
    'WP_Defender\\Component\\Http\\Remote_Address\\Remote_Address' => $baseDir . '/src/component/http/remote-address/class-remote-address.php',
    'WP_Defender\\Component\\IP\\Global_IP' => $baseDir . '/src/component/ip/class-global-ip.php',
    'WP_Defender\\Component\\Legacy_Versions' => $baseDir . '/src/component/class-legacy-versions.php',
    'WP_Defender\\Component\\Logger\\Rotation_Logger' => $baseDir . '/src/component/logger/class-rotation-logger.php',
    'WP_Defender\\Component\\Logger\\Rotation_Logger_Interface' => $baseDir . '/src/component/logger/rotation-logger-interface.php',
    'WP_Defender\\Component\\Login_Lockout' => $baseDir . '/src/component/class-login-lockout.php',
    'WP_Defender\\Component\\Mail' => $baseDir . '/src/component/class-mail.php',
    'WP_Defender\\Component\\Mask_Login' => $baseDir . '/src/component/class-mask-login.php',
    'WP_Defender\\Component\\Notfound_Lockout' => $baseDir . '/src/component/class-notfound-lockout.php',
    'WP_Defender\\Component\\Notification' => $baseDir . '/src/component/class-notification.php',
    'WP_Defender\\Component\\Password_Protection' => $baseDir . '/src/component/class-password-protection.php',
    'WP_Defender\\Component\\Product_Analytics' => $baseDir . '/src/component/class-product-analytics.php',
    'WP_Defender\\Component\\Quarantine' => $baseDir . '/src/component/class-quarantine.php',
    'WP_Defender\\Component\\Rate' => $baseDir . '/src/component/class-rate.php',
    'WP_Defender\\Component\\Recaptcha' => $baseDir . '/src/component/class-recaptcha.php',
    'WP_Defender\\Component\\Scan' => $baseDir . '/src/component/class-scan.php',
    'WP_Defender\\Component\\Scan\\Tokens' => $baseDir . '/src/component/scan/class-tokens.php',
    'WP_Defender\\Component\\Scheduler\\Scheduler' => $baseDir . '/src/component/scheduler/class-scheduler.php',
    'WP_Defender\\Component\\Security_Header' => $baseDir . '/src/component/class-security-header.php',
    'WP_Defender\\Component\\Security_Headers\\Sh_Content_Type_Options' => $baseDir . '/src/component/security-headers/class-sh-content-type-options.php',
    'WP_Defender\\Component\\Security_Headers\\Sh_Feature_Policy' => $baseDir . '/src/component/security-headers/class-sh-feature-policy.php',
    'WP_Defender\\Component\\Security_Headers\\Sh_Referrer_Policy' => $baseDir . '/src/component/security-headers/class-sh-referrer-policy.php',
    'WP_Defender\\Component\\Security_Headers\\Sh_Strict_Transport' => $baseDir . '/src/component/security-headers/class-sh-strict-transport.php',
    'WP_Defender\\Component\\Security_Headers\\Sh_XSS_Protection' => $baseDir . '/src/component/security-headers/class-sh-xss-protection.php',
    'WP_Defender\\Component\\Security_Headers\\Sh_X_Frame' => $baseDir . '/src/component/security-headers/class-sh-x-frame.php',
    'WP_Defender\\Component\\Security_Tweak' => $baseDir . '/src/component/class-security-tweak.php',
    'WP_Defender\\Component\\Security_Tweaks\\Change_Admin' => $baseDir . '/src/component/security-tweaks/class-change-admin.php',
    'WP_Defender\\Component\\Security_Tweaks\\Disable_File_Editor' => $baseDir . '/src/component/security-tweaks/class-disable-file-editor.php',
    'WP_Defender\\Component\\Security_Tweaks\\Disable_Trackback' => $baseDir . '/src/component/security-tweaks/class-disable-trackback.php',
    'WP_Defender\\Component\\Security_Tweaks\\Disable_XML_RPC' => $baseDir . '/src/component/security-tweaks/class-disable-xml-rpc.php',
    'WP_Defender\\Component\\Security_Tweaks\\Hide_Error' => $baseDir . '/src/component/security-tweaks/class-hide-error.php',
    'WP_Defender\\Component\\Security_Tweaks\\Login_Duration' => $baseDir . '/src/component/security-tweaks/class-login-duration.php',
    'WP_Defender\\Component\\Security_Tweaks\\PHP_Version' => $baseDir . '/src/component/security-tweaks/class-php-version.php',
    'WP_Defender\\Component\\Security_Tweaks\\Prevent_Enum_Users' => $baseDir . '/src/component/security-tweaks/class-prevent-enum-users.php',
    'WP_Defender\\Component\\Security_Tweaks\\Prevent_PHP' => $baseDir . '/src/component/security-tweaks/class-prevent-php.php',
    'WP_Defender\\Component\\Security_Tweaks\\Protect_Information' => $baseDir . '/src/component/security-tweaks/class-protect-information.php',
    'WP_Defender\\Component\\Security_Tweaks\\Security_Key' => $baseDir . '/src/component/security-tweaks/class-security-key.php',
    'WP_Defender\\Component\\Security_Tweaks\\Security_Key_Const_Interface' => $baseDir . '/src/component/security-tweaks/security-tweaks-const-interface.php',
    'WP_Defender\\Component\\Security_Tweaks\\Servers\\Apache' => $baseDir . '/src/component/security-tweaks/servers/class-apache.php',
    'WP_Defender\\Component\\Security_Tweaks\\Servers\\Flywheel' => $baseDir . '/src/component/security-tweaks/servers/class-flywheel.php',
    'WP_Defender\\Component\\Security_Tweaks\\Servers\\IIS_7' => $baseDir . '/src/component/security-tweaks/servers/class-iis-7.php',
    'WP_Defender\\Component\\Security_Tweaks\\Servers\\Nginx' => $baseDir . '/src/component/security-tweaks/servers/class-nginx.php',
    'WP_Defender\\Component\\Security_Tweaks\\Servers\\PHP_Wasm' => $baseDir . '/src/component/security-tweaks/servers/class-php-wasm.php',
    'WP_Defender\\Component\\Security_Tweaks\\Servers\\Server' => $baseDir . '/src/component/security-tweaks/servers/class-server.php',
    'WP_Defender\\Component\\Security_Tweaks\\Servers\\Server_Factory' => $baseDir . '/src/component/security-tweaks/servers/class-server-factory.php',
    'WP_Defender\\Component\\Security_Tweaks\\WP_Version' => $baseDir . '/src/component/security-tweaks/class-wp-version.php',
    'WP_Defender\\Component\\Smart_Ip_Detection' => $baseDir . '/src/component/class-smart-ip-detection.php',
    'WP_Defender\\Component\\Table_Lockout' => $baseDir . '/src/component/class-table-lockout.php',
    'WP_Defender\\Component\\Timer' => $baseDir . '/src/component/class-timer.php',
    'WP_Defender\\Component\\Trusted_Proxy_Preset\\Cloudflare_Proxy' => $baseDir . '/src/component/trusted-proxy-preset/class-cloudflare-proxy.php',
    'WP_Defender\\Component\\Trusted_Proxy_Preset\\Trusted_Proxy_Preset' => $baseDir . '/src/component/trusted-proxy-preset/class-trusted-proxy-preset.php',
    'WP_Defender\\Component\\Trusted_Proxy_Preset\\Trusted_Proxy_Preset_Strategy_Interface' => $baseDir . '/src/component/trusted-proxy-preset/trusted-proxy-preset-strategy-interface.php',
    'WP_Defender\\Component\\Two_Fa' => $baseDir . '/src/component/class-two-fa.php',
    'WP_Defender\\Component\\Two_Factor\\Providers\\Backup_Codes' => $baseDir . '/src/component/two-factor/providers/class-backup-codes.php',
    'WP_Defender\\Component\\Two_Factor\\Providers\\Fallback_Email' => $baseDir . '/src/component/two-factor/providers/class-fallback-email.php',
    'WP_Defender\\Component\\Two_Factor\\Providers\\Totp' => $baseDir . '/src/component/two-factor/providers/class-totp.php',
    'WP_Defender\\Component\\Two_Factor\\Providers\\Webauthn' => $baseDir . '/src/component/two-factor/providers/class-webauthn.php',
    'WP_Defender\\Component\\Two_Factor\\Two_Factor_Provider' => $baseDir . '/src/component/two-factor/class-two-factor-provider.php',
    'WP_Defender\\Component\\Unlock_Me' => $baseDir . '/src/component/class-unlock-me.php',
    'WP_Defender\\Component\\User_Agent' => $baseDir . '/src/component/class-user-agent.php',
    'WP_Defender\\Component\\Webauthn' => $baseDir . '/src/component/class-webauthn.php',
    'WP_Defender\\Controller' => $baseDir . '/src/class-controller.php',
    'WP_Defender\\Controller\\Advanced_Tools' => $baseDir . '/src/controller/class-advanced-tools.php',
    'WP_Defender\\Controller\\Audit_Logging' => $baseDir . '/src/controller/class-audit-logging.php',
    'WP_Defender\\Controller\\Blacklist' => $baseDir . '/src/controller/class-blacklist.php',
    'WP_Defender\\Controller\\Blocklist_Monitor' => $baseDir . '/src/controller/class-blocklist-monitor.php',
    'WP_Defender\\Controller\\Dashboard' => $baseDir . '/src/controller/class-dashboard.php',
    'WP_Defender\\Controller\\Data_Tracking' => $baseDir . '/src/controller/class-data-tracking.php',
    'WP_Defender\\Controller\\Expert_Services' => $baseDir . '/src/controller/class-expert-services.php',
    'WP_Defender\\Controller\\Firewall' => $baseDir . '/src/controller/class-firewall.php',
    'WP_Defender\\Controller\\Firewall_Logs' => $baseDir . '/src/controller/class-firewall-logs.php',
    'WP_Defender\\Controller\\Global_Ip' => $baseDir . '/src/controller/class-global-ip.php',
    'WP_Defender\\Controller\\HUB' => $baseDir . '/src/controller/class-hub.php',
    'WP_Defender\\Controller\\Login_Lockout' => $baseDir . '/src/controller/class-login-lockout.php',
    'WP_Defender\\Controller\\Main_Setting' => $baseDir . '/src/controller/class-main-setting.php',
    'WP_Defender\\Controller\\Mask_Login' => $baseDir . '/src/controller/class-mask-login.php',
    'WP_Defender\\Controller\\Nf_Lockout' => $baseDir . '/src/controller/class-nf-lockout.php',
    'WP_Defender\\Controller\\Notification' => $baseDir . '/src/controller/class-notification.php',
    'WP_Defender\\Controller\\Onboard' => $baseDir . '/src/controller/class-onboard.php',
    'WP_Defender\\Controller\\Password_Protection' => $baseDir . '/src/controller/class-password-protection.php',
    'WP_Defender\\Controller\\Password_Reset' => $baseDir . '/src/controller/class-password-reset.php',
    'WP_Defender\\Controller\\Quarantine' => $baseDir . '/src/controller/class-quarantine.php',
    'WP_Defender\\Controller\\Recaptcha' => $baseDir . '/src/controller/class-recaptcha.php',
    'WP_Defender\\Controller\\Scan' => $baseDir . '/src/controller/class-scan.php',
    'WP_Defender\\Controller\\Security_Headers' => $baseDir . '/src/controller/class-security-headers.php',
    'WP_Defender\\Controller\\Security_Tweaks' => $baseDir . '/src/controller/class-security-tweaks.php',
    'WP_Defender\\Controller\\Tutorial' => $baseDir . '/src/controller/class-tutorial.php',
    'WP_Defender\\Controller\\Two_Factor' => $baseDir . '/src/controller/class-two-factor.php',
    'WP_Defender\\Controller\\UA_Lockout' => $baseDir . '/src/controller/class-ua-lockout.php',
    'WP_Defender\\Controller\\WAF' => $baseDir . '/src/controller/class-waf.php',
    'WP_Defender\\Controller\\Webauthn' => $baseDir . '/src/controller/class-webauthn.php',
    'WP_Defender\\DB' => $baseDir . '/src/class-db.php',
    'WP_Defender\\Event' => $baseDir . '/src/class-event.php',
    'WP_Defender\\Extra\\Base2n' => $baseDir . '/src/extra/binary-to-text-php/Base2n.php',
    'WP_Defender\\Extra\\GeoIp' => $baseDir . '/src/extra/geoip.php',
    'WP_Defender\\Extra\\IP_Helper' => $baseDir . '/src/extra/ip-helper.php',
    'WP_Defender\\Helper\\Analytics\\Firewall' => $baseDir . '/src/helper/analytics/class-firewall.php',
    'WP_Defender\\Helper\\Analytics\\Scan' => $baseDir . '/src/helper/analytics/class-scan.php',
    'WP_Defender\\Helper\\File' => $baseDir . '/src/helper/class-file.php',
    'WP_Defender\\Integrations\\Blocklist_Client' => $baseDir . '/src/integrations/class-blocklist-client.php',
    'WP_Defender\\Integrations\\Buddypress' => $baseDir . '/src/integrations/class-buddypress.php',
    'WP_Defender\\Integrations\\Dashboard_Whitelabel' => $baseDir . '/src/integrations/class-dashboard-whitelabel.php',
    'WP_Defender\\Integrations\\MaxMind_Geolocation' => $baseDir . '/src/integrations/class-maxmind-geolocation.php',
    'WP_Defender\\Integrations\\Smush' => $baseDir . '/src/integrations/class-smush.php',
    'WP_Defender\\Integrations\\Woocommerce' => $baseDir . '/src/integrations/class-woocommerce.php',
    'WP_Defender\\Model\\Audit_Log' => $baseDir . '/src/model/class-audit-log.php',
    'WP_Defender\\Model\\Email_Track' => $baseDir . '/src/model/class-email-track.php',
    'WP_Defender\\Model\\Lockout_Ip' => $baseDir . '/src/model/class-lockout-ip.php',
    'WP_Defender\\Model\\Lockout_Log' => $baseDir . '/src/model/class-lockout-log.php',
    'WP_Defender\\Model\\Notification' => $baseDir . '/src/model/class-notification.php',
    'WP_Defender\\Model\\Notification\\Audit_Report' => $baseDir . '/src/model/notification/class-audit-report.php',
    'WP_Defender\\Model\\Notification\\Firewall_Notification' => $baseDir . '/src/model/notification/class-firewall-notification.php',
    'WP_Defender\\Model\\Notification\\Firewall_Report' => $baseDir . '/src/model/notification/class-firewall-report.php',
    'WP_Defender\\Model\\Notification\\Malware_Notification' => $baseDir . '/src/model/notification/class-malware-notification.php',
    'WP_Defender\\Model\\Notification\\Malware_Report' => $baseDir . '/src/model/notification/class-malware-report.php',
    'WP_Defender\\Model\\Notification\\Tweak_Reminder' => $baseDir . '/src/model/notification/class-tweak-reminder.php',
    'WP_Defender\\Model\\Onboard' => $baseDir . '/src/model/class-onboard.php',
    'WP_Defender\\Model\\Quarantine' => $baseDir . '/src/model/class-quarantine.php',
    'WP_Defender\\Model\\Scan' => $baseDir . '/src/model/class-scan.php',
    'WP_Defender\\Model\\Scan_Item' => $baseDir . '/src/model/class-scan-item.php',
    'WP_Defender\\Model\\Setting\\Audit_Logging' => $baseDir . '/src/model/setting/class-audit-logging.php',
    'WP_Defender\\Model\\Setting\\Blacklist_Lockout' => $baseDir . '/src/model/setting/class-blacklist-lockout.php',
    'WP_Defender\\Model\\Setting\\Firewall' => $baseDir . '/src/model/setting/class-firewall.php',
    'WP_Defender\\Model\\Setting\\Global_Ip_Lockout' => $baseDir . '/src/model/setting/class-global-ip-lockout.php',
    'WP_Defender\\Model\\Setting\\Login_Lockout' => $baseDir . '/src/model/setting/class-login-lockout.php',
    'WP_Defender\\Model\\Setting\\Main_Setting' => $baseDir . '/src/model/setting/class-main-setting.php',
    'WP_Defender\\Model\\Setting\\Mask_Login' => $baseDir . '/src/model/setting/class-mask-login.php',
    'WP_Defender\\Model\\Setting\\Notfound_Lockout' => $baseDir . '/src/model/setting/class-notfound-lockout.php',
    'WP_Defender\\Model\\Setting\\Password_Protection' => $baseDir . '/src/model/setting/class-password-protection.php',
    'WP_Defender\\Model\\Setting\\Password_Reset' => $baseDir . '/src/model/setting/class-password-reset.php',
    'WP_Defender\\Model\\Setting\\Recaptcha' => $baseDir . '/src/model/setting/class-recaptcha.php',
    'WP_Defender\\Model\\Setting\\Scan' => $baseDir . '/src/model/setting/class-scan.php',
    'WP_Defender\\Model\\Setting\\Security_Headers' => $baseDir . '/src/model/setting/class-security-headers.php',
    'WP_Defender\\Model\\Setting\\Security_Tweaks' => $baseDir . '/src/model/setting/class-security-tweaks.php',
    'WP_Defender\\Model\\Setting\\Two_Fa' => $baseDir . '/src/model/setting/class-two-fa.php',
    'WP_Defender\\Model\\Setting\\User_Agent_Lockout' => $baseDir . '/src/model/setting/class-user-agent-lockout.php',
    'WP_Defender\\Model\\Spam_Comment' => $baseDir . '/src/model/class-spam-comment.php',
    'WP_Defender\\Model\\Unlockout' => $baseDir . '/src/model/class-unlockout.php',
    'WP_Defender\\Traits\\Continent' => $baseDir . '/src/traits/continent.php',
    'WP_Defender\\Traits\\Country' => $baseDir . '/src/traits/country.php',
    'WP_Defender\\Traits\\Defender_Bootstrap' => $baseDir . '/src/traits/defender-bootstrap.php',
    'WP_Defender\\Traits\\Defender_Dashboard_Client' => $baseDir . '/src/traits/defender-dashboard-client.php',
    'WP_Defender\\Traits\\Defender_Hub_Client' => $baseDir . '/src/traits/defender-hub-client.php',
    'WP_Defender\\Traits\\Device' => $baseDir . '/src/traits/device.php',
    'WP_Defender\\Traits\\File_Operations' => $baseDir . '/src/traits/file-operations.php',
    'WP_Defender\\Traits\\Formats' => $baseDir . '/src/traits/formats.php',
    'WP_Defender\\Traits\\Hummingbird' => $baseDir . '/src/traits/hummingbird.php',
    'WP_Defender\\Traits\\IO' => $baseDir . '/src/traits/io.php',
    'WP_Defender\\Traits\\IP' => $baseDir . '/src/traits/ip.php',
    'WP_Defender\\Traits\\Permission' => $baseDir . '/src/traits/permission.php',
    'WP_Defender\\Traits\\Plugin' => $baseDir . '/src/traits/plugin.php',
    'WP_Defender\\Traits\\Scan_Email_Template' => $baseDir . '/src/traits/scan-email-template.php',
    'WP_Defender\\Traits\\Scan_Upsell' => $baseDir . '/src/traits/scan-upsell.php',
    'WP_Defender\\Traits\\Security_Tweaks_Option' => $baseDir . '/src/traits/security-tweaks-option.php',
    'WP_Defender\\Traits\\Setting' => $baseDir . '/src/traits/setting.php',
    'WP_Defender\\Traits\\Theme' => $baseDir . '/src/traits/theme.php',
    'WP_Defender\\Traits\\User' => $baseDir . '/src/traits/user.php',
    'WP_Defender\\Traits\\Webauthn' => $baseDir . '/src/traits/webauthn.php',
    'WP_Defender\\Upgrader' => $baseDir . '/src/class-upgrader.php',
);