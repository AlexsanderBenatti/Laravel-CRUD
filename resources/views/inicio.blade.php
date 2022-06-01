<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Início</title>
</head>

<body class="flex justify-center items-center">
    <content class="w-screen h-screen flex justify-center items-center bg-gray-900">
        <div class="container relative mx-auto bg-indigo-800 w-fit h-fit margin-0 shadow-2xl rounded-xl px-16 py-4">
            <div class="absolute text-green-600 hover:text-green-400 top-4 right-20 flex justify-center items-center m-8">
                <a href="/cadastrar" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </a>
            </div>
            <div class="absolute text-yellow-600 hover:text-yellow-500 top-4 right-10 flex justify-center items-center m-8">
                <a href="/fornecedores" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center mt-2">
                <h1 class="text-6xl text-gray-100 font-sans font-semibold mb-36 flex justify-center">Produtos</h1>
            </div>
            <div class="col-start-1 col-end-5 flex flex-col justify-center items-center bg-indigo-300 rounded-xl p-2 h-full">
                <ul>
                    <li class="space-x-4 grid grid-cols-7 mb-2">
                        <span class="flex justify-center font-bold">ID</span>
                        <span class="flex justify-center font-bold">Nome</span>
                        <span class="flex justify-center font-bold">Valor</span>
                        <span class="flex justify-center font-bold">estoque</span>
                        <span class="flex justify-center font-bold">ID Fornecedor</span>
                    </li>
                    @foreach ($produtos as $produto)
                    <li class="space-x-4 grid grid-cols-7 mb-3 justify-center items-center">
                        <span class="flex justify-center">{{ $produto->id }}</span>
                        <span class="flex justify-center">{{ $produto->nome }}</span>
                        <span class="flex justify-center">R${{ $produto->valor }}</span>
                        <span class="flex justify-center">{{ $produto->estoque }}</span>
                        <span class="flex justify-center">{{ $produto->fornecedores_id }}</span>
                        <a class="text-white min-h-8 w-20 flex justify-center p-2 bg-[#743FE8] rounded" href="/excluir-produto/{{$produto->id}}">Excluir</a>
                        <a class="text-white min-h-8 w-20 flex justify-center p-2 bg-[#743FE8] rounded" href="/editar-produto/{{$produto->id}}">Editar</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </content>
</body>

</html>