<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'setting'        => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'key'               => 'Key',
            'key_helper'        => '',
            'value'             => 'Value',
            'value_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'speaker'        => [
        'title'          => 'Speakers',
        'title_singular' => 'Speaker',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'name'                    => 'Name',
            'name_helper'             => '',
            'description'             => 'Description',
            'description_helper'      => '',
            'photo'                   => 'Photo',
            'photo_helper'            => '',
            'twitter'                 => 'Twitter',
            'twitter_helper'          => '',
            'facebook'                => 'Facebook',
            'facebook_helper'         => '',
            'linkedin'                => 'LinkedIn',
            'linkedin_helper'         => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'full_description'        => 'Full Description',
            'full_description_helper' => '',
        ],
    ],
    'schedule'       => [
        'title'          => 'Schedule',
        'title_singular' => 'Schedule',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'day_number'        => 'Day Number',
            'day_number_helper' => '',
            'start_time'        => 'Start Time',
            'start_time_helper' => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'subtitle'          => 'Subtitle',
            'subtitle_helper'   => '',
            'speaker'           => 'Speaker',
            'speaker_helper'    => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'venue'          => [
        'title'          => 'Venues',
        'title_singular' => 'Venue',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photos'             => 'Photos',
            'photos_helper'      => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'latitude'           => 'Latitude',
            'latitude_helper'    => '',
            'longitude'          => 'Longitude',
            'longitude_helper'   => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'description'        => 'Description',
            'description_helper' => '',
        ],
    ],
    'committee'          => [
        'title'          => 'Committees',
        'title_singular' => 'Committee',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'rating'             => 'Rating',
            'rating_helper'      => '',
        ],
    ],
    'workshop'          => [
        'title'          => 'Workshops',
        'title_singular' => 'Workshop',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'rating'             => 'Rating',
            'rating_helper'      => '',
        ],
    ],
    'author'          => [
        'title'          => 'Authors',
        'title_singular' => 'Author',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'rating'             => 'Rating',
            'rating_helper'      => '',
        ],
    ],
    'news'          => [
        'title'          => 'News',
        'title_singular' => 'New',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'rating'             => 'Rating',
            'rating_helper'      => '',
        ],
    ],
    'hotel'          => [
        'title'          => 'Hotels',
        'title_singular' => 'Hotel',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'link'  => 'link',
            'link_helper'  => '',
            'rating'             => 'Rating',
            'rating_helper'      => '',
        ],
    ],
    'gallery'        => [
        'title'          => 'Galleries',
        'title_singular' => 'Gallery',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'photos'            => 'Photos',
            'photos_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'sponsor'        => [
        'title'          => 'Sponsors',
        'title_singular' => 'Sponsor',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'link'              => 'Link',
            'link_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'faq'            => [
        'title'          => 'Faqs',
        'title_singular' => 'Faq',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'question'          => 'Question',
            'question_helper'   => '',
            'answer'            => 'Answer',
            'answer_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'amenity'        => [
        'title'          => 'Amenities',
        'title_singular' => 'Amenity',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'price'          => [
        'title'          => 'Prices',
        'title_singular' => 'Price',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'price'             => 'Price',
            'price_helper'      => '',
            'amenities'         => 'Amenities',
            'amenities_helper'  => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
