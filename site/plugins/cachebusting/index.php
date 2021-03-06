<?php

Kirby::plugin('lukaskleinschmidt/cachebuster', [
    'components' => [
        'css' => function ($kirby, $url, $options) {
            if ($url === '@auto') {
                if (!$url = Url::toTemplateAsset('styles/templates', 'css')) {
                    return null;
                }
            }

            return $url . '?v=' . F::modified(str_replace($kirby->site()->url('').'/',"",$url));
        },
        'js' => function ($kirby, $url, $options) {
            if ($url === '@auto') {
                if (!$url = Url::toTemplateAsset('scripts/templates', 'js')) {
                    return null;
                }
            }
            $exists = $url;
            return $url . '?v=' . F::modified(str_replace($kirby->site()->url('').'/',"",$url));
        }
    ],
]);
