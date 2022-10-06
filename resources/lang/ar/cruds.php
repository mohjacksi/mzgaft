<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدمين',
    ],
    'permission' => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
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
        'title'          => 'المجموعات',
        'title_singular' => 'مجموعة',
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
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
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
        'title'          => 'قائمة گوتار',
        'title_singular' => 'قائمة گوتار',
    ],
    'audioMenu' => [
        'title'          => 'قائمة وانێن دەنگی',
        'title_singular' => 'قائمة وانێن دەنگی',
    ],
    'booksMenu' => [
        'title'          => 'قائمة پەرتۆک',
        'title_singular' => 'قائمة پەرتۆک',
    ],
    'audioBooksMenu' => [
        'title'          => 'قائمة  پەرتۆکێن دەنگی',
        'title_singular' => 'قائمة  پەرتۆکێن دەنگی',
    ],
    'questionsMenu' => [
        'title'          => 'قائمة پرسیار و بەرسڤ',
        'title_singular' => 'قائمة پرسیار و بەرسڤ',
    ],
    'tafsirMenu' => [
        'title'          => 'قائمة التفسير',
        'title_singular' => 'قائمة التفسير',
    ],
    'personsMenu' => [
        'title'          => 'قائمة الأشخاص',
        'title_singular' => 'قائمة الأشخاص',
    ],
    'othersMenu' => [
        'title'          => 'أخرى',
        'title_singular' => 'أخرى',
    ],
    'category' => [
        'title'          => 'التصنيفات',
        'title_singular' => 'التصنيفات',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'اسم التصنيف',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'category'          => 'التصنيف الأب',
            'category_helper'   => ' ',
            'type'              => 'النوع',
            'type_helper'       => ' ',
        ],
    ],
    'person' => [
        'title'          => 'الأشخاص',
        'title_singular' => 'الأشخاص',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الإسم',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'type'              => 'النوع',
            'type_helper'       => ' ',
        ],
    ],
    'blog' => [
        'title'          => 'گوتار',
        'title_singular' => 'گوتار',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'title'               => 'العنوان',
            'title_helper'        => ' ',
            'writing_date'        => 'تاريخ الكتابة',
            'writing_date_helper' => ' ',
            'visits'              => 'الزيارات',
            'visits_helper'       => ' ',
            'writer'              => 'الكاتب',
            'writer_helper'       => ' ',
            'category'            => 'التصنيف',
            'category_helper'     => ' ',
            'content'             => 'المحتوى',
            'content_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'approved'            => 'مقبول',
            'approved_helper'     => ' ',
            'favorite'            => 'مفضل',
            'favorite_helper'     => ' ',
            'created_by'          => 'Created By',
            'created_by_helper'   => ' ',
            'files'               => 'ملفات',
            'files_helper'        => 'إحتياط*',
            'images'              => 'صور',
            'images_helper'       => 'إحتياط*',
        ],
    ],
    'audio' => [
        'title'          => 'وانێن دەنگی',
        'title_singular' => 'وانێن دەنگی',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'العنوان',
            'title_helper'      => ' ',
            'visits'            => 'الزيارات',
            'visits_helper'     => ' ',
            'writer'            => 'الاستاذ',
            'writer_helper'     => ' ',
            'category'          => 'التصنيف',
            'category_helper'   => ' ',
            'content'           => 'المحتوى',
            'content_helper'    => ' ',
            'approved'          => 'مقبول',
            'approved_helper'   => ' ',
            'favorite'            => 'مفضل',
            'favorite_helper'     => ' ',

            'files'             => 'ملفات',
            'files_helper'      => 'إحتياط*',
            'images'            => 'صور',
            'images_helper'     => 'إحتياط*',
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
            'title'             => 'العنوان',
            'title_helper'      => ' ',
            'visits'            => 'الزيارات',
            'visits_helper'     => ' ',
            'writer'            => 'الكاتب',
            'writer_helper'     => ' ',
            'category'          => 'التصنيف',
            'category_helper'   => ' ',
            'content'           => 'المحتوى',
            'content_helper'    => ' ',
            'approved'          => 'مقبول',
            'approved_helper'   => ' ',
            'favorite'            => 'مفضل',
            'favorite_helper'     => ' ',
            'image'             => 'صورة الكتاب',
            'image_helper'      => ' ',
            'file'              => 'تحميل الكتاب',
            'file_helper'       => ' ',
            'files'             => 'ملفات',
            'files_helper'      => 'إحتياط*',
            'images'            => 'صور',
            'images_helper'     => 'إحتياط*',
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
            'title'             => 'العنوان',
            'title_helper'      => ' ',
            'visits'            => 'الزيارات',
            'visits_helper'     => ' ',
            'writer'            => 'الكاتب',
            'writer_helper'     => ' ',
            'category'          => 'التصنيف',
            'category_helper'   => ' ',
            'content'           => 'المحتوى',
            'content_helper'    => ' ',
            'approved'          => 'مقبول',
            'approved_helper'   => ' ',
            'favorite'            => 'مفضل',
            'favorite_helper'     => ' ',

            'image'             => 'صورة الكتاب',
            'image_helper'      => ' ',
            'file'              => 'تحميل الكتاب',
            'file_helper'       => ' ',
            'audio'             => 'الملفات الصوتية',
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
        'title'          => 'السور',
        'title_singular' => 'السور',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'اسم السورة',
            'name_helper'       => ' ',
            'number'            => 'عدد الآيات',
            'number_helper'     => ' ',
            'download'          => 'النزول',
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
        'title'          => 'الآيات',
        'title_singular' => 'الآيات',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'aya'               => 'الآية',
            'aya_helper'        => ' ',
            'number'            => 'رقمها',
            'number_helper'     => ' ',
            'tafsir'            => 'تفسيرها',
            'tafsir_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'surah'             => 'السورة',
            'surah_helper'      => ' ',
        ],
    ],
    'question' => [
        'title'          => 'پرسیار و بەرسڤ',
        'title_singular' => 'پرسیار و بەرسڤ',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'السؤال',
            'title_helper'      => ' ',
            'question'          => 'السؤال',
            'question_helper'   => ' ',
            'answer'            => 'الجواب',
            'answer_helper'     => ' ',
            'category'          => 'التصنيف',
            'category_helper'   => ' ',
            'person'            => 'الجواب بواسطة',
            'person_helper'     => ' ',
            'visits'            => 'الزيارات',
            'visits_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'approved'          => 'مقبول',
            'approved_helper'   => ' ',
            'favorite'            => 'مفضل',
            'favorite_helper'     => ' ',

        ],
    ],
    'page' => [
        'title'          => 'الصفحات',
        'title_singular' => 'الصفحات',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'العنوان',
            'title_helper'      => ' ',
            'slug'              => 'الرابط',
            'slug_helper'       => 'لا يمكن تعديل هذا الحقل، ويجب ان يكون بدون مسافات بهذا الشكل page-slug',
            'content'           => 'المحتوى',
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
