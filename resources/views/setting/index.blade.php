<?php
$sort = [];
$filters = [];
$validated = [];
// $paginator = null;
?>
@extends('playground::layouts.resource.index', [
    'withTableColumns' => [
        'title' => [
            'linkType' => 'id',
            'linkRoute' => sprintf('%1$s.show', $meta['info']['model_route']),
            'label' => 'Title',
        ],
        'label' => [
            'linkType' => 'id',
            'linkRoute' => sprintf('%1$s.show', $meta['info']['model_route']),
            'label' => 'Label',
        ],
        'slug' => [
            'hide-sm' => true,
            'linkType' => 'slug',
            'linkRoute' => sprintf('%1$s.slug', $meta['info']['model_route']),
            'label' => 'Slug',
        ],
        'active' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Active',
            'onTrueClass' => 'fas fa-check text-success',
        ],
        'locked' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Locked',
            'onTrueClass' => 'fas fa-lock text-success',
        ],
        'published' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Published',
            'onTrueClass' => 'fas fa-upload text-primary',
        ],
        'flagged' => [
            'hide-sm' => true,
            'flag' => true,
            'label' => 'Flagged',
            'onTrueClass' => 'fas fa-flag text-warning',
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
        'parent_id' => [
            'hide-sm' => true,
            // 'linkType' => 'fk',
            // 'accessor' => 'parent',
            'property' => 'title',
            // 'linkRoute' => 'admin.resource.users.id',
            'label' => 'Parent',
        ],
        'description' => [
            'hide-sm' => true,
            'label' => 'Description',
            'html' => true,
        ],
    ],
])
