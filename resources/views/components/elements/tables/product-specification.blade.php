@props(['product'])

<table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 shadow-sm">
    <thead class="bg-slate-50 dark:bg-slate-700">
        <tr>
            <th
                class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                Spécification</th>
            <th
                class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                Valeur</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product->caracteristics as $item)
            <tr>
                <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                    {{ $item->title }}
                </td>
                <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                    {{ $item->value }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
