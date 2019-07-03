Hello World {{ $username }} from Mailtrap!
<br>
Mail: {{ $usermail }}
<br>
Title: {{ $title }}
<br>
Desc:{{ $desc }}
<br>
<ul>
  @for ($i=0; $i < 10; $i++)
    <li>{{ $i }}</li>
  @endfor
</ul>
