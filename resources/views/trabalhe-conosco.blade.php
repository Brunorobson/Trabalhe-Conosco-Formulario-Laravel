<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Mi aplicación</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-300 mt-10 mb-10">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full sm:max-w-xl md:max-w-lg lg:max-w-5xl p-8 bg-white rounded-lg shadow-lg mx-auto">
            <div class="flex justify-center mb-8">
                <img src="{{ asset('logo-appmake.png') }}" alt="Logo" class="w-30 h-20">
            </div>
            <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Trabalhe Conosco</h1>

            <form method="POST" action="{{ route('email.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="nome" class="block mb-2 text-sm text-gray-600">Nome Completo</label>
                    <input type="text" id="nome" name="nome"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>

                <div class="mb-4 flex">
                    <div class="w-1/2 mr-2">
                        <label for="email" class="block mb-2 text-sm text-gray-600">E-mail</label>
                        <input type="text" id="email" name="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                            required>
                    </div>
                    <div class="w-1/2 ml-2">
                        <label for="telefone" class="block mb-2 text-sm text-gray-600">Telefone</label>
                        <input type="text" id="telefone" name="telefone"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                            required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm text-gray-600">Quais carreiras você está buscando? (Selecione até 3 opções)</label>
                    <div class="grid grid-cols-4 gap-3">
                        <?php
                        // Mapeamento entre carreiras e siglas
                        $carreiras = [
                            "Back-End Developer" => "BE",
                            "Front-End Developer" => "FE",
                            "FullStack Developer" => "FS",
                            "Mobile Developer" => "MD",
                            "DevOps" => "DO",
                            "Data Scientist" => "DS",
                            "QA / Testes" => "QA",
                            "DBA ou BI" => "DB",
                            "CTO" => "CTO",
                            "Product Owner" => "PO",
                            "Product Manager" => "PM",
                            "UI/UX" => "UI",
                        ];
                        ?>
                            @foreach ($carreiras as $carreira => $sigla)
                                <label>
                                    <input type="checkbox" name="carreira[]" value="{{ $sigla }}" class="mr-2"> {{ $carreira }}
                                </label>
                            @endforeach
                    </div>
                </div>

                <div class="mb-4">
                    <label for="text" class="block mb-2 text-sm text-gray-600">Indique suas habilidades</label>
                    <textarea type="habilidades" id="habilidades" name="habilidades" placeholder="JavaScript, Python, Java, C++, etc"
                        required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"></textarea>
                </div>

                <div class="mb-6">
                    <label for="disponibilidade" class="block mb-2 text-sm text-gray-600">Qual é a sua disponibilidade?
                        *</label>
                    <select id="disponibilidade" name="disponibilidade"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 bg-white">
                        <option value="" disabled="" label="Defina seu momento"></option>
                        <option value="A">Busco oportunidades para iniciar o trabalho imediatamente</option>
                        <option value="B">Estou empregado mas busco novos desafios</option>
                        <option value="C">Não procuro emprego ativamente, mas estou aberto a avaliar novas
                            oportunidades</option>
                        <option value="D">Não estou aberto a novas oportunidades</option>
                    </select>
                </div>


                <div class="mb-6">
                    <label for="experiência" class="block mb-2 text-sm text-gray-600">Quanto tempo de experiência você
                        possui na área?</label>
                    <textarea type="experiencia" id="experiencia" name="experiencia" placeholder="Quero Começar, entre 1 e 2 anos..."
                        required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"></textarea>
                </div>

                <div class="mb-6">
                    <label for="sobre" class="block mb-2 text-sm text-gray-600">Fale sobre você:</label>
                    <textarea type="sobre" id="sobre" name="sobre" placeholder="Digite seu texto aqui...." required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"></textarea>
                </div>

                <button type="submit"
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Enviar
                </button>
            </form>
            <p class="text-xs text-gray-600 text-center mt-8">&copy; 2023 AppMake</p>
        </div>
    </div>
</body>

</html>
