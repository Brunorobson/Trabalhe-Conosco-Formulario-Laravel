<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Mi aplicación</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-300">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full sm:max-w-xl md:max-w-lg lg:max-w-5xl p-8 bg-white rounded-lg shadow-lg mx-auto">
            <div class="flex justify-center mb-8">
                <img src="{{ asset('logo-appmake.png') }}" alt="Logo" class="w-30 h-20">
            </div>
            <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Trabalhe Conosco</h1>
            <form>
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
                
                        foreach ($carreiras as $carreira => $sigla) {
                            echo '<label>';
                            echo '<input type="checkbox" name="carreiras[]" value="' . $sigla . '" class="mr-2"> ' . $carreira;
                            echo '</label>';
                        }
                        ?>
                    </div>
                </div>
                
                

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm text-gray-600">Contraseña</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>
                <div class="mb-6">
                    <label for="confirmPassword" class="block mb-2 text-sm text-gray-600">Repetir contraseña</label>
                    <input type="password" id="confirmPassword" name="confirmPassword"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>
                <button type="submit"
                    class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">Registro</button>
            </form>
            <div class="text-center">
                <p class="text-sm">¿Ya tienes una cuenta? <a href="#" class="text-cyan-600">Inicia sesión</a>
                </p>
            </div>
            <p class="text-xs text-gray-600 text-center mt-8">&copy; 2023 WCS LAT</p>
        </div>
    </div>
</body>

</html>
