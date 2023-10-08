<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>

<body class="<?php
            $current_page = $_SERVER['REQUEST_URI'];
            $page = '/editions/ed-';
            $bgClass = strpos($current_page, $page) !== false ? 'iepa-bg-color-3' : 'iepa-bg-color-4';
            echo $bgClass;
    ?>"
>
<!-- <div class="d-flex flex-column container-fluid < ?php if ($current_page != "/") :h-100?> px-0"> -->
<div class="d-flex flex-column container-fluid h-100 <?php
    $current_page = $_SERVER['REQUEST_URI'];
    echo $current_page === '/editions/ed-1/editorial/' ? 'iepa-bg-color-4' : '';
?> px-0">
    <header class="row sticky-top w-100 align-items-center px-5 py-4 m-0">
        <nav class="navbar navbar-expand-lg col justify-content-end">
            <div class="col">
                <a href="/">
                    <svg width="249" height="96" viewBox="0 0 250.79199 96.41162" xmlns="http://www.w3.org/2000/svg">
                        <path d="m153.39158,34.43037v-8.58984h1.13672v8.58984h-1.13672Z"/><path d="m156.39744,34.43037v-6.22266h.94922v.88477c.45703-.68359,1.11719-1.02539,1.98047-1.02539.375,0,.71973.06738,1.03418.20215s.5498.31152.70605.53027.26562.47852.32812.7793c.03906.19531.05859.53711.05859,1.02539v3.82617h-1.05469v-3.78516c0-.42969-.04102-.75098-.12305-.96387s-.22754-.38281-.43652-.50977-.4541-.19043-.73535-.19043c-.44922,0-.83691.14258-1.16309.42773s-.48926.82617-.48926,1.62305v3.39844h-1.05469Z"/><path d="m164.79978,34.43037l-2.36719-6.22266h1.11328l1.33594,3.72656c.14453.40234.27734.82031.39844,1.25391.09375-.32812.22461-.72266.39258-1.18359l1.38281-3.79688h1.08398l-2.35547,6.22266h-.98438Z"/><path d="m173.33103,32.42647l1.08984.13477c-.17188.63672-.49023,1.13086-.95508,1.48242s-1.05859.52734-1.78125.52734c-.91016,0-1.63184-.28027-2.16504-.84082s-.7998-1.34668-.7998-2.3584c0-1.04688.26953-1.85938.80859-2.4375s1.23828-.86719,2.09766-.86719c.83203,0,1.51172.2832,2.03906.84961s.79102,1.36328.79102,2.39062c0,.0625-.00195.15625-.00586.28125h-4.64062c.03906.68359.23242,1.20703.58008,1.57031s.78125.54492,1.30078.54492c.38672,0,.7168-.10156.99023-.30469s.49023-.52734.65039-.97266Zm-3.46289-1.70508h3.47461c-.04688-.52344-.17969-.91602-.39844-1.17773-.33594-.40625-.77148-.60938-1.30664-.60938-.48438,0-.8916.16211-1.22168.48633s-.5127.75781-.54785,1.30078Z"/><path d="m175.32322,32.57295l1.04297-.16406c.05859.41797.22168.73828.48926.96094s.6416.33398,1.12207.33398c.48438,0,.84375-.09863,1.07812-.2959s.35156-.42871.35156-.69434c0-.23828-.10352-.42578-.31055-.5625-.14453-.09375-.50391-.21289-1.07812-.35742-.77344-.19531-1.30957-.36426-1.6084-.50684s-.52539-.33984-.67969-.5918-.23145-.53027-.23145-.83496c0-.27734.06348-.53418.19043-.77051s.2998-.43262.51855-.58887c.16406-.12109.3877-.22363.6709-.30762s.58691-.12598.91113-.12598c.48828,0,.91699.07031,1.28613.21094s.6416.33105.81738.57129.29688.56152.36328.96387l-1.03125.14062c-.04688-.32031-.18262-.57031-.40723-.75s-.54199-.26953-.95215-.26953c-.48438,0-.83008.08008-1.03711.24023s-.31055.34766-.31055.5625c0,.13672.04297.25977.12891.36914.08594.11328.2207.20703.4043.28125.10547.03906.41602.12891.93164.26953.74609.19922,1.2666.3623,1.56152.48926s.52637.31152.69434.55371.25195.54297.25195.90234c0,.35156-.10254.68262-.30762.99316s-.50098.55078-.8877.7207-.82422.25488-1.3125.25488c-.80859,0-1.4248-.16797-1.84863-.50391s-.69434-.83398-.81152-1.49414Z"/><path d="m184.04783,33.48701l.15234.93164c-.29688.0625-.5625.09375-.79688.09375-.38281,0-.67969-.06055-.89062-.18164s-.35938-.28027-.44531-.47754-.12891-.6123-.12891-1.24512v-3.58008h-.77344v-.82031h.77344v-1.54102l1.04883-.63281v2.17383h1.06055v.82031h-1.06055v3.63867c0,.30078.01855.49414.05566.58008s.09766.1543.18164.20508.2041.07617.36035.07617c.11719,0,.27148-.01367.46289-.04102Z"/><path d="m185.08494,27.05342v-1.21289h1.05469v1.21289h-1.05469Zm0,7.37695v-6.22266h1.05469v6.22266h-1.05469Z"/><path d="m187.55174,34.946l1.02539.15234c.04297.31641.16211.54688.35742.69141.26172.19531.61914.29297,1.07227.29297.48828,0,.86523-.09766,1.13086-.29297s.44531-.46875.53906-.82031c.05469-.21484.08008-.66602.07617-1.35352-.46094.54297-1.03516.81445-1.72266.81445-.85547,0-1.51758-.30859-1.98633-.92578s-.70312-1.35742-.70312-2.2207c0-.59375.10742-1.1416.32227-1.64355s.52637-.88965.93457-1.16309.8877-.41016,1.43848-.41016c.73438,0,1.33984.29688,1.81641.89062v-.75h.97266v5.37891c0,.96875-.09863,1.65527-.2959,2.05957s-.50977.72363-.9375.95801-.9541.35156-1.5791.35156c-.74219,0-1.3418-.16699-1.79883-.50098s-.67773-.83691-.66211-1.50879Zm.87305-3.73828c0,.81641.16211,1.41211.48633,1.78711s.73047.5625,1.21875.5625c.48438,0,.89062-.18652,1.21875-.55957s.49219-.95801.49219-1.75488c0-.76172-.16895-1.33594-.50684-1.72266s-.74512-.58008-1.22168-.58008c-.46875,0-.86719.19043-1.19531.57129s-.49219.94629-.49219,1.69629Z"/><path d="m198.47947,33.6628c-.39062.33203-.7666.56641-1.12793.70312s-.74902.20508-1.16309.20508c-.68359,0-1.20898-.16699-1.57617-.50098s-.55078-.76074-.55078-1.28027c0-.30469.06934-.58301.20801-.83496s.32031-.4541.54492-.60645.47754-.26758.75879-.3457c.20703-.05469.51953-.10742.9375-.1582.85156-.10156,1.47852-.22266,1.88086-.36328.00391-.14453.00586-.23633.00586-.27539,0-.42969-.09961-.73242-.29883-.9082-.26953-.23828-.66992-.35742-1.20117-.35742-.49609,0-.8623.08691-1.09863.26074s-.41113.48145-.52441.92285l-1.03125-.14062c.09375-.44141.24805-.79785.46289-1.06934s.52539-.48047.93164-.62695.87695-.21973,1.41211-.21973c.53125,0,.96289.0625,1.29492.1875s.57617.28223.73242.47168.26562.42871.32812.71777c.03516.17969.05273.50391.05273.97266v1.40625c0,.98047.02246,1.60059.06738,1.86035s.13379.50879.2666.74707h-1.10156c-.10938-.21875-.17969-.47461-.21094-.76758Zm-.08789-2.35547c-.38281.15625-.95703.28906-1.72266.39844-.43359.0625-.74023.13281-.91992.21094s-.31836.19238-.41602.34277-.14648.31738-.14648.50098c0,.28125.10645.51562.31934.70312s.52441.28125.93457.28125c.40625,0,.76758-.08887,1.08398-.2666s.54883-.4209.69727-.72949c.11328-.23828.16992-.58984.16992-1.05469v-.38672Z"/><path d="m205.1533,32.15108l1.03711.13477c-.11328.71484-.40332,1.27441-.87012,1.67871s-1.04004.60645-1.71973.60645c-.85156,0-1.53613-.27832-2.05371-.83496s-.77637-1.35449-.77637-2.39355c0-.67188.11133-1.25977.33398-1.76367s.56152-.88184,1.0166-1.13379.9502-.37793,1.48535-.37793c.67578,0,1.22852.1709,1.6582.5127s.70508.82715.82617,1.45605l-1.02539.1582c-.09766-.41797-.27051-.73242-.51855-.94336s-.54785-.31641-.89941-.31641c-.53125,0-.96289.19043-1.29492.57129s-.49805.9834-.49805,1.80762c0,.83594.16016,1.44336.48047,1.82227s.73828.56836,1.25391.56836c.41406,0,.75977-.12695,1.03711-.38086s.45312-.64453.52734-1.17188Zm-2.44336,3.06445l.30469-1.03711h.78516l-.19336.62695c.33203.03906.58203.1416.75.30762s.25195.35059.25195.55371c0,.29297-.14062.55176-.42188.77637s-.70508.33691-1.27148.33691c-.32031,0-.60156-.02344-.84375-.07031l.06445-.68555c.25.01562.43359.02344.55078.02344.36719,0,.625-.05078.77344-.15234.11328-.07812.16992-.17383.16992-.28711,0-.07031-.02246-.13281-.06738-.1875s-.12793-.10156-.24902-.14062-.32227-.06055-.60352-.06445Z"/><path d="m211.1533,33.6628c-.39062.33203-.7666.56641-1.12793.70312s-.74902.20508-1.16309.20508c-.68359,0-1.20898-.16699-1.57617-.50098s-.55078-.76074-.55078-1.28027c0-.30469.06934-.58301.20801-.83496s.32031-.4541.54492-.60645.47754-.26758.75879-.3457c.20703-.05469.51953-.10742.9375-.1582.85156-.10156,1.47852-.22266,1.88086-.36328.00391-.14453.00586-.23633.00586-.27539,0-.42969-.09961-.73242-.29883-.9082-.26953-.23828-.66992-.35742-1.20117-.35742-.49609,0-.8623.08691-1.09863.26074s-.41113.48145-.52441.92285l-1.03125-.14062c.09375-.44141.24805-.79785.46289-1.06934s.52539-.48047.93164-.62695.87695-.21973,1.41211-.21973c.53125,0,.96289.0625,1.29492.1875s.57617.28223.73242.47168.26562.42871.32812.71777c.03516.17969.05273.50391.05273.97266v1.40625c0,.98047.02246,1.60059.06738,1.86035s.13379.50879.2666.74707h-1.10156c-.10938-.21875-.17969-.47461-.21094-.76758Zm-3.50977-6.375c-.00391-.40625.10742-.73047.33398-.97266.22266-.24219.50781-.36328.85547-.36328.24219,0,.57227.10547.99023.31641.23047.11719.41406.17578.55078.17578.125,0,.2207-.03418.28711-.10254s.11328-.2041.14062-.40723h.76172c-.01172.44531-.12402.7793-.33691,1.00195s-.4834.33398-.81152.33398c-.24609,0-.57031-.10938-.97266-.32812-.26172-.14062-.45312-.21094-.57422-.21094-.13281,0-.24023.04688-.32227.14062-.08594.09375-.12695.23242-.12305.41602h-.7793Zm3.42188,4.01953c-.38281.15625-.95703.28906-1.72266.39844-.43359.0625-.74023.13281-.91992.21094s-.31836.19238-.41602.34277-.14648.31738-.14648.50098c0,.28125.10645.51562.31934.70312s.52441.28125.93457.28125c.40625,0,.76758-.08887,1.08398-.2666s.54883-.4209.69727-.72949c.11328-.23828.16992-.58984.16992-1.05469v-.38672Z"/><path d="m213.374,31.31905c0-1.15234.32031-2.00586.96094-2.56055.53516-.46094,1.1875-.69141,1.95703-.69141.85547,0,1.55469.28027,2.09766.84082s.81445,1.33496.81445,2.32324c0,.80078-.12012,1.43066-.36035,1.88965s-.58984.81543-1.04883,1.06934-.95996.38086-1.50293.38086c-.87109,0-1.5752-.2793-2.1123-.83789s-.80566-1.36328-.80566-2.41406Zm1.08398,0c0,.79688.17383,1.39355.52148,1.79004s.78516.59473,1.3125.59473c.52344,0,.95898-.19922,1.30664-.59766s.52148-1.00586.52148-1.82227c0-.76953-.1748-1.35254-.52441-1.74902s-.78418-.59473-1.30371-.59473c-.52734,0-.96484.19727-1.3125.5918s-.52148.99023-.52148,1.78711Z"/><path d="m153.22166,46.43037v-8.58984h6.21094v1.01367h-5.07422v2.63086h4.75195v1.00781h-4.75195v2.92383h5.27344v1.01367h-6.41016Z"/><path d="m160.36424,46.43037l2.27344-3.23438-2.10352-2.98828h1.31836l.95508,1.45898c.17969.27734.32422.50977.43359.69727.17188-.25781.33008-.48633.47461-.68555l1.04883-1.4707h1.25977l-2.15039,2.92969,2.31445,3.29297h-1.29492l-1.27734-1.93359-.33984-.52148-1.63477,2.45508h-1.27734Z"/><path d="m167.06736,48.81514v-8.60742h.96094v.80859c.22656-.31641.48242-.55371.76758-.71191s.63086-.2373,1.03711-.2373c.53125,0,1,.13672,1.40625.41016s.71289.65918.91992,1.15723.31055,1.04395.31055,1.6377c0,.63672-.11426,1.20996-.34277,1.71973s-.56055.90039-.99609,1.17188-.89355.40723-1.37402.40723c-.35156,0-.66699-.07422-.94629-.22266s-.50879-.33594-.68848-.5625v3.0293h-1.05469Zm.95508-5.46094c0,.80078.16211,1.39258.48633,1.77539s.7168.57422,1.17773.57422c.46875,0,.87012-.19824,1.2041-.59473s.50098-1.01074.50098-1.84277c0-.79297-.16309-1.38672-.48926-1.78125s-.71582-.5918-1.16895-.5918c-.44922,0-.84668.20996-1.19238.62988s-.51855,1.03027-.51855,1.83105Z"/><path d="m178.00096,44.42647l1.08984.13477c-.17188.63672-.49023,1.13086-.95508,1.48242s-1.05859.52734-1.78125.52734c-.91016,0-1.63184-.28027-2.16504-.84082s-.7998-1.34668-.7998-2.3584c0-1.04688.26953-1.85938.80859-2.4375s1.23828-.86719,2.09766-.86719c.83203,0,1.51172.2832,2.03906.84961s.79102,1.36328.79102,2.39062c0,.0625-.00195.15625-.00586.28125h-4.64062c.03906.68359.23242,1.20703.58008,1.57031s.78125.54492,1.30078.54492c.38672,0,.7168-.10156.99023-.30469s.49023-.52734.65039-.97266Zm-3.46289-1.70508h3.47461c-.04688-.52344-.17969-.91602-.39844-1.17773-.33594-.40625-.77148-.60938-1.30664-.60938-.48438,0-.8916.16211-1.22168.48633s-.5127.75781-.54785,1.30078Z"/><path d="m180.4033,46.43037v-6.22266h.94922v.94336c.24219-.44141.46582-.73242.6709-.87305s.43066-.21094.67676-.21094c.35547,0,.7168.11328,1.08398.33984l-.36328.97852c-.25781-.15234-.51562-.22852-.77344-.22852-.23047,0-.4375.06934-.62109.20801s-.31445.33105-.39258.57715c-.11719.375-.17578.78516-.17578,1.23047v3.25781h-1.05469Z"/><path d="m184.41697,39.05342v-1.21289h1.05469v1.21289h-1.05469Zm0,7.37695v-6.22266h1.05469v6.22266h-1.05469Z"/><path d="m187.07713,46.43037v-6.22266h.94336v.87305c.19531-.30469.45508-.5498.7793-.73535s.69336-.27832,1.10742-.27832c.46094,0,.83887.0957,1.13379.28711s.50293.45898.62402.80273c.49219-.72656,1.13281-1.08984,1.92188-1.08984.61719,0,1.0918.1709,1.42383.5127s.49805.86816.49805,1.5791v4.27148h-1.04883v-3.91992c0-.42188-.03418-.72559-.10254-.91113s-.19238-.33496-.37207-.44824-.39062-.16992-.63281-.16992c-.4375,0-.80078.14551-1.08984.43652s-.43359.75684-.43359,1.39746v3.61523h-1.05469v-4.04297c0-.46875-.08594-.82031-.25781-1.05469s-.45312-.35156-.84375-.35156c-.29688,0-.57129.07812-.82324.23438s-.43457.38477-.54785.68555-.16992.73438-.16992,1.30078v3.22852h-1.05469Z"/><path d="m201.33299,44.42647l1.08984.13477c-.17188.63672-.49023,1.13086-.95508,1.48242s-1.05859.52734-1.78125.52734c-.91016,0-1.63184-.28027-2.16504-.84082s-.7998-1.34668-.7998-2.3584c0-1.04688.26953-1.85938.80859-2.4375s1.23828-.86719,2.09766-.86719c.83203,0,1.51172.2832,2.03906.84961s.79102,1.36328.79102,2.39062c0,.0625-.00195.15625-.00586.28125h-4.64062c.03906.68359.23242,1.20703.58008,1.57031s.78125.54492,1.30078.54492c.38672,0,.7168-.10156.99023-.30469s.49023-.52734.65039-.97266Zm-3.46289-1.70508h3.47461c-.04688-.52344-.17969-.91602-.39844-1.17773-.33594-.40625-.77148-.60938-1.30664-.60938-.48438,0-.8916.16211-1.22168.48633s-.5127.75781-.54785,1.30078Z"/><path d="m203.74705,46.43037v-6.22266h.94922v.88477c.45703-.68359,1.11719-1.02539,1.98047-1.02539.375,0,.71973.06738,1.03418.20215s.5498.31152.70605.53027.26562.47852.32812.7793c.03906.19531.05859.53711.05859,1.02539v3.82617h-1.05469v-3.78516c0-.42969-.04102-.75098-.12305-.96387s-.22754-.38281-.43652-.50977-.4541-.19043-.73535-.19043c-.44922,0-.83691.14258-1.16309.42773s-.48926.82617-.48926,1.62305v3.39844h-1.05469Z"/><path d="m212.72361,45.48701l.15234.93164c-.29688.0625-.5625.09375-.79688.09375-.38281,0-.67969-.06055-.89062-.18164s-.35938-.28027-.44531-.47754-.12891-.6123-.12891-1.24512v-3.58008h-.77344v-.82031h.77344v-1.54102l1.04883-.63281v2.17383h1.06055v.82031h-1.06055v3.63867c0,.30078.01855.49414.05566.58008s.09766.1543.18164.20508.2041.07617.36035.07617c.11719,0,.27148-.01367.46289-.04102Z"/><path d="m217.81541,45.6628c-.39062.33203-.7666.56641-1.12793.70312s-.74902.20508-1.16309.20508c-.68359,0-1.20898-.16699-1.57617-.50098s-.55078-.76074-.55078-1.28027c0-.30469.06934-.58301.20801-.83496s.32031-.4541.54492-.60645.47754-.26758.75879-.3457c.20703-.05469.51953-.10742.9375-.1582.85156-.10156,1.47852-.22266,1.88086-.36328.00391-.14453.00586-.23633.00586-.27539,0-.42969-.09961-.73242-.29883-.9082-.26953-.23828-.66992-.35742-1.20117-.35742-.49609,0-.8623.08691-1.09863.26074s-.41113.48145-.52441.92285l-1.03125-.14062c.09375-.44141.24805-.79785.46289-1.06934s.52539-.48047.93164-.62695.87695-.21973,1.41211-.21973c.53125,0,.96289.0625,1.29492.1875s.57617.28223.73242.47168.26562.42871.32812.71777c.03516.17969.05273.50391.05273.97266v1.40625c0,.98047.02246,1.60059.06738,1.86035s.13379.50879.2666.74707h-1.10156c-.10938-.21875-.17969-.47461-.21094-.76758Zm-.08789-2.35547c-.38281.15625-.95703.28906-1.72266.39844-.43359.0625-.74023.13281-.91992.21094s-.31836.19238-.41602.34277-.14648.31738-.14648.50098c0,.28125.10645.51562.31934.70312s.52441.28125.93457.28125c.40625,0,.76758-.08887,1.08398-.2666s.54883-.4209.69727-.72949c.11328-.23828.16992-.58984.16992-1.05469v-.38672Z"/><path d="m220.40525,46.43037v-8.58984h1.05469v8.58984h-1.05469Z"/><path d="m157.10056,58.43037v-.78516c-.39453.61719-.97461.92578-1.74023.92578-.49609,0-.95215-.13672-1.36816-.41016s-.73828-.65527-.9668-1.14551-.34277-1.05371-.34277-1.69043c0-.62109.10352-1.18457.31055-1.69043s.51758-.89355.93164-1.16309.87695-.4043,1.38867-.4043c.375,0,.70898.0791,1.00195.2373s.53125.36426.71484.61816v-3.08203h1.04883v8.58984h-.97852Zm-3.33398-3.10547c0,.79688.16797,1.39258.50391,1.78711s.73242.5918,1.18945.5918c.46094,0,.85254-.18848,1.1748-.56543s.4834-.95215.4834-1.72559c0-.85156-.16406-1.47656-.49219-1.875s-.73242-.59766-1.21289-.59766c-.46875,0-.86035.19141-1.1748.57422s-.47168.98633-.47168,1.81055Z"/><path d="m163.99705,56.42647l1.08984.13477c-.17188.63672-.49023,1.13086-.95508,1.48242s-1.05859.52734-1.78125.52734c-.91016,0-1.63184-.28027-2.16504-.84082s-.7998-1.34668-.7998-2.3584c0-1.04688.26953-1.85938.80859-2.4375s1.23828-.86719,2.09766-.86719c.83203,0,1.51172.2832,2.03906.84961s.79102,1.36328.79102,2.39062c0,.0625-.00195.15625-.00586.28125h-4.64062c.03906.68359.23242,1.20703.58008,1.57031s.78125.54492,1.30078.54492c.38672,0,.7168-.10156.99023-.30469s.49023-.52734.65039-.97266Zm-3.46289-1.70508h3.47461c-.04688-.52344-.17969-.91602-.39844-1.17773-.33594-.40625-.77148-.60938-1.30664-.60938-.48438,0-.8916.16211-1.22168.48633s-.5127.75781-.54785,1.30078Z"/><path d="m169.87986,58.43037v-8.58984h3.24023c.57031,0,1.00586.02734,1.30664.08203.42188.07031.77539.2041,1.06055.40137s.51465.47363.68848.8291.26074.74609.26074,1.17188c0,.73047-.23242,1.34863-.69727,1.85449s-1.30469.75879-2.51953.75879h-2.20312v3.49219h-1.13672Zm1.13672-4.50586h2.2207c.73438,0,1.25586-.13672,1.56445-.41016s.46289-.6582.46289-1.1543c0-.35938-.09082-.66699-.27246-.92285s-.4209-.4248-.71777-.50684c-.19141-.05078-.54492-.07617-1.06055-.07617h-2.19727v3.07031Z"/><path d="m177.73728,58.43037v-6.22266h.94922v.94336c.24219-.44141.46582-.73242.6709-.87305s.43066-.21094.67676-.21094c.35547,0,.7168.11328,1.08398.33984l-.36328.97852c-.25781-.15234-.51562-.22852-.77344-.22852-.23047,0-.4375.06934-.62109.20801s-.31445.33105-.39258.57715c-.11719.375-.17578.78516-.17578,1.23047v3.25781h-1.05469Z"/><path d="m181.35252,55.31905c0-1.15234.32031-2.00586.96094-2.56055.53516-.46094,1.1875-.69141,1.95703-.69141.85547,0,1.55469.28027,2.09766.84082s.81445,1.33496.81445,2.32324c0,.80078-.12012,1.43066-.36035,1.88965s-.58984.81543-1.04883,1.06934-.95996.38086-1.50293.38086c-.87109,0-1.5752-.2793-2.1123-.83789s-.80566-1.36328-.80566-2.41406Zm1.08398,0c0,.79688.17383,1.39355.52148,1.79004s.78516.59473,1.3125.59473c.52344,0,.95898-.19922,1.30664-.59766s.52148-1.00586.52148-1.82227c0-.76953-.1748-1.35254-.52441-1.74902s-.78418-.59473-1.30371-.59473c-.52734,0-.96484.19727-1.3125.5918s-.52148.99023-.52148,1.78711Z"/><path d="m192.47947,56.15108l1.03711.13477c-.11328.71484-.40332,1.27441-.87012,1.67871s-1.04004.60645-1.71973.60645c-.85156,0-1.53613-.27832-2.05371-.83496s-.77637-1.35449-.77637-2.39355c0-.67188.11133-1.25977.33398-1.76367s.56152-.88184,1.0166-1.13379.9502-.37793,1.48535-.37793c.67578,0,1.22852.1709,1.6582.5127s.70508.82715.82617,1.45605l-1.02539.1582c-.09766-.41797-.27051-.73242-.51855-.94336s-.54785-.31641-.89941-.31641c-.53125,0-.96289.19043-1.29492.57129s-.49805.9834-.49805,1.80762c0,.83594.16016,1.44336.48047,1.82227s.73828.56836,1.25391.56836c.41406,0,.75977-.12695,1.03711-.38086s.45312-.64453.52734-1.17188Z"/><path d="m198.67869,56.42647l1.08984.13477c-.17188.63672-.49023,1.13086-.95508,1.48242s-1.05859.52734-1.78125.52734c-.91016,0-1.63184-.28027-2.16504-.84082s-.7998-1.34668-.7998-2.3584c0-1.04688.26953-1.85938.80859-2.4375s1.23828-.86719,2.09766-.86719c.83203,0,1.51172.2832,2.03906.84961s.79102,1.36328.79102,2.39062c0,.0625-.00195.15625-.00586.28125h-4.64062c.03906.68359.23242,1.20703.58008,1.57031s.78125.54492,1.30078.54492c.38672,0,.7168-.10156.99023-.30469s.49023-.52734.65039-.97266Zm-3.46289-1.70508h3.47461c-.04688-.52344-.17969-.91602-.39844-1.17773-.33594-.40625-.77148-.60938-1.30664-.60938-.48438,0-.8916.16211-1.22168.48633s-.5127.75781-.54785,1.30078Z"/><path d="m200.67088,56.57295l1.04297-.16406c.05859.41797.22168.73828.48926.96094s.6416.33398,1.12207.33398c.48438,0,.84375-.09863,1.07812-.2959s.35156-.42871.35156-.69434c0-.23828-.10352-.42578-.31055-.5625-.14453-.09375-.50391-.21289-1.07812-.35742-.77344-.19531-1.30957-.36426-1.6084-.50684s-.52539-.33984-.67969-.5918-.23145-.53027-.23145-.83496c0-.27734.06348-.53418.19043-.77051s.2998-.43262.51855-.58887c.16406-.12109.3877-.22363.6709-.30762s.58691-.12598.91113-.12598c.48828,0,.91699.07031,1.28613.21094s.6416.33105.81738.57129.29688.56152.36328.96387l-1.03125.14062c-.04688-.32031-.18262-.57031-.40723-.75s-.54199-.26953-.95215-.26953c-.48438,0-.83008.08008-1.03711.24023s-.31055.34766-.31055.5625c0,.13672.04297.25977.12891.36914.08594.11328.2207.20703.4043.28125.10547.03906.41602.12891.93164.26953.74609.19922,1.2666.3623,1.56152.48926s.52637.31152.69434.55371.25195.54297.25195.90234c0,.35156-.10254.68262-.30762.99316s-.50098.55078-.8877.7207-.82422.25488-1.3125.25488c-.80859,0-1.4248-.16797-1.84863-.50391s-.69434-.83398-.81152-1.49414Z"/><path d="m206.67088,56.57295l1.04297-.16406c.05859.41797.22168.73828.48926.96094s.6416.33398,1.12207.33398c.48438,0,.84375-.09863,1.07812-.2959s.35156-.42871.35156-.69434c0-.23828-.10352-.42578-.31055-.5625-.14453-.09375-.50391-.21289-1.07812-.35742-.77344-.19531-1.30957-.36426-1.6084-.50684s-.52539-.33984-.67969-.5918-.23145-.53027-.23145-.83496c0-.27734.06348-.53418.19043-.77051s.2998-.43262.51855-.58887c.16406-.12109.3877-.22363.6709-.30762s.58691-.12598.91113-.12598c.48828,0,.91699.07031,1.28613.21094s.6416.33105.81738.57129.29688.56152.36328.96387l-1.03125.14062c-.04688-.32031-.18262-.57031-.40723-.75s-.54199-.26953-.95215-.26953c-.48438,0-.83008.08008-1.03711.24023s-.31055.34766-.31055.5625c0,.13672.04297.25977.12891.36914.08594.11328.2207.20703.4043.28125.10547.03906.41602.12891.93164.26953.74609.19922,1.2666.3623,1.56152.48926s.52637.31152.69434.55371.25195.54297.25195.90234c0,.35156-.10254.68262-.30762.99316s-.50098.55078-.8877.7207-.82422.25488-1.3125.25488c-.80859,0-1.4248-.16797-1.84863-.50391s-.69434-.83398-.81152-1.49414Z"/><path d="m212.70017,55.31905c0-1.15234.32031-2.00586.96094-2.56055.53516-.46094,1.1875-.69141,1.95703-.69141.85547,0,1.55469.28027,2.09766.84082s.81445,1.33496.81445,2.32324c0,.80078-.12012,1.43066-.36035,1.88965s-.58984.81543-1.04883,1.06934-.95996.38086-1.50293.38086c-.87109,0-1.5752-.2793-2.1123-.83789s-.80566-1.36328-.80566-2.41406Zm1.08398,0c0,.79688.17383,1.39355.52148,1.79004s.78516.59473,1.3125.59473c.52344,0,.95898-.19922,1.30664-.59766s.52148-1.00586.52148-1.82227c0-.76953-.1748-1.35254-.52441-1.74902s-.78418-.59473-1.30371-.59473c-.52734,0-.96484.19727-1.3125.5918s-.52148.99023-.52148,1.78711Z"/><path d="m219.34471,56.57295l1.04297-.16406c.05859.41797.22168.73828.48926.96094s.6416.33398,1.12207.33398c.48438,0,.84375-.09863,1.07812-.2959s.35156-.42871.35156-.69434c0-.23828-.10352-.42578-.31055-.5625-.14453-.09375-.50391-.21289-1.07812-.35742-.77344-.19531-1.30957-.36426-1.6084-.50684s-.52539-.33984-.67969-.5918-.23145-.53027-.23145-.83496c0-.27734.06348-.53418.19043-.77051s.2998-.43262.51855-.58887c.16406-.12109.3877-.22363.6709-.30762s.58691-.12598.91113-.12598c.48828,0,.91699.07031,1.28613.21094s.6416.33105.81738.57129.29688.56152.36328.96387l-1.03125.14062c-.04688-.32031-.18262-.57031-.40723-.75s-.54199-.26953-.95215-.26953c-.48438,0-.83008.08008-1.03711.24023s-.31055.34766-.31055.5625c0,.13672.04297.25977.12891.36914.08594.11328.2207.20703.4043.28125.10547.03906.41602.12891.93164.26953.74609.19922,1.2666.3623,1.56152.48926s.52637.31152.69434.55371.25195.54297.25195.90234c0,.35156-.10254.68262-.30762.99316s-.50098.55078-.8877.7207-.82422.25488-1.3125.25488c-.80859,0-1.4248-.16797-1.84863-.50391s-.69434-.83398-.81152-1.49414Z"/><path d="m152.25486,70.43037l3.29883-8.58984h1.22461l3.51562,8.58984h-1.29492l-1.00195-2.60156h-3.5918l-.94336,2.60156h-1.20703Zm2.47852-3.52734h2.91211l-.89648-2.37891c-.27344-.72266-.47656-1.31641-.60938-1.78125-.10938.55078-.26367,1.09766-.46289,1.64062l-.94336,2.51953Z"/><path d="m161.05564,70.43037v-6.22266h.94922v.94336c.24219-.44141.46582-.73242.6709-.87305s.43066-.21094.67676-.21094c.35547,0,.7168.11328,1.08398.33984l-.36328.97852c-.25781-.15234-.51562-.22852-.77344-.22852-.23047,0-.4375.06934-.62109.20801s-.31445.33105-.39258.57715c-.11719.375-.17578.78516-.17578,1.23047v3.25781h-1.05469Z"/><path d="m167.36619,69.48701l.15234.93164c-.29688.0625-.5625.09375-.79688.09375-.38281,0-.67969-.06055-.89062-.18164s-.35938-.28027-.44531-.47754-.12891-.6123-.12891-1.24512v-3.58008h-.77344v-.82031h.77344v-1.54102l1.04883-.63281v2.17383h1.06055v.82031h-1.06055v3.63867c0,.30078.01855.49414.05566.58008s.09766.1543.18164.20508.2041.07617.36035.07617c.11719,0,.27148-.01367.46289-.04102Z"/><path d="m168.71385,63.43428l.7793-1.64062h1.38281l-1.28906,1.64062h-.87305Zm.05273,6.99609v-6.22266h1.05469v6.22266h-1.05469Z"/><path d="m171.30955,68.57295l1.04297-.16406c.05859.41797.22168.73828.48926.96094s.6416.33398,1.12207.33398c.48438,0,.84375-.09863,1.07812-.2959s.35156-.42871.35156-.69434c0-.23828-.10352-.42578-.31055-.5625-.14453-.09375-.50391-.21289-1.07812-.35742-.77344-.19531-1.30957-.36426-1.6084-.50684s-.52539-.33984-.67969-.5918-.23145-.53027-.23145-.83496c0-.27734.06348-.53418.19043-.77051s.2998-.43262.51855-.58887c.16406-.12109.3877-.22363.6709-.30762s.58691-.12598.91113-.12598c.48828,0,.91699.07031,1.28613.21094s.6416.33105.81738.57129.29688.56152.36328.96387l-1.03125.14062c-.04688-.32031-.18262-.57031-.40723-.75s-.54199-.26953-.95215-.26953c-.48438,0-.83008.08008-1.03711.24023s-.31055.34766-.31055.5625c0,.13672.04297.25977.12891.36914.08594.11328.2207.20703.4043.28125.10547.03906.41602.12891.93164.26953.74609.19922,1.2666.3623,1.56152.48926s.52637.31152.69434.55371.25195.54297.25195.90234c0,.35156-.10254.68262-.30762.99316s-.50098.55078-.8877.7207-.82422.25488-1.3125.25488c-.80859,0-1.4248-.16797-1.84863-.50391s-.69434-.83398-.81152-1.49414Z"/><path d="m180.03416,69.48701l.15234.93164c-.29688.0625-.5625.09375-.79688.09375-.38281,0-.67969-.06055-.89062-.18164s-.35938-.28027-.44531-.47754-.12891-.6123-.12891-1.24512v-3.58008h-.77344v-.82031h.77344v-1.54102l1.04883-.63281v2.17383h1.06055v.82031h-1.06055v3.63867c0,.30078.01855.49414.05566.58008s.09766.1543.18164.20508.2041.07617.36035.07617c.11719,0,.27148-.01367.46289-.04102Z"/><path d="m181.07127,63.05342v-1.21289h1.05469v1.21289h-1.05469Zm0,7.37695v-6.22266h1.05469v6.22266h-1.05469Z"/><path d="m187.79197,68.15108l1.03711.13477c-.11328.71484-.40332,1.27441-.87012,1.67871s-1.04004.60645-1.71973.60645c-.85156,0-1.53613-.27832-2.05371-.83496s-.77637-1.35449-.77637-2.39355c0-.67188.11133-1.25977.33398-1.76367s.56152-.88184,1.0166-1.13379.9502-.37793,1.48535-.37793c.67578,0,1.22852.1709,1.6582.5127s.70508.82715.82617,1.45605l-1.02539.1582c-.09766-.41797-.27051-.73242-.51855-.94336s-.54785-.31641-.89941-.31641c-.53125,0-.96289.19043-1.29492.57129s-.49805.9834-.49805,1.80762c0,.83594.16016,1.44336.48047,1.82227s.73828.56836,1.25391.56836c.41406,0,.75977-.12695,1.03711-.38086s.45312-.64453.52734-1.17188Z"/><path d="m189.33885,67.31905c0-1.15234.32031-2.00586.96094-2.56055.53516-.46094,1.1875-.69141,1.95703-.69141.85547,0,1.55469.28027,2.09766.84082s.81445,1.33496.81445,2.32324c0,.80078-.12012,1.43066-.36035,1.88965s-.58984.81543-1.04883,1.06934-.95996.38086-1.50293.38086c-.87109,0-1.5752-.2793-2.1123-.83789s-.80566-1.36328-.80566-2.41406Zm1.08398,0c0,.79688.17383,1.39355.52148,1.79004s.78516.59473,1.3125.59473c.52344,0,.95898-.19922,1.30664-.59766s.52148-1.00586.52148-1.82227c0-.76953-.1748-1.35254-.52441-1.74902s-.78418-.59473-1.30371-.59473c-.52734,0-.96484.19727-1.3125.5918s-.52148.99023-.52148,1.78711Z"/><path d="m195.98338,68.57295l1.04297-.16406c.05859.41797.22168.73828.48926.96094s.6416.33398,1.12207.33398c.48438,0,.84375-.09863,1.07812-.2959s.35156-.42871.35156-.69434c0-.23828-.10352-.42578-.31055-.5625-.14453-.09375-.50391-.21289-1.07812-.35742-.77344-.19531-1.30957-.36426-1.6084-.50684s-.52539-.33984-.67969-.5918-.23145-.53027-.23145-.83496c0-.27734.06348-.53418.19043-.77051s.2998-.43262.51855-.58887c.16406-.12109.3877-.22363.6709-.30762s.58691-.12598.91113-.12598c.48828,0,.91699.07031,1.28613.21094s.6416.33105.81738.57129.29688.56152.36328.96387l-1.03125.14062c-.04688-.32031-.18262-.57031-.40723-.75s-.54199-.26953-.95215-.26953c-.48438,0-.83008.08008-1.03711.24023s-.31055.34766-.31055.5625c0,.13672.04297.25977.12891.36914.08594.11328.2207.20703.4043.28125.10547.03906.41602.12891.93164.26953.74609.19922,1.2666.3623,1.56152.48926s.52637.31152.69434.55371.25195.54297.25195.90234c0,.35156-.10254.68262-.30762.99316s-.50098.55078-.8877.7207-.82422.25488-1.3125.25488c-.80859,0-1.4248-.16797-1.84863-.50391s-.69434-.83398-.81152-1.49414Z"/><path d="m26.27928,69.58076V26.83076h8.63184v42.75h-8.63184Z"/><path d="m37.16258,69.58076V26.83076h31.69775v7.23193h-23.06641v9.47705h21.4624v7.20312h-21.4624v11.63525h23.88281v7.20264h-32.51416Z"/><path d="m71.02439,69.58076V26.83076h13.85107c5.24902,0,8.67041.21387,10.26465.6416,2.44971.6416,4.50049,2.03662,6.15332,4.18457,1.65186,2.14844,2.47852,4.92334,2.47852,8.3252,0,2.62451-.47656,4.83154-1.42871,6.61963-.95264,1.78906-2.16309,3.19336-3.63086,4.21387s-2.95947,1.69629-4.47607,2.02686c-2.06104.4082-5.04492.6123-8.95215.6123h-5.62842v16.12598h-8.63135Zm8.63135-35.51807v12.13086h4.72412c3.40186,0,5.67627-.22314,6.82373-.6709,1.14697-.44678,2.0459-1.14648,2.69727-2.09912s.97705-2.06055.97705-3.32471c0-1.55518-.45703-2.83789-1.37061-3.84912-.91406-1.01074-2.07031-1.64258-3.47021-1.89551-1.03076-.19385-3.10107-.2915-6.21143-.2915h-4.16992Z"/><path d="m139.0034,69.58076h-9.38867l-3.73242-9.71045h-17.08887l-3.52832,9.71045h-9.15674l16.65088-42.75h9.12695l17.11719,42.75Zm-15.89258-16.91357l-5.89062-15.86328-5.77295,15.86328h11.66357Z"/><path d="m250.79199,96.41162H0V0h250.79199v96.41162ZM1,95.41162h248.79199V1H1v94.41162Z"/>
                    </svg>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/editions">Edições</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/about">Sobre</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="/submit">Submissões</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- <div class="col navmenu">
            <a href="#navigation" class="nav-trigger">
                <span></span>
            </a>
            <nav class="nav-container" id="navigation">
                <ul class="nav justify-content-end">
                    <li class="me-5"><a href="/editions">Edições</a></li>
                    <li class="me-5"><a href="/about">Sobre</a></li>
                    <li class="me-5"><a href="/submit">Submissões</a></li>
                </ul>
            </nav>
        </div> -->
    </header>
