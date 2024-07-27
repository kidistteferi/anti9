<?php
/**
 * Language file for item error/success messages
 *
 */

return [

    'exists'        => 'Позиция уже создана!',
    '_not_found'     => 'Позиция с id [:id] не создана.',
    '_name_required' => 'Поле с наименованием обязательно для заполнения',

    'success' => [
        'create' => 'Позиция была успешно создана.',
        'update' => 'Позиция была успешно отредактирована.',
        'delete' => 'Позиция была успешно удалена.',
    ],

    'delete' => [
        'create'    => 'Возникли какие-то проблемы во время создания позиции. Пожалуйста, повторите попытку позже.',
        'update'    => 'Возникли какие-то проблемы во время редактирования позиции. Пожалуйста, повторите попытку позже.',
        'delete'    => 'Возникли какие-то проблемы во время удаления позиции. Пожалуйста, повторите попытку позже.',
    ],

    'error' => [
        'item_exists' => 'Позиция уже имеет такое название, придумайте новое и уникальное',
    ],

];