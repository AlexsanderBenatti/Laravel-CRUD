<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Início</title>
</head>
<body class="flex justify-center items-center">
    <content class="w-full min-h-screen flex justify-center items-center">
        <div class="container mx-auto bg-gradient-to-b from-indigo-500 to-indigo-600 w-full min-h-[75vh] margin-0 shadow-2xl grid grid-cols-4 gap-4">
            <h1 class="text-6xl text-gray-100 font-sans font-semibold mb-48 flex justify-center col-start-1 col-end-5 mt-2">Tela de Início</h1>
            <div class="col-start-1 col-end-5 flex flex-col justify-center items-center">
                <ul>
                @foreach ($produtos as $produto)
                <li class="text-white space-x-4 grid grid-cols-6 mb-2">
                        <span class="flex justify-center">{{ $produto->id }}</span>
                        <span class="flex justify-center">{{ $produto->nome }}</span>
                        <span class="flex justify-center">{{ $produto->valor }}</span>
                        <span class="flex justify-center">{{ $produto->estoque }}</span>
                        <a class="min-h-8 w-fit p-2 bg-blue-500" href="/excluir-produto/{{$produto->id}}">Excluir</a>
                        <a class="min-h-8 w-fit p-2 bg-blue-500" href="/editar-produto/{{$produto->id}}">Editar</a>
                </li>
                @endforeach
                </ul>
                <div class="mt-8 flex justify-center items-center text-white">
                    <a class="min-h-8 w-fit p-2 bg-blue-500" href="/cadastrar">Cadastrar</a>
                </div>
            </div>
        </div>
    </content>
</body>
</html>