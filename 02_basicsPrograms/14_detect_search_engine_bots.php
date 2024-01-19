
<?php
// How to detect search engine bots with PHP ?

// PHP doesn’t have any built-in function to detect search engine bots. However, 
// the following function can be used for this purpose.

function is_bot($system) {
    // bot list
    $bot_list = array(
        'Googlebot', 'Baiduspider', 'ia_archiver', 
        'R6_FeedFetcher', 'NetcraftSurveyAgent', 
        'Sogou web spider', 'bingbot', 'Yahoo! Slurp', 
        'facebookexternalhit', 'PrintfulBot', 'msnbot', 
        'Twitterbot', 'UnwindFetchor', 'urlresolver'
    );
    // if it is search engine bot returns true, else return false
    foreach ($bot_list as $bl) {
        if ( stripos( $system, $bl ) !== false ) 
            return true;
    }
        return false;
    }
    echo is_bot('Googlebot');


?>