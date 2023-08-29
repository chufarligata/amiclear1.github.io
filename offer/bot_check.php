<?php
function is_google_bot($user_agent) {
    $bots = ['Googlebot', 'AdsBot-Google', 'Googlebot-Image', 'Googlebot-News', 'Googlebot-Video', 'Mediapartners-Google', 'Googlebot-Mobile', 'Googlebot-Images', 'Google-AMPHTML', 'Google-Ads', 'Googlebot-AdSense', 'Google AdWords', 'Google-Adwords-Instant', 'Google-Adwords-Express', 'Google-Adwords-DynamicSearchAds', 'Google Favicon', 'Google Page Speed', 'Google Web Preview', 'Google-Structured-Data-Testing-Tool', 'Google-AMPStories', 'Googlebot-FactCheck', 'Googlebot-AppIndexing', 'Googlebot-Search', 'Googlebot-Home', 'Googlebot-Assistant', 'Googlebot-News-Google', 'Googlebot-News', 'Googlebot-Video-Google', 'Googlebot-Video', 'Googlebot-Images-Google', 'Googlebot-Images', 'Googlebot-Mobile-Google', 'Googlebot-Mobile'];
    foreach($bots as $bot) {
        if(stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    return false;
}
?>
