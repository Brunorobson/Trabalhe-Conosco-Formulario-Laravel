@props(['url'])
<tr>
<td class="header">
<a href="https://www.appmake.com.br/" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://trabalheconosco.appke.com.br/logo-appmake.png" class="logo" alt=" Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
