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
        <div class="relative w-1/2 h-1/2 bg-gray-900 rounded-lg shadow-lg grid grid-rows-2 grid-cols-1 px-16 py-8 m-0">
            <h1 class="flex justify-center text-white text-4xl font-semibold">Fornecedores</h1>
            <div>
                <a href="\" class="absolute top-8 right-20 text-green-600 hover:text-green-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
            </div>
            <div>
                <a href="/cadastrarFornecedor" class="absolute top-8 right-10 text-red-600 hover:text-red-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </a>
            </div>
            <div class="col-start-1 col-end-5 flex flex-col justify-center items-center bg-white rounded-xl h-3/4 p-0">
                <ul>
                    <li class="space-x-4 grid grid-cols-4 mb-2">
                        <span class="flex justify-center font-bold">ID</span>
                        <span class="flex justify-center font-bold">Nome</span>
                        <span class="flex justify-center font-bold">Telefone</span>
                        <span class="flex justify-center font-bold">Produto</span>
                    </li>
                    @foreach ($fornecedores as $fornecedor)
                    <li class="space-x-4 grid grid-cols-4 mb-2">
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