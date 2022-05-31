<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Início</title>
</head>
<body class="flex justify-center items-center">
    <content class="w-screen h-screen flex justify-center items-center bg-gray-800">
        <div class="container mx-auto bg-[#512BA1] w-1/2 margin-0 shadow-2xl grid grid-cols-4 gap-4 rounded-xl p-6">
            <div class="flex justify-center items-center col-start-1 col-end-5 mt-2">
                <h1 class="text-6xl text-gray-100 font-sans font-semibold mb-48 flex justify-center">Produtos</h1>
            </div>
            <div class="col-start-1 col-end-5 flex flex-col justify-center items-center">
                <ul>
                <li class="text-white space-x-4 grid grid-cols-7 mb-2">
                    <span class="flex justify-center font-bold">ID</span>
                    <span class="flex justify-center font-bold">Nome</span>
                    <span class="flex justify-center font-bold">Valor</span>
                    <span class="flex justify-center font-bold">ID Fornecedor</span>
                </li>
                @foreach ($produtos as $produto)
                <li class="text-white space-x-4 grid grid-cols-7 mb-3">
                        <span class="flex justify-center">{{ $produto->id }}</span>
                        <span class="flex justify-center">{{ $produto->nome }}</span>
                        <span class="flex justify-center">{{ $produto->valor }} R$</span>
                        <span class="flex justify-center">{{ $produto->fornecedores_id }}</span>
                        <span></span>
                        <a class="min-h-8 w-20 flex justify-center p-2 bg-[#743FE8] rounded" href="/excluir-produto/{{$produto->id}}">Excluir</a>
                        <a class="min-h-8 w-20 flex justify-center p-2 bg-[#743FE8] rounded" href="/editar-produto/{{$produto->id}}">Editar</a>
                </li>
                @endforeach
                </ul>
                <div class="mt-10 flex justify-center items-center text-white">
                    <a class="min-h-8 w-fit p-2 bg-[#743FE8] rounded" href="/cadastrar">Cadastrar</a>
                </div>
            </div>
        </div>
    </content>
</body>
</html>