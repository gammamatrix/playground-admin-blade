<?php
$sort = [];
$filters = [];
$validated = [];
// $paginator = null;
?>
@extends('playground::layouts.resource.index', [
    'withTableColumns' => [
        'name' => [
            'linkType' => 'id',
            'linkRoute' => sprintf('%1$s.show', $meta['info']['model_route']),
            'label' => 'Name',
        ],
        'email' => [
            'label' => 'Email',
        ],
        'locale' => [
            'hide-sm' => true,
            'label' => 'Locale',
        ],
        'timezone' => [
            'hide-sm' => true,
            'label' => 'Timezone',
        ],
        'title' => [
            'hide-sm' => true,
            'label' => 'Title',
        ],
        'label' => [
            'hide-sm' => true,
            'label' => 'Label',
        ],
        'active' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Active',
            'onTrueClass' => 'fas fa-check text-success',
        ],
        'banned' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Banned',
            'onTrueClass' => 'fa-solid fa-ban text-warning',
        ],
        'locked' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Locked',
            'onTrueClass' => 'fas fa-lock text-success',
        ],
        'flagged' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Flagged',
            'onTrueClass' => 'fas fa-flag text-warning',
        ],
        'problem' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Problem',
            'onTrueClass' => 'fa-solid fa-triangle-exclamation text-danger',
        ],
        'suspended' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Suspended',
            'onTrueClass' => 'fa-solid fa-hand text-danger',
        ],
        'unknown' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Unknown',
            'onTrueClass' => 'fa-solid fa-question text-warning',
        ],
    ],
])
