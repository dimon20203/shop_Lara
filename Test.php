<?php

// Шлях до вашого Blade-шаблону
$templatePath = 'resources/views/test.blade.php';

// Отримання вмісту шаблону
$template = file_get_contents($templatePath);

// Паттерн для заміни link тегів
$patternLink = '/<link\s+rel="stylesheet"\s+href="([^"]+)">/';
$replacementLink = '<link rel="stylesheet" href="{{ asset(\'$1\') }}">';

// Паттерн для заміни script тегів
$patternScript = '/<script\s+src="([^"]+)"><\/script>/';
$replacementScript = '<script src="{{ asset(\'$1\') }}"></script>';

// Паттерн для заміни img тегів
$patternImg = '/<img\s+src="([^"]+)"\s+.*?>/'; // Цей паттерн припускає, що src є першим атрибутом у тезі img
$replacementImg = '<img src="{{ asset(\'$1\') }}" $2>';

// Паттерн для заміни link тегів без атрибута rel="stylesheet"
$patternLinkWithoutRel = '/<link\s+href="([^"]+)"[^>]*>/';
$replacementLinkWithoutRel = '<link href="{{ asset(\'$1\') }}" rel="stylesheet">';

// Заміна link тегів у шаблоні
$content = preg_replace($patternLink, $replacementLink, $template);

// Заміна link тегів без атрибута rel="stylesheet" у шаблоні
$content = preg_replace($patternLinkWithoutRel, $replacementLinkWithoutRel, $content);

// Заміна script тегів у шаблоні
$content = preg_replace($patternScript, $replacementScript, $content);

// Заміна img тегів у шаблоні
$content = preg_replace($patternImg, $replacementImg, $content);

// Запис зміненого змісту назад у файл
file_put_contents($templatePath, $content);

echo "Зміни внесено успішно!";
