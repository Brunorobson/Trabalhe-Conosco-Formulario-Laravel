<x-mail::message>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <h1 style="background-color: #f3f4f6; padding: 10px; text-align: center;">Mensagem de {{ $data['nome'] }}</h1>
        <p>Nome: <strong>{{ $data['nome'] }}</strong></p>
        <p>Telefone: <strong>{{ $data['telefone'] }}</strong></p>
        <p>Carreira: <strong>{{ $data['carreira'] }}</strong></p>
        <p>Disponibilidade: <strong>{{ $data['disponibilidade'] }}</strong></p>
        <p>Experiência: <strong>{{ $data['experiencia'] }}</strong></p>
        <p>Habilidades: <strong>{{ $data['habilidades'] }}</strong></p>
        <p>Sobre: <strong>{{ $data['sobre'] }}</strong></p>
    </div>
</x-mail::message>
