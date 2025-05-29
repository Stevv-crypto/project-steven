<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        deskripsi Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($nama as $index => $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $index + 1 }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $nama[$index] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $desc[$index] }}
                    </td>
                    <td class="px-6 py-4">
                        Rp.{{ $harga[$index] }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>



