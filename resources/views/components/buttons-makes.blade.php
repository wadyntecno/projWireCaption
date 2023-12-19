@props(['disabled' => false, 'type' => 'submit', 'hint' => 'primary'])

<button {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge([
        'type' => $type,
        'hint' => $hint,
        'class' => 'cursor-pointer bg-blue-600 px-4 py-2 text-center
    text-md text-white rounded-md 
    hover:bg-blue-800 dark:hover:bg-white ',
    ]) }}>{{ $slot }}</button>

{{-- flex flex-row cursor-pointer bg-green-500 inline-flex items-center px-4 py-2 
bg-gray-800 dark:bg-gray-200 border 
border-transparent rounded-md text-center
text-xs text-white font-bold dark:text-gray-800 uppercase 
tracking-widest hover:bg-gray-700 dark:hover:bg-white 
focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 
dark:active:bg-gray-300 
focus:outline-none focus:ring-2 
focus:ring-indigo-500 focus:ring-offset-2 
dark:focus:ring-offset-gray-800 transition 
ease-in-out duration-150 --}}
