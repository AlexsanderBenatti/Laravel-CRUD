<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fornecedores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
    <div class="w-screen h-screen bg-gray-700 duration-300 m- flex justify-center items-center">
        <div class="w-1/3 h-1/3 bg-gray-900 rounded-lg shadow-lg grid grid-rows-2 grid-cols-1 p-2">
            <h1 class="flex justify-center text-white text-2xl">Fornecedores</h1>
            <div class="flex justify-center items-center">
            <ul>
                @foreach ($fornecedores as $fornecedor)
                <li class="text-white space-x-4 grid grid-cols-5 mb-2">
                        <span class="flex justify-center">{{ $fornecedor->id }}</span>
                        <span class="flex justify-center">{{ $fornecedor->nome }}</span>
                        <span class="flex justify-center">{{ $fornecedor->telefone }}</span>
                        <span class="flex justify-center">{{ $fornecedor->produto }}</span>
                </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>