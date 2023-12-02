@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'py-2 px-2 border-b border-slate-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300
outline-none
focus:bg-slate-100 dark:focus:bg-slate-600

rounded-xs']) !!}>
