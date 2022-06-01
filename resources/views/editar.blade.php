<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body class="flex justify-center items-center bg-gray-900">
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="relative h-[60%] w-1/2 bg-gray-800 flex flex-col items-center rounded-xl p-4">
            <h1 class=" text-4xl text-gray-100 font-sans font-semibold mb-20">Editar Produto</h1>
            <div class="">
                <a href="\" class="absolute top-8 right-10 text-green-600 hover:text-green-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
            </div>
            <div class="h-[60%] w-[70%] flex flex-col items-center">
                <form action="/editar-produto/{{ $produto->id}}" method="POST" class="w-full h-full flex flex-col justify-center items-center space-y-0">
                    @csrf
                    <label for="lblNome" class="text-white text-sm font-medium mb-2">Nome:</label>
                    <input type="text" name="nome" value="{{ $produto->nome }}" class="w-[60%] bg-slate-700 rounded-xl text-white text-center"></input><br>
                    <label for="lblValor" class="text-white text-sm font-medium mb-2">Valor:</label>
                    <input type="number" name="valor" value="{{ $produto->valor }}" class="w-[60%] bg-slate-700 rounded-xl text-white text-center"></input><br>
                    <label for="lblQuantidade" class="text-white text-sm font-medium mb-2">Quantidade:</label>
                    <input type="number" name="estoque" value="{{ $produto->estoque }}" class="w-[60%] bg-slate-700 rounded-xl text-white text-center"></input><br>
                    <label for="lblFornecedores" class="text-white text-sm font-medium mb-2">Id de Fornecedor:</label>
                    <input type="number" name="fornecedores_id" value="{{ $produto->fornecedores_id }}" class="w-[60%] bg-slate-700 text-white text-center rounded-xl"></input><br><br>
                    <button class="bg-sky-600 hover:bg-sky-700 rounded-xl font-semibold text-white py-[2px] w-36">Editar</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>