<?php

return [

    'next'                  => 'পরবর্তী',
    'refresh'               => 'নবোদ্যম',

    'steps' => [
        'requirements'      => 'দয়া করে আপনার হোস্টিং সেবা প্রদানকারীকে অনুরোধ করুন সমস্যা গুলোর সমাধান করে দিতে!',
        'language'          => 'ধাপ ১/৩ : ভাষা নির্বাচন',
        'database'          => 'ধাপ ২/৩ : ডাটাবেজ সেট-আপ',
        'settings'          => 'ধাপ ৩/৩ : কোম্পানি এবং প্রশাসকের বিশদ বিবরণ',
    ],

    'language' => [
        'select'            => 'ভাষা নির্বাচন করুন',
    ],

    'requirements' => [
        'enabled'           => ':feature সক্রিয় করা আবশ্যক!',
        'disabled'          => ':feature নিষ্ক্রিয় করা আবশ্যক!',
        'extension'         => ':extension  এক্সটেসনটি সংস্থাপন করে লোড করা আবশ্যক!',
        'directory'         => ':directory  ডিরেক্টরিটি লিখনযোগ্য হওয়া আবশ্যক!',
        'executable'        => 'PHP CLI ফাইলটি চালানো যাচ্ছে না ! দয়া করে আপনার হোস্টিং কোম্পানিকে PHP_BINARY  কিংবা  PHP_PATH environment variable টি সঠিক ভাবে নির্ধারল করে দিতে বলুন।',
    ],

    'database' => [
        'hostname'          => 'হোস্টের নাম',
        'username'          => 'ব্যবহারকারি নাম',
        'password'          => 'কূটশব্দ',
        'name'              => 'ডেটাবেজ',
    ],

    'settings' => [
        'company_name'      => 'কোম্পানির নাম',
        'company_email'     => 'কোম্পানির ই-মেইল',
        'admin_email'       => 'প্রশাসকের ই-মেইল',
        'admin_password'    => 'প্রশাসকের কূটশব্দ',
    ],

    'error' => [
        'connection'        => 'সমস্যাঃ  ডেটাবেজের সাথে সংযুক্ত হওয়া সম্ভবপর হলো না! দয়া করে দেখে নিন যে প্রদত্ত বিবরণ সঠিক কি না।',
    ],

];
