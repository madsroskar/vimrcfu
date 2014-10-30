<div class="row snippet-box">

    <div class="col-md-10 col-xs-12">

        <h3><a href="{{ URL::route('dotfile.show', $dotfile['id']) }}">{{{ $dotfile['name'] }}}</a></h3>

        <div class="row">
            <p class="text-muted small col-md-6 col-xs-12">
                {{ $dotfile['created_at']->diffForHumans() }}
                <br>
            </p>

            <p class="text-muted small col-md-6 col-xs-12">
                test
            </p>
        </div>
    </div>
</div>
