<x-mail::message>
    <div style="font-family: Arial, sans-serif; margin: 0 auto; text-align: center;">
        <img src="https://trabalheconosco.appke.com.br/logo-appmake.png" alt="Logo" style="max-width: 100px; margin: 0 auto;">
        <h1 style="background-color: #f3f4f6; padding: 10px; text-align: center;">Mensagem de {{ $data['nome'] }}</h1>
        <div style="background-color: #f3f4f6; padding: 10px; text-align: left; margin: 10px;">
            <p><strong>Nome:</strong> {{ $data['nome'] }}</p>
            <p><strong>Telefone:</strong> {{ $data['telefone'] }}</p>
            <p><strong>Carreira:</strong> {{ $data['carreira'] }}</p>
            <p><strong>Disponibilidade:</strong> {{ $data['disponibilidade'] }}</p>
            <p><strong>Experiência:</strong> {{ $data['experiencia'] }}</p>
            <p><strong>Habilidades:</strong> {{ $data['habilidades'] }}</p>
            <p><strong>Sobre:</strong> {{ $data['sobre'] }}</p>
        </div>
    </div>
</x-mail::message>
