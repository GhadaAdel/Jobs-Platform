<h1>
    {{ $job->title }}
</h1>
<p>
    Congrats!!
</p>

<p>
    <a href= "{{ url('/jobs/' . $job->id) }}">View your Job</a>
</p>
