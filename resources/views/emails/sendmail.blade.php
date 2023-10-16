<x-mail::message>
# Mensagem de {{$data['nome']}}

<p> Telefone: <strong>{{ $data['telefone'] }}</strong></p>
{{-- <p> Carreira: <strong>{{ $data['carreira'] }}</strong></p> --}}
<p> Disponibilidade: <strong>{{ $data['disponibilidade'] }}</strong></p>
<p> Experiência: <strong>{{ $data['experiencia'] }}</strong></p>
<p> Habilidades: <strong>{{ $data['habilidades'] }}</strong></p>
<p> Sobre: <strong>{{ $data['sobre'] }}</strong></p>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
