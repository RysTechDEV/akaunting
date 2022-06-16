<?php

return [

    'next'                  => 'आगे',
    'refresh'               => 'रिफ्रेश',

    'steps' => [
        'requirements'      => 'कृपया, अपने होस्टिंग प्रदाता से त्रुटियों को ठीक करने के लिए कहें!',
        'language'          => 'स्टेप 1/3 : भाषा चयन',
        'database'          => 'स्टेप 2/3 : डेटाबेस सेटअप',
        'settings'          => 'स्टेप 3/3 : कंपनी और व्यवस्थापक विवरण',
    ],

    'language' => [
        'select'            => 'भाषा का चयन करें',
    ],

    'requirements' => [
        'enabled'           => ':feature को सक्रिय करने की आवश्यकता है!',
        'disabled'          => ':feature को निष्क्रिय करने की आवश्यकता है!',
        'extension'         => ':extension एक्सटेंशन को स्थापित करने और लोड करने की आवश्यकता है!',
        'directory'         => ':directory फ़ोल्डर को लिखने योग्य होना चाहिए!',
        'executable'        => 'अगर  PHP CLI एक्सेक्यूटबल फाइल परिभाषित नहीं है अथवा काम नहीं कर रही है अथवा उसका संस्करण php_version के समान या उससे अधिक नहीं है! तो कृपया, अपनी होस्टिंग कंपनी को PHP_BINARY या PHP_PATH ये एनवायरनमेंट वेरिएबल सही ढंग से सेट करने के लिए कहें।',
    ],

    'database' => [
        'hostname'          => 'होस्ट का नाम',
        'username'          => 'यूजरनाम',
        'password'          => 'पासवर्ड',
        'name'              => 'डेटाबेस',
    ],

    'settings' => [
        'company_name'      => 'कंपनी का नाम',
        'company_email'     => 'कंपनी का ईमेल',
        'admin_email'       => 'व्यवस्थापक ईमेल',
        'admin_password'    => 'व्यवस्थापक पासवर्ड',
    ],

    'error' => [
        'php_version'       => 'त्रुटि: HTTP और CLI दोनों के लिए PHP नवीनतम संस्करण(:php_version) का उपयोग करने के लिए अपने होस्टिंग प्रदाता से पूछें/बताएं.
',
        'connection'        => 'त्रुटि: डेटाबेस से कनेक्ट नहीं हो सका! कृपया, सुनिश्चित करें कि विवरण सही हैं।',
    ],

    'update' => [
        'core'              => 'Akaunting का नया संस्करण उपलब्ध है! कृपया, अपने इंस्टालेशन को अपडेट करें।',
        'module'            => ':module नया संस्करण उपलब्ध है! कृपया, अपने इंस्टालेशन को अपडेट करें।',
    ],
];
