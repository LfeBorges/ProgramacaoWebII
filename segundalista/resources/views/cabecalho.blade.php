<ul class="list-unstyled d-flex flex-wrap gap-3 p-0">
    @for ($i = 1; $i <= 10; $i++)
        <li>
            <a href="/ex{{ $i }}" class="btn btn-primary">{{ "Exercício $i" }}</a>
        </li>
    @endfor
</ul>