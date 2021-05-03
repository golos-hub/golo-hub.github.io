<html lang="ru" dir="ltr" style="--scroll-fixed-width: 960px; --layout-width: 960px;">
    <head class="push_notifier_supported">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="/images/icons/favicons/fav_logo.ico?6" />

        <link rel="apple-touch-icon" href="/images/icons/pwa/apple/default.png?11" />

        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <meta
            http-equiv="origin-trial"
            content="AlWF3ZBTYSsnKHhmA2M7PYvp/oeFfIO75mbC0fqdSYGB2uiEWXINDKmxjFgX3eZ1YZrGoj14MAuEXokLmPfgGg4AAABceyJvcmlnaW4iOiJodHRwczovL3ZrLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViQ29kZWNzIiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZX0="
        />
        <meta
            name="description"
            content="ВКонтакте – универсальное средство для общения и поиска друзей и одноклассников, которым ежедневно пользуются десятки миллионов человек. Мы хотим, чтобы друзья, однокурсники, одноклассники, соседи и коллеги всегда оставались в контакте."
        />

        <title>Добро пожаловать | ВКонтакте</title>

        <noscript><meta http-equiv="refresh" content="0; URL=/badbrowser.php" /></noscript>

        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/al/common.2ee7928481be65633060.css" />
        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/al/base.e0faf51b5c8eec925fbf.css" />
        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/al/fonts_utf.77f51ed9f0722738f746.css" />
        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/al/fonts_cnt.1ab0d9523ca369513519.css" />

        <script src="https://connect.facebook.net/ru_RU/sdk.js?hash=6a8cd9b8ce74e93dfacd554324d36660&amp;ua=modern_es6" async="" crossorigin="anonymous"></script>
        <script type="text/javascript" async="" src="https://top-fwz1.mail.ru/js/code.js"></script>
        <script id="facebook-jssdk" src="//connect.facebook.net/ru_RU/sdk.js"></script>
        <script type="text/javascript">
            (function () {
                var alertCont;
                function trackOldBrowserEvent(event) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET", "/badbrowser_stat.php?act=track&event=" + event);
                    xhr.send();
                }
                function exposeGlobals() {
                    window.hideOldBrowser = function () {
                        alertCont.remove();
                        var date = new Date();
                        date.setTime(date.getTime() + 7 * 24 * 60 * 60 * 1000);
                        var expiresDate = date.toGMTString();
                        var domain = window.locDomain;
                        document.cookie = "remixoldbshown=1; expires=" + expiresDate + "; path=/" + (domain ? "; domain=." + domain : "") + ";secure";
                        trackOldBrowserEvent("hideAlert_atom");
                    };
                }
                function checkOldBrowser() {
                    if (!document.body) {
                        setTimeout(checkOldBrowser, 100);
                        return;
                    }
                    try {
                        if ((false || !("noModule" in HTMLScriptElement.prototype)) && !false) {
                            exposeGlobals();
                            var alert =
                                '<div class="OldBrowser__container OldBrowser__container--atom" style="width:960px;">  Ваш браузер устарел. Попробуйте <a href="https://vk.com/away.php?to=https%3A%2F%2F1l-go.mail.ru%2Fr%2Fadid%2F3196767_2013344%2Fpid%2F102819%2Fpof%2F1%2Ff%2F3%2F%3F_1larg_sub%3D505010%26rfr%3D505010%26utm_source%3Dvk%26utm_medium%3Dstripeall%26utm_campaign%3DExpVk&badbrowser=atom&badbrowser_meta=_badbrowser_alert" target="_blank">браузер Atom</a>, чтобы работа ВКонтакте была быстрой и стабильной. <a href="https://vk.com/away.php?to=https%3A%2F%2F1l-go.mail.ru%2Fr%2Fadid%2F3196767_2013344%2Fpid%2F102819%2Fpof%2F1%2Ff%2F3%2F%3F_1larg_sub%3D505010%26rfr%3D505010%26utm_source%3Dvk%26utm_medium%3Dstripeall%26utm_campaign%3DExpVk&badbrowser=atom&badbrowser_meta=_badbrowser_alert" target="_blank">Подробнее</a>  <span class="OldBrowser__close" aria-label="Закрыть" role="button" onclick="hideOldBrowser();"></span></div>';
                            alertCont = document.createElement("div");
                            alertCont.className = "OldBrowser";
                            alertCont.id = "old_browser_wrap";
                            alertCont.innerHTML = alert;
                            document.body.appendChild(alertCont);
                            trackOldBrowserEvent("showAlert_atom");
                        } else {
                            if (browserVersion < lastVersions[browserName] - 1) {
                                trackOldBrowserEvent("badBrowser" + (lastVersions[browserName] - browserVersion));
                            }
                        }
                    } catch (e) {}
                }
                setTimeout(checkOldBrowser, 0);
            })();
            var vk = {
                ads_rotate_interval: 120000,
                al: parseInt("3") || 4,
                id: 0,
                sex: 0,
                intnat: "" ? true : false,
                host: "vk.com",
                loginDomain: "https://login.vk.com/",
                lang: 0,
                statsMeta: { platform: "web2", st: false, time: 1619965024, hash: "ZqzbyCgG0ZqZxjgWf8cp1tIQQ5A8Q3BNAX2oiwV4Jw8" },
                loaderNavSection: "",
                rtl: parseInt("") || 0,
                version: 11257393,
                stDomains: 0,
                stDomain: "https://st1-94.vk.com",
                navPostfix: "",
                wsTransport: "https://stats.vk-portal.net",
                stExcludedMasks: ["loader_nav", "lang", "sw\/"],
                zero: false,
                contlen: 14127,
                loginscheme: "https",
                ip_h: "005b826508c157fce5",
                navPrefix: "/",
                dt: parseInt("0") || 0,
                fs: parseInt("13") || 13,
                ts: 1619965024,
                tz: 10800,
                pd: 0,
                vcost: 7,
                time: [2021, 5, 2, 17, 17, 4],
                sampleUser: -1,
                spentLastSendTS: new Date().getTime(),
                a11y: 0,
                statusExportHash: "",
                audioAdsConfig: { _: "_" },
                longViewTestGroup: "every_view",
                cma: 1,
                lpConfig: {
                    enabled: 0,
                    key: "",
                    ts: 0,
                    url: "",
                    lpstat: 0,
                    sseUrl: "https://papi.vk.com/pushsse/ruim",
                },

                pr_tpl: '<div class="pr %cls%" id="%id%"><div class="pr_bt"><\/div><div class="pr_bt"><\/div><div class="pr_bt"><\/div><\/div>',
                push_hash: "744e80ed54536db36e",

                audioInlinePlayerTpl:
                    '<div class="audio_inline_player _audio_inline_player no_select">\n  <div class="audio_inline_player_right">\n    <div class="audio_inline_player_volume"><\/div>\n  <\/div>\n  <div class="audio_inline_player_left">\n    <div class="audio_inline_player_progress"><\/div>\n  <\/div>\n<\/div>',

                pe: {
                    vk_apps_svg_qr: 1,
                    "upload.send_upload_stat": 1,
                    push_notifier: 1,
                    notify_new_events_box: 1,
                    mini_apps_web_add_to_favorites: 1,
                    mini_apps_web_add_to_menu: 1,
                    mini_apps_m_web_new_stub_page: 1,
                    cookie_class_samesite: 1,
                    cookie_secure_default_true: 1,
                    stickers_bot_link: 1,
                    widgets_xdm_same_origin: 1,
                    stickers_money_transfer_suggestions: 1,
                    web2_story_box_enabled: 1,
                    bridge_mobile_story_box_enabled: 1,
                    navigation_timespent: 1,
                    market_item_recommendations_view_log: 1,
                    market_item_others_view_log: 1,
                    web_stats_transport_story_view: 1,
                    registration_item_stat: 1,
                    mvk_lazy_static_reload: 1,
                    mute_mvk_err_peaks: 1,
                    notifications_view_new: 1,
                    ads_market_autopromotion_bookmarks_stats: 1,
                    mini_apps_web_call_api_form_data: 1,
                    web_new_photo_editor: 1,
                    web_new_photo_editor_crop: 1,
                    web_photo_editor_hide_entrypoint: 1,
                    web_stats_try_send: 1,
                    narratives_new: 1,
                    stickers_catalog_reload_after_buy: 1,
                    web_stats_send_on_events_limit: 1,
                    batchify_web_stats: 1,
                    stickers_web_new_ui: 1,
                    ads_new_reports_web_tgb: 1,
                    ads_autopromotion_web_cashback: 1,
                    ads_autopromotion_web_geo: 1,
                    recognize_mock_turn_off: 1,
                    photo_recognition_web: 1,
                    aliexpress_app_links_with_partner_links: 1,
                    ads_new_reports_web_histories: 1,
                    ads_new_reports_mvk_histories: 1,
                    audio_unauth_preview: 1,
                    audio_unauth_preview_box: 1,
                    ads_easy_promote_goods_new_create_api: 1,
                    unauthorized_media_layer_box: 1,
                    mail_history_unread_counter_observer: 1,
                    pinned_conversations: 1,
                    messenger_empty_pinned_support: 1,
                    market_catalog_fixed_header: 1,
                    force_act_in_get_params: 1,
                    vk_mini_apps_new_web_snippet: 1,
                    market_suggest_search_queries: 1,
                    mail_longpoll_unread_counter: 1,
                    faq_clean_up_extra_spaces: 1,
                    nospam_use_new_conditions_editor: 1,
                    mvk_quick_search_canceled_requests: 1,
                    games_not_send_install_bridge_event: 1,
                },
                ex: [],
                countryISO: "RU",
                apiConfigDomains: {
                    apiDomain: "api.vk.com",
                    loginDomain: "login.vk.com",
                },

                isCallsDevEnv: "" ? true : false,
            };
            vk.rv = "107035";
            if (!window.constants) {
                window.constants = {
                    Groups: {
                        GROUPS_ADMIN_LEVEL_USER: 0,
                        GROUPS_ADMIN_LEVEL_MODERATOR: 1,
                        GROUPS_ADMIN_LEVEL_EDITOR: 2,
                        GROUPS_ADMIN_LEVEL_ADMINISTRATOR: 3,
                        GROUPS_ADMIN_LEVEL_HOST: 4,
                        GROUPS_ADMIN_LEVEL_EVENT_CREATOR: 5,
                        GROUPS_ADMIN_LEVEL_CREATOR: 6,
                        GROUPS_ADMIN_PSEUDO_LEVEL_ADVERTISER: 100,
                    },
                };
            }

            window.locDomain = vk.host.match(/[a-zA-Z]+\.[a-zA-Z]+\.?$/)[0];
            var _ua = navigator.userAgent.toLowerCase();
            if (/opera/i.test(_ua) || !/msie 6/i.test(_ua) || document.domain != locDomain) document.domain = locDomain;
            var ___htest = (location.toString().match(/#(.*)/) || {})[1] || "",
                ___to;
            ___htest = ___htest.split("#").pop();
            if (vk.al != 1 && ___htest.length && ___htest.substr(0, 1) == vk.navPrefix) {
                if (vk.al != 3 || vk.navPrefix != "!") {
                    ___to = ___htest.replace(/^(\/|!)/, "");
                    if (___to.match(/^([^\?]*\.php|login|mobile|away)([^a-z0-9\.]|$)/)) ___to = "";
                    location.replace(location.protocol + "//" + location.host + "/" + ___to);
                }
            }

            var StaticFiles = {
                "cmodules/web/common_web.js": { v: "241" },
                "al/common.2ee7928481be65633060.css": { v: "" },
                "common.css": { v: 1 },
                "al/base.e0faf51b5c8eec925fbf.css": { v: "" },
                "base.css": { v: 1 },
                "al/fonts_utf.77f51ed9f0722738f746.css": { v: "" },
                "fonts_utf.css": { v: 1 },
                "al/fonts_cnt.1ab0d9523ca369513519.css": { v: "" },
                "fonts_cnt.css": { v: 1 },
                "cmodules/bundles/evbus.f62d6f201054d4f5cc1e.js": { v: "419b72a44fb4fc8d5508" },
                "cmodules/bundles/lottie.786b1fc6717e2a8eb385.js": { v: "3672aabe71f1c1e08d44" },
                "cmodules/bundles/audioplayer.dac47dd683cf35ab8264.js": { v: "c45c3319e9a171e8c520" },
                "cmodules/bundles/common.c69b44817e4c1a6e80ee.js": { v: "1a1231ba89db8b2c47ea" },
                "cmodules/web/common_web.3548a0509e9f53c43c17.js": { v: "07f12d453da650c39ba8db8ee934b45e" },
                "lang0_0.js": { v: 26999417 },
                "al/index.9fdff5170adcb26bbfec.css": { v: "" },
                "index.css": { v: 1 },
                "cmodules/web/index.001b9651f1ce6a72951b.js": { v: "75a359bbdcb44a36413d49fdcdc730aa" },
                "cmodules/web/index.js": { v: 1 },
                "al/login.0b4f46560f77c11e1489.css": { v: "" },
                "login.css": { v: 1 },
                "ui_controls.0d8ed0a3b1dad7ccc457.css": { v: "" },
                "ui_controls.css": { v: 1 },
                "ui_controls.js": { v: 189 },
                "cmodules/web/language.df40e9fb2f0a88b7f295.js": { v: "e367537295be5e6c55b566c4c2fe3090" },
                "cmodules/web/language.js": { v: 1 },
                "cmodules/web/css_types.dfa57442cf3e719a7880.js": { v: "559cbedda2472669152d" },
                "cmodules/web/css_types.js": { v: 1 },
                "cmodules/web/unauthorized.57cb1955cd81944eef8e.js": { v: "5f922f563f7756dac2c2bf1dbd88d83c" },
                "cmodules/web/unauthorized.js": { v: 1 },
                "cmodules/web/jobs_devtools_notification.d2253c805dc62c4b8c3c.js": { v: "b26a7d7f84a8da7cdd052ca0d88b98ec" },
                "cmodules/web/jobs_devtools_notification.js": { v: 1 },
                "cmodules/web/page_layout.0237014897055fafb022.js": { v: "3cae42f0daa297b9c3b7a76cd0b01008" },
                "cmodules/web/page_layout.js": { v: 1 },
                "cmodules/bundles/aac0ded9b3bda59264fe218bce1c3229.bc8d5cb625d683b1fea9.js": { v: "242038b8544996a77036" },
                "cmodules/web/ui_common.732200aa99435497b3e0.js": { v: "714e3bbd76b7c050ea15bb1d3c466748" },
                "ui_common.js": { v: 1 },
                "al/ui_common.e4b8a790192900f5f39b.css": { v: "" },
                "ui_common.css": { v: 1 },
                "cmodules/bundles/ab25dbb3f05567307ff171fe2547804b.73048c94efcccd3747fb.js": { v: "c137ef8a68f45fd7165f" },
                "cmodules/web/likes.d8b5776e63b74dd89e91.js": { v: "8f421a812e9c86be840197a44f19d27e" },
                "cmodules/web/likes.js": { v: 1 },
            };
            var abp;
        </script>

        <script type="text/javascript" src="/js/loader_nav212411255269_0.js"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/bundles/evbus.f62d6f201054d4f5cc1e.js?419b72a44fb4fc8d5508"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/bundles/lottie.786b1fc6717e2a8eb385.js?3672aabe71f1c1e08d44"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/bundles/audioplayer.dac47dd683cf35ab8264.js?c45c3319e9a171e8c520"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/bundles/common.c69b44817e4c1a6e80ee.js?1a1231ba89db8b2c47ea"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/common_web.3548a0509e9f53c43c17.js?07f12d453da650c39ba8db8ee934b45e"></script>
        <script type="text/javascript" src="/js/lang0_0.js?26999417"></script>
        <script type="text/javascript" src="/js/lib/px.js?ch=1"></script>
        <script type="text/javascript" src="/js/lib/px.js?ch=2"></script>
        <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.vk.com/" />
        <link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/" />
        <meta name="msApplication-ID" content="C6965DD5.VK" />
        <meta name="msApplication-PackageFamilyName" content="C6965DD5.VK_v422avzh127ra" />
        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/al/index.9fdff5170adcb26bbfec.css" />
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/index.001b9651f1ce6a72951b.js?75a359bbdcb44a36413d49fdcdc730aa"></script>
        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/al/login.0b4f46560f77c11e1489.css" />
        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/ui_controls.0d8ed0a3b1dad7ccc457.css" />
        <script type="text/javascript" src="https://st1-94.vk.com/js/lib/ui_controls.js?189"></script>
        <script type="text/javascript" src="/js/cmodules/web/language.df40e9fb2f0a88b7f295.js?e367537295be5e6c55b566c4c2fe3090"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/css_types.dfa57442cf3e719a7880.js?559cbedda2472669152d"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/unauthorized.57cb1955cd81944eef8e.js?5f922f563f7756dac2c2bf1dbd88d83c"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/jobs_devtools_notification.d2253c805dc62c4b8c3c.js?b26a7d7f84a8da7cdd052ca0d88b98ec"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/page_layout.0237014897055fafb022.js?3cae42f0daa297b9c3b7a76cd0b01008"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/bundles/aac0ded9b3bda59264fe218bce1c3229.bc8d5cb625d683b1fea9.js?242038b8544996a77036"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/ui_common.732200aa99435497b3e0.js?714e3bbd76b7c050ea15bb1d3c466748"></script>
        <link type="text/css" rel="stylesheet" href="https://st1-94.vk.com/css/al/ui_common.e4b8a790192900f5f39b.css" />
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/bundles/ab25dbb3f05567307ff171fe2547804b.73048c94efcccd3747fb.js?c137ef8a68f45fd7165f"></script>
        <script type="text/javascript" src="https://st1-94.vk.com/js/cmodules/web/likes.d8b5776e63b74dd89e91.js?8f421a812e9c86be840197a44f19d27e"></script>

        <script src="https://st1-94.vk.com/js/cmodules/web/tooltips.7ca4a794233b6dd599f6.js?fdcbbe1c276d4b4fb503aed8d7f2b708"></script>
        <link rel="stylesheet" type="text/css" href="https://st1-94.vk.com/css/al/tooltips.e61e500000814b4245c0.css" />
        <style type="text/css" data-fbcssmodules="css:fb.css.basecss:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
            .fb_hidden {
                position: absolute;
                top: -10000px;
                z-index: 10001;
            }
            .fb_reposition {
                overflow: hidden;
                position: relative;
            }
            .fb_invisible {
                display: none;
            }
            .fb_reset {
                background: none;
                border: 0;
                border-spacing: 0;
                color: #000;
                cursor: auto;
                direction: ltr;
                font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
                font-size: 11px;
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
                letter-spacing: normal;
                line-height: 1;
                margin: 0;
                overflow: visible;
                padding: 0;
                text-align: left;
                text-decoration: none;
                text-indent: 0;
                text-shadow: none;
                text-transform: none;
                visibility: visible;
                white-space: normal;
                word-spacing: normal;
            }
            .fb_reset > div {
                overflow: hidden;
            }
            @keyframes fb_transform {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            .fb_animate {
                animation: fb_transform 0.3s forwards;
            }
            .fb_dialog {
                background: rgba(82, 82, 82, 0.7);
                position: absolute;
                top: -10000px;
                z-index: 10001;
            }
            .fb_dialog_advanced {
                border-radius: 8px;
                padding: 10px;
            }
            .fb_dialog_content {
                background: #fff;
                color: #373737;
            }
            .fb_dialog_close_icon {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
                cursor: pointer;
                display: block;
                height: 15px;
                position: absolute;
                right: 18px;
                top: 17px;
                width: 15px;
            }
            .fb_dialog_mobile .fb_dialog_close_icon {
                left: 5px;
                right: auto;
                top: 5px;
            }
            .fb_dialog_padding {
                background-color: transparent;
                position: absolute;
                width: 1px;
                z-index: -1;
            }
            .fb_dialog_close_icon:hover {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
            }
            .fb_dialog_close_icon:active {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
            }
            .fb_dialog_iframe {
                line-height: 0;
            }
            .fb_dialog_content .dialog_title {
                background: #6d84b4;
                border: 1px solid #365899;
                color: #fff;
                font-size: 14px;
                font-weight: bold;
                margin: 0;
            }
            .fb_dialog_content .dialog_title > span {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
                float: left;
                padding: 5px 0 7px 26px;
            }
            body.fb_hidden {
                height: 100%;
                left: 0;
                margin: 0;
                overflow: visible;
                position: absolute;
                top: -10000px;
                transform: none;
                width: 100%;
            }
            .fb_dialog.fb_dialog_mobile.loading {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
                min-height: 100%;
                min-width: 100%;
                overflow: hidden;
                position: absolute;
                top: 0;
                z-index: 10001;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered {
                background: none;
                height: auto;
                min-height: initial;
                min-width: initial;
                width: auto;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
                width: 100%;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
                background: none;
            }
            .loading.centered #fb_dialog_loader_close {
                clear: both;
                color: #fff;
                display: block;
                font-size: 18px;
                padding-top: 20px;
            }
            #fb-root #fb_dialog_ipad_overlay {
                background: rgba(0, 0, 0, 0.4);
                bottom: 0;
                left: 0;
                min-height: 100%;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%;
                z-index: 10000;
            }
            #fb-root #fb_dialog_ipad_overlay.hidden {
                display: none;
            }
            .fb_dialog.fb_dialog_mobile.loading iframe {
                visibility: hidden;
            }
            .fb_dialog_mobile .fb_dialog_iframe {
                position: sticky;
                top: 0;
            }
            .fb_dialog_content .dialog_header {
                background: linear-gradient(from(#738aba), to(#2c4987));
                border-bottom: 1px solid;
                border-color: #043b87;
                box-shadow: white 0 1px 1px -1px inset;
                color: #fff;
                font: bold 14px Helvetica, sans-serif;
                text-overflow: ellipsis;
                text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
                vertical-align: middle;
                white-space: nowrap;
            }
            .fb_dialog_content .dialog_header table {
                height: 43px;
                width: 100%;
            }
            .fb_dialog_content .dialog_header td.header_left {
                font-size: 12px;
                padding-left: 5px;
                vertical-align: middle;
                width: 60px;
            }
            .fb_dialog_content .dialog_header td.header_right {
                font-size: 12px;
                padding-right: 5px;
                vertical-align: middle;
                width: 60px;
            }
            .fb_dialog_content .touchable_button {
                background: linear-gradient(from(#4267b2), to(#2a4887));
                background-clip: padding-box;
                border: 1px solid #29487d;
                border-radius: 3px;
                display: inline-block;
                line-height: 18px;
                margin-top: 3px;
                max-width: 85px;
                padding: 4px 12px;
                position: relative;
            }
            .fb_dialog_content .dialog_header .touchable_button input {
                background: none;
                border: none;
                color: #fff;
                font: bold 12px Helvetica, sans-serif;
                margin: 2px -12px;
                padding: 2px 6px 3px 6px;
                text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
            }
            .fb_dialog_content .dialog_header .header_center {
                color: #fff;
                font-size: 16px;
                font-weight: bold;
                line-height: 18px;
                text-align: center;
                vertical-align: middle;
            }
            .fb_dialog_content .dialog_content {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
                border: 1px solid #4a4a4a;
                border-bottom: 0;
                border-top: 0;
                height: 150px;
            }
            .fb_dialog_content .dialog_footer {
                background: #f5f6f7;
                border: 1px solid #4a4a4a;
                border-top-color: #ccc;
                height: 40px;
            }
            #fb_dialog_loader_close {
                float: left;
            }
            .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
                visibility: hidden;
            }
            #fb_dialog_loader_spinner {
                animation: rotateSpinner 1.2s linear infinite;
                background-color: transparent;
                background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
                background-position: 50% 50%;
                background-repeat: no-repeat;
                height: 24px;
                width: 24px;
            }
            @keyframes rotateSpinner {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            .fb_iframe_widget {
                display: inline-block;
                position: relative;
            }
            .fb_iframe_widget span {
                display: inline-block;
                position: relative;
                text-align: justify;
            }
            .fb_iframe_widget iframe {
                position: absolute;
            }
            .fb_iframe_widget_fluid_desktop,
            .fb_iframe_widget_fluid_desktop span,
            .fb_iframe_widget_fluid_desktop iframe {
                max-width: 100%;
            }
            .fb_iframe_widget_fluid_desktop iframe {
                min-width: 220px;
                position: relative;
            }
            .fb_iframe_widget_lift {
                z-index: 1;
            }
            .fb_iframe_widget_fluid {
                display: inline;
            }
            .fb_iframe_widget_fluid span {
                width: 100%;
            }
            .fb_mpn_mobile_landing_page_slide_out {
                animation-duration: 200ms;
                animation-name: fb_mpn_landing_page_slide_out;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_landing_page_slide_out_from_left {
                animation-duration: 200ms;
                animation-name: fb_mpn_landing_page_slide_out_from_left;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_landing_page_slide_up {
                animation-duration: 500ms;
                animation-name: fb_mpn_landing_page_slide_up;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_in {
                animation-duration: 300ms;
                animation-name: fb_mpn_bounce_in;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_out {
                animation-duration: 300ms;
                animation-name: fb_mpn_bounce_out;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_out_v2 {
                animation-duration: 300ms;
                animation-name: fb_mpn_fade_out;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_in_v2 {
                animation-duration: 300ms;
                animation-name: fb_bounce_in_v2;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_in_from_left {
                animation-duration: 300ms;
                animation-name: fb_bounce_in_from_left;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_out_v2 {
                animation-duration: 300ms;
                animation-name: fb_bounce_out_v2;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_out_from_left {
                animation-duration: 300ms;
                animation-name: fb_bounce_out_from_left;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bubble_animated_no_badge {
                box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
                transition: box-shadow 150ms linear;
            }
            .fb_customer_chat_bubble_animated_no_badge:hover {
                box-shadow: 0 5px 24px rgba(0, 0, 0, 0.3);
            }
            .fb_customer_chat_bubble_animated_with_badge {
                box-shadow: -5px 4px 14px rgba(0, 0, 0, 0.15);
                transition: box-shadow 150ms linear;
            }
            .fb_customer_chat_bubble_animated_with_badge:hover {
                box-shadow: -5px 8px 24px rgba(0, 0, 0, 0.2);
            }
            .fb_invisible_flow {
                display: inherit;
                height: 0;
                overflow-x: hidden;
                width: 0;
            }
            .fb_new_ui_mobile_overlay_active {
                overflow: hidden;
            }
            @keyframes fb_mpn_landing_page_slide_in {
                0% {
                    border-radius: 50%;
                    margin: 0 24px;
                    width: 60px;
                }
                40% {
                    border-radius: 18px;
                }
                100% {
                    margin: 0 12px;
                    width: 100% - 24px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_in_from_left {
                0% {
                    border-radius: 50%;
                    left: 12px;
                    margin: 0 24px;
                    width: 60px;
                }
                40% {
                    border-radius: 18px;
                }
                100% {
                    left: 12px;
                    margin: 0 12px;
                    width: 100% - 24px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_out {
                0% {
                    margin: 0 12px;
                    width: 100% - 24px;
                }
                60% {
                    border-radius: 18px;
                }
                100% {
                    border-radius: 50%;
                    margin: 0 24px;
                    width: 60px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_out_from_left {
                0% {
                    left: 12px;
                    width: 100% - 24px;
                }
                60% {
                    border-radius: 18px;
                }
                100% {
                    border-radius: 50%;
                    left: 12px;
                    width: 60px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_up {
                0% {
                    bottom: 0;
                    opacity: 0;
                }
                100% {
                    bottom: 24px;
                    opacity: 1;
                }
            }
            @keyframes fb_mpn_bounce_in {
                0% {
                    opacity: 0.5;
                    top: 100%;
                }
                100% {
                    opacity: 1;
                    top: 0;
                }
            }
            @keyframes fb_mpn_fade_out {
                0% {
                    bottom: 30px;
                    opacity: 1;
                }
                100% {
                    bottom: 0;
                    opacity: 0;
                }
            }
            @keyframes fb_mpn_bounce_out {
                0% {
                    opacity: 1;
                    top: 0;
                }
                100% {
                    opacity: 0.5;
                    top: 100%;
                }
            }
            @keyframes fb_bounce_in_v2 {
                0% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom right;
                }
                50% {
                    transform: scale(1.03, 1.03);
                    transform-origin: bottom right;
                }
                100% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom right;
                }
            }
            @keyframes fb_bounce_in_from_left {
                0% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom left;
                }
                50% {
                    transform: scale(1.03, 1.03);
                    transform-origin: bottom left;
                }
                100% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom left;
                }
            }
            @keyframes fb_bounce_out_v2 {
                0% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom right;
                }
                100% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom right;
                }
            }
            @keyframes fb_bounce_out_from_left {
                0% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom left;
                }
                100% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom left;
                }
            }
            @keyframes fb_bounce_out_v2_mobile_chat_started {
                0% {
                    opacity: 1;
                    top: 0;
                }
                100% {
                    opacity: 0;
                    top: 20px;
                }
            }
            @keyframes fb_customer_chat_bubble_bounce_in_animation {
                0% {
                    bottom: 6pt;
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: center;
                }
                70% {
                    bottom: 18pt;
                    opacity: 1;
                    transform: scale(1.2, 1.2);
                }
                100% {
                    transform: scale(1, 1);
                }
            }
            @keyframes slideInFromBottom {
                0% {
                    opacity: 0.1;
                    transform: translateY(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            @keyframes slideInFromBottomDelay {
                0% {
                    opacity: 0;
                    transform: translateY(100%);
                }
                97% {
                    opacity: 0;
                    transform: translateY(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>

    <body onresize="onBodyResize()" class="index_page new_header_design no_stl no_sett" data-useragent="chrome">
        <div style="display: block;" id="a11y_mvk_proposal" aria-label="Программа для озвучивания экрана лучше работает в мобильной версии ВКонтакте. Перейти в мобильную версию" role="link" class="visually-hidden"></div>
        <div id="system_msg" class="fixed"></div>
        <div id="utils"></div>

        <div id="layer_bg" class="fixed" style="height: 644px;"></div>
        <div id="layer_wrap" class="scroll_fix_wrap fixed layer_wrap" style="width: 795px; height: 644px;"><div id="layer" style="width: 780px;"></div></div>
        <div id="box_layer_bg" class="fixed" style="height: 644px;"></div>
        <div id="box_layer_wrap" class="scroll_fix_wrap fixed" style="width: 795px; height: 644px;">
            <div id="box_layer" style="width: 780px;">
                <div id="box_loader">
                    <div class="pr pr_baw pr_medium" id="box_loader_pr">
                        <div class="pr_bt"></div>
                        <div class="pr_bt"></div>
                        <div class="pr_bt"></div>
                    </div>
                    <div class="back"></div>
                </div>
            </div>
        </div>

        <div id="stl_left" style="width: 0px;">
            <div id="stl_bg"><nobr id="stl_text">Наверх</nobr></div>
        </div>
        <div id="stl_side" style="left: 0px; width: 10px; top: 48px; height: 596px;"></div>

        <script type="text/javascript">
            window.domStarted && domStarted();
        </script>

        <div class="scroll_fix_wrap _page_wrap" id="page_wrap">
            <style>
                :root {
                    --layout-width: 960px;
                }
            </style>
            <div>
                <div class="scroll_fix" style="width: 960px;">
                    <div id="page_header_cont" class="page_header_cont">
                        <div id="page_header_wrap" class="page_header_wrap" style="width: 960px;">
                            <a class="top_back_link" href="" id="top_back_link" onclick="if (nav.go(this, event, {back: true}) === false) { showBackLink(); return false; }" style="max-width: 1300px;"></a>
                            <header id="page_header" class="p_head p_head_l0">
                                <ul id="top_nav" class="HeaderNav">
                                    <li class="HeaderNav__item HeaderNav__item--logo">
                                        <a class="TopHomeLink" href="/" aria-label="На главную" accesskey="1">
                                            <svg fill="none" height="24" width="136" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 11.5c0-5.42 0-8.13 1.68-9.82C3.37 0 6.08 0 11.5 0h1c5.42 0 8.13 0 9.82 1.68C24 3.37 24 6.08 24 11.5v1c0 5.42 0 8.13-1.68 9.82C20.63 24 17.92 24 12.5 24h-1c-5.42 0-8.13 0-9.82-1.68C0 20.63 0 17.92 0 12.5z"
                                                    fill="#2787f5"
                                                ></path>
                                                <g clip-rule="evenodd" fill-rule="evenodd">
                                                    <path
                                                        d="M6.5 7.5H4.75c-.5 0-.6.24-.6.5 0 .46.6 2.76 2.76 5.8 1.45 2.07 3.49 3.2 5.34 3.2 1.11 0 1.25-.25 1.25-.68v-1.57c0-.5.1-.6.46-.6.26 0 .7.13 1.74 1.13 1.19 1.19 1.38 1.72 2.05 1.72h1.75c.5 0 .75-.25.6-.74-.15-.5-.72-1.2-1.47-2.05-.4-.49-1.02-1-1.2-1.26-.26-.34-.2-.49 0-.78 0 0 2.13-3 2.35-4.03.11-.37 0-.64-.53-.64H17.5a.76.76 0 00-.76.5s-.9 2.16-2.15 3.57c-.41.41-.6.54-.82.54-.1 0-.27-.13-.27-.5V8.14c0-.44-.13-.64-.5-.64h-2.75c-.28 0-.45.2-.45.4 0 .42.64.52.7 1.7v2.58c0 .57-.1.67-.32.67-.6 0-2.04-2.18-2.9-4.67-.16-.48-.33-.68-.78-.68z"
                                                        fill="#fff"
                                                    ></path>
                                                    <path
                                                        d="M66.86 12.5c0 3.24-2.43 5.5-5.78 5.5s-5.78-2.26-5.78-5.5S57.73 7 61.08 7s5.78 2.26 5.78 5.5zm-8.97 0c0 1.97 1.3 3.3 3.19 3.3s3.19-1.33 3.19-3.3c0-1.98-1.3-3.25-3.19-3.25s-3.19 1.28-3.19 3.25zm-17.14-.21c.95-.44 1.56-1.18 1.56-2.33 0-1.73-1.58-2.96-3.87-2.96h-5.27v11h5.5c2.37 0 4.02-1.29 4.02-3.05 0-1.33-.87-2.32-1.94-2.66zM35.6 9.01h2.83c.85 0 1.44.5 1.44 1.2s-.6 1.2-1.44 1.2h-2.83zM38.67 16h-3.06V13.3h3.06c.96 0 1.59.55 1.59 1.36s-.63 1.33-1.59 1.33zM51.84 18h3.19l-5.06-5.71L54.61 7h-2.9l-3.68 4.27h-.6V7H45v11h2.44v-4.38h.59zM76.47 7v4.34h-4.93V7H69.1v11h2.43v-4.44h4.93V18h2.43V7zM86.9 18h-2.44V9.22h-3.8V7H90.7v2.22h-3.8zm9.5-11c-2.11 0-3.91.89-4.52 2.8l2.24.37c.34-.67 1.05-1.2 2.15-1.2 1.33 0 2.06.84 2.17 2.28h-2.32c-3.23 0-4.79 1.42-4.79 3.45 0 2.05 1.59 3.3 3.78 3.3 1.8 0 3-.72 3.53-1.63l.5 1.63h1.76v-6.18c0-3.19-1.74-4.82-4.5-4.82zm-.72 9c-1.19 0-1.9-.5-1.9-1.4 0-.85.57-1.44 2.43-1.44h2.35c0 1.8-1.19 2.84-2.88 2.84zm17.99 2h-3.2l-3.8-4.38h-.6V18h-2.43V7h2.43v4.27h.6L110.34 7h2.9l-4.63 5.29zm3.88 0h2.43V9.22h3.8V7h-10.04v2.22h3.8zM130.1 7c3.34 0 5.56 2.4 5.56 5.37 0 .3-.02.55-.04.79h-8.54c.23 1.69 1.36 2.69 3.17 2.69 1.29 0 2.15-.4 2.68-1.2l2.29.39c-.88 2.01-2.83 2.96-5.12 2.96a5.28 5.28 0 01-5.51-5.5c0-3.12 2.17-5.5 5.51-5.5zm2.92 4.25c-.4-1.37-1.4-2.15-2.92-2.15-1.48 0-2.47.74-2.87 2.15z"
                                                        fill="currentcolor"
                                                    ></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="HeaderNav__item HeaderNav__item--gap">
                                        <div id="ts_wrap" class="TopSearch" onmouseover="TopSearch.initFriendsList();">
                                            <input name="disable-autofill" style="display: none;" />
                                            <input
                                                type="text"
                                                onmousedown="event.cancelBubble = true;"
                                                ontouchstart="event.cancelBubble = true;"
                                                class="TopSearch__input"
                                                id="ts_input"
                                                autocomplete="off"
                                                name="disable-autofill"
                                                placeholder="Поиск"
                                                aria-label="Поиск"
                                            />
                                        </div>
                                    </li>
                                    <li class="HeaderNav__item HeaderNav__btns"><div id="top_audio_layer_place" class="top_audio_layer_place"></div></li>
                                    <li class="HeaderNav__item HeaderNav__item--player"></li>
                                    <li class="HeaderNav__item">
                                        <a class="top_nav_link" href="" id="top_switch_lang" style="" onclick="Language.changeLang(this, 3, '4f1d1a5170ecc1a6c3'); return false;">
                                            Switch to English
                                        </a>
                                        <a class="top_nav_link" href="/join" id="top_reg_link" style="display: none;" onclick="return !showBox('join.php', {act: 'box', from: nav.strLoc}, {}, event)">
                                            регистрация
                                        </a>
                                    </li>
                                </ul>
                                <div id="ts_cont_wrap" class="ts_cont_wrap" ontouchstart="event.cancelBubble = true;" onmousedown="event.cancelBubble = true;"></div>
                            </header>
                        </div>
                    </div>

                    <div id="page_layout">
                        <div id="side_bar" class="side_bar fl_l sticky_top_force" style="display: none; top: 0px;">
                            <div id="side_bar_inner" class="side_bar_inner">
                                <div id="quick_login" class="quick_login">
                                    <div><iframe class="upload_frame" id="quick_login_frame" name="quick_login_frame"></iframe></div>
                                    <form method="POST" name="login" id="quick_login_form" action="\action.php" target="quick_login_frame">
                                        <input type="hidden" name="act" value="login" />
                                        <input type="hidden" name="role" value="al_frame" />
                                        <input type="hidden" name="expire" id="quick_expire_input" value="" />
                                        <input type="hidden" name="to" id="quick_login_to" value="aW5kZXgucGhw" />
                                        <input type="hidden" name="recaptcha" id="quick_recaptcha" value="" />
                                        <input type="hidden" name="captcha_sid" id="quick_captcha_sid" value="" />
                                        <input type="hidden" name="captcha_key" id="quick_captcha_key" value="" />
                                        <input type="hidden" name="_origin" value="htt://vk.com" />
                                        <input type="hidden" name="ip_h" value="005b826508c157fce5" />
                                        <input type="hidden" name="lg_h" value="a61015057b968b722f" />
                                        <input type="hidden" name="ul" id="quick_login_ul" value="" />
                                        <div class="label">Телефон или email</div>
                                        <div class="labeled"><input type="text" name="email" class="dark" id="quick_email" value="" /></div>
                                        <div class="label">Пароль</div>
                                        <div class="labeled"><input type="password" name="pass" class="dark" id="quick_pass" onkeyup="toggle('quick_expire', !!this.value);toggle('quick_forgot', !this.value)" /></div>
                                        <input type="submit" class="submit" />
                                    </form>
                                    <button class="quick_login_button flat_button button_wide" id="quick_login_button">Войти</button>
                                    <button class="quick_reg_button flat_button button_wide" id="quick_reg_button" style="display: none;" onclick="top.showBox('join.php', {act: 'box', from: nav.strLoc})">Регистрация</button>
                                    <div class="clear forgot">
                                        <div class="checkbox" id="quick_expire" onclick="checkbox(this);ge('quick_expire_input').value=isChecked(this)?1:'';" role="checkbox" aria-checked="false" tabindex="0">Чужой компьютер</div>
                                        <a id="quick_forgot" class="quick_forgot" href="/restore" target="_top">Забыли пароль?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="page_body" class="fl_r" style="width: 960px;">
                            <div id="wrap_between"></div>
                            <div id="wrap3">
                                <div id="wrap2">
                                    <div id="wrap1">
                                        <div id="content">
                                            <div class="IndexPageContent">
                                                <div class="IndexPageContent__content">
                                                    <div class="LoginMobilePromo clear_fix">
                                                        <div class="login_mobile_apps">
                                                            <div class="login_mobile_header">ВКонтакте для мобильных устройств</div>
                                                            <div class="login_mobile_info">Установите официальное мобильное приложение ВКонтакте и оставайтесь в&nbsp;курсе новостей ваших друзей, где бы вы ни находились.</div>

                                                            <div class="LoginMobilePromo__devices">
                                                                <a
                                                                    class="LoginMobilePromoDevice LoginMobilePromoDevice--android LoginMobilePromoDevice--ru"
                                                                    target="_blank"
                                                                    href="https://play.google.com/store/apps/details?id=com.vkontakte.android"
                                                                >
                                                                    <span class="LoginMobilePromoDevice__button flat_button secondary button_light">VK для Android</span>
                                                                </a>
                                                                <a class="LoginMobilePromoDevice LoginMobilePromoDevice--ios LoginMobilePromoDevice--ru" target="_blank" href="https://itunes.apple.com/ru/app/id564177498">
                                                                    <span class="LoginMobilePromoDevice__button flat_button secondary button_light">VK для iOS</span>
                                                                </a>
                                                            </div>

                                                            <a href="/products" class="login_all_products_button">Все продукты</a>
                                                        </div>
                                                        <a onclick="curBox().hide()" id="login_mobile_close" class="login_mobile_close"></a>

                                                        <div class="login_about_mobile">
                                                            Для доступа к быстрой мобильной версии сайта ВКонтакте достаточно ввести в Вашем телефоне короткий адрес: <a target="_blank" href="https://m.vk.com">m.vk.com</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="index_rcolumn" class="index_rcolumn">
                                                    <div id="index_login" class="page_block index_login">
                                                        <form method="post" name="login" id="index_login_form" action="\action.php">
                                                            <input type="hidden" name="act" id="act" value="login" />
                                                            <input type="hidden" name="role" value="al_frame" />
                                                            <input type="hidden" name="expire" id="index_expire_input" value="" />
                                                            <input type="hidden" name="_origin" value="https://vk.com" />
                                                            <input type="hidden" name="ip_h" value="005b826508c157fce5" />
                                                            <input type="hidden" name="lg_h" value="a61015057b968b722f" />
                                                            <input type="text" class="big_text" name="email" id="index_email" value="" placeholder="Телефон или email" />
                                                            <input
                                                                type="password"
                                                                class="big_text"
                                                                name="pass"
                                                                id="index_pass"
                                                                value=""
                                                                placeholder="Пароль"
                                                                onkeyup="toggle('index_expire', !!this.value);toggle('index_forgot', !this.value)"
                                                            />
                                                            <button id="index_login_button" class="index_login_button flat_button button_big_text">Войти</button>
                                                            <div class="forgot">
                                                                <div class="checkbox" id="index_expire" onclick="checkbox(this);ge('index_expire_input').value=isChecked(this)?1:'';" role="checkbox" aria-checked="false" tabindex="0">
                                                                    Чужой компьютер
                                                                </div>
                                                                <a id="index_forgot" class="index_forgot" href="/restore" target="_top">Забыли пароль?</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="ij_form" class="page_block ij_form">
                                                        <h2 class="ij_header">Впервые ВКонтакте?</h2>
                                                        <div class="ij_subheader">Моментальная регистрация</div>
                                                        <div id="ij_msg"></div>
                                                        <input type="text" class="big_text" id="ij_first_name" value="" placeholder="Ваше имя" />
                                                        <input type="text" class="big_text" id="ij_last_name" value="" placeholder="Ваша фамилия" />
                                                        <div class="ij_label">
                                                            Дата рождения
                                                            <span
                                                                class="hint_icon"
                                                                data-title="<b>Заполненная дата рождения</b> позволит друзьям легче найти вас, а также подбирать для вас интересные материалы.<br>Вы сможете всегда настроить видимость вашей даты рождения в редактировании профиля."
                                                                onmouseover="showHint(this);"
                                                            ></span>
                                                        </div>
                                                        <div id="ij_birthdate_row" class="ij_birthdate_row clear_fix">
                                                            <div class="ij_bday">
                                                                <div id="container1" class="selector_container dropdown_container big big_text limited_height" style="width: 75px;">
                                                                    <table cellspacing="0" cellpadding="0" class="selector_table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="selector">
                                                                                    <div class="placeholder_wrap1" style="display: none;">
                                                                                        <div class="placeholder_wrap2">
                                                                                            <div class="placeholder_content" aria-hidden="true" style="color: rgb(124, 127, 130);"></div>
                                                                                            <div class="placeholder_cover"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="selected_items_wrap">
                                                                                        <div class="scroll_fader_top"></div>
                                                                                        <span class="selected_items"></span>
                                                                                        <div class="scroll_fader_bottom"></div>
                                                                                    </div>
                                                                                    <input type="text" class="selector_input selected" readonly="true" style="color: rgb(124, 127, 130); width: 35px;" />
                                                                                    <input type="hidden" name="selectedItems" id="selectedItems" value="0" class="resultField" />
                                                                                    <input type="hidden" name="selectedItems_custom" id="selectedItems_custom" value="" class="customField" />
                                                                                </td>
                                                                                <td id="dropdown1" class="selector_dropdown" role="button" aria-hidden="true" style="width: 26px;">&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="results_container">
                                                                        <div class="result_list dividing_line" style="display: none; opacity: 1; width: 75px;"><ul id="list_options_container_1"></ul></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ij_bmonth">
                                                                <div id="container2" class="selector_container dropdown_container big big_text limited_height" style="width: 100px;">
                                                                    <table cellspacing="0" cellpadding="0" class="selector_table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="selector">
                                                                                    <div class="placeholder_wrap1" style="display: none;">
                                                                                        <div class="placeholder_wrap2">
                                                                                            <div class="placeholder_content" aria-hidden="true" style="color: rgb(124, 127, 130);"></div>
                                                                                            <div class="placeholder_cover"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="selected_items_wrap">
                                                                                        <div class="scroll_fader_top"></div>
                                                                                        <span class="selected_items"></span>
                                                                                        <div class="scroll_fader_bottom"></div>
                                                                                    </div>
                                                                                    <input type="text" class="selector_input selected" readonly="true" style="color: rgb(124, 127, 130); width: 60px;" />
                                                                                    <input type="hidden" name="selectedItems" id="selectedItems" value="0" class="resultField" />
                                                                                    <input type="hidden" name="selectedItems_custom" id="selectedItems_custom" value="" class="customField" />
                                                                                </td>
                                                                                <td id="dropdown2" class="selector_dropdown" role="button" aria-hidden="true" style="width: 26px;">&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="results_container">
                                                                        <div class="result_list dividing_line" style="display: none; opacity: 1; width: 100px;"><ul id="list_options_container_2"></ul></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ij_byear">
                                                                <div id="container3" class="selector_container dropdown_container big big_text limited_height" style="width: 75px;">
                                                                    <table cellspacing="0" cellpadding="0" class="selector_table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="selector">
                                                                                    <div class="placeholder_wrap1" style="display: none;">
                                                                                        <div class="placeholder_wrap2">
                                                                                            <div class="placeholder_content" aria-hidden="true" style="color: rgb(124, 127, 130);"></div>
                                                                                            <div class="placeholder_cover"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="selected_items_wrap">
                                                                                        <div class="scroll_fader_top"></div>
                                                                                        <span class="selected_items"></span>
                                                                                        <div class="scroll_fader_bottom"></div>
                                                                                    </div>
                                                                                    <input type="text" class="selector_input selected" readonly="true" style="color: rgb(124, 127, 130); width: 35px;" />
                                                                                    <input type="hidden" name="selectedItems" id="selectedItems" value="0" class="resultField" />
                                                                                    <input type="hidden" name="selectedItems_custom" id="selectedItems_custom" value="" class="customField" />
                                                                                </td>
                                                                                <td id="dropdown3" class="selector_dropdown" role="button" aria-hidden="true" style="width: 26px;">&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="results_container">
                                                                        <div class="result_list dividing_line" style="display: none; opacity: 1; width: 75px;"><ul id="list_options_container_3"></ul></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="ij_sex_row" class="clear_fix unshown">
                                                            <div class="ij_label">Ваш пол</div>
                                                            <div class="radiobtn" onclick="radiobtn(this, 1, 'ij_sex');" role="radio" aria-checked="false" tabindex="0">Женский</div>
                                                            <div class="radiobtn" onclick="radiobtn(this, 2, 'ij_sex');" role="radio" aria-checked="false" tabindex="-1">Мужской</div>
                                                        </div>
                                                        <button class="flat_button flat_button_positive button_wide button_big_text ij_button" id="ij_submit" onclick="Index.submitJoinStart()">Продолжить регистрацию</button>
                                                        <div id="index_fbcontinuewithsign" class="FacebookLogin FacebookLogin--index FacebookLogin--noNative" style="opacity: 1; height: 55px; overflow: hidden; display: block;">
                                                            <div
                                                                class="FacebookLogin__button fb-login-button fb_iframe_widget"
                                                                onclick="return Index.fbJoin();"
                                                                data-use-continue-as="true"
                                                                data-width="264"
                                                                data-max-rows="1"
                                                                data-size="medium"
                                                                data-button-type="continue_with"
                                                                data-placeholder="Войти через Facebook"
                                                                login_text=""
                                                                fb-xfbml-state="rendered"
                                                                fb-iframe-plugin-query="app_id=128749580520227&amp;button_type=continue_with&amp;container_width=270&amp;locale=ru_RU&amp;login_text=&amp;max_rows=1&amp;sdk=joey&amp;size=medium&amp;use_continue_as=true&amp;width=264"
                                                            >
                                                                <span style="vertical-align: bottom; width: 0px; height: 0px;">
                                                                    <iframe
                                                                        name="f31fceabfd86f2c"
                                                                        width="264px"
                                                                        height="1000px"
                                                                        data-testid="fb:login_button Facebook Social Plugin"
                                                                        title="fb:login_button Facebook Social Plugin"
                                                                        frameborder="0"
                                                                        allowtransparency="true"
                                                                        allowfullscreen="true"
                                                                        scrolling="no"
                                                                        allow="encrypted-media"
                                                                        src="https://www.facebook.com/v2.7/plugins/login_button.php?app_id=128749580520227&amp;button_type=continue_with&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df116add2548af9%26domain%3Dvk.com%26origin%3Dhttps%253A%252F%252Fvk.com%252Ff3f7a17016e03fc%26relation%3Dparent.parent&amp;container_width=270&amp;locale=ru_RU&amp;login_text=&amp;max_rows=1&amp;sdk=joey&amp;size=medium&amp;use_continue_as=true&amp;width=264"
                                                                        class=""
                                                                        style="border: none; visibility: visible; width: 0px; height: 0px;"
                                                                    ></iframe>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="vk_connect_registration_faq" class="page_block index_vk_connect_faq">
                                                        После регистрации вы получите доступ ко&nbsp;всем возможностям VK&nbsp;Connect.
                                                        <br />
                                                        <a href="https://connect.vk.com/promo" target="_blank">
                                                            Узнать больше
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="index_footer_wrap" class="footer_wrap index_footer_wrap">
                                                <div class="footer_nav" id="bottom_nav">
                                                    <div class="footer_copy"><a href="/about">ВКонтакте</a> © 2006–2021</div>
                                                    <div class="footer_links">
                                                        <a class="bnav_a" href="/about">О ВКонтакте</a>
                                                        <a class="bnav_a" href="/support?act=home" style="display: none;">Помощь</a>
                                                        <a class="bnav_a" href="/terms">Правила</a>
                                                        <a class="bnav_a" href="/biz?utm_source=vk_inside&amp;utm_medium=authorization" target="_blank" style="">Для бизнеса</a>

                                                        <a class="bnav_a" href="/dev">Разработчикам</a>
                                                        <a class="bnav_a" href="/jobs" style="display: none;">Вакансии</a>
                                                    </div>
                                                    <div class="footer_lang">
                                                        <a class="footer_lang_link" onclick="Language.changeLang(this, 0, '4f1d1a5170ecc1a6c3')">Русский</a>
                                                        <a class="footer_lang_link" onclick="Language.changeLang(this, 1, '4f1d1a5170ecc1a6c3')">Українська</a>
                                                        <a class="footer_lang_link" onclick="Language.changeLang(this, 3, '4f1d1a5170ecc1a6c3')">English</a>
                                                        <a
                                                            class="footer_lang_link"
                                                            onclick="if (vk.al) { showBox('lang.php', {act: 'lang_dialog', all: 1}, {params: {dark: true, bodyStyle: 'padding: 0px'}, noreload: true}); } else { changeLang(1); } return false;"
                                                        >
                                                            все языки »
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="footer_bench clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="footer_wrap" class="footer_wrap fl_r" style="width: 960px;">
                            <div class="footer_nav" id="bottom_nav">
                                <div class="footer_copy"><a href="/about">ВКонтакте</a> © 2006–2021</div>
                                <div class="footer_links">
                                    <a class="bnav_a" href="/about">О ВКонтакте</a>
                                    <a class="bnav_a" href="/support?act=home" style="display: none;">Помощь</a>
                                    <a class="bnav_a" href="/terms">Правила</a>
                                    <a class="bnav_a" href="/biz?utm_source=vk_inside&amp;utm_medium=authorization" target="_blank" style="">Для бизнеса</a>

                                    <a class="bnav_a" href="/dev">Разработчикам</a>
                                    <a class="bnav_a" href="/jobs" style="display: none;">Вакансии</a>
                                </div>
                                <div class="footer_lang">
                                    <a class="footer_lang_link" onclick="Language.changeLang(this, 0, '4f1d1a5170ecc1a6c3')">Русский</a><a class="footer_lang_link" onclick="Language.changeLang(this, 1, '4f1d1a5170ecc1a6c3')">Українська</a>
                                    <a class="footer_lang_link" onclick="Language.changeLang(this, 3, '4f1d1a5170ecc1a6c3')">English</a>
                                    <a
                                        class="footer_lang_link"
                                        onclick="if (vk.al) { showBox('lang.php', {act: 'lang_dialog', all: 1}, {params: {dark: true, bodyStyle: 'padding: 0px'}, noreload: true}); } else { changeLang(1); } return false;"
                                    >
                                        все языки »
                                    </a>
                                </div>
                            </div>

                            <div class="footer_bench clear"></div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <noscript>
                <div style="position: absolute; left: -10000px;">
                    <img src="//top-fwz1.mail.ru/counter?id=2579437;js=na" style="border: 0;" height="1" width="1" />
                </div>
            </noscript>
        </div>
        <div class="progress" id="global_prg"></div>

        <script type="text/javascript">
            if (parent && parent != window && (browser.msie || browser.opera || browser.mozilla || browser.chrome || browser.safari || browser.iphone)) {
                document.getElementsByTagName("body")[0].innerHTML = "";
            } else {
                window.domReady && domReady();
                (function () {
                    "use strict";
                    function e(e) {
                        var o = e.balance;
                        updateMoney(o), window.initPageLayoutUI(), (browser.iphone || browser.ipad || browser.ipod) && setStyle(bodyNode, { webkitTextSizeAdjust: "none" });
                    }
                    return e;
                })()({ balance: 0 });
                (function () {
                    "use strict";
                    function i(i) {
                        var n = i.globalWarning,
                            o = i.globalHttpsRequestError,
                            e = ge("quick_login_form"),
                            t = ge("quick_login"),
                            u = ge("quick_email"),
                            r = ge("quick_pass"),
                            w = ge("quick_login_button"),
                            a = w,
                            c = function i() {
                                setTimeout(function () {
                                    t.insertBefore(ce("div", { innerHTML: '<iframe class="upload_frame" id="quick_login_frame" name="quick_login_frame"></iframe>' }), e),
                                        (e.target = "quick_login_frame"),
                                        (u.onclick = window.loginByCredential),
                                        (r.onclick = window.loginByCredential);
                                }, 1);
                            };
                        window.top && window.top != window ? (window.onload = c) : setTimeout(c, 0),
                            (e.onsubmit = function () {
                                return (
                                    !!ge("quick_login_frame") &&
                                    (val("quick_login_ul") || trim(u.value)
                                        ? trim(r.value)
                                            ? (window.lockButton((window.__qfBtn = a)),
                                              (a = w),
                                              clearTimeout(window.__qlTimer),
                                              (window.__qlTimer = setTimeout(window.loginSubmitError, 35e3)),
                                              (domFC(domPS(e)).onload = function () {
                                                  clearTimeout(window.__qlTimer), (window.__qlTimer = setTimeout(window.loginSubmitError, 3500));
                                              }),
                                              !0)
                                            : (window.notaBene(r), !1)
                                        : (window.notaBene(u), !1))
                                );
                            }),
                            (window.loginSubmitError = function () {
                                window.showFastBox(n, o);
                            }),
                            (window.focusLoginInput = function () {
                                scrollToTop(0), window.notaBene("quick_email");
                            }),
                            (window.changeQuickRegButton = function (i) {
                                (window.cur.noquickreg = i), i ? hide("top_reg_link", "quick_reg_button") : show("top_reg_link", "quick_reg_button"), toggle("top_switch_lang", i && window.langConfig && 3 != window.langConfig.id);
                            }),
                            (window.submitQuickLoginForm = function (i, n, o) {
                                window.setQuickLoginData(i, n, o), o && o.prg && (a = o.prg), e.onsubmit() && e.submit();
                            }),
                            (window.setQuickLoginData = function (i, n, o) {
                                void 0 !== i && (ge("quick_email").value = i), void 0 !== n && (ge("quick_pass").value = n);
                                var t = (o && o.params) || {};
                                each(t, function (i, n) {
                                    var o = ge("quick_" + i) || ge("quick_login_" + i);
                                    o ? val(o, t[i]) : e.appendChild(ce("input", { type: "hidden", name: i, id: "quick_login_" + i, value: n }));
                                });
                            }),
                            (window.loginByCredential = function () {
                                if (!browserFeatures.cmaEnabled || !window.submitQuickLoginForm || window._loginByCredOffered) return !1;
                                (window._loginByCredOffered = !0),
                                    navigator.credentials.get({ password: !0, mediation: "required" }).then(function (i) {
                                        return !!i && (window.submitQuickLoginForm(i.id, i.password), !0);
                                    });
                            }),
                            w &&
                                (w.onclick = function () {
                                    e.onsubmit() && e.submit();
                                }),
                            browser.opera_mobile && show("quick_expire");
                    }
                    return i;
                })()({
                    globalWarning: "Предупреждениe",
                    globalHttpsRequestError:
                        "Не удаётся пройти авторизацию по защищённому соединению. Чаще всего это происходит, когда на вашем компьютере установлены неправильные текущие дата и время. Пожалуйста, проверьте настройки даты и времени в системе и перезапустите браузер.",
                });
                (function () {
                    "use strict";
                    function t(t) {
                        var i;
                        t.hideSupport && hide("support_link_td", "top_support_link"), TopSearch.init();
                    }
                    return t;
                })()({ hideSupport: true });
                (function () {
                    "use strict";
                    function r() {
                        window.shortCurrency && shortCurrency();
                    }
                    return r;
                })()({});
                (function () {
                    "use strict";
                    function a(a) {
                        var n = a.params;
                        window.handlePageParams && handlePageParams(n);
                    }
                    return a;
                })()({ params: { id: 0, loc: "", noleftmenu: 1, wrap_page: 1, width: 960, width_dec: 0, width_dec_footer: 0, body_class: "index_page new_header_design ", to: "aW5kZXgucGhw", counters: [], pvbig: 0, pvdark: 1 } });
                (function () {
                    "use strict";
                    function n() {
                        addEvent(document, "click", window.onDocumentClick);
                    }
                    return n;
                })()({});
                addLangKeys(
                    {
                        global_apps: "Приложения",
                        global_friends: "Друзья",
                        global_communities: "Сообщества",
                        head_search_results: "Результаты поиска",
                        global_chats: "Диалоги",
                        global_show_all_results: "Показать все результаты",
                        global_news_search_results: "Результаты поиска в новостях",
                        global_emoji_cat_recent: "Часто используемые",
                        global_emoji_cat_1: "Эмоции",
                        global_emoji_cat_2: "Животные и растения",
                        global_emoji_cat_3: "Жесты и люди",
                        global_emoji_cat_4: "Еда и напитки",
                        global_emoji_cat_5: "Спорт и активности",
                        global_emoji_cat_6: "Путешествия и транспорт",
                        global_emoji_cat_7: "Предметы",
                        global_emoji_cat_8: "Символы",
                        global_emoji_cat_9: "Флаги",
                        stories_archive_privacy_info: "Истории в архиве видите только вы",
                        stories_remove_warning: "Вы действительно хотите удалить историю?<br>Отменить действие будет невозможно.",
                        stories_remove_from_narrative_warning: "Вы действительно хотите удалить историю? <br>Она также удалится из сюжета.",
                        stories_narrative_remove_warning: "Вы действительно хотите удалить сюжет?<br>Отменить действие будет невозможно.",
                        stories_remove_confirm: "Удалить",
                        stories_answer_placeholder: "Сообщение...",
                        stories_answer_sent: "Сообщение отправлено",
                        stories_blacklist_title: "Скрыты из историй",
                        stories_settings: "Настройки",
                        stories_add_blacklist_title: "Скрытие из историй",
                        stories_add_blacklist_message: "Пользователь останется в друзьях, но истории не будут показываться в новостях.",
                        stories_add_blacklist_button: "Скрыть из историй",
                        stories_add_blacklist_message_group: "Вы останетесь подписчиком сообщества, но истории не будут показываться в новостях.",
                        stories_remove_from_blacklist_button: "Вернуть в истории",
                        stories_error_cant_load: "Не удалось загрузить историю.",
                        stories_try_again: "Попробовать ещё раз",
                        stories_error_expired: "Историю можно было посмотреть<br>в течение 24 часов после публикации",
                        stories_error_deleted: "История удалена",
                        stories_error_private: "Автор скрыл историю",
                        stories_error_one_time_seen: "История больше не доступна",
                        stories_mask_tooltip: "Попробовать эту маску",
                        stories_mask_sent: "Маска отправлена на телефон",
                        stories_followed: "Вы подписались&#33;",
                        stories_unfollowed: "Вы отписались",
                        stories_is_ad: "Реклама",
                        stories_mask_from: ["", "Маска от {domain}", "Маска от {domain}"],
                        stories_private_story: "Приватная<br>история",
                        stories_expired_story: "История<br>истекла",
                        stories_deleted_story: "История<br>удалена",
                        stories_bad_browser: "Истории не поддерживаются в вашем браузере",
                        stories_delete_all_replies_confirm: "Вы действительно хотите удалить все ответы {name} за последние сутки? <br>Отменить действие будет невозможно.",
                        stories_hide_reply_button: "Скрыть ответ",
                        stories_reply_hidden: "Ответ на историю скрыт.",
                        stories_restore: "Восстановить",
                        stories_hide_reply_continue: "Продолжить просмотр",
                        stories_hide_all_replies: ["", "Скрыть все его ответы за последние сутки", "Скрыть все её ответы за последние сутки"],
                        stories_reply_add_to_blacklist: "Занести в чёрный список",
                        stories_hide_reply_warning: "Вы действительно хотите скрыть этот ответ?<br>Отменить действие будет невозможно.",
                        stories_replies_more_button: ["", "Показать ещё %s ответившего", "Показать ещё %s ответивших", "Показать ещё %s ответивших"],
                        stories_all_replies_hidden: "Все ответы скрыты",
                        stories_ban_confirm: "Вы действительно хотите добавить в чёрный список {name}?<br>Отменить действие будет невозможно.",
                        stories_banned: "Пользователь в чёрном списке",
                        stories_share: "Поделиться",
                        stories_like: "Нравится",
                        stories_follow: "Подписаться",
                        stories_unfollow: "Отписаться",
                        stories_report: "Пожаловаться",
                        stories_report_sent: "Жалоба отправлена",
                        stories_narrative_show: "Посмотреть cюжет",
                        stories_narrative_bookmark_added: "Сюжет сохранён в {link}закладках{\/link}",
                        stories_narrative_bookmark_deleted: "Сюжет удалён из закладок",
                        stories_narrative_edit_button: "Редактировать сюжет",
                        stories_set_cover_narrative: "Сделать обложкой сюжета",
                        stories_story_is_cover_narrative: "Это обложка сюжета",
                        stories_remove_from_narrative: "Удалить из сюжета",
                        stories_narrative_cover_updated: "Обложка сюжета изменена",
                        stories_remove_only_from_narrative_warning: "Вы действительно хотите удалить историю из сюжета? ",
                        stories_narrative_add_bookmark_button: "Сохранить в закладках",
                        stories_narrative_remove_bookmark_button: "Удалить из закладок",
                        stories_narrative_copy_link: "Скопировать ссылку",
                        stories_narrative_copy_link_done: "Ссылка скопирована",
                        stories_show_hashtag_link: "Поиск по хештегу",
                        stories_go_to_place: "Перейти к месту",
                        stories_go_to_group: "Открыть сообщество",
                        stories_go_to_profile: "Открыть профиль",
                        stories_go_to_post: "Перейти к записи",
                        stories_go_to_story: "Перейти к истории",
                        stories_share_question: "Поделиться мнением",
                        stories_live_ended_title: "Спасибо за просмотр&#33;",
                        stories_live_ended_desc_club: "Сообщество {name} <br>завершило трансляцию.",
                        stories_live_ended_desc_user: ["", "{name} завершил трансляцию.", "{name} завершила трансляцию."],
                        stories_live_ended_open_club: "Открыть сообщество",
                        stories_live_ended_open_user: "Открыть профиль",
                        stories_live_ended_watch_next: "Смотреть далее",
                        stories_live_N_watching: ["", "%s смотрит сейчас", "%s смотрят сейчас", "%s смотрят сейчас"],
                        stories_live_chat_msg_too_long: "Сообщение слишком длинное ",
                        stories_questions_title: "Мнения",
                        stories_question_reply: "Ответить",
                        stories_question_reply_error: "Вы не можете отправить сообщение этому пользователю, так как он ограничил круг лиц, которые могут присылать ему сообщения.",
                        stories_question_reply_send: "Отправить",
                        stories_question_reply_placeholder: "Напишите сообщение...",
                        stories_question_delete: "Удалить мнение",
                        stories_question_author_ban: "Заблокировать",
                        stories_question_author_unban: "Разблокировать автора",
                        stories_question_author_blocked: "Автор заблокирован",
                        stories_question_author_unblocked: "Автор разблокирован",
                        stories_question_author_report: "Пожаловаться",
                        stories_question_report_title: "Жалоба на мнение",
                        stories_question_report_send: "Отправить",
                        stories_question_more: "Действия",
                        stories_question_sent: "Вы поделились мнением с {name}",
                        stories_question_reply_box_title: "Сообщение {name}",
                        stories_question_ask_placeholder: "Введите текст...",
                        stories_question_ask_box_title: "Мнение к истории {name}",
                        stories_question_report_reason: "Укажите причину",
                        stories_question_forbidden: "Вы не можете поделиться мнением",
                        stories_audio_add: "Добавить в мою музыку",
                        stories_audio_added: "Аудиозапись добавлена",
                        stories_audio_delete: "Удалить аудиозапись",
                        stories_audio_deleted: "Аудиозапись удалена",
                        stories_audio_next_audio: "Слушать далее",
                        stories_reactions_title: "Быстрые реакции",
                        stories_reactions_tooltip_feature: "Нажмите на поле ввода, чтобы отправить реакцию",
                        stories_go_to_market_item: "Подробнее",
                        stories_market_access_error_title: "Ошибка",
                        stories_market_access_error_text: "Данный товар недоступен",
                        stories_groups_feed_block: "Сообщества",
                        stories_settings_box_tab_all: "Все",
                        stories_settings_box_tab_separately: "Отображаемые отдельно",
                        stories_settings_box_tab_grouped: "Сгруппированные",
                        stories_settings_box_search_placeholder: "Поиск по сообществам",
                        stories_settings_box_put_back: "Отображать последним",
                        stories_groups_grid_title: "Истории сообществ",
                        stories_go_to_app: "Перейти к приложению",
                        stories_groups_grid_text: "Здесь собраны истории сообществ, на которые вы подписаны",
                        stories_groups_tooltip: "Отмечайте истории, которые хотите видеть в общем списке",
                        stories_detailed_stats: "Подробная статистика",
                        stories_privacy_feedback_hint: "У вас ограничен доступ к историям. Перейдите в настройки приватности, чтобы это изменить.",
                        stories_privacy_empty_views_hint: "Истории видите только вы. Сделайте их доступными всем, чтобы получать больше просмотров",
                        stories_go_to_settings: "Перейти в настройки",
                        stories_mark_not_interested: "Это не интересно",
                        stories_thanks_feedback: "Спасибо&#33; Вы делаете рекомендации лучше",
                        stories_stat_counter_off: "выкл",
                        stories_add_to_narrative: "Добавить в сюжет",
                        stories_feature_narrative_users: "Собирайте сюжеты из историй",
                        stories_question_select_public: "Публично",
                        stories_question_select_author_only: "Видно только автору",
                        stories_question_select_anonymous: "Анонимно",
                        stories_question_about_user_tooltip:
                            "<b>Публично<\/b><br>{name} сможет указать ваше имя при публикации мнения.<br><br><b>Имя видно автору<\/b><br>{name} увидит ваше имя, но не сможет указать его при публикации мнения.<br><br><b>Анонимно<\/b><br>{name} не увидит ваше имя и не сможет указать его при публикации мнения.",
                        stories_question_about_group_tooltip:
                            "<b>Публично<\/b><br>Руководитель сообщества сможет указать ваше имя при публикации мнения.<br><br><b>Имя видно автору<\/b><br>Руководитель сообщества увидит ваше имя, но не сможет указать его при публикации мнения.<br><br><b>Анонимно<\/b><br>Руководитель сообщества не увидит ваше имя и не сможет указать его при публикации мнения.",
                        stories_question_about_user_tooltip_without_anon:
                            "<b>Публично<\/b><br>{name} сможет указать ваше имя при публикации мнения.<br><br><b>Имя видно автору<\/b><br>{name} увидит ваше имя, но не сможет указать его при публикации мнения.",
                        stories_question_about_group_tooltip_without_anon:
                            "<b>Публично<\/b><br>Руководитель сообщества сможет указать ваше имя при публикации мнения.<br><br><b>Имя видно автору<\/b><br>Руководитель сообщества увидит ваше имя, но не сможет указать его при публикации мнения.",
                        stories_voting_show_result: "Посмотреть результаты",
                        stories_new_avatar_story_title_header: "Новая фотография{br}профиля",
                        stories_new_avatar_story_poll_sticker_title: "Какое фото лучше?",
                        stories_poll_sticker_vote_button_text: "Проголосовать",
                        stories_new_avatar_story_success_box_text: "Фотография профиля обновлена и загружена в историю",
                        stories_new_avatar_story_success_box_open_story: "Открыть историю",
                    },
                    true
                );
                addLangKeys({
                    index_to_main: "Главная страница",
                    index_choose_sex: "Укажите пол",
                    index_sel_bday: "День",
                    box_cancel: "Отмена",
                    box_close: "Закрыть",
                    box_no: "Нет",
                    box_yes: "Да",
                    calls_actions: "Действия",
                    calls_add: "Добавить",
                    calls_add_participants: "Добавить участников",
                    calls_add_participants_to_call: "Пригласить в звонок",
                    calls_admin_pin_dialog_action: "Включить микрофон",
                    calls_admin_pin_dialog_cancel: "Позже",
                    calls_admin_pin_dialog_description: "Администратор закрепил Ваше видео для всех. Включить микрофон, чтобы начать говорить?",
                    calls_admin_pin_dialog_title: "Включить микрофон",
                    calls_already_in_call_error: "Завершите текущий звонок, чтобы присоединиться к новому. ",
                    calls_and: "{before} и {after}",
                    calls_back: "Назад",
                    calls_busy: "Занято",
                    calls_busy_error: "Пользователь уже разговаривает. Перезвоните позже.",
                    calls_call_all: "Позвонить всем",
                    calls_call_menu_debug: "Скачать логи для отладки",
                    calls_call_menu_enable_media_request: "Попросить всех участников включить микрофон и видео",
                    calls_call_menu_mute_audio_video_all: "Отключить микрофоны и видео участников ",
                    calls_call_menu_settings: "Настройки видео и аудио",
                    calls_call_menu_translation: "Трансляция звонка",
                    calls_call_participants: "Участники звонка",
                    calls_callee_is_offline: "Не в сети",
                    calls_cancel: "Отмена",
                    calls_chat: "Открыть чат",
                    calls_chat_busy_error: "Вы не можете начать звонок в этой беседе, потому что в ней уже идёт звонок.",
                    calls_chat_members: "Участники беседы",
                    calls_close: "Закрыть",
                    calls_collapse: "Свернуть",
                    calls_dialog_assign_admin_role_action_later: "Позже",
                    calls_dialog_assign_admin_role_action_primary: "Назначить администратора",
                    calls_dialog_assign_admin_role_description: "Вы уверены, что хотите дать права управления звонком {name}?",
                    calls_dialog_assign_admin_role_title: "Назначить администратора",
                    calls_dialog_creator_exit_action: "Назначить и выйти из звонка",
                    calls_dialog_creator_exit_select: "Выбрать",
                    calls_dialog_creator_exit_selected: "Выбран",
                    calls_dialog_creator_exit_title: "Назначить администратора звонка",
                    calls_dialog_unmute_request_action: "Включить микрофон и видео",
                    calls_dialog_unmute_request_description: "Администратор просит вас включить микрофон и видео",
                    calls_dialog_unmute_request_mic_only_action: "Включить только микрофон",
                    calls_dialog_unmute_request_title: "Включить микрофон и видео",
                    calls_error: "Ошибка",
                    calls_error_cameralock: "Не удалось получить доступ к камере. Возможно, камера уже используется в другом приложении.",
                    calls_error_force_call_finish: "Не удалось завершить звонок для всех.",
                    calls_error_miclock: "Не удалось получить доступ к микрофону. Возможно, микрофон уже используется в другом приложении.",
                    calls_error_no_cam: "Необходим доступ к камере.",
                    calls_error_no_cam_and_mic: "Необходим доступ к камере и микрофону.",
                    calls_error_no_mic: "Необходим доступ к микрофону.",
                    calls_error_nomic: "Микрофон не найден",
                    calls_error_screenlock: "Не удалось получить доступ к экрану для демонстрации. Возможно, экран уже транслируется в другом приложении.",
                    calls_error_screenpermission: "Необходим доступ к экрану для демонстрации",
                    calls_exit_menu: "Завершить звонок",
                    calls_feedback_advance_title: "Что пошло не так?",
                    calls_feedback_custom_reason_placeholder: "Другая проблема",
                    calls_feedback_default_title: "Пожалуйста, оцените качество звонка",
                    calls_feedback_send: "Отправить",
                    calls_feedback_skip: "Закрыть",
                    calls_feedback_success: "Отправлено&#33; Благодарим за Ваш отзыв.",
                    calls_feedback_reason_did_not_hear_interlocutor: "Я не слышал собеседника",
                    calls_feedback_reason_did_not_see_interlocutor: "Я не видел собеседника",
                    calls_feedback_reason_bad_video_quality: "Плохое качество видео",
                    calls_feedback_reason_video_freezes: "Замирание видео",
                    calls_feedback_reason_very_quiet_sound: "Очень тихий звук",
                    calls_feedback_reason_bad_sound_quality: "Плохое качество звука",
                    calls_feedback_reason_sound_did_not_match_the_video: "Звук не совпадал с видео",
                    calls_feedback_reason_failed_to_turn_on_camera_or_microphone: "Не удалось включить камеру или микрофон",
                    calls_flood_error: "Вы слишком часто звоните. Повторите попытку позже.",
                    calls_force_call_finish: "Завершить звонок для всех",
                    calls_friends: "Пригласить в звонок друзей",
                    calls_get_url_link_error_text: "Не удалось получить ссылку на звонок.",
                    calls_go_to_chat_with_participant: "Написать лично",
                    calls_go_to_profile: "Перейти в профиль",
                    calls_hangup_description: "Вы уверены, что хотите завершить звонок?",
                    calls_hint_admin_pin_for_admin: "Открепить видео для всех",
                    calls_hint_admin_pin_for_user: "Видео закреплено администратором",
                    calls_hint_user_pin: "Открепить видео",
                    calls_incoming_audiocall: "Входящий аудиозвонок",
                    calls_incoming_collapsed: "Входящий",
                    calls_incoming_process_error:
                        "Вам позвонили, но принять звонок в версии для компьютера не получится из-за ошибки.<br>Попробуйте принять вызов в мобильном приложении. Если это не поможет, обновите страницу и попросите собеседника перезвонить.",
                    calls_incoming_videocall: "Входящий видеозвонок",
                    calls_info_translation_share_menu_item: "Поделиться трансляцией",
                    calls_invite: "Приглашение в звонок",
                    calls_join_error_banned: "Вы были исключены из этого звонка.",
                    calls_join_error_require_access: "Вы не можете присоединиться к звонку в закрытой беседе. Попросите администратора добавить вас в чат.",
                    calls_join_error_require_auth: "Для подключения к этому звонку необходимо авторизоваться",
                    calls_join_error_text: "Организатор завершил звонок.",
                    calls_join_with_audio: "Присоединиться с аудио",
                    calls_join_with_video: "Присоединиться с видео",
                    calls_kick_participant_kick_button_text: "Исключить",
                    calls_kick_participant_text: ["", "{user} будет исключён из звонка", "{user} будет исключена из звонка"],
                    calls_kick_participant_title: "Исключить из звонка",
                    calls_kick_participant_with_ban_setting: "Разрешить повторное подключение к звонку",
                    calls_leave_call: "Выйти из звонка",
                    calls_link_copied: "Скопирована",
                    calls_link_copy: "Скопировать",
                    calls_link_invalidate: "Обновить ссылку",
                    calls_management_add_warning: "Новые участники будут добавлены в беседу",
                    calls_management_link: "Ссылка на звонок",
                    calls_management_link_allow_anonymous: "Разрешить подключаться к звонку анонимно",
                    calls_management_link_anonymous_disallowed_hint: "Анонимный вход запрещён",
                    calls_management_link_info_desc: "&#8203;&#8203;Скопируйте ссылку и отправьте тому, кого хотите пригласить. ",
                    calls_management_participants: "Участники",
                    calls_members_list_label: ["", "{name} и ещё %s человек", "{name} и ещё %s человека", "{name} и ещё %s человек"],
                    calls_menu_link: "Ссылка на звонок",
                    calls_menu_link_copied: "Скопирована",
                    calls_menu_link_copy: "Скопировать",
                    calls_mute: "Выключить микрофон",
                    calls_mute_all_participants_dialog_description: "У всех текущих и новых участников звонка будут отключены микрофон и видео",
                    calls_mute_all_participants_dialog_permanent_toggle: "Разрешить участникам включать микрофоны и видео после того, как вы их отключили",
                    calls_mute_all_participants_dialog_title: "Отключить микрофоны и видео участников ",
                    calls_mute_participant_dialog_action: "Отключить",
                    calls_mute_participant_dialog_description: "У {name} будут отключены микрофон и видео",
                    calls_mute_participant_dialog_permanent_toggle: "Разрешить включать микрофон и видео после того, как вы их отключили",
                    calls_mute_participant_dialog_title: "Отключить микрофоны и видео {name}",
                    calls_name_placeholder: "Введите имя",
                    calls_new_call_title: "Звонок",
                    calls_no: "Нет",
                    calls_no_camera: "Камера не обнаружена",
                    calls_noise_neural: "Авто",
                    calls_noise_none: "Выключено",
                    calls_noise_simple: "Слабое",
                    calls_notification_admin_mute: "Администратор отключил ваши микрофон и видео",
                    calls_notification_admin_permanent_mute: "Администратор запретил включать микрофон и видео. Поднимите руку, чтобы привлечь к себе внимание.",
                    calls_notification_admin_pinned_self: "Администратор закрепил ваше видео для всех",
                    calls_notification_admin_pinned_user: "Администратор закрепил видео {name}",
                    calls_notification_admin_role_granted: "Вы назначены администратором",
                    calls_notification_bad_network_connection: "Плохое качество связи",
                    calls_notification_bad_network_connection_disable_camera: "Ваша камера выключена из-за плохого качества связи",
                    calls_notification_mic_is_mute: "Ваш микрофон отключён",
                    calls_notification_raised_hand: ["", "{user} поднял руку", "{user} подняла руку"],
                    calls_notification_screen_sharing_started: "Демонстрация экрана",
                    calls_notification_user_granted_with_admin_role: "{name} назначен администратором",
                    calls_notification_user_started_screen_sharing: ["", "{user} запустил демонстрацию экрана", "{user} запустила демонстрацию экрана"],
                    calls_oops: "Ошибка",
                    calls_own_label: "Вы",
                    calls_participant_list_header: "Участники звонка",
                    calls_participant_menu_assign_admin_role: "Назначить администратором",
                    calls_participant_menu_enable_media_request: "Попросить включить микрофон и видео",
                    calls_participant_menu_kick: "Исключить из звонка",
                    calls_participant_menu_mute: "Отключить микрофон",
                    calls_participant_menu_mute_audio_video: "Отключить микрофон и видео",
                    calls_participant_menu_pin: "Закрепить видео для всех",
                    calls_participant_menu_pin_cancel: "Открепить видео для всех",
                    calls_participant_menu_revoke_admin_role: "Разжаловать администратора",
                    calls_participants_not_found: "Участники не найдены",
                    calls_participants_plural: ["", "%s участник", "%s участника", "%s участников"],
                    calls_participants_speak: ["", "Говорит {names}", "Говорят {names}", "Говорят {names}"],
                    calls_privacy_error: "Звонок не удался, так как у вас или собеседника звонки запрещены в настройках приватности.",
                    calls_reject: "Отклонить",
                    calls_reject_call: "Отклонить звонок",
                    calls_reject_description: "Вы уверены, что хотите отклонить звонок?",
                    calls_reject_title: "Отклонить звонок",
                    calls_rejected_status: "Вызов отклонён",
                    calls_remove_token: "Удалить",
                    calls_reply: "Ответить",
                    calls_reply_with_audio: "Ответить с аудио",
                    calls_reply_with_video: "Ответить с видео",
                    calls_restore: "Развернуть",
                    calls_save: "Сохранить",
                    calls_screen_share_stop: "Остановить демонстрацию",
                    calls_search_participants_placeholder: "Введите имя или фамилию",
                    calls_selected: "Выбрано {selected} из {limit}",
                    calls_settings: "Настройки",
                    calls_settings_camera: "Камера",
                    calls_settings_mic: "Микрофон",
                    calls_settings_no_camera: "Камера не обнаружена",
                    calls_settings_no_mic: "Микрофон не обнаружен",
                    calls_settings_noise: "Подавление<br>фонового шума",
                    calls_settings_noise_description: "Выберите уровень подавления «Авто», чтобы фоновый шум не мешал участникам звонка слышать вас",
                    calls_settings_video_resolution: "Видео",
                    calls_show_all_friends: "Показать всех друзей",
                    calls_show_all_members: "Показать всех участников беседы",
                    calls_show_grid: "Отображать участников сеткой ",
                    calls_show_orator: "Отображать спикера",
                    calls_sorry_error: "Произошла неизвестная ошибка.",
                    calls_start_error: "Во время звонка произошла ошибка. Повторите попытку позже.",
                    calls_start_screen_share: "Демонстрация экрана",
                    calls_status_connecting: "Подключение",
                    calls_status_hangup: "Отключение",
                    calls_status_no_permissions: "Нет разрешений",
                    calls_status_waiting: "Ожидание",
                    calls_stop_screen_share: "Остановить демонстрацию экрана",
                    calls_sure_leave_call: "Вы уверены, что хотите завершить звонок?",
                    calls_tooltip_fullscreen_off: "Обычный",
                    calls_tooltip_fullscreen_on: "Развернуть",
                    calls_tooltip_lower_hand: "Опустить руку",
                    calls_tooltip_raise_hand: "Поднять руку",
                    calls_translation_box_title: "Создать трансляцию звонка",
                    calls_translation_cancel_button: "Отменить трансляцию звонка",
                    calls_translation_date_label_soon: "Скоро",
                    calls_translation_description: "Описание",
                    calls_translation_description_placeholder: "О чем ваша трансляция?",
                    calls_translation_host_info: "{name} ведёт трансляцию звонка",
                    calls_translation_host_info_unknown: "Ведётся трансляция звонка",
                    calls_translation_link: "Ссылка на трансляцию звонка",
                    calls_translation_link_copied: "Скопирована",
                    calls_translation_link_copy: "Скопировать",
                    calls_translation_link_info: "Вы можете поделиться ссылкой на трансляцию звонка, указанной ниже.",
                    calls_translation_menu_link: "Страница трансляции",
                    calls_translation_menu_stop: "Завершить трансляцию",
                    calls_translation_menu_title: "Трансляция звонка",
                    calls_translation_name_placeholder: "Введите название трансляции",
                    calls_translation_notification_warning: "Предупредите участников о начале трансляции звонка во избежание разногласий",
                    calls_translation_owner_title: "Автор трансляции",
                    calls_translation_postponed_reset: "Сбросить",
                    calls_translation_postponed_title: "Запланированная трансляция",
                    calls_translation_privacy_all_users: "Все пользователи",
                    calls_translation_privacy_friends_and_chat: "Друзья и участники чата",
                    calls_translation_privacy_only_me_and_chat: "Только я и участники чата",
                    calls_translation_select_upcoming_box_title: "Выбрать трансляцию",
                    calls_translation_select_video_link: "Выбрать",
                    calls_translation_start: "Начать трансляцию звонка",
                    calls_translation_stop: "Завершить",
                    calls_translation_stop_confirmation: "Завершить трансляцию",
                    calls_translation_stop_menu_item: "Завершить трансляцию",
                    calls_translation_stop_sure: "Вы уверены, что хотите завершить трансляцию звонка?",
                    calls_translation_title: "Название",
                    calls_translation_title_default_value: "Групповой звонок %s",
                    calls_translation_upcoming_time_more_day: ["", "Трансляция начнется через день", "Трансляция начнется через %s дня", "Трансляция начнется через %s дней"],
                    calls_translation_who_can_see_video_privacy: "Кто сможет видеть эту запись",
                    calls_translation_who_can_see_video_privacy_hint: "После начала трансляция появится в чате и будет доступна участникам звонка и тем, с кем вы поделитесь трансляцией",
                    calls_unban_participant_cancel_button_text: "Не добавлять",
                    calls_unban_participant_description_text_more_persons: [
                        "",
                        "{users} и ещё {users_count} пользователь были заблокированы администратором",
                        "{users} и ещё {users_count} пользователя были заблокированы администратором",
                        "{users} и ещё {users_count} пользователей были заблокированы администратором",
                    ],
                    calls_unban_participant_description_text_one_person: ["", "{user} был заблокирован администратором", "{user} была заблокирована администратором"],
                    calls_unban_participant_description_text_two_persons: "{users} были заблокированы администратором",
                    calls_unban_participant_disallowed_button_text: "Понятно",
                    calls_unban_participant_ok_button_text: "Разблокировать и добавить",
                    calls_unban_participant_text: [
                        "",
                        "Вы пытаетесь добавить в звонок заблокированного пользователя",
                        "Вы пытаетесь добавить в звонок заблокированных пользователей",
                        "Вы пытаетесь добавить в звонок заблокированных пользователей",
                    ],
                    calls_unban_participant_title: "Добавить в звонок",
                    calls_unknown_error: "Неизвестная ошибка",
                    calls_unmute: "Включить микрофон",
                    calls_video_resolution_fhd: "Высокое качество",
                    calls_video_resolution_hd: "Хорошее качество",
                    calls_video_resolution_sd: "Высокая производительность",
                    calls_yes: "Да",
                    calls_you_are_screen_sharer: "Вы демонстрируете экран",
                    captcha_cancel: "Отмена",
                    captcha_enter_code: "Введите код с картинки",
                    captcha_send: "Отправить",
                    global_age_days: ["", "%s день", "%s дня", "%s дней"],
                    global_age_months: ["", "%s месяц", "%s месяца", "%s месяцев"],
                    global_age_seconds: ["", "%s секунда", "%s секунды", "%s секунд"],
                    global_age_weeks: ["", "%s неделя", "%s недели", "%s недель"],
                    global_age_years: ["", "%s год", "%s года", "%s лет"],
                    global_and: "{before} и {after}",
                    global_apps: "Приложения",
                    global_back: "Назад",
                    global_box_title_back: "Вернуться назад",
                    global_cancel: "Отмена",
                    global_captcha_input_here: "Введите код",
                    global_chats: "Диалоги",
                    global_close: "Закрыть",
                    global_communities: "Сообщества",
                    global_date: ["", "{day} {month} {year}", "вчера", "сегодня", "завтра"],
                    global_date_l: ["", "{day} {month} {year}", "вчера", "сегодня", "завтра"],
                    global_days_accusative: ["", "%s день", "%s дня", "%s дней"],
                    global_delete: "Удалить",
                    global_error: "Ошибка",
                    global_friends: "Друзья",
                    global_hours: ["", "%s час", "%s часа", "%s часов"],
                    global_hours_accusative: ["", "%s час", "%s часа", "%s часов"],
                    global_hours_ago: ["", "%s час назад", "%s часа назад", "%s часов назад"],
                    global_just_now: "только что",
                    global_mins_ago: ["", "%s минуту назад", "%s минуты назад", "%s минут назад"],
                    global_minutes: ["", "%s минута", "%s минуты", "%s минут"],
                    global_minutes_accusative: ["", "%s минуту", "%s минуты", "%s минут"],
                    global_money_amount_rub: ["", "%s рубль", "%s рубля", "%s рублей"],
                    global_months_accusative: ["", "%s месяц", "%s месяца", "%s месяцев"],
                    global_news_search_results: "Результаты поиска в новостях",
                    global_online_long_ago: ["", "заходил давно", "заходила давно"],
                    global_online_this_month: ["", "заходил в этом месяце", "заходила в этом месяце"],
                    global_online_was_recently: ["", "заходил недавно", "заходила недавно"],
                    global_online_was_week: ["", "заходил на этой неделе", "заходила на этой неделе"],
                    global_open: "Открыть",
                    global_recaptcha_title: "Подтверждение действия",
                    global_save: "Сохранить",
                    global_seconds_accusative: ["", "%s секунду", "%s секунды", "%s секунд"],
                    global_secs_ago: ["", "%s секунду назад", "%s секунды назад", "%s секунд назад"],
                    global_short_date: ["", "{day} {month}", "вчера", "сегодня", "завтра"],
                    global_short_date_time: ["", "{day} {month} в {hour}:{minute}", "вчера в {hour}:{minute}", "сегодня в {hour}:{minute}", "завтра в {hour}:{minute}"],
                    global_short_date_time_l: ["", "{day} {month} в {hour}:{minute}", "вчера в {hour}:{minute}", "сегодня в {hour}:{minute}", "завтра в {hour}:{minute}"],
                    global_show_all_results: "Показать все результаты",
                    global_to_top: "Наверх",
                    global_user_is_online: "онлайн",
                    global_user_is_online_mobile: "онлайн с телефона",
                    global_warning: "Предупреждениe",
                    global_weeks_accusative: ["", "%s неделю", "%s недели", "%s недель"],
                    global_word_hours_ago: ["", "час назад", "два часа назад", "три часа назад", "четыре часа назад", "пять часов назад"],
                    global_word_mins_ago: ["", "минуту назад", "две минуты назад", "три минуты назад", "4 минуты назад", "5 минут назад"],
                    global_word_secs_ago: ["", "только что", "две секунды назад", "три секунды назад", "четыре секунды назад", "пять секунд назад"],
                    global_years_accusative: ["", "%s год", "%s года", "%s лет"],
                    head_search_results: "Результаты поиска",
                    login_blocked_delete_page_header: "Удаление страницы",
                    login_blocked_sure_delete_page_question: "Вы уверены, что хотите удалить свою страницу?",
                    login_fast_unblocked_wait_description: "Страница разблокирована. Через несколько секунд Вы вновь сможете пользоваться ВКонтакте.",
                    mail_ad_tag_easy_promoted_market: "Из рекламы товаров",
                    mail_ad_tag_no_access_box_text: "Недостаточно прав в рекламном кабинете, чтобы просматривать объявление.",
                    mail_ad_tag_no_access_box_title: "Ошибка",
                    mail_ad_tag_no_access_text: "Из рекламы",
                    mail_ad_tag_text_prefix: "AD",
                    mail_added_article: "Статья",
                    mail_added_artist: "Музыкант",
                    mail_added_audio: "Аудиозапись",
                    mail_added_audio_album: "Альбом",
                    mail_added_audio_playlist: "Плейлист",
                    mail_added_audiomsg: "Голосовое сообщение",
                    mail_added_audios: ["", "Аудиозапись", "%s аудиозаписи", "%s аудиозаписей"],
                    mail_added_call: "Звонок",
                    mail_added_clips: "Клипы",
                    mail_added_curator: "Куратор",
                    mail_added_doc: "Файл",
                    mail_added_docs: "Файл",
                    mail_added_geo: "Карта",
                    mail_added_gift: "Подарок",
                    mail_added_graffiti: "Граффити",
                    mail_added_group: "Группа",
                    mail_added_link: "Ссылка",
                    mail_added_market_item: "Товар",
                    mail_added_mask: "Маска",
                    mail_added_money_request: "Запрос на денежный перевод",
                    mail_added_money_transfer: "Денежный перевод",
                    mail_added_msg: "Cообщение",
                    mail_added_msgs: "Cообщения",
                    mail_added_photo: "Фотография",
                    mail_added_photos: ["", "Фотография", "%s фотографии", "%s фотографий"],
                    mail_added_podcast: "Подкаст",
                    mail_added_poll: "Опрос",
                    mail_added_sticker: "Стикер",
                    mail_added_story: "История",
                    mail_added_video: "Видеозапись",
                    mail_added_videos: ["", "Видео", "%s видео", "%s видео"],
                    mail_added_vkpay: "Запрос VK Pay",
                    mail_added_wall: "Запись на стене",
                    mail_added_wall_reply: "Комментарий на стене",
                    mail_allow_comm_messages: "Разрешить сообщения",
                    mail_and_peer: "и ещё {count} {typing}",
                    mail_and_peer_one: "и",
                    mail_block_comm_messages: "Запретить сообщения",
                    mail_block_notify_messages: "Запретить оповещения",
                    mail_block_user: "Заблокировать пользователя",
                    mail_by_you: "Вы",
                    mail_call_declined: "Звонок отклонён",
                    mail_call_snippet_canceled: "Отменён",
                    mail_call_snippet_declined: "Отклонён",
                    mail_call_snippet_finished: "Завершён",
                    mail_call_snippet_group: "Групповой звонок",
                    mail_call_snippet_incoming: "Входящий звонок",
                    mail_call_snippet_incoming_video: "Входящий видеозвонок",
                    mail_call_snippet_missed: "Пропущен",
                    mail_call_snippet_outgoing: "Исходящий звонок",
                    mail_call_snippet_outgoing_video: "Исходящий видеозвонок",
                    mail_callback_popup_text: " {name} предлагает вам открыть ссылку {domain}",
                    mail_callback_popup_title: "Открыть ссылку?",
                    mail_chat_leave_confirm: "Покинув беседу, вы не будете получать новые сообщения от участников. Вы сможете вернуться при наличии свободных мест.<br>",
                    mail_chat_sure_to_delete_all: "Вы действительно хотите <b>удалить всю переписку<\/b> в этой беседе?<br><br>Отменить это действие будет <b>невозможно<\/b>.",
                    mail_clear_recent: "Очистить",
                    mail_creation_count_mr_service_msg: ["", "Отправлено %s приглашение (видите только вы)", "Отправлено %s приглашения (видите только вы)", "Отправлено %s приглашений (видите только вы)"],
                    mail_delete: "Удалить",
                    mail_delete_for_all: "Удалить для всех",
                    mail_deleteall1: "Удалить все сообщения",
                    mail_deleted_stop: "Сообщение удалено.",
                    mail_dialog_msg_delete_N: ["", "Вы действительно хотите <b>удалить<\/b> сообщение?", "Вы действительно хотите <b>удалить<\/b> %s сообщения?", "Вы действительно хотите <b>удалить<\/b> %s сообщений?"],
                    mail_dialog_msg_delete_title: "Удалить сообщение",
                    mail_error: "Ошибка",
                    mail_expired_message: "Сообщение исчезло",
                    mail_fwd_msgs: ["", "%s сообщение", "%s сообщения", "%s сообщений"],
                    mail_gift_message_sent: ["", "отправил подарок", "отправила подарок"],
                    mail_group_calls_im_search_new_year_tt: "Поздравьте близких!<br\/> Со звонками ВКонтакте расстояние не помеха ",
                    mail_group_calls_im_search_tt: "Начните групповой звонок здесь",
                    mail_group_sure_to_delete_all: "Вы действительно хотите <b>удалить всю переписку<\/b> с этим сообществом?<br><br>Отменить это действие будет <b>невозможно<\/b>.",
                    mail_header_online_status: "online",
                    mail_hide_unpin_hover: "Скрыть",
                    mail_im_accepted_message_request: "Это {contact} из вашего списка контактов",
                    mail_im_accepted_message_request_no_name: "безымянный контакт",
                    mail_im_add_to_chat: "Добавить в беседу",
                    mail_im_call_app: "Звонок через приложение",
                    mail_im_call_audio: "Аудиозвонок",
                    mail_im_call_video: "Видеозвонок",
                    mail_im_chat_created: ["", "{from} создал беседу {title}", "{from} создала беседу {title}"],
                    mail_im_chat_own_screenshot: "Вы сделали скриншот беседы",
                    mail_im_chat_screenshot: ["", "{from} сделал скриншот беседы", "{from} сделала скриншот беседы"],
                    mail_im_create_chat_with: "Добавить собеседников",
                    mail_im_delete_all_history: "Очистить историю сообщений",
                    mail_im_delete_email_contact: "Удалить переписку",
                    mail_im_goto_conversation: "Перейти к диалогу",
                    mail_im_invite_by_call_link: ["", "{from} присоединился к звонку по ссылке", "{from} присоединилась к звонку по ссылке"],
                    mail_im_invite_by_link: ["", "{from} присоединился к беседе по ссылке", "{from} присоединилась к беседе по ссылке"],
                    mail_im_invite_by_message_request: ["", "{user} пригласил {from} в беседу", "{user} пригласила {from} в беседу"],
                    mail_im_invite_to_chat: "Пригласить в беседу ",
                    mail_im_invited: ["", "{from} пригласил {user}", "{from} пригласила {user}"],
                    mail_im_invited_to_call: ["", "{from} пригласил {user} в звонок", "{from} пригласила {user} в звонок"],
                    mail_im_kick_user_call_block: ["", "{from} исключил из звонка {user}", "{from} исключила из звонка {user}"],
                    mail_im_kicked_from_chat: ["", "{from} исключил {user}", "{from} исключила {user}"],
                    mail_im_left: ["", "{from} вышел из беседы", "{from} вышла из беседы"],
                    mail_im_mention_all: "Все участники беседы",
                    mail_im_mention_online: "Все, кто сейчас онлайн",
                    mail_im_mute: "Отключить уведомления",
                    mail_im_n_chat_members: ["", "%s участник", "%s участника", "%s участников"],
                    mail_im_new_messages: ["", "%s новое сообщение", "%s новых сообщения", "%s новых сообщений"],
                    mail_im_peer_profile_delete_note_success: "Комментарий удалён",
                    mail_im_peer_profile_extra_tags: ["", "%s метка", "%s метки", "%s меток"],
                    mail_im_peer_profile_info_empty: "Нет данных",
                    mail_im_peer_profile_info_label_text: "Информация:",
                    mail_im_peer_profile_join_date_empty_text: ["", "Не подписан", "Не подписана"],
                    mail_im_peer_profile_join_date_label_text: "Дата подписки:",
                    mail_im_peer_profile_manage_tags: "Управление метками",
                    mail_im_peer_profile_manage_tags_add_link: "Добавить метку",
                    mail_im_peer_profile_manage_tags_box_title: "Управление",
                    mail_im_peer_profile_manage_tags_placeholder: "Новая метка",
                    mail_im_peer_profile_manage_tags_remove: "Удалить метку",
                    mail_im_peer_profile_manage_tags_success: "Метки сохранены",
                    mail_im_peer_profile_note_add_link: "Добавить комментарий",
                    mail_im_peer_profile_note_box_placeholder: "Введите текст...",
                    mail_im_peer_profile_note_box_title: "Комментарий администратора",
                    mail_im_peer_profile_note_delete_confirmation_text: "Вы уверены, что хотите удалить комментарий?",
                    mail_im_peer_profile_note_delete_link: "Удалить комментарий",
                    mail_im_peer_profile_note_edit_link: "Редактировать",
                    mail_im_peer_profile_note_label_text: "Комментарий:",
                    mail_im_peer_profile_save_note_success: "Комментарий сохранён",
                    mail_im_peer_profile_tag_delete_confirmation_text: [
                        "",
                        "Метка «{tag_name}» используется в %s диалоге. Если удалить метку, она удалится из всех диалогов. Вы уверены, что хотите удалить её?",
                        "Метка «{tag_name}» используется в %s диалогах. Если удалить метку, она удалится из всех диалогов. Вы уверены, что хотите удалить её?",
                        "Метка «{tag_name}» используется в %s диалогах. Если удалить метку, она удалится из всех диалогов. Вы уверены, что хотите удалить её?",
                    ],
                    mail_im_peer_profile_tag_delete_confirmation_text_single: "Метка «{tag_name}» используется в одном диалоге. Если удалить метку, она удалится из диалога. Вы уверены, что хотите удалить её?",
                    mail_im_peer_profile_tags_empty: "Без меток",
                    mail_im_peer_profile_tags_label_text: "Метки:",
                    mail_im_peer_profile_toggle_tags_off: "Скрыть доступные метки",
                    mail_im_peer_profile_toggle_tags_on: "Показать доступные метки",
                    mail_im_peer_search: "Поиск по истории сообщений",
                    mail_im_photo_removed: ["", "{from} удалил фотографию беседы", "{from} удалила фотографию беседы"],
                    mail_im_photo_removed_channel: ["", "{from} удалил фотографию канала", "{from} удалила фотографию канала"],
                    mail_im_photo_set: ["", "{from} обновил фотографию беседы", "{from} обновила фотографию беседы"],
                    mail_im_pin_message: ["", "{from} закрепил сообщение «{msg}»", "{from} закрепила сообщение «{msg}»"],
                    mail_im_pin_message_empty2: ["", "{from} закрепил {link}сообщение{\/link}", "{from} закрепила {link}сообщение{\/link}"],
                    mail_im_returned_to_chat: ["", "{from} вернулся в беседу", "{from} вернулась в беседу"],
                    mail_im_search_empty: "Не найдено сообщений по такому запросу.",
                    mail_im_show_media_history: "Показать вложения",
                    mail_im_show_media_history_group: "Показать вложения",
                    mail_im_start_group_call: ["", "{from} начал групповой звонок", "{from} начала групповой звонок"],
                    mail_im_title_updated_channel: ["", "{from} изменил название канала: {title}", "{from} изменила название канала: {title}"],
                    mail_im_title_updated_dot: ["", "{from} изменил название беседы: {title}", "{from} изменила название беседы: {title}"],
                    mail_im_unmute: "Включить уведомления",
                    mail_im_unpin_message: ["", "{from} открепил сообщение «{msg}»", "{from} открепила сообщение «{msg}»"],
                    mail_im_unpin_message_empty2: ["", "{from} открепил {link}сообщение{\/link}", "{from} открепила {link}сообщение{\/link}"],
                    mail_invitation_sended_ago: "Приглашение отправлено {when}",
                    mail_join_invite_error_title: "Ошибка вступления в чат",
                    mail_keyboard_label_location: "Отправить своё местоположение",
                    mail_keyboard_label_vkpay: "Оплатить через VK Pay",
                    mail_last_activity_tip: ["", "{user} был в сети {time}", "{user} была в сети {time}"],
                    mail_leave_channel: "Отписаться от канала",
                    mail_leave_chat: "Выйти из беседы",
                    mail_marked_as_spam: "Сообщение помечено как спам и удалено.",
                    mail_menu_mark_unread: "Отметить непрочитанным",
                    mail_menu_pin_hide: "Скрыть закрепл. сообщение",
                    mail_menu_pin_show: "Показать закрепл. сообщение",
                    mail_menu_unpin: "Открепить сообщение",
                    mail_message_edited: "изменено",
                    mail_message_request_reject: "Отклонить",
                    mail_message_wait_until_uploaded: "Пожалуйста, дождитесь окончания загрузки файлов.",
                    mail_messages_expired: ["", "{count} сообщение исчезло", "{count} сообщения исчезло", "{count} сообщений исчезло"],
                    mail_money_amount_rub: ["", "%s руб.", "%s руб.", "%s руб."],
                    mail_money_request_collected_amount: "Собрано {amount}",
                    mail_money_request_collected_amount_from: "Собрано {amount} из {total_amount}",
                    mail_money_request_held_amount: "({amount} ожидает получения)",
                    mail_money_request_message_sent: ["", "отправил запрос на перевод", "отправила запрос на перевод"],
                    mail_money_tranfer_message_sent: ["", "перевёл деньги", "перевела деньги"],
                    mail_no_support: "Сообщение не поддерживается вашим приложением.",
                    mail_peer_profile_likes_replies_tooltip: "Данные о лайках и комментариях показаны за 100 дней",
                    mail_pin_chat: "Закрепить в списке чатов",
                    mail_recent_searches: "Недавно вы искали",
                    mail_recommend_block_action_find_friends: "Найти по имени",
                    mail_recommend_block_action_import_google: "Импорт из Gmail",
                    mail_recommend_block_action_import_ok: "Импорт из ОК",
                    mail_recommend_block_action_invite: "Пригласить по номеру",
                    mail_recording_audio_several: ["", "записывает аудио", "записывают аудио", "записывают аудио"],
                    mail_reject_mr_confirmation_text: "Вы действительно хотите отклонить приглашение в беседу?",
                    mail_reject_mr_confirmation_title: "Отклонить приглашение",
                    mail_restore: "Восстановить",
                    mail_restored: "Сообщение восстановлено",
                    mail_return_to_chat: "Вернуться в беседу",
                    mail_return_to_vkcomgroup: "Подписаться на канал",
                    mail_search_conversations_sep: "Беседы",
                    mail_search_dialogs_sep: "Люди и сообщества",
                    mail_search_messages: "Сообщения",
                    mail_search_only_messages: "Искать в личных сообщениях",
                    mail_search_only_messages_comm: "Искать в сообщениях сообщества",
                    mail_send_message_error: "Ошибка при отправке сообщения",
                    mail_settings: "Информация о беседе",
                    mail_source_info: "Со страницы: {link}<br>{info}",
                    mail_sure_to_delete_all: "Вы действительно хотите <b>удалить всю переписку<\/b> с данным пользователем?<br><br>Отменить это действие будет <b>невозможно<\/b>.",
                    mail_typing_several: ["", "печатает", "печатают", "печатают"],
                    mail_unfollow_channel: "Отписаться",
                    mail_unfollow_channel_confirmation: "Вы действительно хотите <b>отписаться и удалить все сообщения<\/b> от этого канала?",
                    mail_unpin: "Открепить сообщение",
                    mail_unpin_chat: "Не закреплять в списке чатов",
                    mail_unpin_text: "Вы действительно хотите открепить сообщение? Это изменение увидят все участники беседы.",
                    mail_unpin_title: "Открепить сообщение",
                    mail_unread_message: "Сообщение не прочитано",
                    mail_vkcomgroup_leave_confirm: "Отписавшись от канала, вы не будете получать новые сообщения. Вы сможете вернуться впоследствии.<br>",
                    mail_vkcomgroup_settings: "Информация о канале",
                    months_of: { "1": "января", "2": "февраля", "3": "марта", "4": "апреля", "5": "мая", "6": "июня", "7": "июля", "8": "августа", "9": "сентября", "10": "октября", "11": "ноября", "12": "декабря" },
                    months_sm_of: { "1": "янв", "2": "фев", "3": "мар", "4": "апр", "5": "мая", "6": "июн", "7": "июл", "8": "авг", "9": "сен", "10": "окт", "11": "ноя", "12": "дек" },
                    reg0_change_mail: "Изменить",
                    reg0_error_bad_email: "Некорректный email.",
                    text_N_symbols_remain: ["", "Остался %s знак", "Осталось %s знака", "Осталось %s знаков"],
                    text_exceeds_symbol_limit: ["", "Допустимый объём превышен на %s знак.", "Допустимый объём превышен на %s знака.", "Допустимый объём превышен на %s знаков."],
                    votes_flex: ["", "голос", "голоса", "голосов"],
                    notifications_native_common_error: "Произошла ошибка при включении уведомлений.",
                    global_language_beta_version: "Бета-версия",
                });
                addTemplates({ _: "_", stickers_sticker_url: "https:\/\/vk.com\/sticker\/1-%id%-%size%" });
                window.cur = window.cur || {};
                cur["emojiHintsSendLogHash"] = "af682ed5e2b0dac59c";
                cur.options = {
                    bmonths: [
                        [0, "Месяц"],
                        [1, "Января"],
                        [2, "Февраля"],
                        [3, "Марта"],
                        [4, "Апреля"],
                        [5, "Мая"],
                        [6, "Июня"],
                        [7, "Июля"],
                        [8, "Августа"],
                        [9, "Сентября"],
                        [10, "Октября"],
                        [11, "Ноября"],
                        [12, "Декабря"],
                    ],
                    byears: [
                        [0, "Год"],
                        [2007, "2007"],
                        [2006, "2006"],
                        [2005, "2005"],
                        [2004, "2004"],
                        [2003, "2003"],
                        [2002, "2002"],
                        [2001, "2001"],
                        [2000, "2000"],
                        [1999, "1999"],
                        [1998, "1998"],
                        [1997, "1997"],
                        [1996, "1996"],
                        [1995, "1995"],
                        [1994, "1994"],
                        [1993, "1993"],
                        [1992, "1992"],
                        [1991, "1991"],
                        [1990, "1990"],
                        [1989, "1989"],
                        [1988, "1988"],
                        [1987, "1987"],
                        [1986, "1986"],
                        [1985, "1985"],
                        [1984, "1984"],
                        [1983, "1983"],
                        [1982, "1982"],
                        [1981, "1981"],
                        [1980, "1980"],
                        [1979, "1979"],
                        [1978, "1978"],
                        [1977, "1977"],
                        [1976, "1976"],
                        [1975, "1975"],
                        [1974, "1974"],
                        [1973, "1973"],
                        [1972, "1972"],
                        [1971, "1971"],
                        [1970, "1970"],
                        [1969, "1969"],
                        [1968, "1968"],
                        [1967, "1967"],
                        [1966, "1966"],
                        [1965, "1965"],
                        [1964, "1964"],
                        [1963, "1963"],
                        [1962, "1962"],
                        [1961, "1961"],
                        [1960, "1960"],
                        [1959, "1959"],
                        [1958, "1958"],
                        [1957, "1957"],
                        [1956, "1956"],
                        [1955, "1955"],
                        [1954, "1954"],
                        [1953, "1953"],
                        [1952, "1952"],
                        [1951, "1951"],
                        [1950, "1950"],
                        [1949, "1949"],
                        [1948, "1948"],
                        [1947, "1947"],
                        [1946, "1946"],
                        [1945, "1945"],
                        [1944, "1944"],
                        [1943, "1943"],
                        [1942, "1942"],
                        [1941, "1941"],
                        [1940, "1940"],
                        [1939, "1939"],
                        [1938, "1938"],
                        [1937, "1937"],
                        [1936, "1936"],
                        [1935, "1935"],
                        [1934, "1934"],
                        [1933, "1933"],
                        [1932, "1932"],
                        [1931, "1931"],
                        [1930, "1930"],
                        [1929, "1929"],
                        [1928, "1928"],
                        [1927, "1927"],
                        [1926, "1926"],
                        [1925, "1925"],
                        [1924, "1924"],
                        [1923, "1923"],
                        [1922, "1922"],
                        [1921, "1921"],
                        [1920, "1920"],
                        [1919, "1919"],
                        [1918, "1918"],
                        [1917, "1917"],
                        [1916, "1916"],
                        [1915, "1915"],
                        [1914, "1914"],
                        [1913, "1913"],
                        [1912, "1912"],
                        [1911, "1911"],
                        [1910, "1910"],
                        [1909, "1909"],
                        [1908, "1908"],
                        [1907, "1907"],
                        [1906, "1906"],
                        [1905, "1905"],
                        [1904, "1904"],
                        [1903, "1903"],
                        [1902, "1902"],
                    ],
                    proceed_as: false,
                };
                Index.initNew();
                cur.fbApp = "128749580520227";
                cur.fbState = "9cf8bedc1d9b382ea1";
                cur.fbLocale = "ru_RU";
                Index.fbCheck(cur.fbApp, "");
                (function (d, w) {
                    if (w.__dev) {
                        return;
                    }
                    var ts = d.createElement("script");
                    ts.type = "text/javascript";
                    ts.async = true;
                    ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
                    var f = function () {
                        var s = d.getElementsByTagName("script")[0];
                        s.parentNode.insertBefore(ts, s);
                    };
                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else {
                        f();
                    }
                })(document, window);
                (function (d, w) {
                    if (w.__dev) {
                        return;
                    }
                    if (!w._tns) {
                        w._tns = {};
                    }
                    w._tns.tnsPixelSocdem = "13";
                    w._tns.tnsPixelType = "unauth";
                })(document, window);
                window.curReady && window.curReady();
            }
        </script>

        <div id="fb-root" class="fb_reset">
            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div>
        </div>
    </body>
</html>
