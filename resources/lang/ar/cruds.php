<?php

return [
    'userManagement' => [
        'title'          => 'ب رێڤەبرنا ئەدمینان',
        'title_singular' => 'ب رێڤەبرنا ئەدمینان',
    ],
    'permission' => [
        'title'          => 'دەستهەڵات',
        'title_singular' => 'دەستهەڵات',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'ڕولێن ئەدمینان',
        'title_singular' => 'ڕولێن ئەدمینان',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'ئەدمین',
        'title_singular' => 'ئەدمین',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'blogsmenu' => [
        'title'          => 'لیستا گوتاران',
        'title_singular' => 'لیستا گوتاران',
    ],
    'audioMenu' => [
        'title'          => 'لیستا وانێن دەنگی',
        'title_singular' => 'لیستا وانێن دەنگی',
    ],
    'booksMenu' => [
        'title'          => 'لیستا پەرتۆکان',
        'title_singular' => 'لیستا پەرتۆکان',
    ],
    'audioBooksMenu' => [
        'title'          => 'لیستا  پەرتۆکێن دەنگی',
        'title_singular' => 'لیستا  پەرتۆکێن دەنگی',
    ],
    'questionsMenu' => [
        'title'          => 'لیستا پرسیار و بەرسڤ',
        'title_singular' => 'لیستا پرسیار و بەرسڤ',
    ],
    'tafsirMenu' => [
        'title'          => 'لیستا تەفسیرێ',
        'title_singular' => 'لیستا تەفسیرێ',
    ],
    'personsMenu' => [
        'title'          => 'لیستا کەسان',
        'title_singular' => 'لیستا کەسان',
    ],
    'othersMenu' => [
        'title'          => 'یێن دی',
        'title_singular' => 'یێن دی',
    ],
    'category' => [
        'title'          => 'بەش ',
        'title_singular' => 'بەش',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'ناڤێ بەشی',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'category'          => 'بەشێ سەرەکی ',
            'category_helper'   => ' ',
            'type'              => 'جور',
            'type_helper'       => ' ',
        ],
    ],
    'person' => [
        'title'          => 'لیستا کەسایەتییان',
        'title_singular' => 'لیستا کەسایەتییان',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'ناڤ',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'type'              => 'جور',
            'type_helper'       => ' ',
        ],
    ],
    'blog' => [
        'title'          => 'گوتار',
        'title_singular' => 'گوتار',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'title'               => 'ناڤونیشان',
            'title_helper'        => ' ',
            'writing_date'        => 'مێژوویا هاتی نڤێسین',
            'writing_date_helper' => ' ',
            'visits'              => 'هژمارا سەرەدانا',
            'visits_helper'       => ' ',
            'writer'              => 'نڤیسەر',
            'writer_helper'       => ' ',
            'category'            => 'بەش',
            'category_helper'     => ' ',
            'content'             => 'ناڤەڕوک',
            'content_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'approved'            => 'پەسەندکرن',
            'approved_helper'     => ' ',
            'favorite'            => 'دلخواز',
            'favorite_helper'     => ' ',
            'created_by'          => 'Created By',
            'created_by_helper'   => ' ',
            'files'               => 'فایل',
            'files_helper'        => 'پێگهۆر*',
            'images'              => 'وێنە',
            'images_helper'       => 'پێگهۆر*',
        ],
    ],
    'audio' => [
        'title'          => 'وانێن دەنگی',
        'title_singular' => 'وانێن دەنگی',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'ناڤونیشان',
            'title_helper'      => ' ',
            'visits'            => 'هژمارا سەرەدانا',
            'visits_helper'     => ' ',
            'writer'            => 'ماموستا',
            'writer_helper'     => ' ',
            'category'          => 'بەش',
            'category_helper'   => ' ',
            'content'           => 'ناڤەڕوک',
            'content_helper'    => ' ',
            'approved'          => 'پەسەندکرن',
            'approved_helper'   => ' ',
            'favorite'            => 'دلخواز',
            'favorite_helper'     => ' ',

            'files'             => 'فایل',
            'files_helper'      => 'پێگوهور*',
            'images'            => 'وێنە',
            'images_helper'     => 'پێگوهور*',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'book' => [
        'title'          => 'پەرتۆک',
        'title_singular' => 'پەرتۆک',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'ناڤونیشان',
            'title_helper'      => ' ',
            'visits'            => 'هژمارا سەرەدانان',
            'visits_helper'     => ' ',
            'writer'            => 'نڤیسەر',
            'writer_helper'     => ' ',
            'category'          => 'بەش',
            'category_helper'   => ' ',
            'content'           => 'ناڤەڕوک',
            'content_helper'    => ' ',
            'approved'          => 'پەسەندکری',
            'approved_helper'   => ' ',
            'favorite'            => 'دلخواز',
            'favorite_helper'     => ' ',
            'image'             => 'وێنێ بەرگی',
            'image_helper'      => ' ',
            'file'              => 'زێدەکرنا پەرتۆکێ',
            'file_helper'       => ' ',
            'files'             => 'فایل',
            'files_helper'      => 'پێگوهور*',
            'images'            => 'وێنە',
            'images_helper'     => 'پێگوهور*',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'audioBook' => [
        'title'          => ' پەرتۆکێن دەنگی',
        'title_singular' => ' پەرتۆکێن دەنگی',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'ناڤونیشان',
            'title_helper'      => ' ',
            'visits'            => 'هژمارا سەرەدانان',
            'visits_helper'     => ' ',
            'writer'            => 'نڤیسەر',
            'writer_helper'     => ' ',
            'category'          => 'بەش',
            'category_helper'   => ' ',
            'content'           => 'ناڤەڕوک',
            'content_helper'    => ' ',
            'approved'          => 'پەسەندکرن',
            'approved_helper'   => ' ',
            'favorite'            => 'دلخواز',
            'favorite_helper'     => ' ',

            'image'             => 'وێنێ بەرگی',
            'image_helper'      => ' ',
            'file'              => 'زێدەکرنا پەرتۆکێ',
            'file_helper'       => ' ',
            'audio'             => 'فایلێن دەنگی',
            'audio_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'surah' => [
        'title'          => 'سوڕەت',
        'title_singular' => 'سوڕەت',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'ناڤێ سوڕەتێ',
            'name_helper'       => ' ',
            'number'            => 'هژمارا ئایەتان',
            'number_helper'     => ' ',
            'download'          => 'هاتنا خوار ل',
            'download_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'aya' => [
        'title'          => 'ئایەت',
        'title_singular' => 'ئایەت',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'aya'               => 'ئایەت',
            'aya_helper'        => ' ',
            'number'            => 'هژمارا ئایەتێ',
            'number_helper'     => ' ',
            'tafsir'            => 'تەفسیر',
            'tafsir_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'surah'             => 'سوڕەت',
            'surah_helper'      => ' ',
        ],
    ],
    'question' => [
        'title'          => 'پرسیار و بەرسڤ',
        'title_singular' => 'پرسیار و بەرسڤ',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'پرسیار',
            'title_helper'      => ' ',
            'question'          => 'پرسیار',
            'question_helper'   => ' ',
            'answer'            => 'بەرسڤ',
            'answer_helper'     => ' ',
            'category'          => 'بەش',
            'category_helper'   => ' ',
            'person'            => 'بەرهەڤکەر',
            'person_helper'     => ' ',
            'visits'            => 'هژمارا سەرەدانان',
            'visits_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'approved'          => 'پەسەندکرن',
            'approved_helper'   => ' ',
            'favorite'            => 'دلخواز',
            'favorite_helper'     => ' ',

        ],
    ],
    'page' => [
        'title'          => 'لاپەڕ',
        'title_singular' => 'لاپەڕ',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'ناڤونیشان',
            'title_helper'      => ' ',
            'slug'              => 'لینک',
            'slug_helper'       => 'لا يمكن تعديل هذا الحقل، ويجب ان يكون بدون مسافات بهذا الشكل page-slug',
            'content'           => 'ناڤەڕوک',
            'content_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
